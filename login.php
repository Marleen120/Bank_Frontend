<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Banking</title>
  <link rel="stylesheet" type="text/css" href="<?php echo 'style.css'; ?>">
  <style>
    body {
      background-image: url('img3.jpg') !important;
      background-size: 800px;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .signup-btn {
      color: white;
    }

    .login-btn {
      width: 10%;
      padding: 10px;
      border: none;
      color: black;
    }

    p, span, h2, .loginForm label {
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
      background-color: #45a049;
      color: white;
    }
    .loginForm label {
  color: black !important;
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
        <a href="login.php" class="active">User</a>
        <a href="accounts.php">Accounts</a>
        <a href="Loan.php">Loan</a>
        <a href="Cards.php">Cards</a>
        <a href="transactions.php">Transactions</a>
        <a href="contact_us.php">Contact us</a>
        <a href="about_us.php">About Us</a>
      </nav>
    </header>
    <div class="background-image">
      <main>
        <h1>Online Banking</h1>
        <p>Online transactions made easier. Login or signup today with our digital banking application.</p>
        <h2>Login</h2>
        <form action="process_login.php" method="post">
          <div class="loginForm">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username" required />
            <label for="password">User Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
              title="Password must be 8 characters long and contain at least one letter and one number"
              required
            />
            <input class="login-btn" type="submit" value="Login" />
            <div style="margin-top: 15px">
              <span>Don't have an account?</span>
              <a class="signup-btn" href="signup.php">Sign Up</a>
            </div>
          </div>
        </form>
      </main>
    </div>
  </body>
</html>
