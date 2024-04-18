<?php
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $class = $_POST['class'];

    // Insert student into the database
    $stmt = $conn->prepare("INSERT INTO students (name, class) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $class);
    $stmt->execute();
}
?>
