<?php
include 'db.php';

// Check if id is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete student from the database
    $stmt = $conn->prepare("DELETE FROM scores WHERE student_id = ?");
    $stmt->bind_param("i", $id);
    $stmt2 = $conn->prepare("DELETE FROM students WHERE id = ?");
    $stmt2->bind_param("i", $id);
    $stmt->execute();
    $stmt2->execute();

    // Redirect to index page
    header("Location: index.php");
}
?>
