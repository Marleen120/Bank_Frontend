<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking - Transactions</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Include jQuery and jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        body {
            background-image: url('deal.jpg') !important;
            color: white;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: transparent;
            overflow-y: scroll;
         
        }
        .background-image {
            background-image: url('deal.jpg') !important;
            background-size: cover;
            background-repeat: no-repeat;
            height: 200vh; 
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
            
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 0.5em;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 0.5em 1em;
            margin: 0 0.5em;
        }

        main {
            text-align: center;
            padding: 2em;
        }

        .transaction-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(68, 68, 68, 0.0);
            border: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            text-align: left;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }

        .transaction-form label {
            color: white !important;
            font-family: Arial;
            font-weight: bold;
            font-size: 17px;
            text-shadow: 1px 1px 2px black;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            color: white;
            background-color: black;
            border: 1px solid white;
            border-radius: 5px;
        }

        button {
            background-color: #45a049;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        h1{
            margin-top:-400px;
        }
        h2{
            font-size:20px;
            text-shadow: 1px 1px 2px black;
            font-family:Times new Roman;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav style="justify-content: center; display: flex">
                <div class="logo-image">
                    <img src="logoo.jpg" width="50" height="50" />
                </div>
                <a href="Home.html">Home</a>
                <a href="login.php">User</a>
                <a href="Accounts.php">Accounts</a>
                <a href="Loan.php">Loan</a>
                <a href="Cards.php">Cards</a>
                <a href="transactions.php" class="active">Transactions</a>
                <a href="contact_us.php">Contact us</a>
                <a href="about_us.php">About Us</a>
            </nav>
        </header>
    </div>

    <div class="background-image">
    <main>
        <h1>Transactions</h1>

        <div class="transaction-form">
            <h2>Transfer money now via our transaction feature.</h2>
            <form action="process_transactions.php" method="post">


                
            
<label for="User_id">User ID:</label>
<input type="text" id="User_id" name="User_id" placeholder="Enter your User ID" required>

                <label for="sender_account_no">Sender's Account Number:</label>
              <input type="text" id="sender_account_no" name="sender_account_no" placeholder="Enter your account number" required>





              <label for="Recepient_account_no">Recepient's Account Number:</label>
            <input type="text" id="Recepient_account_no" name="Recepient_account_no" placeholder="Enter recipient's account number" required>

<label for="to_bank_name">Recipient's Bank Name:</label>
<input type="text" id="to_bank_name" name="to_bank_name" placeholder="Enter recipient's bank name" required>
               <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" placeholder="Enter transaction amount" required>

                <label for="date">Date:</label>
                <input type="text" id="datepicker" name="date" required>

                <label for="transaction_type">Transaction Type:</label>
                <select id="transaction_type" name="transaction_type" required>
                    <option value="rental_payment">Rental Payment</option>
                    <option value="deposit">Deposit</option>
                    <option value="loan_payment">Loan Payment</option>
                    <option value="bill_payment">Bill Payment</option>
                    <option value="transfer">Transfer</option>
                </select>



                <button type="submit">Submit</button>
            </form>
        </div>
    </main>

    <script>
       $(function () {
    // Enable the datepicker on the specified input field with the desired date format
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd'
    });
});

    </script>
</body>

</html>
