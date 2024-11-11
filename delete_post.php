<?php
include 'admin_db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: admin_panel.php?status=success&message=Post+deleted+successfully");
    } else {
        header("Location: admin_panel.php?status=error&message=Failed+to+delete+post");
    }

    $stmt->close();
    $conn->close();
}
?>
