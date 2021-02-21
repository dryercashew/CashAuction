<?php
    require_once "php/config.php";
    require_once "php/session.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $con = mysqli_connect('localhost','root','','cashew-auction') or die("Unable to connect");

        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check to see if the username is already taken
        $sql = "SELECT * FROM information WHERE username = '$username'";
        $rs = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($rs, MYSQLI_ASSOC);
        if ($row) {
            die("This username is already taken");
        }

        // Insert information into new row of database
        $sql = "INSERT INTO information (ID, Name, Username, Email, Password) VALUES ('0', '$name', '$username', '$email', '$password')";

        $rs = mysqli_query($con, $sql);
        // Check that the data has been stored in the database
        if ($rs) {
            header('Location: index.php');
        }
        else {
            echo "Information failed to store";
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
                <a href="log_in.php">Log In</a>
                <a href="">Sign Up</a>
            </nav>
        </div>
    </header> 
    <!-- End of Header -->
    <main>
        <section class="padding">
            <div class="container">
                <form id="sign-up" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="sign-up">
                    <label for="name">Name *</label>
                    <input type="text" name="name" id="name">
                    <br>
                    <label for="username">Username *</label>
                    <input type="text" name="username" id="username">
                    <br>
                    <label for="email">Email *</label>
                    <input type="email" name="email" id="email">
                    <br>
                    <label for="password">Password *</label>
                    <input type="text" name="password" id="password">
                    <br>
                    <!-- <label for="confirm-password">Confirm Password *</label>
                    <input type="text" name="confirm-password" id="confirm-password"> -->
                    <input type="submit" value="Sign Up" id="Submit" class="button">
                </form>
            </div>
        </section>
    </main>
    <div class="clearfix"></div>
    <section class="padding contacts">
        <div class="container box">
            <i class="fas fa-email"></i>
            <h4>Email us at aidanspel@hotmail.com</h4>
        </div>
        <div class="container box">
            <i class="fa fa-facebook"></i>
            <h4>Follow us on Facebook</h4>
        </div>
        <div class="container box">
            <i class="fa fa-instagram"></i>
            <h4>Follow us on Instagram</h4>
        </div>
    </section>
    <footer>
        <div class="container padding">
            <i class="far fa-copyright"></i>

            Copyright aidanspel@hotmail.com. All Rights Reserve.
        </div>
    </footer>
</body>
</html>