<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            $companyName = "Blue Sphire";
            $seperator = " - ";
            if($_SERVER["REQUEST_URI"] != "/projects/bluesphire/"){
                echo $companyName.$seperator.$pageTitle;
            }else{
                echo $companyName;
            }
        ?>
    </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/main.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/header.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/index.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/collection.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/product.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/checkout.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/model.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/cart.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/sidebar.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/footer.css">
    <link rel="stylesheet" href="http://localhost/projects/bluesphire/css/hamburger.css">

    <!-- <link rel="stylesheet" href="https://bluesphire.net/css/main.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/header.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/index.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/collection.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/product.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/checkout.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/model.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/cart.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/sidebar.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/footer.css">
    <link rel="stylesheet" href="https://bluesphire.net/css/hamburger.css"> -->
    <!-- Stylesheet -->

    <!-- Slider -->
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/revslider.css">

    <!-- <link rel="stylesheet" href="https://bluesphire.net/css/slider.css">
    <link rel="stylesheet" href="https://bluesphire.net/revslider.css"> -->
    <!-- Slider -->

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="./css/owlCarousel.css">

    <link rel="stylesheet" href="https://bluesphire.net/css/owlCarousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Owl Carousel -->
</head>
<body>
    <div id="container">    
        <div id="header">
            <div id="tagline">
                <p>50+ Valentine's Day 2022 Food Freebies, Specials and Deals</p>
            </div>
            <div id="upperNav">
                <nav>
                    <ul>
                        <li style="border-right:none;">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <p>Shopping Cart</p>
                        </li>
                        <li onclick="modelDisplayShow()"><i class="fa-regular fa-user"></i> My Account</li>
                    </ul>
                </nav>
            </div>
            <div id="search">
                <div class="logo">
                    <a href="http://localhost/projects/bluesphire/">
                    <!-- <a href="https://bluesphire.net/"> -->
                        <img src="http://localhost/projects/bluesphire/img/BlueSphireLogo.png" alt="">
                        <!-- <img src="https://bluesphire.net/img/BlueSphireLogo.png" alt=""> -->
                        <!-- <p>Blue <span style="color:#17BAC7;">Sphire</span></p> -->
                    </a>
                </div>
                <div class="searchBar">
                    <div class="bar">
                        <input type="text" name="search" id="searchBar" placeholder="Search Something">
                        <div class="searchIcon">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
                <div class="shoppingCart">
                    <a href="https://wa.me/+923072781294" target="_blank">
                        <i class="fa-regular fa-comments"></i>
                        <p>Chat Now</p>
                    </a>
                </div>
            </div>
            <div id="mainNav">
                <nav>
                    <ul>
                        <a href="http://localhost/projects/bluesphire/">
                            <li style="padding-left:0">Home</li>
                        </a>
                        <!-- <a href="http://localhost/projects/bluesphire/">
                            <li style="padding-left:0">Home</li>
                        </a> -->
                        <li>Categories <i class="fa-solid fa-angle-down"></i>
                            <div class="subMenu">
                                <ul style="margin-top:0">
                                    <li>Women Clothings</li>
                                    <li>Mens Clothings</li>
                                    <li>Cell Phones & Accessories</li>
                                    <li>Computer, Offices, Security</li>
                                    <li>Consumer Electronics</li>
                                    <li>Jewelry & Watches</li>
                                    <li>Home & Garden, Appliance</li>
                                    <li>Bags & Shoes</li>
                                    <li>Toys, Kids & Baby</li>
                                    <li>Sports & Outdoors</li>
                                    <li>Health & Beauty, Hair</li>
                                    <li>Automobiles & Motorcycles</li>
                                </ul>
                            </div>
                        </li>
                        <li>Collections <i class="fa-solid fa-angle-down"></i>
                            <div class="subMenu">
                                <h4>COMPANIES</h4>
                                <ul>
                                    <a href="http://localhost/projects/bluesphire/collection/"><li>Canon</li></a>
                                    <!-- <a href="https://bluesphire.net/collection/"><li>Canon</li></a> -->
                                    <li>Adidas</li>
                                    <li>Nike</li>
                                </ul>
                            </div>
                        </li>
                        <li>New Arrivals <i class="fa-solid fa-angle-down"></i></li>
                        <li>Special Deals <i class="fa-solid fa-angle-down"></i></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- <div id="cartBackgorund">
            <div id="cart">
                <h4>Cart</h4>
                <h5>is empty</h5>
            </div>
        </div> -->
        <div id="modelBackground">
            <div id="model">
                <button class="closeModel" onclick="modelDisplayHide()"><i class="fa-solid fa-xmark"></i></button>
                <div class="signUp">
                    <h4>Sign Up</h4>
                    <form method="POST">
                        <input type="text" name="signUpFirstName" id="signUpFirstName" placeholder="First Name"><br>
                        <input type="text" name="signUpLastName" id="signUpLastName" placeholder="Last Name"><br>
                        <input type="email" name="signUpEmail" id="signUpEmail" placeholder="Email"><br>
                         <input type="password" name="signUpPassword" id="signUpPassword" placeholder="Password"><br>

                         <input type="submit" value="Proceed" name="signup">
                         <input type="submit" value="Login" name="login"  onclick="loginDisplay()">

                    </form>
                </div>
                <div class="login">
                    <h4>Login</h4>
                    <form method="POST">
                        <input type="text" name="loginEmail" id="loginEmail" placeholder="Email"><br>
                        <input type="password" name="loginPassword" id="loginPassword" placeholder="Password"><br>
                        <p class="forgetPassword">Forget Password?</p>
                        
                        <input type="submit" value="Proceed" name="login">
                        <input type="submit" value="Sign Up" onclick="signUpDisplay()">
                    </form>
                </div>
            </div>
        </div>
        <input type="checkbox" id="toggleHamburger">
        <label for="toggleHamburger">
            <div id="hamburger"></div>
            <div id="hamburgerMenu">
                <nav>
                    <ul>
                        <a href="http://localhost/projects/bluesphire/">
                            <li style="padding-left:0">Home</li>
                        </a>
                        <!-- <a href="http://localhost/projects/bluesphire/">
                            <li style="padding-left:0">Home</li>
                        </a> -->
                        <li>Categories <i class="fa-solid fa-angle-down"></i>
                            <div class="subMenu">
                                <ul style="margin-top:0">
                                    <li>Women Clothings</li>
                                    <li>Mens Clothings</li>
                                    <li>Cell Phones & Accessories</li>
                                    <li>Computer, Offices, Security</li>
                                    <li>Consumer Electronics</li>
                                    <li>Jewelry & Watches</li>
                                    <li>Home & Garden, Appliance</li>
                                    <li>Bags & Shoes</li>
                                    <li>Toys, Kids & Baby</li>
                                    <li>Sports & Outdoors</li>
                                    <li>Health & Beauty, Hair</li>
                                    <li>Automobiles & Motorcycles</li>
                                </ul>
                            </div>
                        </li>
                        <li>Collections <i class="fa-solid fa-angle-down"></i>
                            <div class="subMenu">
                                <h4>COMPANIES</h4>
                                <ul>
                                    <a href="http://localhost/projects/bluesphire/collection/"><li>Canon</li></a>
                                    <!-- <a href="https://bluesphire.net/collection/"><li>Canon</li></a> -->
                                    <li>Adidas</li>
                                    <li>Nike</li>
                                </ul>
                            </div>
                        </li>
                        <li>New Arrivals <i class="fa-solid fa-angle-down"></i></li>
                        <li>Special Deals <i class="fa-solid fa-angle-down"></i></li>
                    </ul>
                </nav>
            </div>
        </label>
        <?php
            if(isset($_POST["signup"])) {
                $fname = $_POST["signUpFirstName"];
                $lname = $_POST["signUpLastName"];

                $name = $fname.$lname;
                $email = $_POST["signUpEmail"];
                $password = $_POST["signUpPassword"];
                
                $database = new Database();
                $db = $database->connect();

                $query = "SELECT COUNT(*) FROM `users` WHERE name = '$name'";
                $res = $db->prepare($query);
                $row = $res->fetch(PDO::FETCH_ASSOC);
                if($row["COUNT(*)"] == false){
                    $query = "CREATE TABLE $name (
                                id int AUTO_INCREMENT,
                                productId varchar(255),
                                PRIMARY KEY (id)
                            )";
                    $res = $db->prepare($query);
                    $res->execute();
                    $query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";
                    $res = $db->prepare($query);
                    $res->execute();
                }

            }
            if(isset($_POST["login"])) {
                $fname = $_POST["signUpFirstName"];
                $lname = $_POST["signUpLastName"];
                $name = $fname.$lname;
                $email = $_POST["signUpEmail"];
                $password = $_POST["signUpPassword"];
                
                $database = new Database();
                $db = $database->connect();

                $query = "SELECT COUNT(*) FROM `users` WHERE name = '$name'";
                $res = $db->prepare($query);
                $row = $res->fetch(PDO::FETCH_ASSOC);
                if($row["COUNT(*)"] == false){
                    $query = "CREATE TABLE $name (
                                id int AUTO_INCREMENT,
                                productId varchar(255),
                                PRIMARY KEY (id)
                            )";
                    $res = $db->prepare($query);
                    $res->execute();
                    // $query = null;
                    // $query = "INSERT INTO `users`"
                }

            }
            error_reporting(0);
        ?>