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
    <link rel="stylesheet" href="css/main.css?v=1">
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">LOGO</div>
            <nav>
                <a href="">Home</a>
                <a href="">Products</a>
                <a href="">Cats</a>
                <a href="log_in.php">Current Bids</a>
                <!-- <a href="connect.php">Sign Up</a> -->
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
        <div class="banner-text">
            <div class="banner-text-items">
                <h2>Cashew Auctions</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eos quaerat quod nobis? Dolorum error amet dicta corporis? Numquam nihil fugiat delectus minus hic quisquam perferendis error aliquid, nulla et.</p>
            </div>
        </div>
    </div> 
    <!-- banner -->
    <main class="padding">
        <div class="container main-grid">
            <div class="sideleft">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi delectus deserunt, molestiae placeat soluta et rem deleniti reprehenderit ipsa aliquid officia, est dolore maxime corrupti hic magnam quae culpa modi!
                </p>
            </div>
            <div class=" container sideright">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi delectus deserunt, molestiae placeat soluta et rem deleniti reprehenderit ipsa aliquid officia, est dolore maxime corrupti hic magnam quae culpa modi!
                </p>
            </div>
        </div>
        <!-- Pictures of products -->
        <div class="container padding shop-pics">
            <div class="pic-section">
                <img src="Images/banana.jpg" alt="">
                <h5>$1.99</h5>
            </div>
            <div class="pic-section">
                <img src="Images/keyboard.jpg" alt="">
                <h5>$39.99</h5>
            </div>
            <div class="pic-section">
                <img src="Images/chess.jpg" alt="">
                <h5>$45.99</h5>
            </div>
            <div class="pic-section">
                <img src="Images/3080.jpg" alt="">
                <h5>$699.99</h5>
            </div>
            <div class="pic-section">
                <img src="Images/basketball.jpg" alt="">
                <h5>$22.99</h5>
            </div>
            <div class="pic-section">
                <img src="Images/xbox.jpg" alt="">
                <h5>$149.99</h5>
            </div>
        </div>
        <!-- End of pictures -->
    </main>
    <div class="clearfix"></div>
    <section class="padding contacts">
        <div class="container box">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <h4>Email us at aidanspel@hotmail.com</h4>
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
</body>
</html>