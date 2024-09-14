<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking - Cards</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('bgg.jpg') !important;
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100%;
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
            display: flex;
            justify-content: space-between;
        }

        .background-image {
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        h1 {
            color: white;
            padding-top: 20px;
        }

        p {
            color: white;
            max-width: 600px;
            display: flex;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }

        input,
        select {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            color: black;
            background-color: black;
        }

        .card-form {
            max-width: 600px;
            padding: 20px;
            background: rgba(68, 68, 68, 0.0);
            border: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            text-align: left;
        }

        .slideshow-container {
            max-width: 50%;
            position: relative;
            margin-top: 20px;
        }

        .mySlides {
            display: none;
            width: 100%;
            margin-top: 300px;
            margin-left: 50px;
        }

        .mySlides img {
            width: 100%;
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            /* Adjust the top position to move the buttons up */
            width: auto;
            padding: 16px;
            color: white;
            font-size: 24px;
            cursor: pointer;
            background-color: transparent;
            border: none;
        }

        .prev {
            left: 10px;
            /* Adjust the left position to move the button left */
        }

        .next {
            right: -90px;
            /* Adjust the right position to move the button right */
        }
        .card-form label {
    color: white !important;
}

/* Adjust the style for the select element in the card form */
.card-form select {
    width: 50%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
    color: white;  /* Set text color to white */
    background-color: black;  /* Set background color to black */
    border: 1px solid white;  /* Add a white border */
    border-radius: 5px;  /* Add border-radius for a rounded look */
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
                <a href="Cards.php" class="active">Cards</a>
                <a href="transactions.php">Transactions</a>
                <a href="contact_us.php">Contact us</a>
                <a href="about_us.php">About Us</a>
            </nav>
        </header>

        <div class="background-image">
            <main>
                <div class="card-form-container">
                    <h1>Apply for Card</h1>
                    <p>Enter details to apply for a card.</p>
                    <div class="card-form">
                        <form action="process_Cards.php" method="post">

                            <label for="Card_holder_name">Card Holder Name:</label>
                            <input type="text" id="Card_holder_name" name="Card_holder_name" required>

                            <label for="Card_type">Card Type:</label>
                            <select id="Card_type" name="Card_type" required>
                                <option value="Debit">Debit</option>
                                <option value="Credit">Credit</option>
                            </select>

                            <label for="Account_no">Account Number:</label>
                            <input type="text" id="Account_no" name="Account_No" required>

                            <label for="User_id">User ID:</label>
                            <input type="text" id="User_id" name="User_id" required>

                            <button type="submit">Apply for Card</button>
                        </form>
                    </div>
                </div>

                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Card images -->
                    <div class="mySlides">
                        <img src="imggg.jpg" alt="Card 1">
                    </div>

                    <div class="mySlides">
                        <img src="creditt.jpg" alt="Card 2">
                    </div>
                    <div class="mySlides">
                        <img src="pic3.jpg" alt="Card 3">
                    </div>
                    <div class="mySlides">
                        <img src="debitt.jpg" alt="Card 4">
                    </div>

                    <!-- Navigation arrows -->
                    <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
                    <button class="next" onclick="plusSlides(1)">&#10095;</button>
                </div>
            </main>
        </div>
    </div>

    <!-- Script for slideshow functionality -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");

            if (n > slides.length) {
                slideIndex = 1;
            }

            if (n < 1) {
                slideIndex = slides.length;
            }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>

</html>
