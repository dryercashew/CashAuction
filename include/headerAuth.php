<div id="loadingDiv">
    <div class="loader spinner"></div>
</div>
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
                        <a href="tech.php">Technology</a>
                        <a href="art.php">Art</a>
                        <a href="hobbies.php">Hobbies</a>
                        <a href="tools.php">Tools</a>
                        <a href="cars.php">Cars</a>
                        <a href="garden.php">Gardening</a>
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