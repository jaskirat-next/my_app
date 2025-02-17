<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to our hotel. We provide the best services for your stay.">
    <title>Hotel Website</title>
    <link rel="stylesheet" href="styles.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="left">
                <div class="img_area">
                    <img src="./images/hotel_logo.jpeg" alt="logo">
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
                    <div class="icon_area">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="mail_content">
                        zjaskiratsingh@gmail.com
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

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./images/machine1.jpg" alt="Slide 1"></div>
            <div class="swiper-slide"><img src="./images/machine2.jpg" alt="Slide 1"></div>
            <div class="swiper-slide"><img src="./images/machine3.jpg" alt="Slide 1"></div>
        </div>
        <!-- Navigation buttons -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper', {
            loop: true,
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

    <div class="cards">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="card" style="width: 18rem;">
                        <div class="img_area">
                            <img src="./images/ironman.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add cart</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="card" style="width: 18rem;">
                        <div class="img_area">
                            <img src="./images/ironman.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add cart</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="card" style="width: 18rem;">
                        <div class="img_area">
                            <img src="./images/ironman.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add cart</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="card" style="width: 18rem;">
                        <div class="img_area">
                            <img src="./images/ironman.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add cart</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>

    <div class="delivered">
        <h3>EVERY THING DELIVERED AT YOUR DOORSTEP</h3>
        <div class="cards2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="img_area">
                            <img src="./images/Black.png" alt="img">
                        </div>
                        <p>We provide products or services of the highest standard, ensuring exceptional performance,
                            durability, and satisfaction.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="img_area">
                            <img src="./images/Black1.png" alt="img">
                        </div>
                        <p> We cover the cost of shipping for your order, so you don’t have to pay any additional fees
                            for delivery.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="img_area">
                            <img src="./images/Black2.png" alt="img">
                        </div>
                        <p>We take every precaution to ensure your order reaches you safely and in perfect condition.
                            From careful packaging to reliable shipping methods.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contactus">
        <div class="img_area">
            <img src="./images/contact4.jpg" alt="contact_img">
        </div>
        <div class="text">
            <h3>Contact Us</h3>
            <p>Get in touch with us</p>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>