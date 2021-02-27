<?php
    require_once "php/config.php";
    require_once "php/session.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $con = mysqli_connect('localhost','root','','cashew-auction') or die("Unable to connect");

        $id = rand(0,1000000);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];
        $state = $_POST['state'];
        $city = $_POST['city'];

        // Check to see if the username is already taken
        $sql = "SELECT * FROM information WHERE username = '$username'";
        $rs = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($rs, MYSQLI_ASSOC);
        if ($row) {
            die("This username is already taken");
        }

        // Insert information into new row of database
        $sql = "INSERT INTO `information`(`ID`, `fname`, `lname`, `username`, `email`, `pass`, `addr`, `zip`, `phone`, `state`, `city`) VALUES ('$id', '$fname', '$lname', '$username', '$email', '$password', '$address', '$zip', '$phone', '$state', '$city')";

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
    <!-- <PHP> <link rel="stylesheet" type="text/css" href="css/main.css"></head> <PHP> -->
    <link rel="stylesheet" type="text/css" href="css/main.css?v=4">
</head>
<body>
    <header>
        <div class="container header">
            <img src="Images/cashew.png" alt="">
            <nav>
                <a href="index.php">Home</a>
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
                    <div class="input-sec">
                        <h5>Contact Info</h5>
                        <hr>
                        <div class="inputs">
                            <div class="form-input">
                                <label for="fname">First Name *</label>
                                <input type="text" name="fname" id="fname" placeholder="First Name" required>
                            </div>
                            <div class="form-input">
                                <label for="lname">Last Name *</label>
                                <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                            </div>
                            <div class="form-input">
                                <label for="username">Username *</label>
                                <input type="text" name="username" id="username" placeholder="Username" required>
                            </div>
                            <div class="form-input">
                                <label for="email">Email *</label>
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-input">
                                <label for="password">Password *</label>
                                <input type="password" name="password" id="password" placeholder="Password" required autocomplete>
                            </div>
                            <div class="form-input">
                                <label for="conPass">Confirm Password *</label>
                                <input type="password" name="conPass" id="conPass" placeholder="Confirm Password" required autocomplete>
                            </div>
                            <div class="form-input">
                                <label for="address">Street Address *</label>
                                <input type="text" name="address" id="address" placeholder="Address" required>
                            </div>
                            <div class="form-input">
                                <label for="zip">Zip *</label>
                                <input type="text" name="zip" id="zip" placeholder="Zip" required>
                            </div>
                            <div class="form-input">
                                <label for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" placeholder="425-415-6782" required>
                            </div>
                            <div class="form-input">
                                <label for="confirm-password">State *</label>
                                <select name="state" id="state" required>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">Dist of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                    
                                </select>
                                
                            </div>
                            <div class="form-input">
                                <label for="city">City *</label>
                                <input type="text" name="city" id="city" placeholder="City" required>
                            </div>
                        </div>
                    </div>
                    
                    <!-- End of all the inputs -->
                    <div class="notif-sec">
                        <h5>Notification Preferences</h5>
                        <hr>
                        <div class="notifs">
                            <input type="checkbox" id="bids" name="bids" value="Bid">
                            <label for="vehicle1"> Receiving Bid Notifications</label><br>
                            <input type="checkbox" id="offers" name="offers" value="Offers">
                            <label for="vehicle2"> Receive Special Offers</label><br>
                            <input type="checkbox" id="shipping" name="shipping" value="Shipping">
                            <label for="vehicle3">Receive Shipping Updates</label><br>
                        </div>
                    </div>
                    <!-- End of the notication -->
                    <input type="submit" value="Sign Up" id="Submit" class="button">
                    <div class="feedback"></div>
                </form>
                <!-- End of form -->
            </div>
            <!-- End of container -->
        </section>
        <!-- End of form section -->
        
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

            Copyright aidanspel@hotmail.com. All Rights Reserve.
        </div>
    </footer>
    <script src="JS/form.js"></script>
</body>
</html>