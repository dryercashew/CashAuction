<?php
    require_once "php/config.php";

    $con = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME) or die("Unable to connect");

    $sql = "SELECT prod_id FROM products";
    // $stmt = $con->query($sql);
    $rs = mysqli_query($con, $sql);
    $numrows = mysqli_num_rows($rs);

    $count = 0;
    
    $ar = array();
    while ($row= mysqli_fetch_assoc($rs)) {
        $num = array_push($ar, $row);
        $count += 1; 
    }
?>