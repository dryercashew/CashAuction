<?php
    require_once "php/config.php";
    $seller_id = $seller;
    // echo $prod_id;

    $con = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME) or die("Unable to connect");
    $sql = "SELECT * FROM information WHERE username = '$seller_id'";
    $rs = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($rs, MYSQLI_ASSOC);

    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $addr = $row['addr'];
    $zip = $row['zip'];
    $phone = $row['phone'];
    $state = $row['state'];
    $city = $row['city'];
?>

