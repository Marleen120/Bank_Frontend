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

$username = $_POST['username'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirm_password'];

if ($password != $confirmpassword) {
    die("Passwords do not match");
} else {
    $query = "INSERT INTO users (username, email, dob, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $dob, $password);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Retrieve the last inserted ID
            $userID = mysqli_insert_id($connection);

            // Display pop-up message using JavaScript
            echo "<script>
                    alert('Registration successful! Your User ID is: $userID');
                    window.location.href = 'login.php'; // Redirect to login page
                  </script>";
        } else {
            echo "Registration failed: " . mysqli_error($connection);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in database query: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
