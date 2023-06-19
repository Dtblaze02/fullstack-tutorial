<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: ../pages/index.php");
        exit();
    }
?>