<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking Services</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Make sure style.css is in the same directory -->
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        body {
            background-image: url('feedback.jpg') !important;
            background-color: #333;
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

        nav a.active {
            background-color: #45a049; /* Change the background color for the active state */
            color: white; /* Change the text color for the active state */
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

        .background-image {
            background-image: url('feedback.jpg') !important;
            background-color: #333;
            height: 200vh;
            display: flex;
            margin: 0;
            padding: 0;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat; /* Add this line to prevent the background from repeating */
            background-size: cover; /* Add this line to cover the entire container */
        }

        h1,
        h2 {
            color: white;
            text-shadow: 2px 2px 4px black;
        }

        p {
            color: white;
            max-width: 600px;
            margin: 0 auto 20px;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-shadow: 2px 2px 4px black;
        }

        .feedback-form {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(68, 68, 68, 0.5);
            border: 2px solid white;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
        }

        .feedback-form label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .feedback-form input,
.feedback-form textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    margin-bottom: 10px;
    border: 1px solid white;
    border-radius: 5px;
    color: black; /* Add this line to set text color to black */
}

.feedback-form button {
    background-color: #45a049;
    color: white; /* Set button text color to white */
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}


        .feedback-form button:hover {
            background-color: #3c9042;
        }

        .bottom-options {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: space-around;
            background-color: black;
            margin-top: 20px;
            padding: 10px 0;
            color: lightyellow;
        }

        .bottom-options li {
            margin: 0;
        }

        .bottom-options a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            color: white;
            font-size: 18px;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px black;
        }

        li:hover {
            background-color: #777;
        }

        li::before {
            content: '\2022'; /* bullet point */
            color: #45a049; /* Match the active link color */
            font-size: 20px;
            margin-right: 10px;
        }

        a:visited {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="logo-image">
                    <img src="logoo.jpg" width="50" height="50" alt="Logo" />
                </div>
                <a href="Home.html">Home</a>
                <a href="login.php">User</a>
                <a href="Accounts.php">Accounts</a>
                <a href="loan.php">Loan</a>
                <a href="Cards.php">Cards</a>
                <a href="transactions.php">Transactions</a>
                <a href="contact_us.php">Contact us</a>
                <a href="about_us.php">About Us</a>
            </nav>
        </header>

        <div class="background-image">
            <main>
                <h1>Feedback</h1>
                <div class="feedback-form">
                    <form action="process_feedback.php" method="post">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="feedback">Your Feedback:</label>
                        <textarea id="feedback" name="feedback" rows="4" required></textarea>

                        <button type="submit">Submit Feedback</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <hr>
    <footer>
        <ul class="bottom-options">
            <li><i class="fas fa-cogs"></i><a href="Services.html">Services</a></li>
            <li><i class="fas fa-comment-alt"></i><a href="feedback.php">Feedback</a></li>
        </ul>
    </footer>
</body>

</html>
