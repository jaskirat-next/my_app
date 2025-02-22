<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="../sass/navbar.scss">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="left">
                <div class="img_area">
                    <img src="../images/hotel_logo.jpeg" alt="logo">
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
                    <div class="buttons">
                        <button type="button" onclick="window.location.href='./auth/signup.php'">Signup</button>
                        <button type="button" onclick="window.location.href='./auth/login.php'">Login</button>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <nav class="header_navbar">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>