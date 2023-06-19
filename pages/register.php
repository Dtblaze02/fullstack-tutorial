<?php require('../auth/login_auth.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="auth-forms">
    <span id='error_message' class="text-danger"></span>
    <h4 class="text-center mb-3">Registration Page</h4>
    <form method="post" action="../auth/register.php" id="registrationForm" onsubmit="validateForm(event)">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username">
        <span class="error-message text-danger" id="usernameError"></span>
      </div>
      <div class="form-group">
        <label for="password">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your Email">
        <span class="error-message text-danger" id="emailError"></span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
        <span class="error-message text-danger" id="passwordErr"></span>
      </div>
      <div class="form-group">
        <button type="submit">Register</button>
      </div>
      <p>Already have an account? <a href="../index.php">Login Now</a> </p>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <script>
    function validateForm(event) {
      event.preventDefault(); // Prevent form submission

      // Get form values
      var username = document.getElementById('username').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;

      // Reset previous error messages
      var errorMessages = document.getElementsByClassName('error-message');
      for (var i = 0; i < errorMessages.length; i++) {
        errorMessages[i].innerText = '';
      }

      // Validate form inputs
      if (!username) {
        document.getElementById('usernameError').innerText = 'Please enter a username.';
        return;
      }

      if (!email) {
        document.getElementById('emailError').innerText = 'Please enter an email address.';
        return;
      }

      if (!password) {
        document.getElementById('passwordError').innerText = 'Please enter a password.';
        return;
      }

      // If all inputs are valid, you can proceed with form submission or further processing
      document.getElementById('registrationForm').submit();
    }
  </script>
</body>
</html>
