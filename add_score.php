<?php
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : null;
  $subject_id = isset($_POST['subject_id']) ? $_POST['subject_id'] : null;
  $score = isset($_POST['score']) ? $_POST['score'] : null;

  // Check if all required fields are present
  if ($student_id && $subject_id && $score) {
    // Insert score into the database
    $stmt = $conn->prepare("INSERT INTO scores (student_id, subject_id, score) VALUES (?, ?, ?)");
    $stmt->bind_param("iid", $student_id, $subject_id, $score); //iid = int int double

    if ($stmt->execute()) {
      echo "Score added successfully!";
    } else {
      echo "Error adding score: " . $stmt->error;
    }
  } else {
    echo "Please fill in all required fields.";
  }
}
?>
