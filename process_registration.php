<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xana";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$affiliation = $_POST['affiliation'];
$qualification = $_POST['qualification'];
$userTypes = $_POST['user_type'];

// Ensure that at least one user type is selected
if (empty($userTypes)) {
    // Handle the case where no user type is selected (e.g., display an error message)
    echo "Please select at least one user type.";
    exit;
}

$userTypesString = implode(',', $userTypes);

// Prepare and execute an INSERT statement
$sql = "INSERT INTO users (name, email, affiliation, qualification, user_types) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Convert the array of user types to a comma-separated string
$stmt->bind_param("sssss", $name, $email, $affiliation, $qualification, $userTypesString);

if ($stmt->execute()) {
    include("header.php");

    echo "<div class='container my-5'>";
        echo "<h1 class='text-center'>Register Successfully</h1/>";
        echo "<p class='text-center text-success fs-5'>\"Thank you for registering with Xana Publications! We're excited to have you join our community.\"</p/>";
    echo "</div>";

    include("footer.php");
    
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
