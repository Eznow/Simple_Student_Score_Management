<?php
include 'db.php';

// Fetch subjects from the database
$result = $conn->query("SELECT * FROM subjects ORDER BY created_at DESC");
$subjects = $result->fetch_all(MYSQLI_ASSOC);

foreach ($subjects as $subject) {
    echo '<tr>';
    echo '<td>' . $subject['id'] . '</td>';
    echo '<td>' . $subject['name'] . '</td>';
    echo '<td>' . $subject['created_at'] . '</td>';
    echo '<td> <a href="edit_subject.php?id=' . $subject['id'] . '" class="btn btn-success">Edit</a>
    <button class="btn btn-danger delete-subject" data-id="' . $subject['id'] . '">Delete</button></td>';
    echo '</tr>';
}
?>
