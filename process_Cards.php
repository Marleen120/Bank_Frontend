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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $Card_holder_name = isset($_POST['Card_holder_name']) ? $_POST['Card_holder_name'] : '';
    $Card_type = isset($_POST['Card_type']) ? $_POST['Card_type'] : '';
    $Account_No = isset($_POST['Account_No']) ? $_POST['Account_No'] : '';
    $User_id = isset($_POST['User_id']) ? $_POST['User_id'] : '';

    // Validate form data
    if (empty($Card_holder_name) || empty($Card_type) || empty($Account_No) || empty($User_id)) {
        echo "Please fill in all fields.";
        // Additional error handling if needed
        exit();
    }

    // Insert data into the 'cards' table
    $query = "INSERT INTO cards (Card_holder_name, Card_type, Account_No, User_id) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $Card_holder_name, $Card_type, $Account_No, $User_id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Card application submitted successfully!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in database query: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
