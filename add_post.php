<?php
include 'admin_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $date = $_POST['date'];

    // Validation can be added here

    $stmt = $conn->prepare("INSERT INTO posts (title, content, date) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $date);

    if ($stmt->execute()) {
        header("Location: admin_panel.php?status=success&message=Post+added+successfully");
    } else {
        header("Location: admin_panel.php?status=error&message=Failed+to+add+post");
    }

    $stmt->close();
    $conn->close();
}
?>
