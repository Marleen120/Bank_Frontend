<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking - Add Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        body {
            background-image: url('bggg.jpg') !important;
            color: white;
            margin: 0;
            font-family: Arial, sans-serif;
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
 .viewdetails{
    text-align:left;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    max-width: 600px;
    margin-right: 100px;
    margin-left:30px;
    
 }
        .background-image {
         
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 200vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        h1 {
            color: white;
            font-size: 30px;
        }

        p {
            color: white;
            max-width: 600px;
            margin: 0 auto 20px;
        }

        .account-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #444;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }

        input {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            color: black;
            background-color: black;
            text-align: left;
        }

        .account-form label {
            color: white !important;
        }

        button {
            background-color: #45a049;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .account-form {
            max-width: 600px;
            margin-right: 100px;
            padding: 20px;
            background: rgba(68, 68, 68, 0.0);
            border: 2px dashed #333;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            text-align: left;
            margin-bottom: 20px;
        }

     .viewdetails{
        border: 2px solid #333;
     }
    

    .account-form label {
        color: white !important;
    }

    /* Adjust the style for the select element */
    .account-form select {
        width: 50%;
        padding: 10px;
        margin-bottom: 20px;
        box-sizing: border-box;
        color: white;  /* Set text color to white */
        background-color: black;}
        .withdraw-form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
  
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    text-align: left; /* Align text to the left */
    margin-left:10px;
}

.withdraw-form label {
    display: block;
    margin-bottom: 10px;
    color: white;
}

.withdraw-form input {
    width: 50%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
    color: white;
    background-color: black; /* Change the background color to white */
    text-align: left;
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
                <a href="Accounts.php" class="active">Accounts</a>
                <a href="Loan.php">Loan</a>
                <a href="Cards.php">Cards</a>
                <a href="transactions.php">Transactions</a>
                <a href="contact_us.php">Contact us</a>
                <a href="about_us.php">About Us</a>
            </nav>
        </header>

        <div class="background-image">
            <main>
                <h1>Add New Account</h1>
                <p>Enter details to add a new account.</p>

                <div class="account-form">
    <form action="process_Accounts.php" method="post">
        <!--  form for adding an account... -->
        

        <label for="Account_Type">Account Type:</label>
<select id="Account_Type" name="Account_Type"  required>
    <option value="Current">Current Account</option>
    <option value="Savings">Savings Account</option>
</select>

        <label for="Balance">Balance:</label>
        <input type="text" id="Balance" name="Balance" required>

        <label for="user_Id">User ID:</label>
        <input type="text" id="user_Id" name="user_Id" required>

        <button type="submit">Add Account</button>
    </form>
</div>

<h1>View Account Details</h1>
<div class="viewdetails">
    <form action="view_account.php" method="post">
        <!-- Your form for viewing account details... -->
        <label for="user_Id">User ID:</label>
        <input type="text" id="user_Id" name="user_Id" required>

      

        <button type="submit" name="viewAccount">View Account Details</button>
    </form>
   
                </div>
                <h1>Withdraw Money</h1>
                <div class="withdraw-form">
                    <form action="process_withdrawal.php" method="post">
                        <label for="user_Id_withdraw">User ID:</label>
                        <input type="text" id="user_Id_withdraw" name="user_Id_withdraw" required>

                        <label for="amount">Amount to Withdraw:</label>
                        <input type="text" id="amount" name="amount" required>

                        <button type="submit" name="withdrawMoney">Withdraw Money</button>
                    </form>
</div>

            
            </main>

            <!-- New container for the image -->
            
        </div>
    </div>
</body>
</html>
