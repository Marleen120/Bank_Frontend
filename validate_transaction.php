<?php
// Database connection (similar to your other scripts)
$hostname = "localhost";
$dbusername = "root";
$password = "";
$database = "projectdb";

$connection = mysqli_connect($hostname, $dbusername, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Function to validate transaction
function validateTransaction($sender_account_no, $amount, $connection) {
    // Check sender's account balance
    $checkBalanceQuery = "SELECT balance FROM accounts WHERE account_no = ?";
    $checkBalanceStmt = mysqli_prepare($connection, $checkBalanceQuery);

    if ($checkBalanceStmt) {
        mysqli_stmt_bind_param($checkBalanceStmt, "s", $sender_account_no);
        mysqli_stmt_execute($checkBalanceStmt);
        mysqli_stmt_bind_result($checkBalanceStmt, $balance); // Fix here
        mysqli_stmt_fetch($checkBalanceStmt);

        if ($balance === null) {
            return "Error fetching balance: " . mysqli_error($connection);
        }

        if ($balance < $amount) {
            return "Insufficient balance in the sender's account.";
        }

        mysqli_stmt_close($checkBalanceStmt);
    } else {
        return "Error in database query: " . mysqli_error($connection);
    }

    // Check transaction limit
    // Check transaction limit
if ($amount > 1000000.00) {
    echo "Transaction amount exceeds the limit of 1 million.";
    exit();
}

    // Validation passed
    return null;
}

?>
