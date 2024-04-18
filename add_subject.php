<?php
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    // Insert subject into the database
    $stmt = $conn->prepare("INSERT INTO subjects (name) VALUES (?)");
    $stmt->bind_param("s", $name);
    $stmt->execute();
}
?>
