<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FOODIVE | Add a Restaurant</title>
    <link rel="shortcut icon" href="/Project_demo/Image/Favicon/Favicon.png" type="image/x-icon">

    <style>
        <?php
        require "C:/xampp/htdocs/Project_demo/CSS/OTP.css";
        ?>
    </style>
</head>

<body>
    <header class="p-3 border-bottom sticky-top bg-light">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/Project_demo/Restaurant/Restaurant_info.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">

                    <img class="bi me-2" width="40" height="40" role="img" aria-label="Bootstrap" src="/Project_demo/Image/LOGO/foodive-logos_black.png" alt="FOODIVE">
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-Center mb-md-0">
                </ul>
                <div>
                    <a href="#" class="d-block link-dark text-decoration-none">
                        <label for="User" class="px-2">Username</label>
                        <img src="/Project_demo/Image/Icon/User.png" id="User" alt="User" width="32" height="32" class="rounded-circle">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="progress my-2">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-label="Animated striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">0%</div>
        </div>
        <div class="container text-center my-3">
            <div class="row">
                <div class="col">
                    <p class="h4">Restaurant Information</p>
                    <p class="small">Restaurant name, Address, Contact no. , Owner details</p>
                </div>

                <div class="col">
                    <p class="h4">Restaurant Type and Timing</p>
                    <p class="small">Cuisine type, Opening hours</p>
                </div>

                <div class="col">
                    <p class="h4">Upload Images </p>
                    <p class="small">Menu, restaurant, food images</p>
                </div>
            </div>
        </div>

        <div class="container border shadow rounded my-3 py-3">
            <div class="details px-5 py-3">
                <p class="display-6">Restaurant details</p>
                <p class="small">Name, address</p>
            </div>
            <div class="form px-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="RestroName" placeholder="Restaurant name">
                    <label for="RestroName">Restaurant name </label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Restaurant address" id="RestroAddress"></textarea>
                    <label for="RestroAddress">Restaurant address</label>
                </div>
            </div>
        </div>

        <div class="container border shadow rounded my-5 py-3">
            <div class="details px-5 py-3">
                <p class="display-6">Contact number at restaurant</p>
                <p class="small">This number will be visible to customer for enquiries.</p>
            </div>
            <div class="form px-5">
                <div class="input-group flex-nowrap input-group-lg mb-3">
                    <span class="input-group-text" id="addon-wrapping">+91</span>
                    <input type="text" class="form-control" placeholder="Mobile number" aria-label="Mobile number" aria-describedby="addon-wrapping" maxlength="10">
                </div>
                <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#OTP">
                    <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-primary" type="button">Verify</button>
                    </div>
                </a>
            </div>
        </div>

        <div class="container border shadow rounded my-5 py-3">
            <div class="details px-5 py-3">
                <p class="display-6">Restaurant owner details</p>
                <p class="small">This number will be used to business related communications.</p>
            </div>
            <div class="form px-5">
                <div class="input-group flex-nowrap input-group-lg mb-3">
                    <span class="input-group-text" id="addon-wrapping">+91</span>
                    <input type="text" class="form-control" placeholder="Mobile number of owner" aria-label="Mobile number" aria-describedby="addon-wrapping" maxlength="10">
                </div>
                <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#OTP">
                    <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-primary" type="button">Verify</button>
                    </div>
                </a>
                <div class="row g-2">
                    <div class="col-md mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="RestroOwnerName" placeholder="Restaurant owner name">
                            <label for="RestroOwnerName">Restaurant owner name</label>
                        </div>
                    </div>
                    <div class="col-md mb-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="RestroOwnerEmail" placeholder="Restaurant owner email address">
                            <label for="RestroOwnerEmail">Restaurant owner Email address</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar fixed-bottom bg-light">
            <div class="container">
                <a href="/Project_demo/Restaurant/index.php"><button class="btn btn-outline-secondary btn-lg">Go Back</button></a>
                <a href="/Project_demo/Restaurant/Restaurant_type.php"><button class="btn btn-success btn-lg">Next</button></a>
            </div>
        </nav>
    </div>

    <!-- OTP -->
    <?php
    require "C:/xampp/htdocs/Project_demo/OTP.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>