<?php
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    // Update student in the database
    $stmt = $conn->prepare("UPDATE students SET name = ?, class = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $class, $id);
    $stmt->execute();

    // Redirect to index page
    header("Location: index.php");
}
?>
``