<?php
// Database connection
$hostname = "localhost";
$username = "root";
$password = "";
$database = "projectdb";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Getting the values from the HTML form
$username = $_POST['username'];
$password = $_POST['password'];

// Checking if values match in our database records
$result = mysqli_query($connection, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");

// If matches, there will be at least one record that will be returned
if (mysqli_num_rows($result) > 0) {
    // Fetch the user data
    $userData = mysqli_fetch_assoc($result);

    // Start the session
    session_start();

    // Set the user ID in the session
    $_SESSION['user_id'] = $userData['id'];

    // Redirecting to the welcome page
    header("location: Home.html");
    exit();
} else {
    die("Incorrect credentials!"); // If incorrect values
}
?>
