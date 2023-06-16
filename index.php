<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta type="description" content="This is just a tutorial about fullstack development">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <h2>Login Page</h2>
    <form method="post" action="login.php">
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
      <a href="register.html">Register</a>
    </form>
 </div>

</body>
</html>
