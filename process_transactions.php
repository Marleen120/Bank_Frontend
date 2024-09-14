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

// Function to validate transaction
function validateTransaction($sender_account_no, $amount, $connection) {
    // Check sender's account balance
    $checkBalanceQuery = "SELECT balance FROM accounts WHERE account_no = ?";
    $checkBalanceStmt = mysqli_prepare($connection, $checkBalanceQuery);

    if ($checkBalanceStmt) {
        mysqli_stmt_bind_param($checkBalanceStmt, "s", $sender_account_no);
        mysqli_stmt_execute($checkBalanceStmt);
        mysqli_stmt_bind_result($checkBalanceStmt, $balance);
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
    if ($amount > 1000000.00) {
        return "Transaction amount exceeds the limit of 1 million.";
    }

    // Validation passed
    return null;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $sender_account_no = isset($_POST['sender_account_no']) ? $_POST['sender_account_no'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';

    // Validate transaction
    $validationResult = validateTransaction($sender_account_no, $amount, $connection);

    if ($validationResult !== null) {
        // Validation failed, display error and exit
        echo $validationResult;
        exit();
    }

    // Continue with the rest of your transaction processing logic here

    // For simplicity, assume the transaction is successful
    $status = 'success';

    // Insert data into the 'transactions' table
    $insertQuery = "INSERT INTO transactions (sender_account_no, amount, status) 
                    VALUES (?, ?, ?)";
    $insertStmt = mysqli_prepare($connection, $insertQuery);

    if ($insertStmt) {
        mysqli_stmt_bind_param($insertStmt, "sss", $sender_account_no, $amount, $status);
        $insertResult = mysqli_stmt_execute($insertStmt);

        if ($insertResult) {
            // Deduct transaction amount from sender's account balance
            $updateBalanceQuery = "UPDATE accounts SET balance = balance - ? WHERE account_no = ?";
            $updateBalanceStmt = mysqli_prepare($connection, $updateBalanceQuery);

            if ($updateBalanceStmt) {
                mysqli_stmt_bind_param($updateBalanceStmt, "ss", $amount, $sender_account_no);
                mysqli_stmt_execute($updateBalanceStmt);
                mysqli_stmt_close($updateBalanceStmt);
            } else {
                echo "Error updating balance: " . mysqli_error($connection);
            }

            echo "Transaction submitted successfully! Status: $status";
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
