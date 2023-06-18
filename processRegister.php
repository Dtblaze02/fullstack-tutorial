<?php
// register.php

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate the data (you can add more validation if needed)
if (empty($username) || empty($email) || empty($password)) {
    echo "Please fill in all fields.";
} else {
    // Connect to the database (replace with your database credentials)
    $conn = new mysqli('localhost', 'root', '', 'tutorial');
    
    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Perform the registration
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '" . md5($password) . "')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>
