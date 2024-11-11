<?php
include 'admin_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $section = $_POST['section'];
    $data = $_POST['data'];
    $image = $_FILES['image']['tmp_name'];
    $imgData = file_get_contents($image);

    $sql = "INSERT INTO presentations (section, data, image_data) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $section, $data, $imgData);

    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
