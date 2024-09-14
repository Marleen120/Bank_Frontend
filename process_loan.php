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
    $Loan_Amount = isset($_POST['Loan_Amount']) ? $_POST['Loan_Amount'] : '';
    $Borrower_Name = isset($_POST['Borrower_Name']) ? $_POST['Borrower_Name'] : '';
    $Borrower_Contact_info = isset($_POST['Borrower_Contact_info']) ? $_POST['Borrower_Contact_info'] : '';
    $User_id = isset($_POST['User_id']) ? $_POST['User_id'] : '';
    $employment_type = isset($_POST['employment_type']) ? $_POST['employment_type'] : '';
    $age = isset($_POST['age']) ? intval($_POST['age']) : 0;
    $salary = isset($_POST['salary']) ? $_POST['salary'] : '';
    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
    $loan_type = isset($_POST['loan_type']) ? $_POST['loan_type'] : '';

    // Validate form data (add more validation if needed)
    if (empty($Loan_Amount) || empty($Borrower_Name) || empty($Borrower_Contact_info) || empty($User_id) || empty($employment_type) || empty($age) || empty($salary) || empty($nationality) || empty($loan_type)) {
        echo "Please fill in all fields.";
        exit();
    }

    // Check loan criteria for SALARIED INDIVIDUALS
    if ($nationality == 'pakistani' && $age >= 22 && $employment_type == 'salaried' && $salary >= 20000) {
        $status = 'approved';
    } else if ($nationality == 'pakistani' && $age >= 22 && $employment_type == 'self_employed' && $salary >= 25000) {
        $status = 'approved';
    } else {
        $status = 'not_approved';
    }

    // Update existing loan status for the user
    $updateQuery = "UPDATE loan SET status = ? WHERE User_id = ?";
    $updateStmt = mysqli_prepare($connection, $updateQuery);

    if ($updateStmt) {
        mysqli_stmt_bind_param($updateStmt, "ss", $status, $User_id);
        $updateResult = mysqli_stmt_execute($updateStmt);

        if (!$updateResult) {
            echo "Error updating loan status: " . mysqli_error($connection);
        }

        mysqli_stmt_close($updateStmt);
    } else {
        echo "Error in database query: " . mysqli_error($connection);
    }

    // Insert data into the 'loan' table
    $insertQuery = "INSERT INTO loan (Loan_Amount, Borrower_Name, Borrower_Contact_info, User_id, employment_type, age, salary, nationality, loan_type, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $insertStmt = mysqli_prepare($connection, $insertQuery);

    if ($insertStmt) {
        mysqli_stmt_bind_param($insertStmt, "ssssssssss", $Loan_Amount, $Borrower_Name, $Borrower_Contact_info, $User_id, $employment_type, $age, $salary, $nationality, $loan_type, $status);
        $insertResult = mysqli_stmt_execute($insertStmt);

        if ($insertResult) {
            echo "Loan application submitted successfully! Status: $status";
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
