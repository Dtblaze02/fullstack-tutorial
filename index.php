<?php require('auth/login_auth.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta type="description" content="This is just a tutorial about fullstack development">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="auth-forms">
    <span id='error_message' class="text-danger"></span>
    <h2 class="text-center">Login Page</h2>
    <form method="post" action="auth/login.php">
      <div class="form-group">
        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="Enter your username">
      </div>
      <div class="form-group">
        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
      <p>Don't have an account ? <a href="pages/register.php">Register Now</a></p>
    </form>
  </div>

</body>
</html>
