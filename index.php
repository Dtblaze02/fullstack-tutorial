<?php require('auth/login_auth.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta type="description" content="This is just a tutorial about fullstack development">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="auth-forms">
    <span id='error_message' class="text-danger"></span>
    <h2>Login Page</h2>
    <p>Enter Your Details Below to Login</p>
    <form method="post" action="auth/login.php">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
      <a href="pages/register.php">Register</a>
    </form>
  </div>

</body>
</html>
