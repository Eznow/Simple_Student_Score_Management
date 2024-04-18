<?php
include 'db.php';

// Fetch subject from the database
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM subjects WHERE id = $id");
$subject = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Subject</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Subject</h2>

        <!-- Form to edit a subject -->
        <form action="update_subject.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $subject['id']; ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $subject['name']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Subject</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
