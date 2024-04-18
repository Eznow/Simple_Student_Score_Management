<!DOCTYPE html>
<html>
<head>
    <title>Student Score Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Student Score Management</h2>

        <!-- Form to add a new student -->
        <form id="add-student-form" action="add_student.php" method="POST">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" class="form-control" id="class" name="class" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>

        <!-- Form to add a new subject -->
        <form id="add-subject-form" action="add_subject.php" method="POST">
            <div class="form-group">
                <label for="name">Subject Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Subject</button>
        </form>

        <!-- Form to add a new score -->
        <form id="add-score-form" action="add_score.php" method="POST">
            <div class="form-group">
                <label for="student_id">Student ID</label>
                <input type="number" class="form-control" id="student_id" name="student_id" required>
            </div>
            <div class="form-group">
                <label for="subject_id">Subject ID</label>
                <input type="number" class="form-control" id="subject_id" name="subject_id" required>
            </div>
            <div class="form-group">
                <label for="score">Score</label>
                <input type="number" step="0.01" class="form-control" id="score" name="score" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Score</button>
        </form>

        <!-- Table to display students -->
        <table class="table" id="students-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Students will be added here dynamically using AJAX -->
            </tbody>
        </table>

        <!-- Table to display subjects -->
        <table class="table" id="subjects-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Subjects will be added here dynamically using AJAX -->
            </tbody>
        </table>

        <!-- Table to display scores -->
        <table class="table" id="scores-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student ID</th>
                    <th>Subject ID</th>
                    <th>Score</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Scores will be added here dynamically using AJAX -->
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
</body>
</html>
