<?php
    require_once "php/config.php";
    require_once "php/session.php";
    require_once "php/getRandId.php";
    
    if (!isset($_SESSION['userid'])) {
        $_SESSION['userid'] = '';
    }
    $val = 'moo';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashew Auctions</title>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css?v=3">
    <!-- <PHP> <link rel="stylesheet" type="text/css" href="css/main.css"> <PHP> -->
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">LOGO</div>
            <nav>
                <a href="">Home</a>
                <a href="products.php">Products</a>
                <a href="cat.php">Cats</a>
                <a href="log_in.php">Log In</a>
                <a href="connect.php">Sign Up</a>
            </nav>
            <!-- End of nav -->
        </div>
    </header> 
    <!-- End of Header -->
    <div class="banner">
        <div class="banner-text-items slider">
            <img src="images/Banner/gal (1).jpg" alt="">
            <img src="images/Banner/gal (1).png" alt="">
            <img src="images/Banner/gal (2).jpeg" alt="">
            <img src="images/Banner/gal (3).jpeg" alt="">
            <img src="images/Banner/gal (4).jpeg" alt="">
        </div>
    </div> 
    <!-- banner -->
    <main class="padding">
        <h3 class="text-center">AUCTION GALLERY</h3>
        <hr>
        <!-- Pictures of products -->
        <div class="container padding shop-pics">
            <div class="pic-section">
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
            </div>
            <div class="pic-section">
                <?php 
                    $val = $ar[1]['prod_id'];
                    include "php/getItem.php";
                ?>
                <img src="<?php echo $image ?>" alt="">
                <p> <?php echo $name ?> </p>
                    <hr>
                    <br>
                <!-- Prints out the price -->
                <p style="color:blue">
                    <?php echo $price?> USD, 
                    <?php echo $bids ?> Bids
                </p>
                <!-- Prints the time of expiration -->
                <p>
                    Ends <?php echo $time ?>
                </p>
            </div>
            <div class="pic-section">
                <?php 
                    $val = $ar[2]['prod_id'];
                    include "php/getItem.php";
                ?>
                <img src="<?php echo $image ?>" alt="">
                <p> <?php echo $name ?> </p>
                    <hr>
                    <br>
                <!-- Prints out the price -->
                <p style="color:blue">
                    <?php echo $price?> USD, 
                    <?php echo $bids ?> Bids
                </p>
                <!-- Prints the time of expiration -->
                <p>
                    Ends <?php echo $time ?>
                </p>
            </div>
            <div class="pic-section">
                <?php 
                    $val = $ar[3]['prod_id'];
                    include "php/getItem.php";
                ?>
                <img src="<?php echo $image ?>" alt="">
                <p> <?php echo $name ?> </p>
                    <hr>
                    <br>
                <!-- Prints out the price -->
                <p style="color:blue">
                    <?php echo $price?> USD, 
                    <?php echo $bids ?> Bids
                </p>
                <!-- Prints the time of expiration -->
                <p>
                    Ends <?php echo $time ?>
                </p>
            </div>
            <div class="pic-section">
                <?php 
                    $val = $ar[4]['prod_id'];
                    include "php/getItem.php";
                ?>
                <img src="<?php echo $image ?>" alt="">
                <p> <?php echo $name ?> </p>
                    <hr>
                    <br>
                <!-- Prints out the price -->
                <p style="color:blue">
                    <?php echo $price?> USD, 
                    <?php echo $bids ?> Bids
                </p>
                <!-- Prints the time of expiration -->
                <p>
                    Ends <?php echo $time ?>
                </p>
            </div>
            <!-- Pic section #6 -->
            <div class="pic-section">
                <?php 
                    $val = $ar[5]['prod_id'];
                    include "php/getItem.php";
                ?>
                <img src="<?php echo $image ?>" alt="">
                <p> <?php echo $name ?> </p>
                    <hr>
                    <br>
                <!-- Prints out the price -->
                <p style="color:blue">
                    <?php echo $price?> USD, 
                    <?php echo $bids ?> Bids
                </p>
                <!-- Prints the time of expiration -->
                <p>
                    Ends <?php echo $time ?>
                </p>
            </div>
            <!-- Pic section #7 -->
            <div class="pic-section">
                <?php 
                    $val = $ar[6]['prod_id'];
                    include "php/getItem.php";
                ?>
                <img src="<?php echo $image ?>" alt="">
                <p> <?php echo $name ?> </p>
                    <hr>
                    <br>
                <!-- Prints out the price -->
                <p style="color:blue">
                    <?php echo $price?> USD, 
                    <?php echo $bids ?> Bids
                </p>
                <!-- Prints the time of expiration -->
                <p>
                    Ends <?php echo $time ?>
                </p>
            </div>
            <!-- Pic section #8 -->
            <div class="pic-section">
                <?php 
                    $val = $ar[7]['prod_id'];
                    include "php/getItem.php";
                ?>
                <img src="<?php echo $image ?>" alt="">
                <p> <?php echo $name ?> </p>
                    <hr>
                    <br>
                <!-- Prints out the price -->
                <p style="color:blue">
                    <?php echo $price?> USD, 
                    <?php echo $bids ?> Bids
                </p>
                <!-- Prints the time of expiration -->
                <p>
                    Ends <?php echo $time ?>
                </p>
            </div>
        </div>
        <!-- End of pictures -->
    </main>
    <div class="clearfix"></div>
    <section class="padding contacts">
        <div class="container box">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <h4>Email us at cashauctions@hotmail.com</h4>
        </div>
        <div class="container box">
            <i class="fab fa-facebook"></i>
            <h4>Follow us on Facebook</h4>
        </div>
        <div class="container box">
            <i class="fab fa-instagram"></i>
            <h4>Follow us on Instagram</h4>
        </div>
    </section>
    <footer>
        <div class="container padding">
            <a href="#">Sign Up</a>
            <br>
            <a href="php/logout.php">Log Out</a>
            <br>
            <br>
            <i class="far fa-copyright"></i>

            Copyright aidanspel@hotmail.com. All Rights Reserved.
        </div>
    </footer>
    <script src="JS/editor.js"></script>
    <script src="JS/jquery-3.5.1.js"> </script>
    <script src="JS/jquery.cycle.all.js"></script>
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