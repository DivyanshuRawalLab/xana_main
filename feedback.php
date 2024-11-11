<?php
$servername = "localhost"; // replace with your database server
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "search_db"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $experience = $_POST['experience'];

    // Insert feedback into the database
    $sql = "INSERT INTO feedback (experience) VALUES ('$experience')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
