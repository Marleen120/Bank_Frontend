<?php
// Database connection
$hostname = "localhost";
$dbusername = "root";
$password = "";
$database = "projectdb";

$connection = mysqli_connect($hostname, $dbusername, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Function to validate feedback
function validateFeedback($name, $feedback, $connection) {
    // You can add additional validation logic here if needed
    // For now, let's keep it simple

    // Validation passed
    return null;
}

// Check if the feedback form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $feedbackText = isset($_POST['feedback']) ? $_POST['feedback'] : '';

    // Validate feedback
    $validationResult = validateFeedback($name, $feedbackText, $connection);

    if ($validationResult !== null) {
        // Validation failed, display error and exit
        echo $validationResult;
        exit();
    }

    // Insert data into the 'feedback' table
    $insertQuery = "INSERT INTO feedback (name, feedback) VALUES (?, ?)";
    $insertStmt = mysqli_prepare($connection, $insertQuery);

    if ($insertStmt) {
        mysqli_stmt_bind_param($insertStmt, "ss", $name, $feedbackText);
        $insertResult = mysqli_stmt_execute($insertStmt);

        if ($insertResult) {
            echo "Thank you, $name! Your feedback, \"$feedbackText\", has been submitted successfully. We appreciate your input, and we shall improve our services accordingly.";
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        mysqli_stmt_close($insertStmt);
    } else {
        echo "Error in database query: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
