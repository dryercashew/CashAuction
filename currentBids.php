<?php 
    require_once "php/session.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $val = $_POST['val'];
        $bid = $_POST['bid'];

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
    <link rel="stylesheet" type="text/css" href="css/main.css?v=7">
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">
                <img src="Images/cashew.png" alt="">
            </div>
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
    <main class="newMainBid">
        <h2>Thank you for bidding on <?php echo $name ?></h2>
        <img src="<?php echo $image ?>" alt="">
        <p>Please periodically check your email for updates</p>
    </main>
</body>
</html> 