<?php
    require_once "php/config.php";
    require_once "php/session.php";
    require_once "php/getRandId.php";
    
    if (!isset($_SESSION['userid'])) {
        $_SESSION['userid'] = '';
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
    <link rel="stylesheet" type="text/css" href="css/main.css?v=10">
</head>
<body>
    <?php include("include/headerAuth.php") ?>
    <!-- End of Header -->
    <div class="banner">
        <div class="banner-text-items slider">
            <img src="images/Banner/1.jpg" alt="">
            <img src="images/Banner/2.jpg" alt="">
            <img src="images/Banner/3.jpg" alt="">
        </div>
    </div> 
    <!-- banner -->
    <main class="padding">
        <!-- Pictures of products -->
        <h3 class="text-center">AUCTION GALLERY</h3>
        <hr>
        <!-- Pictures of products -->
        <div class="container padding shop-pics">
            <form action="items.php" method="POST">
                <button class="pic-section form-button" type="submit" name="item" value = <?php echo $ar[0]['prod_id']; ?>>
                    <?php 
                    // Val changes which product information will be displayed 
                        $val = $ar[0]['prod_id'];
                        include "php/getItem.php";
                    ?>
                    <img src="<?php echo $image ?>" alt="">
                    <p> <?php echo $name ?> </p>
                        <hr>
                        <br>
                    <p style="color:blue">
                        <?php echo $price?> USD, 
                        <?php echo $bids ?> Bids
                    </p>
                    <p>
                        Ends <?php echo $time ?>
                    </p>
                </button>
            </form>
            <form action="items.php" method="POST">
                <button class="pic-section form-button" type="submit" name="item" value = <?php echo $ar[1]['prod_id']; ?>>
                    <?php 
                    // Val changes which product information will be displayed 
                        $val = $ar[1]['prod_id'];
                        include "php/getItem.php";
                    ?>
                    <img src="<?php echo $image ?>" alt="">
                    <p> <?php echo $name ?> </p>
                        <hr>
                        <br>
                    <p style="color:blue">
                        <?php echo $price?> USD, 
                        <?php echo $bids ?> Bids
                    </p>
                    <p>
                        Ends <?php echo $time ?>
                    </p>
                </button>
            </form> 
            <form action="items.php" method="POST">
                <button class="pic-section form-button" type="submit" name="item" value = <?php echo $ar[2]['prod_id']; ?>>
                    <?php 
                    // Val changes which product information will be displayed 
                        $val = $ar[2]['prod_id'];
                        include "php/getItem.php";
                    ?>
                    <img src="<?php echo $image ?>" alt="">
                    <p> <?php echo $name ?> </p>
                        <hr>
                        <br>
                    <p style="color:blue">
                        <?php echo $price?> USD, 
                        <?php echo $bids ?> Bids
                    </p>
                    <p>
                        Ends <?php echo $time ?>
                    </p>
                </button>
            </form>
            <form action="items.php" method="POST">
                <button class="pic-section form-button" type="submit" name="item" value = <?php echo $ar[3]['prod_id']; ?>>
                    <?php 
                    // Val changes which product information will be displayed 
                        $val = $ar[3]['prod_id'];
                        include "php/getItem.php";
                    ?>
                    <img src="<?php echo $image ?>" alt="">
                    <p> <?php echo $name ?> </p>
                        <hr>
                        <br>
                    <p style="color:blue">
                        <?php echo $price?> USD, 
                        <?php echo $bids ?> Bids
                    </p>
                    <p>
                        Ends <?php echo $time ?>
                    </p>
                </button>
            </form>
            <form action="items.php" method="POST">
                <button class="pic-section form-button" type="submit" name="item" value = <?php echo $ar[4]['prod_id']; ?>>
                    <?php 
                    // Val changes which product information will be displayed 
                        $val = $ar[4]['prod_id'];
                        include "php/getItem.php";
                    ?>
                    <img src="<?php echo $image ?>" alt="">
                    <p> <?php echo $name ?> </p>
                        <hr>
                        <br>
                    <p style="color:blue">
                        <?php echo $price?> USD, 
                        <?php echo $bids ?> Bids
                    </p>
                    <p>
                        Ends <?php echo $time ?>
                    </p>
                </button>
            </form>
            <form action="items.php" method="POST">
                <button class="pic-section form-button" type="submit" name="item" value = <?php echo $ar[5]['prod_id']; ?>>
                    <?php 
                    // Val changes which product information will be displayed 
                        $val = $ar[5]['prod_id'];
                        include "php/getItem.php";
                    ?>
                    <img src="<?php echo $image ?>" alt="">
                    <p> <?php echo $name ?> </p>
                        <hr>
                        <br>
                    <p style="color:blue">
                        <?php echo $price?> USD, 
                        <?php echo $bids ?> Bids
                    </p>
                    <p>
                        Ends <?php echo $time ?>
                    </p>
                </button>
            </form>
            <form action="items.php" method="POST">
                <button class="pic-section form-button" type="submit" name="item" value = <?php echo $ar[6]['prod_id']; ?>>
                    <?php 
                    // Val changes which product information will be displayed 
                        $val = $ar[6]['prod_id'];
                        include "php/getItem.php";
                    ?>
                    <img src="<?php echo $image ?>" alt="">
                    <p> <?php echo $name ?> </p>
                        <hr>
                        <br>
                    <p style="color:blue">
                        <?php echo $price?> USD, 
                        <?php echo $bids ?> Bids
                    </p>
                    <p>
                        Ends <?php echo $time ?>
                    </p>
                </button>
            </form>
            <form action="items.php" method="POST">
                <button class="pic-section form-button" type="submit" name="item" value = <?php echo $ar[7]['prod_id']; ?>>
                    <?php 
                    // Val changes which product information will be displayed 
                        $val = $ar[7]['prod_id'];
                        include "php/getItem.php";
                    ?>
                    <img src="<?php echo $image ?>" alt="">
                    <p> <?php echo $name ?> </p>
                        <hr>
                        <br>
                    <p style="color:blue">
                        <?php echo $price?> USD, 
                        <?php echo $bids ?> Bids
                    </p>
                    <p>
                        Ends <?php echo $time ?>
                    </p>
                </button>
            </form>
        </div>
        <!-- End of pictures -->
    </main>
    <div class="clearfix"></div>
    <?php include("include/footer.php") ?>
    
    <script src="JS/jquery-3.5.1.js"> </script>
    <script src="JS/jquery.cycle.all.js"></script>
    <script src="JS/pageloader.js"></script>
    <script>
    $(function() {
        $('.slider').cycle({
            fx: 'scrollHorz'
            // fx: 'fadeZoom'
        });
    });

    </script>

</body>
</html>