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

// Check if the form is submitted for withdrawal
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['withdrawMoney'])) {
    // Get form data for withdrawal
    $user_Id_withdraw = isset($_POST['user_Id_withdraw']) ? $_POST['user_Id_withdraw'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';

    // Validate form data for withdrawal
    if (empty($user_Id_withdraw) || empty($amount)) {
        echo "Please fill in all fields for withdrawal.";
        // Additional error handling if needed
        exit();
    }

    // Check if the user exists
    $user_check_query = "SELECT * FROM accounts WHERE user_Id = '$user_Id_withdraw' LIMIT 1";
    $user_check_result = mysqli_query($connection, $user_check_query);

    if ($user_check_result && mysqli_num_rows($user_check_result) > 0) {
        // User exists, proceed with withdrawal
        $user_row = mysqli_fetch_assoc($user_check_result);
        $current_balance = $user_row['Balance'];

        // Set withdrawal limit to $25,000
        $withdrawal_limit = 25000;

        if ($current_balance >= $amount && $amount <= $withdrawal_limit) {
            // Check if withdrawal amount is within the limit
            $new_balance = $current_balance - $amount;

            // Update the balance in the 'accounts' table
            $update_query = "UPDATE accounts SET Balance = '$new_balance' WHERE user_Id = '$user_Id_withdraw'";
            $update_result = mysqli_query($connection, $update_query);

            if ($update_result) {
                echo "Withdrawal successful! New balance: $new_balance";
            } else {
                echo "Error updating balance: " . mysqli_error($connection);
            }
        } else {
            echo "Insufficient balance or withdrawal amount exceeds the daily limit.";
        }
    } else {
        echo "User not found.";
    }
}
?>
