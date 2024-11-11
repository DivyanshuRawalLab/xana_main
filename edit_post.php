<?php
include 'admin_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $date = $_POST['date'];

    // Validation can be added here

    $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ?, date = ? WHERE id = ?");
    $stmt->bind_param("sssi", $title, $content, $date, $id);

    if ($stmt->execute()) {
        header("Location: admin_panel.php?status=success&message=Post+updated+successfully");
    } else {
        header("Location: admin_panel.php?status=error&message=Failed+to+update+post");
    }

    $stmt->close();
    $conn->close();
}
?>
