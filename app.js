$(document).ready(function() {
    // Fetch students, subjects and scores and add them to the tables
    fetchStudents();
    fetchSubjects();
    fetchScores();

    // Handle form submission
    $('#add-student-form').on('submit', function(e) {
        e.preventDefault();

        // Send AJAX request to add_student.php
        $.ajax({
            url: 'add_student.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function() {
                // Clear the form
                $('#add-student-form')[0].reset();

                // Fetch students again to update the table
                fetchStudents();
            }
        });
    });

    $('#add-subject-form').on('submit', function(e) {
        e.preventDefault();

        // Send AJAX request to add_subject.php
        $.ajax({
            url: 'add_subject.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function() {
                // Clear the form
                $('#add-subject-form')[0].reset();

                // Fetch subjects again to update the table
                fetchSubjects();
            }
        });
    });

    $('#add-score-form').on('submit', function(e) {
        e.preventDefault();
    
        // Send AJAX request to add_score.php
        $.ajax({
            url: 'add_score.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(data) {
                console.log(data);
                // Clear the form
                $('#add-score-form')[0].reset();
    
                // Fetch scores again to update the table
                fetchScores();
            }
        });
    });

    // Handle delete score button click
$(document).on('click', '.delete-score', function() {
    var scoreId = $(this).data('id');
    
    if (confirm("Are you sure you want to delete this score?")) {
        $.ajax({
            url: 'delete_score.php?id=' + scoreId,
            method: 'GET',
            success: function() {
                // Reload scores table
                fetchScores();
            }
        });
    }
});

// Handle delete student button click
$(document).on('click', '.delete-student', function() {
    var studentId = $(this).data('id');
    
    if (confirm("Are you sure you want to delete this student?")) {
        $.ajax({
            url: 'delete_student.php?id=' + studentId,
            method: 'GET',
            success: function() {
                // Reload scores table
                fetchStudents();
            }
        });
    }
});

// Handle delete subject button click
$(document).on('click', '.delete-subject', function() {
    var subjectId = $(this).data('id');
    
    if (confirm("Are you sure you want to delete this student?")) {
        $.ajax({
            url: 'delete_subject.php?id=' + subjectId,
            method: 'GET',
            success: function() {
                // Reload scores table
                fetchStudents();
            }
        });
    }
});

});

function fetchStudents() {
    $.ajax({
        url: 'fetch_students.php',
        method: 'GET',
        success: function(data) {
            // Add students to the table
            $('#students-table tbody').html(data);
        }
    });
}

function fetchSubjects() {
    $.ajax({
        url: 'fetch_subjects.php',
        method: 'GET',
        success: function(data) {
            // Add subjects to the table
            $('#subjects-table tbody').html(data);
        }
    });
}

function fetchScores() {
    $.ajax({
        url: 'fetch_scores.php',
        method: 'GET',
        success: function(data) {
            // Add scores to the table
            $('#scores-table tbody').html(data);
        }
    });
}


