<?php
include 'db.php';

// Fetch student from the database
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$student = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Student</h2>

        <!-- Form to edit a student -->
        <form action="update_student.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $student['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" class="form-control" id="class" name="class" value="<?php echo $student['class']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
