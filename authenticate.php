<?php
session_start();
include 'admin_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Password is correct, start session
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: admin_panel.php");
            exit;
        } else {
            // Invalid password
            header("Location: login.php?error=Invalid+username+or+password");
            exit;
        }
    } else {
        // Invalid username
        header("Location: login.php?error=Invalid+username+or+password");
        exit;
    }

    $stmt->close();
}
$conn->close();
?>
