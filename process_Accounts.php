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
    $Account_Type = isset($_POST['Account_Type']) ? $_POST['Account_Type'] : '';
    $Balance = isset($_POST['Balance']) ? $_POST['Balance'] : '';
    $user_Id = isset($_POST['user_Id']) ? $_POST['user_Id'] : '';

    // Validate form data
    if (empty($Account_Type) || empty($Balance) || empty($user_Id)) {
        echo "Please fill in all fields.";
        // Additional error handling if needed
        exit();
    }

    // Insert data into the 'accounts' table
    $query = "INSERT INTO accounts (Account_Type, Balance, user_Id) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $Account_Type, $Balance, $user_Id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Account added successfully!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in database query: " . mysqli_error($connection);
    }
}

// Check if the form is submitted for viewing account details
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['viewAccount'])) {
    // Get form data for viewing account details
    $user_Id_view = isset($_POST['user_Id']) ? $_POST['user_Id'] : '';
    $Account_No_view = isset($_POST['Account_No']) ? $_POST['Account_No'] : '';

    // Validate form data for viewing account details
    if (empty($user_Id_view) || empty($Account_No_view)) {
        echo "Please fill in all fields for viewing account details.";
        // Additional error handling if needed
        exit();
    }

    // Retrieve account details from the 'accounts' table
    $query_view = "SELECT * FROM accounts WHERE user_Id = ? AND Account_No = ?";
    $stmt_view = mysqli_prepare($connection, $query_view);

    if ($stmt_view) {
        mysqli_stmt_bind_param($stmt_view, "ss", $user_Id_view, $Account_No_view);
        mysqli_stmt_execute($stmt_view);

        $result_view = mysqli_stmt_get_result($stmt_view);

        if ($result_view && $row_view = mysqli_fetch_assoc($result_view)) {
            // Display the account details
            echo "<h2>Account Details</h2>";
            echo "<p>User ID: " . $row_view['user_Id'] . "</p>";
            echo "<p>Account Number: " . $row_view['Account_No'] . "</p>";
            echo "<p>Account Type: " . $row_view['Account_Type'] . "</p>";
            echo "<p>Balance: " . $row_view['Balance'] . "</p>";
        } else {
            echo "Account not found.";
        }

        mysqli_stmt_close($stmt_view);
    } else {
        echo "Error in database query: " . mysqli_error($connection);
    }
}


?>
