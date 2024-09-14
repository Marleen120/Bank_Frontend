<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking - About Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Include jQuery and jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        body {
            background-image: url('aes.jpg') !important;
            color: white;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: transparent;
            overflow-y: scroll;
        }

        .background-image {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .slider {
            display: flex;
            transition: transform 0.8s ease-in-out;
        }

        .slide {
            position: relative;
            min-width: 100%;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .slide-text {
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    font-size: 24px;
    text-shadow: 2px 2px 4px black;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.9); /* Add box shadow */
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

        .about-us-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(68, 68, 68, 0.0);
            border: none;
            text-align: left;
            margin-bottom: 20px;
            color: black; /* Updated to black */
            font-size: 16px;
        }

        .about-us-content h2 {
            font-size: 50px;
            text-shadow: 1px 1px 2px black;
            font-family: Times new Roman;
            color: black; /* Updated to black */
        }

        .about-us-content p {
            margin-bottom: 15px;
            color: black; 
            font-weight:bold;
        }

        .about-us-content ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .about-us-content li {
            margin-bottom: 8px;
            color: black; /* Updated to black */
        }
        h2{
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
                <a href="contact_us.php">Contact us</a>
                <a href="about_us.php" class="active">About Us</a>
            </nav>
        </header>
    </div>

    <div class="background-image">
        <div class="slider">
            <div class="slide" style="display: block;">
                <img src="lahore.jpg" alt="Slide 1">
                <div class="slide-text">Lahore Branch</div>
            </div>
            <div class="slide">
                <img src="karachi.jpg" alt="Slide 2">
                <div class="slide-text">Karachi Branch</div>
            </div>
            <div class="slide">
                <img src="isloo.jpg" alt="Slide 3">
                <div class="slide-text">Islamabad Branch</div>
            </div>
        </div>
    </div>

    <main>
        <div class="about-us-content">
            <h2>About Us</h2>
            <p>Online Banking, Pakistan’s largest virtual bank, revolutionizing the way you manage your finances. Established with a vision to provide seamless digital banking services, we bring banking to your fingertips.</p>
            <p style="font-size: 25px;">Our Journey:</p>
            <p>Online Banking pioneered digital banking in 2004, offering innovative and secure financial solutions. Over the years, we have expanded our reach with a network of 1,750+ branches and 2,200+ ATMs globally, serving 36 million+ customers worldwide.</p>
            <p style="font-size: 25px;">Shaping the Future:</p>
            <p>Embracing a paradigm shift as a ‘Technology Company with a Banking License,’ we leverage multiple digital channels to connect with customers through innovative and frictionless ways. Our commitment to technological advancement sets us apart in the digital banking landscape.</p>
            <p style="font-size: 25px;">International Presence:</p>
            <p>With a significant international footprint, Online Banking is the largest domestic multinational. Our strategic focus includes China, where we are a key player in CPEC-related financing. We have achieved milestones, such as being the first Pakistani bank to offer end-to-end RMB intermediation.</p>
            <p style="font-size: 25px;">Commitment to Inclusion:</p>
            <p>As the leading financial institution in Pakistan, Online Banking is committed to inclusive growth. Initiatives like the Ehsaas Kafalat Program showcase our dedication to financial inclusion for all segments of society.</p>
        </div>
    </main>

    <script>
        // JavaScript for automatic sliding
        const slider = document.querySelector('.slider');
        let counter = 0; // Start from the first slide

        setInterval(() => {
            counter++;

            if (counter === 3) { // Change '2' to the total number of slides minus 1
                counter = 0;
            }

            slider.style.transform = `translateX(${-counter * 100}%)`;
        }, 2500); // Adjust the interval (in milliseconds) as needed
    </script>

</body>

</html>
