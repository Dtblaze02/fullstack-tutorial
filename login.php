<?php

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];
$error_message = "";

// Validate the data (you can add more validation if needed)
if (empty($username) || empty($password)) {
    $error_message = "Please enter username and password.";
} else {
    // Connect to the database (replace with your database credentials)
    $conn = new mysqli('localhost', 'root', '', 'tutorial');
    
    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Perform the login verification
    $sql = "SELECT * FROM users WHERE username='$username' AND password='" . md5($password) . "'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        session_start();
        $_SESSION["username"] = $username;
        header('Location: home.php');
        // You can add session management or redirect to a different page here
    } else {
        echo "Invalid username or password.";
        header('Location: index.php');

    }
    // Close the database connection
    $conn->close();
}
?>
