<?php
    require_once "php/config.php";
    require_once "php/session.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $con = new mysqli('localhost','root','','cashew-auction') or die("Unable to connect");
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Get password from database for given username
        $sql = "SELECT password FROM information WHERE username = '$username'";

        $n = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($n, MYSQLI_ASSOC);
        // Check if user submitted password is the same as database password
        if (!$row) {
            echo "No Username with this name";
        }
        else if ($password == $row['password']) {
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
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">LOGO</div>
            <nav>
                <a href="index.php">Home</a>
                <a href="">Products</a>
                <a href="">Cats</a>
                <a href="">Log In</a>
                <a href="connect.php">Sign Up</a>
            </nav>
        </div>
    </header> 
    <!-- End of Header -->
    <main>
        <section class="padding">
            <div class="container"> 
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="sign-up">
                    <label for="username">Username *</label>
                    <input type="text" name="username" id="username" required>
                    <br>
                    <label for="password">Password *</label>
                    <input type="text" name="password" id="password" required>
                    <br>
                    <input type="submit" value="Submit" id="Submit" class="button">
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
</body>
</html>