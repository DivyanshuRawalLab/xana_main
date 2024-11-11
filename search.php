<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "search_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if (empty($query)) {
    header('Location: index.html');
    exit;
}

$sql = "SELECT id, title, content, date FROM posts WHERE title LIKE ? OR content LIKE ?";
$stmt = $conn->prepare($sql);
$searchQuery = '%' . $query . '%';
$stmt->bind_param('ss', $searchQuery, $searchQuery);
$stmt->execute();
$result = $stmt->get_result();

$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

$_SESSION['search_results'] = $blogs;
$_SESSION['search_query'] = $query;

// Debugging output
echo '<pre>';
print_r($_SESSION['search_results']);
echo '</pre>';

// Redirect to articles.php
$encodedQuery = urlencode($query);
header("Location: articles.php?query=$encodedQuery");
exit;

$stmt->close();
$conn->close();
?>
