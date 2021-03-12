<?php
    require_once "php/config.php";
    $prod_id = $val;
    // echo $prod_id;

    $con = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME) or die("Unable to connect");

    $sql = "SELECT * FROM products WHERE prod_id = '$prod_id'";
    $rs = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($rs, MYSQLI_ASSOC);

    $name = $row['prod_name'];
    $image = "Images/Pics/".$row['image'];
    $bids = $row['cur_bids'];
    $price = $row['price'];
    $time = $row['expire_date'];
    $seller = $row['seller'];

?>

