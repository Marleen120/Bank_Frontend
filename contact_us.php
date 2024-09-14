<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking - Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Include jQuery and jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Include Google Material Icons for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        body {
            background-image: url('contact.jpg') !important;
            color: white;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: transparent;
            overflow-y: scroll;
        }

        .background-image {
            background-image: url('contact.jpg') !important;
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

        .contact-form {
        
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(68, 68, 68, 0.0);
            border: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            text-align: left;
            margin-bottom: 20px;
            font-size:20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }

        .contact-form label {
            color: white !important;
            font-family: Arial;
            font-weight: bold;
            font-size: 17px;
            text-shadow: 1px 1px 2px black;
        }

        input,
        textarea {
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

        h1 {
            margin-top: -400px;
        }

        h2 {
            font-size: 20px;
            text-shadow: 1px 1px 2px black;
            font-family: Times new Roman;
        }

        .contact-info {
            
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(68, 68, 68, 0.0);
            border: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            text-align: left;
            margin-bottom: 20px;
            color: white;
            font-size:17px;
           
        }

        .contact-info i {
            margin-right: 10px;
            font-size:30px;
           
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
                <a href="loan.php">Loan</a>
                <a href="Cards.php">Cards</a>
                <a href="transactions.php">Transactions</a>
                <a href="contact_us.php" class="active">Contact us</a>
                <a href="about_us.php">About Us</a>
            </nav>
        </header>
    </div>

    <div class="background-image">
        <main>
            <h1>Contact Us</h1>

            <div class="contact-form">
                <h2>Feel free to reach out to us using the form below.</h2>
                <form action="process_contact_us.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>

                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>

            <div class="contact-info">
                <h2>Contact Information</h2>
                <p><i class="material-icons">email</i> Email: info@yourbank.com</p>
                <p><i class="material-icons">phone</i> Contact No: +92-123 456 7890</p>
                <p><i class="material-icons">schedule</i> Working Hours: Mon-Fri 9:00 AM - 10:00 PM</p>
            </div>
        </main>
    </div>

    <script>
        // Any additional scripts you may have
    </script>
</body>

</html>
