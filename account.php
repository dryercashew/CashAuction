
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
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css?v=4">
    <!-- <PHP> <link rel="stylesheet" type="text/css" href="css/main.css"> <PHP> -->
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">LOGO</div>
            <nav>
                <a href="index2.php">Home</a>
                <div class="dropdown">
                    <button class="dropbtn">Categories
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <h4>Product Categories</h4>
                        <div class="dropdown-content-a">
                            <a href="#">Technology</a>
                            <a href="#">Art</a>
                            <a href="#">Hobbies</a>
                            <a href="#">Tools</a>
                            <a href="#">Cars</a>
                            <a href="#">Gardening</a>
                        </div>
                    </div>
                </div>
                <a href="cat.php">Cats</a>
                <a href="account.php" id="intro">
                    <script>
                        const name = '<?php echo $_SESSION['userid']; ?>';
                        document.getElementById("intro").innerHTML = "Hello, " + name;
                    </script>
                    <div class="account">
                        Account Info
                    </div>
                </a>
            </nav>
            <!-- End of nav -->
        </div>
    </header> 
    <!-- End of Header -->  
    <main class="account">
        <div class="padding container">
            <h3 class="text-center">Account Information</h3>
            <div class="info">
                <button class="info-sec">
                    <i class="fas fa-box-open"></i>
                    <div class="info-text">
                        <h5>Your Bids</h5>
                        <p>Current bids on items</p>
                    </div>
                </button>
                <button class="info-sec">
                    <i class="far fa-credit-card"></i>
                    <div class="info-text">
                        <h5>Payment Methods</h5>
                        <p>Change payment methods and current balances</p>
                    </div>
                </button>
                <button class="info-sec" onclick="document.location='index2.php'">
                    <i class="fas fa-house-user"></i>
                    <div class="info-text">
                        <h5>Delivery Information</h5>
                        <p>Update your address for delivery</p>
                    </div>
                </button>
                <button class="info-sec">
                    <i class="fas fa-money-bill"></i>
                    <div class="info-text">
                        <h5>Products Selling</h5>
                        <p>Your current items being auctioned</p>
                    </div>
                </button>
                <button class="info-sec">
                    <i class="fas fa-address-book"></i>
                    <div class="info-text">
                        <h5>Your Information</h5>
                        <p>Update personal information and data</p>
                    </div>
                </button>
                <button class="info-sec">
                    <i class="far fa-question-circle"></i>
                    <div class="info-text">
                        <h5>Help</h5>
                        <p>Contact us with issues or problems</p>
                    </div>
                </button>
            </div>
        </div>
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