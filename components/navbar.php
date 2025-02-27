<?php
if(!isset($_SESSION['logedin']) || $_SESSION['logedin'] != true){
    $login = false;
}
else{
    $login = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="/my_app/sass/navbar.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="left">
                <div class="img_area">
                    <img src="/my_app/images/hotel_logo.jpeg" alt="logo">
                </div>
            </div>

            <div class="right">
                <div class="phone_content">
                    <div class="icon_area">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="number_content">
                        <span>Call us for help!</span>
                        <div class="number">
                            97814-58647
                        </div>
                    </div>
                </div>

                <div class="location_content">
                    <div class="icon_area">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div class="address">
                        BXXIX-2254/1, Kanganwal Road, P. O.<br>
                        Jugiana, Ludhiana, Punjab, India - 141120
                    </div>
                </div>

                <div class="mail">
                <div class="cart_icon">
                        <a href="checkout.php">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badgedanger">2</span>
                        </a>
                    </div>
                    <div class="buttons">
                        <?php
                        if(!$login):?>

                        <button type="button" onclick="window.location.href='/my_app/auth/signup.php'">Signup</button>
                        <button type="button" onclick="window.location.href='/my_app/auth/login.php'">Login</button>

                        <?php else:?>
                        <button type="button" onclick="window.location.href='/my_app/auth/logout.php'">Logout</button>
                        <?php endif; ?>

                    </div>
                    
                </div>

            </div>
        </div>

    </section>
    <nav class="header_navbar">
        <div class="container">
            <ul>
                <li><a href="/my_app/index.php">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="/my_app/productlist.php">Products</a></li>
                <li><a href="/my_app/auth/contactus.php">Contact us</a></li>
            </ul>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>