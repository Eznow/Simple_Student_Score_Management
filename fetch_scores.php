<?php
include 'db.php';

// Fetch scores from the database
$result = $conn->query("SELECT * FROM scores ORDER BY created_at DESC");
$scores = $result->fetch_all(MYSQLI_ASSOC);

foreach ($scores as $score) {
    echo '<tr>';
    echo '<td>' . $score['id'] . '</td>';
    echo '<td>' . $score['student_id'] . '</td>';
    echo '<td>' . $score['subject_id'] . '</td>';
    echo '<td>' . $score['score'] . '</td>';
    echo '<td>' . $score['created_at'] . '</td>';
    echo '<td> <a href="edit_score.php?id=' . $score['id'] . '" class="btn btn-success">Edit</a>
    <button class="btn btn-danger delete-score" data-id="' . $score['id'] . '">Delete</button></td>';
    echo '</tr>';
}
?>
