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

// Function to validate and process contact form
function processContactForm($name, $email, $subject, $message, $connection) {
    // Validate form fields (you can customize the validation logic)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        return "All fields are required.";
    }

    // Insert data into the 'contact_us' table
    $insertQuery = "INSERT INTO contact_us (name, email, subject, message) 
                    VALUES (?, ?, ?, ?)";
    $insertStmt = mysqli_prepare($connection, $insertQuery);

    if ($insertStmt) {
        mysqli_stmt_bind_param($insertStmt, "ssss", $name, $email, $subject, $message);
        $insertResult = mysqli_stmt_execute($insertStmt);

        if ($insertResult) {
            echo "Thank you for contacting us. Your message has been submitted successfully!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        mysqli_stmt_close($insertStmt);
    } else {
        echo "Error in database query: " . mysqli_error($connection);
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Process the contact form
    processContactForm($name, $email, $subject, $message, $connection);
}

mysqli_close($connection);
?>
