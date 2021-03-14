<?php
    require_once "php/session.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $val = $_POST['item'];
        include "php/getItem.php";
        include "php/getSeller.php";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashew Auctions</title>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/main.css?v=11">
</head>
    <body?>
        <?php include("include/headerAuth.php") ?>
        <main>
            <section class="bid-sec container">
                <div class="title">
                        <h5>ONLINE AUCTION - <?php echo $name ?></h5>
                </div>
                <div class="selling-sec">
                    <div class="item-pic">
                        <img src="<?php echo $image ?>" alt="">
                        
                    </div>
                    <div class="item-info">
                        <h5><?php echo $addr ?></h5>
                        <h5><?php echo $city.', '.$state.', '.$zip ?></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa quis in quibusdam repellat fugit natus, est debitis quam sint?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quidem commodi facere velit modi obcaecati eius dolorum, distinctio quo cumque?</p>
                        <div class="contact-seller">
                            <h5>Contact Seller</h5>
                            <p>Email: <?php echo $email ?></p>
                            <p>Phone Number: <?php echo $phone ?></p>
                        </div>
                        <form action="currentBids.php" method="POST" class="mybids">
                            <label for="bid" class="bid" >Enter your bid:</label>
                            <input type="number" name="bid" id="bid" placeholder="$">
                            <input type="number" name="curBid" value="<?php echo $price ?>" hidden="TRUE">
                            <input type="number" name="val" value="<?php echo $val ?>" hidden="TRUE">
                            <button type="submit" value="<?php echo $val ?>" id="Submit" class="bid-submit">Place Bid</button>
                        </form>
                        <div class="feedback"></div>
                    </div>
                    <div class="bid-button">
                        <div class="item-price">
                            <h5 style="text-align:center">Product Information</h5>
                            <h6>Product ID: <?php echo $prod_id ?></h6>
                            <hr>
                            <h6>Current Price: <?php echo "$".$price ?></h6>
                            <hr>
                            <h6>Number of Bids: <?php echo $bids ?></h6>
                            <hr>
                            <h6>Seller: <?php echo $fname." ".$lname ?></h6>
                            <hr>
                            <h6>Ends on: <?php echo $time ?></h6>
                        </div>  
                    </div>
                </div>
            </section>
        </main>
        <?php include("include/footer.php") ?>

        <script src="JS/checkBid.js"></script>
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="JS/pageloader.js"></script>
    </body>
</html> 