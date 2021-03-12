<?php 
    require_once "php/session.php";
    require_once "php/config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $val = $_POST['val'];
        $bid = $_POST['bid'];

        include "php/getItem.php";

        $con = new mysqli('localhost','root','','cashew-auction') or die("Unable to connect");


        $sql = "UPDATE 'products' SET 'prod_id"=[];
        $rs = mysqli_query($con, $sql);


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashew Auctions</title>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!-- <PHP> <link rel="stylesheet" type="text/css" href="css/main.css"></head> <PHP> -->
    <link rel="stylesheet" type="text/css" href="css/main.css?v=7">
</head>
<body>
    <?php include("include/headerAuth.php") ?>
    <main class="newMainBid">
        <h2>Thank you for bidding on <?php echo $name ?></h2>
        <img src="<?php echo $image ?>" alt="">
        <p>Please periodically check your email for updates</p>
    </main>
</body>
</html> 