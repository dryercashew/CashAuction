<?php
    // echo "Monkey boys";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // echo "Gangnam";
        $val = $_POST['item'];
        include "php/getItem.php";
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
    <link rel="stylesheet" type="text/css" href="css/main.css?v=5">
</head>
    <body?>
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
                                <a href="Categories/tech.php">Technology</a>
                                <a href="#">Art</a>
                                <a href="#">Hobbies</a>
                                <a href="#">Tools</a>
                                <a href="#">Cars</a>
                                <a href="#">Gardening</a>
                            </div>
                        </div>
                    </div>
                    <a href="">Cats</a>
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
        <main>
            <section class="bid-sec container">
                <div class="title">
                    <h5>ONLINE AUCTION - <?php echo $name ?></h5>
                </div>
                <div class="selling-sec">
                    <div class="item-pic">
                        <img src="<?php echo $image ?>" alt="">
                        <h6 style="text-align:center">Contact</h6>
                        
                    </div>
                    <div class="item-info">
                        <h5>Young money</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa quis in quibusdam repellat fugit natus, est debitis quam sint?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quidem commodi facere velit modi obcaecati eius dolorum, distinctio quo cumque?</p>
                    </div>
                    <div class="bid-button">
                        <button class="button">Submit Bid</button>
                        <br>
                        <br>
                        <h6 >Current Price: <?php echo "$".$price ?></h6>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html> 