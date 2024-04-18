<?php
include 'db.php';

// Fetch students from the database
$result = $conn->query("SELECT * FROM students ORDER BY created_at DESC");
$students = $result->fetch_all(MYSQLI_ASSOC);

foreach ($students as $student) {
    echo '<tr>';
    echo '<td>' . $student['id'] . '</td>';
    echo '<td>' . $student['name'] . '</td>';
    echo '<td>' . $student['class'] . '</td>';
    echo '<td>' . $student['created_at'] . '</td>';
    echo '<td> <a href="edit_student.php?id=' . $student['id'] . '" class="btn btn-success">Edit</a>
    <button class="btn btn-danger delete-student" data-id="' . $student['id'] . '">Delete</button></td>';
    echo '</tr>';
}
?>
