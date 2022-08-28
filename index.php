<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOODIVE</title>
    <link rel="shortcut icon" href="/Project_demo/Image/Favicon/Favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        <?php
        require "CSS/OTP.css";
        ?>
    </style>

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:whitesmoke;">
        <div class="container">
            <a class="navbar-brand" href="/Project_demo/">FOODIVE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Become Partner
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/Project_demo/Restaurant/index.php">Add Restaurant</a></li>
                            <li><a class="dropdown-item" href="/Project_demo/Delivery/index.php">Become Delivery Staff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Signup">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CAROUSEL -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/Project_demo/Image/Img/Index_Slide1.jpg" class="d-block w-100" alt="Slide 1" style="height:70vh;opacity: 0.9;">
                <div class="carousel-caption d-none d-md-block v-center mb-5">
                    <h5 class="mb-5 display-3">First slide label</h5>
                    <p class="mb-5 display-6"><small>Some representative placeholder content for the first slide.</small></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/Project_demo/Image/Img/Index_Slide2.jpg" class="d-block w-100" alt="Slide 2" style="height:70vh;opacity: 0.9;">
                <div class="carousel-caption d-none d-md-block v-center mb-5">
                    <h5 class="mb-5 display-3">Second slide label</h5>
                    <p class="mb-5 display-6"><small>Some representative placeholder content for the first slide.</small></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="/Project_demo/Image/Img/Index_Slide3.jpg" class="d-block w-100" alt="Slide 3" style="height:70vh; opacity: 0.9;">
                <div class="carousel-caption d-none d-md-block v-center mb-5">
                    <h5 class="mb-5 display-3">Third slide label</h5>
                    <p class="mb-5 display-6"><small>Some representative placeholder content for the first slide.</small></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="px-4 text-center" id="Restaurant">
        <h1 class="display-5 fw-bold my-5">Popular Restaurant Partners</h1>
        <div class="col-lg-6 mx-auto my-5">
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque commodi quod dolores incidunt enim cum.</p>
        </div>
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3 my-5">
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Login" class="text-decoration-none">
                        <div class="p">
                            <img src="/Project_demo/Image/Img/Lapinoz.avif" class="rounded-circle shadow" height=120px width=120px alt="La Pino'z Pizza">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Login" class="text-decoration-none">
                        <div class="p  ">
                            <img src="/Project_demo/Image/Img/McD.avif" class="rounded-circle shadow" height=120px width=120px alt="McDonald's">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Login" class="text-decoration-none">
                        <div class="p  ">
                            <img src="/Project_demo/Image/Img/Subway.avif" class="rounded-circle shadow" height=120px width=120px alt="Subway">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Login" class="text-decoration-none">
                        <div class="p  ">
                            <img src="/Project_demo/Image/Img/BurgerKing.avif" class="rounded-circle shadow" height=120px width=120px alt="Burger king">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Login" class="text-decoration-none">
                        <div class="p">
                            <img src="/Project_demo/Image/Img/Dominoz.avif" class="rounded-circle shadow" height=120px width=120px alt="Domino's Pizza">
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Login" class="text-decoration-none">
                        <div>
                            <p class="h6 py-5">& Much More</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="text-center" id="Menu">
        <h1 class="display-5 fw-bold my-5">Food Collections</h1>
        <div class="col-lg-6 mx-auto my-5">
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, aspernatur. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="container ">

            <div class="row g-2 mt-5">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card shadow mb-5 bg-white rounded">
                            <div class="card-body p-0">
                                <img src="/Project_demo/Image/Img/Index_Non-Veg.jpg" width="70" height="300" class="card-img-top mb-2" alt="Delivery_icon">
                                <div class="my-4">
                                    <h5 class="card-title text-center">Non Veg</h5>
                                    <p class="card-text text-center">20 places</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow mb-5 bg-white rounded">
                            <div class="card-body p-0">
                                <img src="/Project_demo/Image/Img/Index_Veg.jpg" width="70" height="300" class="card-img-top mb-2" alt="Delivery_icon">
                                <div class="my-4">
                                    <h5 class="card-title text-center">Veg</h5>
                                    <p class="card-text text-center">50 places</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow mb-5 bg-white rounded">
                            <div class="card-body p-0">
                                <img src="/Project_demo/Image/Img/Index_Drinks.jpg" width="70" height="300" class="card-img-top mb-2" alt="Delivery_icon">
                                <div class="my-4">
                                    <h5 class="card-title text-center">Drinks</h5>
                                    <p class="card-text text-center">30 places</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow mb-5 bg-white rounded">
                            <div class="card-body p-0">
                                <img src="/Project_demo/Image/Img/Index_Trending.jpg" width="70" height="300" class="card-img-top mb-2" alt="Delivery_icon">
                                <div class="my-4">
                                    <h5 class="card-title text-center">Snacks</h5>
                                    <p class="card-text text-center">50 places</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="container px-4 py-5 text-center " id="Works">
        <h1 class="display-5 fw-bold my-5">How FOODIVE works?</h1>
        <div class="col-lg-6 mx-auto my-5">
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, hic?</p>
        </div>

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square rounded text-dark flex-shrink-0 me-3">
                    <img src="/Project_demo/Image/Icon/Cart.png" height="80" width="80" class="bi" alt="Restro-icon">
                </div>
                <div class="mb-4">
                    <h2>Step 1</h2>
                    <h6>Add your food</h6>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square rounded text-dark flex-shrink-0 me-3">
                    <img src="/Project_demo/Image/Icon/Payment.png" height="80" width="80" class="bi" alt="Restro-icon">
                </div>
                <div class="mb-4">
                    <h2>Step 2</h2>
                    <h6>Make payment</h6>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square rounded text-dark flex-shrink-0 me-3">
                    <img src="/Project_demo/Image/Icon/Delivery.png" height="80" width="80" class="bi" alt="Delivery-icon">
                </div>
                <div class="mb-4">
                    <h2>Step 3</h2>
                    <h6>Delivered at home</h6>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="px-4 text-center" id="Locations">
        <h1 class="display-5 fw-bold my-5">Popular localities in and around SURAT</h1>
        <div class="col-lg-6 mx-auto my-5">
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="container">
            <div class="container ">
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3 ">
                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Vesu</h5>
                            <p><small>400 Places</small></p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Piplod</h5>
                            <p><small>200 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Adajan</h5>
                            <p><small>350 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>City Light</h5>
                            <p><small>140 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Athwa</h5>
                            <p><small>170 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Katargam</h5>
                            <p><small>100 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Nana Varachha</h5>
                            <p><small>100 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Pal Gam</h5>
                            <p><small>120 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Hirabaug</h5>
                            <p><small>10 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Sarthana</h5>
                            <p><small>39 Places</small></p>
                        </div>
                    </div>


                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Mota Varachha</h5>
                            <p><small>197 Places</small></p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="pt-2 border rounded shadow-sm bg-light">
                            <h5>Amroli</h5>
                            <p><small>70 Places</small></p>
                        </div>
                    </div>

                </div>
                <hr>
            </div>
        </div>
    </div>
    <!-- SIGN UP -->
    <?php
    require "C:/xampp/htdocs/Project_demo/Customer/Sign_up.php";
    ?>
    <!-- LOGIN -->
    <?php
    require "C:/xampp/htdocs/Project_demo/Customer/Login.php";
    ?>
    <!-- OTP -->
    <?php
    require "C:/xampp/htdocs/Project_demo/OTP.php";
    ?>
    <!-- FORGOT PASSWORD -->
    <?php
    require "C:/xampp/htdocs/Project_demo/Forgot_password.php";
    ?>
    <!-- RESET PASSWORD -->
    <?php
    require "C:/xampp/htdocs/Project_demo/ResetPass.php";
    ?>
    <!-- FOOTER -->
    <?php
    require "C:/xampp/htdocs/Project_demo/Footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>