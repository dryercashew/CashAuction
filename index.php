<?php
    require_once "php/config.php";
    require_once "php/session.php";
    
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
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <PHP> <link rel="stylesheet" type="text/css" href="css/main.css"> <PHP>
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">LOGO</div>
            <nav>
                <a href="">Home</a>
                <a href="">Products</a>
                <a href="">Cats</a>
                <a href="log_in.php">Log In</a>
                <a href="connect.php">Sign Up</a>
            </nav>
            <!-- End of nav -->
            <div class="account">
                <a href=""><img src="Images/user.svg" alt=""></a>
                <p class="intro">
                    <script type="text/javascript">
                        const name = '<?php echo $_SESSION['userid'] ?>';
                        if (!name) {
                            document.write('Welcome!');
                        }
                        else {
                            document.write('Welcome ' + name);
                        }
                    </script>
                </p>
                
            </div>
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
                <img src="Images/banana.jpg" alt="">
                <h5>Banana</h5>
                <h5 class="bids"></h5>
            </div>
            <div class="pic-section">
                <img src="Images/keyboard.jpg" alt="">
                <h5>Keyboard</h5>
            </div>
            <div class="pic-section">
                <img src="Images/chess.jpg" alt="">
                <h5>Chess</h5>
            </div>
            <div class="pic-section">
                <img src="Images/3080.jpg" alt="">
                <h5>RTX 3080</h5>
            </div>
            <div class="pic-section">
                <img src="Images/basketball.jpg" alt="">
                <h5>Basketball</h5>
            </div>
            <div class="pic-section">
                <img src="Images/xbox.jpg" alt="">
                <h5>Xbox 360</h5>
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

            Copyright aidanspel@hotmail.com. All Rights Reserve.
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