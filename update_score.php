<?php
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $student_id = $_POST['student_id'];
    $subject_id = $_POST['subject_id'];
    $score = $_POST['score'];

    // Update student in the database
    $stmt = $conn->prepare("UPDATE scores SET student_id = ?, subject_id = ?, score = ? WHERE id = ?");
    $stmt->bind_param("iiii", $student_id, $subject_id, $score, $id);
    $stmt->execute();

    // Redirect to index page
    header("Location: index.php");
}
?>
``