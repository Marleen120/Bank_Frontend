<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Banking - Loan</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        body {
            background-image: url('loan.jpg') !important;
            color: white;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: transparent;
            overflow-y: scroll; 
        }

        .loan-form select, .loan-form input[type="text"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            color: white;
            background-color: black;
            border: 1px solid white;
            border-radius: 5px;
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

        .background-image {
            background-image: url('loan.jpg') !important;
            background-size: cover;
            background-repeat: no-repeat;
            height: 200vh; /* Adjust the height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }

        h1 {
            color: white;
            margin-top: -10px;
            margin-right: 300px;
        }

        p {
            color: white;
            max-width: 600px;
            margin-right: 400px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }

        .loan-form label {
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

        .loan-form {
            max-width: 600px;
            margin-right: 100px;
            padding: 20px;
            background: rgba(68, 68, 68, 0.0);
            border: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            text-align: left;
            margin-bottom: 20px;
        }

        .loan-criteria {
            margin-top: 70px;
            text-align: left;
            padding: 20px;
        }

        .loan-criteria h2 {
            color: white;
            font-family: Times New Roman;
            font-size: 30px;
        }

        .loan-criteria p {
            color: white;
            margin-top: 10px;
        }

        .loan-criteria b {
            color: #45a049;
        }

        .loan-criteria li {
            font-size: 17px;
            margin-bottom: 20px;
        }
  
        .slider-container {
            position: relative;
            width: 100%;
            height: 400px; /* Adjust the height as needed */
            overflow: hidden;
            margin-bottom: 20px;
        }

        .slider {
            display: flex;
            transition: transform 1s ease-in-out;
            height: 100%; /* Ensure the slider takes the full height of the container */
        }

        .slide {
            position: relative;
            min-width: 100%;
            box-sizing: border-box;
        }

        .slide img {
            width: 100%;
            height: 100%; /* Ensure the image takes the full height of the slide */
            object-fit: cover;
        }

        .text-overlay {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            padding: 20px; /* Add padding to center the text */
            background: rgba(0, 0, 0, 0.5); /* Add a semi-transparent background */
            border-radius: 10px; /* Add rounded corners for a nicer look */
        }

        .text-overlay h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .text-overlay p {
            font-size: 16px;
            max-width: 300px;
            margin: 0 auto;
        }
</style>

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
                <a href="Loan.php" class="active">Loan</a>
                <a href="Cards.php">Cards</a>
                <a href="transactions.php">Transactions</a>
                <a href="contact_us.php">Contact us</a>
                <a href="about_us.php">About Us</a>
            </nav>
        </header>
       
        </div>
        <div class="slider">
    <div class="slide">
        <div class="text-overlay">
            <h2>Car Loans</h2>
            <p>Get on the road with our flexible and competitive car loan options.</p>
        </div>
        <img src="car.jpg" alt="Slide 1">
    </div>
    <div class="slide">
        <div class="text-overlay">
            <h2>Home Loans</h2>
            <p>Find the perfect loan for your dream home with our tailored financing solutions.</p>
        </div>
        <img src="house.jpg" alt="Slide 2">
    </div>
</div>




        <div class="background-image">
            <main>
                <h1>Apply for Loan</h1>
                <p>
                    Enter details to apply for a loan.
                </p>

                <div class="loan-form">
                    <form action="process_loan.php" method="post">
                        <label for="Loan_Amount">Loan Amount:</label>
                        <input type="text" id="Loan_Amount" name="Loan_Amount" placeholder="Enter the loan amount required" required>

                        <label for="Borrower_Name">Borrower Name:</label>
                        <input type="text" id="Borrower_Name" name="Borrower_Name" placeholder="Enter your name" required>

                        <label for="Borrower_Contact_info">Contact Information:</label>
                        <input type="text" id="Borrower_Contact_info" name="Borrower_Contact_info" placeholder="Enter your contact info" required>

                        <label for="User_id">User ID:</label>
                        <input type="text" id="User_id" name="User_id" placeholder="Enter user id" required>

                        <label for="age">Age:</label>
                        <input type="text" id="age" name="age" placeholder="Enter your age" required>

                        <label for="employment_type">Employment Type:</label>
                        <select id="employment_type" name="employment_type" required>
                            <option value="salaried">Salaried Individual</option>
                            <option value="self_employed">Self-Employed Business Professional</option>
                        </select>

                        <label for="salary">Monthly Salary (PKR):</label>
                        <input type="text" id="salary" name="salary" placeholder="Enter your monthly salary" required>

                        <label for="nationality">Nationality:</label>
                        <select id="nationality" name="nationality" required>
                            <option value="pakistani">Pakistani</option>
                            <option value="not_pakistani">Not Pakistani</option>
                            

                         
                        </select>
                        <label for="loan_type">Loan Type:</label>
                        <select id="loan_type" name="loan_type" required>
                            <option value="personal">Personal Loan</option>
                            <option value="home">Home Loan</option>
                            <option value="car">Car Loan</option>
                        </select>
                        

                        <button type="submit">Apply for Loan</button>
                        <a href="retrieve_loan.php"><button type="button">Receive Loan</button></a>
                    </form>
                </div>
                
                <div class="loan-criteria">
                    <h2>Loan Criteria:</h2>
                    <ul>
                        <li><b>SALARIED INDIVIDUALS:</b>
                            <ul>
                                <li>Applicant must be a Pakistani citizen.</li>
                                <li>Applicant to be 22 years or more at the time of loan application.</li>
                                <li>Minimum monthly income to be PKR 20,000.</li>
                            </ul>
                        </li>
                        <li><b>SELF-EMPLOYED BUSINESS PERSONS/PROFESSIONALS:</b>
                            <ul>
                                <li>Applicant must be a Pakistani citizen.</li>
                                <li>Applicant to be 22 years or more at the time of loan application.</li>
                                <li>Minimum monthly income to be PKR 25,000.</li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </main>
        </div>
    </div>
    <script>
    // JavaScript for automatic sliding
    const slider = document.querySelector('.slider');
    let counter = 0; // Start from the first slide

    setInterval(() => {
        counter++;

        if (counter === 2) { // Change '2' to the total number of slides minus 1
            counter = 0;
        }

        slider.style.transform = `translateX(${-counter * 100}%)`;
    }, 2500); // Adjust the interval (in milliseconds) as needed
</script>

</body>
</html>
