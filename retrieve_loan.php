<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User not logged in!");
}

// The user is logged in, so retrieve the user ID from the session
$userID = $_SESSION['user_id'];

// Database connection
$hostname = "localhost";
$dbusername = "root";
$password = "";
$database = "projectdb";

$connection = mysqli_connect($hostname, $dbusername, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the user has an approved loan
$loanQuery = "SELECT * FROM loan WHERE User_id = '$userID' AND status = 'approved'";
$loanResult = mysqli_query($connection, $loanQuery);

if (!$loanResult) {
    die("Loan query failed: " . mysqli_error($connection));
}

// Check if an approved loan exists for the logged-in user
if (mysqli_num_rows($loanResult) > 0) {
    $row = mysqli_fetch_assoc($loanResult);
    
    // Access loan details
    $loanId = $row['Loan_id'];
    $loanAmount = $row['Loan_Amount'];

    // Deduct loan amount from bank balance
    $deductionQuery = "UPDATE bank_assets SET Balance = Balance - $loanAmount WHERE id = '$userID'";
    $deductionResult = mysqli_query($connection, $deductionQuery);

    if (!$deductionResult) {
        die("Deduction failed: " . mysqli_error($connection));
    } else {
        echo "Deduction successful!<br>";
    }

    // Display loan details for the logged-in user
    echo "Loan ID: $loanId, Loan Amount: $loanAmount, User ID: $userID<br>";
} else {
    echo "No approved loan found for the user.Age/nationality/Salary criteria not met <br>";

    // Check loan eligibility based on the given conditions
    $ageQuery = "SELECT age, employment_type, salary, nationality FROM loan WHERE User_id = '$userID'";
    $ageResult = mysqli_query($connection, $ageQuery);

    if (!$ageResult) {
        die("Age query failed: " . mysqli_error($connection));
    }

    $ageRow = mysqli_fetch_assoc($ageResult);
    $age = $ageRow['age'];
    $employmentType = $ageRow['employment_type'];
    $salary = $ageRow['salary'];
    $nationality = $ageRow['nationality'];

    // Check loan eligibility conditions
    if ($nationality == 'pakistani' && $age >= 22) {
        if (($employmentType == 'salaried' && $salary >= 20000) || ($employmentType == 'self_employed' && $salary >= 25000)) {
            // Update loan status to approved
            $updateStatusQuery = "UPDATE loan SET status = 'approved' WHERE User_id = '$userID'";
            $updateStatusResult = mysqli_query($connection, $updateStatusQuery);

            if (!$updateStatusResult) {
                die("Status update failed: " . mysqli_error($connection));
            } else {
                echo "";
            }
        } else {
            echo "Loan not approved. Salary criteria not met.<br>";
        }
    } else {
        echo "Loan not approved. Age or nationality criteria not met.<br>";
    }
}

// Retrieve updated bank assets for the logged-in user
$bankAssetsQuery = "SELECT * FROM bank_assets WHERE id = '$userID'";
$bankAssetsResult = mysqli_query($connection, $bankAssetsQuery);

if (!$bankAssetsResult) {
    die("Bank assets query failed: " . mysqli_error($connection));
}

// Display updated bank assets for the logged-in user
while ($row = mysqli_fetch_assoc($bankAssetsResult)) {
    echo "User ID: " . $row['id'] . ", Balance: " . $row['Balance'] . "<br>";
}

mysqli_close($connection);
?>
