<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FOODIVE | Add a Restaurant</title>
    <link rel="shortcut icon" href="/Project_demo/Image/Favicon/Favicon.png" type="image/x-icon">
</head>

<body>
    <header class="p-3 border-bottom sticky-top bg-light">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/Project_demo/Restaurant/index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">

                    <img class="bi me-2" width="40" height="40" role="img" aria-label="Bootstrap" src="/Project_demo/Image/LOGO/foodive-logos_black.png" alt="FOODIVE">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-Center mb-md-0">
                    <li><a href="#Register" class="nav-link px-2 link-dark">Register</a></li>
                    <li><a href="#Benefits" class="nav-link px-2 link-dark">Benefits</a></li>
                    <li><a href="#HOW" class="nav-link px-2 link-dark">How it works?</a></li>
                    <li><a href="#partner" class="nav-link px-2 link-dark">Our happy partners</a></li>
                </ul>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <label for="User" class="px-2">Username</label>
                        <img src="/Project_demo/Image/Icon/User.png" id="User" alt="User" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <!-- <li><a class="dropdown-item" href="#"></a></li> -->
                        <li><a class="dropdown-item" href="#">My Restaurant</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div>
        <img src="/Project_demo/Image/Img/Add-Restro.jpg" class="img-fluid mh-100 mw-100" alt="Add-Restro" style="width: 100%; height: 585px;">
    </div>
    <!-- REGISTER -->
    <div id="Register">
        <div class="px-4 text-center">
            <img class="d-block mx-auto" src="/Project_demo/Image/LOGO/foodive-logos_black.png" alt="FOODIVE" width="300" height="300">
            <h1 class="display-5 fw-bold mb-3">Register your Restaurant on FOODIVE</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-5">Get more Customers</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center pb-5">
                    <a href="/Project_demo/Restaurant/Restaurant_info.php"><button type="button" class="btn btn-primary btn-lg px-4 gap-3 mb-5">Register your restaurant</button></a>
                </div>
                <hr>
            </div>

        </div>
    </div>
    <!-- BENEFITS -->
    <div id="Benefits" class="pt-3">
        <h1 class="display-5 fw-bold text-center mt-5 pt-5">Benefits of become partner with FOODIVE?</h1>
        <div class="col-lg-6 mx-auto my-5">
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur impedit veritatis voluptas omnis aliquam delectus rem maxime? Culpa fuga, excepturi sapiente tenetur eligendi quis cum enim rerum autem vitae! Repellendus?</p>
        </div>
        <div class="container ">

            <div class="row g-2 mt-5">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <img src="/Project_demo/Image/Icon/Restro.svg" height="70" width="70" class="card-img-top mb-2" alt="Restro_icon">
                                <h5 class="card-title text-center">300+</h5>
                                <p class="card-text text-center">Restaurant Listed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <img src="/Project_demo/Image/Icon/Order.svg" height="70" width="70" class="card-img-top mb-2" alt="Order_icon">
                                <h5 class="card-title text-center">5000+</h5>
                                <p class="card-text text-center">Monthly Orders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <img src="/Project_demo/Image/Icon/Customer.svg" height="70" width="70" class="card-img-top mb-2" alt="Customer_icon">
                                <h5 class="card-title text-center">700+</h5>
                                <p class="card-text text-center">Monthly Customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <img src="/Project_demo/Image/Icon/Delivery.svg" height="70" width="70" class="card-img-top mb-2" alt="Delivery_icon">
                                <h5 class="card-title text-center">300+</h5>
                                <p class="card-text text-center">Delivery Partners.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <!-- HOW IT WORKS -->
    <div class="container px-4 py-5 " id="HOW">
        <h1 class="pb-2 text-center pt-5 pb-3">How it works?</h1>
        <div class="col-lg-6 mx-auto mb-5">
            <p class="lead mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur impedit veritatis voluptas omnis aliquam delectus rem maxime?</p>
        </div>

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <img src="/Project_demo/Image/Icon/Restro.svg" class="bi" alt="Restro-icon">
                </div>
                <div class="mb-4">
                    <h2>Step 1</h2>
                    <h6>Register your restaurant</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, iste.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <img src="/Project_demo/Image/Icon/Order.svg" class="bi" alt="Order-icon">
                </div>
                <div class="mb-4">
                    <h2>Step 2</h2>
                    <h6>Get order online</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, iste.</p>

                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <img src="/Project_demo/Image/Icon/Delivery.svg" class="bi" alt="Delivery-icon">
                </div>
                <div class="mb-4">
                    <h2>Step 3</h2>
                    <h6>Deliver to customer</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, iste.</p>

                </div>
            </div>
        </div>
        <hr>
    </div>
    <!-- OUR  HAPPY PARTNERS -->
    <div class="container marketing" id="partner">
        <h1 class="pt-4 text-center">Our happy Partners</h1>

        <div class="row text-center pt-5">
            <div class="col-lg-4">
                <img src="/Project_demo/Image/Icon/User.png" class="bd-placeholder-img rounded-circle my-3" width="140" height="140" alt="User-icon">
                <h2 class="my-3">Sahil</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum sequi aliquam quo eum, consequatur accusamus et amet in omnis nihil velit laboriosam necessitatibus minus voluptates earum fuga praesentium laudantium architecto.</p>
            </div>
            <div class="col-lg-4">
                <img src="/Project_demo/Image/Icon/User.png" class="bd-placeholder-img rounded-circle my-3" width="140" height="140" alt="User-icon">
                <h2 class="my-3">Ayush</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum sequi aliquam quo eum, consequatur accusamus et amet in omnis nihil velit laboriosam necessitatibus minus voluptates earum fuga praesentium laudantium architecto.</p>
            </div>
            <div class="col-lg-4">
                <img src="/Project_demo/Image/Icon/User.png" class="bd-placeholder-img rounded-circle my-3" width="140" height="140" alt="User-icon">
                <h2 class="my-3">ABC</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum sequi aliquam quo eum, consequatur accusamus et amet in omnis nihil velit laboriosam necessitatibus minus voluptates earum fuga praesentium laudantium architecto.</p>
            </div>
        </div>
        <hr>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>