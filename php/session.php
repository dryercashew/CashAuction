<?php
    session_start();

    if (isset($_SESSION["username"]) && $_SESSION['username'] === true) {
        header("location: welcome.php");
        exit;
    } 

?>