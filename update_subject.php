<?php
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];

    // Update subject in the database
    $stmt = $conn->prepare("UPDATE subjects SET name = ? WHERE id = ?");
    $stmt->bind_param("si", $name, $id);
    $stmt->execute();

    // Redirect to index page
    header("Location: index.php");
}
?>
``