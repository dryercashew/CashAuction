<?php
    require_once "php/config.php";
    require_once "php/session.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $con = new mysqli('localhost','root','','cashew-auction') or die("Unable to connect");
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Get password from database for given username
        $sql = "SELECT pass FROM information WHERE username = '$username'";

        $n = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($n, MYSQLI_ASSOC);
        // Check if user submitted password is the same as database password
        if (!$row) {
            echo "No Username with this name";
        }
        else if ($password == $row['pass']) {
            $_SESSION["userid"] = $username;
            header('Location: index2.php');
        }
        else {
            echo "Wrong";
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
    <!-- <PHP> <link rel="stylesheet" type="text/css" href="css/main.css"></head> <PHP> -->
    <link rel="stylesheet" type="text/css" href="css/main.css?v=4">
</head>
<body>
    <?php include("include/headerNonAuth.php") ?>
    <!-- End of Header -->
    <main>
        <section class="padding">
            <div class="container"> 
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="log-in">
                    <h5>Login</h5>
                    <hr>
                    <!-- <label for="username">Username *</label> -->
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <br>
                    <!-- <label for="password">Password *</label> -->
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <br>
                    
                    <input type="submit" value="Submit" id="Submit" class="button">
                    <br>
                    <br>
                    <a href="#">Forgot Password?</a>
                    <br>
                    
                </form>
            </div>
        </section>
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

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="JS/pageloader.js"></script>

</body>
</html>