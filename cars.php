<?php
    require_once "php/session.php";
    require_once "php/config.php";

    $con = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME) or die("Unable to connect");

    $username = $_SESSION['userid'];
    $sql = "SELECT * FROM products WHERE prod_category = 'cars'";
    $rs = mysqli_query($con, $sql);

    // $row = mysqli_fetch_array($rs, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashew Auctions</title>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/main.css?v=9">
</head>
    <body?>
        <?php include("include/headerAuth.php") ?>
    <main class="bids-main container">
        <h3 style="text-align:center">Current Active bids</h3>
        <div class="d-flex table-responsive">
            <table class="table">
                <tr>
                    <th>Product Name</th>
                    <th>Current Price</th>
                    <th>Expiration Date</th>
                    <th>Product ID</th>
                </tr>
                <?php 
                while ($row = mysqli_fetch_array($rs)) {
                    ?>
                    <tr>
                        <td>
                            <form action="items.php" method="POST">
                            <button class="bids-display" type="submit" name="item" value = <?php echo $row['prod_id'] ?>>
                                    <?php echo $row['prod_name'] ?>
                                </button>
                            </form>
                        </td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['expire_date'] ?></td>
                        <td><?php echo $row['prod_id'] ?></td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </main> 
    <?php include("include/footer.php") ?>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="JS/pageloader.js"></script>
    </body>
</html> 