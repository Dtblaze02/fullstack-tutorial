<?php

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];
$error_message = "";

// Validate the data (you can add more validation if needed)
if (empty($username) || empty($password)) {
    $error_message = "Please enter username and password.";
} else {
    require('db_conn.php');
    
    // Perform the login verification
    $sql = "SELECT * FROM users WHERE username='$username' AND password='" . md5($password) . "'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        session_start();
        $_SESSION["username"] = $username;
        header('Location: ../pages/home.php');
        // You can add session management or redirect to a different page here
    } else {
        echo "Invalid username or password.";
        header('Location: ../index.php');

    }
    // Close the database connection
    $conn->close();
}
?>
