<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center">Registration</h2>
    <form id="registrationForm" onsubmit="validateForm(event)" action="processRegister.php" method="POST">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter a username">
            <span class="error-message text-danger" id="usernameError"></span>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
            <span class="error-message text-danger" id="emailError"></span>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter a password">
            <span class="error-message text-danger" id="passwordError"></span>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </div>
      </div>
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
