<?php
    require_once "php/config.php";
    require_once "php/session.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $con = mysqli_connect('localhost','root','','cashew-auction') or die("Unable to connect");

        $prod_id = rand(0, 10000000);
        $prod_name = $_POST['prod_name'];
        // $cur_bids = $_POST['cur_bids'];
        $seller = $_SESSION['userid'];
        $price = $_POST['price'];
        $image = $_FILES["fileupload"]["name"];
        $tempname = $_FILES["fileupload"]["tmp_name"];
            $folder = "Images/"."Pics/".$image; 
        $expire_date = $_POST['expire_date'];
        $prod_category = $_POST['prod_category'];

        // Check to see if the username is already taken
        $sql = "SELECT * FROM products WHERE prod_id = '$prod_id'";
        $rs = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($rs, MYSQLI_ASSOC);
        if ($row) {
            die("This id is already taken");
        }

        // Insert information into new row of database
        $sql = "INSERT INTO products (prod_id, prod_name, cur_bids, seller, price, image, expire_date, prod_category) VALUES ('$prod_id', '$prod_name', '0', '$seller', '$price', '$image', '$expire_date', '$prod_category')";

        $rs = mysqli_query($con, $sql);
        // Check that the data has been stored in the database
        if ($rs) {
            echo "information was stored";
        }
        else {
            echo "Information failed to store";
        }
        if (move_uploaded_file($tempname, $folder)) {
            echo "files were moved in";
        }
        else {
            echo "Files failed to move";
        }
        mysqli_close($con);
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
    <link rel="stylesheet" type="text/css" href="css/main.css?v=3">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
</head>
    <body>
        <header>
            <div class="container header">
                <div class="logo">LOGO</div>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="products.php">Products</a>
                    <a href="">Cats</a>
                    <!-- <a href="log_in.php">Log In</a>
                    <a href="connect.php">Sign Up</a> -->
                </nav>
                <!-- End of nav -->
                <div class="account">
                    <a href=""><img src="Images/user.svg" alt=""></a>
                    <p class="intro">
                        <script type="text/javascript">
                            const name = '<?php echo $_SESSION['userid'] ?>';
                        </script>
                    </p>
                </div>
            </div>
        </header> 
        <!-- End of Header -->
        <main>
            <section>
                <div class="container padding">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" id="sign-up">
                        <div class="input-sec">
                            <h5>Product Information</h5>
                            <hr>
                            <div class="inputs">
                                <div class="form-input">
                                    <label for="prod_name">Name of Product: *</label>
                                    <input type="text" name="prod_name" id="prod_name">
                                </div>
                                <!-- <div class="form-input">
                                    <label for="seller">Name of Seller *</label>
                                    <input type="text" name="seller" id="seller">
                                </div> -->
                                <div class="form-input">
                                    <input type="file" name="fileupload" value="fileupload" id="fileupload"> 
                                    <label for="fileupload"> Select a file to upload</label>
                                </div>
                                <div class="form-input">
                                    <label for="price">Starting Price: *</label>
                                    <input type="text" name="price" id="price">
                                </div>
                                <div class="form-input">
                                    <label for="expire_date">Expiring Time of Product Sale *</label>
                                    <input type="date" name="expire_date" value="expire_date" id="expire_date">
                                </div>
                                <div class="form-input">
                                    <label for="prod_category">Category *</label>
                                    <select name="prod_category" id="prod_category">
                                        <option value="tech">Technology</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="notif-sec">
                            <h5>Notification Preferences</h5>
                            <hr>
                            <div class="notifs">
                                <input type="checkbox" id="bids" name="bids" value="Bid">
                                <label for="vehicle1"> Receiving Bid Updates</label><br>
                                <input type="checkbox" id="offers" name="offers" value="Offers">
                                <label for="vehicle2"> Receive Special Offers</label><br>
                                <input type="checkbox" id="shipping" name="shipping" value="Shipping">
                                <label for="vehicle3">Receive Shipping Updates</label><br>
                            </div>
                        </div>
                        <input type="submit" value="Sign Up" id="Submit" class="button">
                    </form>
                </div>
            </section>
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
            <i class="far fa-copyright"></i>

            Copyright aidanspel@hotmail.com. All Rights Reserved.
        </div>
    </footer>
    </body>
</html>