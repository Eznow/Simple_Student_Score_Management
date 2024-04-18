<?php
include 'db.php';

// Fetch score from the database
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM scores WHERE id = $id");
$score = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Score</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Score</h2>

        <!-- Form to edit a score -->
        <form action="update_score.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $score['id']; ?>">
            <div class="form-group">
                <label for="student_id">Student ID</label>
                <input type="number" class="form-control" id="student_id" name="student_id" value="<?php echo $score['student_id']; ?>" required>
            </div>
            <div class="form-group">
                <label for="subject_id">Subject ID</label>
                <input type="number" class="form-control" id="subject_id" name="subject_id" value="<?php echo $score['subject_id']; ?>" required>
            </div>
            <div class="form-group">
                <label for="score">Score</label>
                <input type="number" step="0.01" class="form-control" id="score" name="score" value="<?php echo $score['score']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Score</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
