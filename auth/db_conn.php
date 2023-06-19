<?php
// Connect to the database (replace with your database credentials)
    $conn = new mysqli('localhost', 'root', '', 'tutorial');
    
    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>