<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
    <link rel="stylesheet" href="style.css" />

    <style>
      body{
        background-image: url('img3.jpg') !important;
    background-size: 800px;
    background-repeat: no-repeat;
    background-size: cover;
      }
      .signup-btn {
    color:white;
    
}
p{
    color: white;
   
}
span{
    color:white;
   
}

.dateOfBirth-container label {
        display: block;
        margin-bottom: 5px;
        font-size: 20px;
        color:white;
    }
    .input-container label{
    color: white;
}
.email-container{
    color: white;
}
.password-container{
    color:white;
}
h2{
    color: white;
}
input[type="text"],
input[type="password"] {
    width: 50%;
    padding: 10px;
    border: 1px solid #ccc;
    display: flex;
    margin-bottom: 20px;
    color: black;
}
nav a.active {

background-color: #45a049; /* Change the background color for the active state */
color: white; /* Change the text color for the active state */


}




   </style>
  </head>
  <body>
  <div class="background-image"></div>
    <nav style="justify-content: center; display: flex">
        <div class="logo-image">
            <img src="logoo.jpg" width="50" height="50" />
          </div>
          <a href="Home.html">Home</a>
          <a href="login.php"class="active">User</a>
             
                <a href="Accounts.php">Accounts</a>
                <a href="Loan.php">Loan</a>
                <a href="Cards.php">Cards</a>
                <a href="transactions.php">Transactions</a>
                <a href="contact_us.php">Contact us</a>
                <a href="about_us.php">About Us</a>
    </nav>

    <main style="margin-bottom: 15px;">
      <h1>Signup and Get Started Today!</h1>
      <p>Create your account with our digital banking application.</p>
      <div class="signup-container">
        <h2>Signup</h2>
        <!-- first name-->

        <!-- action me php file ka link dena h we want to connect to he form -->
        <!-- for every inout tag we have to specify a name that we will use in our php file -->
        <form action="process_signup.php" method="post">
          <div class="input-container">
            <label for="username">User Name</label>
            <input
              type="text"
              name="username"
              id="username"
              placeholder="User Name"
              required
            />
          </div>


          <!-- email-->
          <div class="email-container">
            <label for="email">Email Address</label>
            <div>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email Address"
              required
            />
        </div>
          </div>
          <!-- password-->
          <div class="password-container">
            <label for="password">Password</label>
            <input
        
  type="password"
  name="password"
  id="password"
  placeholder="Password"
  pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
  title="Password must be 8 characters long and contain at least one letter and one number"
  required
            />
          </div>
          <!-- confirm password-->
          <div class="password-container">
            <label for="confirm_password">Confirm Password:</label>
            <input
              type="password"
              name="confirm_password"
              id="confirm_password"
              placeholder="Confirm your password"
              required
            />
          </div>

          <!-- DOB-->
          <div class="dateOfBirth-container" style="margin-bottom: 15px;">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" required />
          </div>

          <div class="submit-container" style="margin-bottom:15px;">
            <input type="submit" value="Signup" />
          </div>
        </form>


        <span style="font-weight: bold; color: white; text-shadow: 1px 1px 2px black;">Already have an account?</span>


          <a class="signup-btn" href="login.php">Login</a>

      </div>
    </main>

  </body>
</html>
