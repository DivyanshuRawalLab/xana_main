<?php
include 'admin_db.php';

$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT); // Hash the password

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

echo "Admin user created successfully.";

$stmt->close();
$conn->close();
?>
