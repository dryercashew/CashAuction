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