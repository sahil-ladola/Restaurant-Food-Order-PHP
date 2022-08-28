<!DOCTYPE html>
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
                <a href="/Project_demo/Restaurant/Restaurant_Upload_images.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">

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
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-label="Animated striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 66%">66%</div>
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
                <p class="display-6">Menu images</p>
                <p class="small">Your menu will be visible to Customers.</p>
            </div>
            <div class="input-group mb-3 px-5">
                <label class="input-group-text" for="UploadMenu">Upload Menu Images</label>
                <input type="file" class="form-control" id="UploadMenu" multiple>
            </div>
        </div>

        <div class="container border shadow rounded my-3 py-3">
            <div class="details px-5 py-3">
            <p class="display-6">Restaurant images</p>
                <p class="small">Upload picture of restaurant.</p>
            </div>
            <div class="input-group mb-3 px-5">
                <label class="input-group-text" for="UploadRestroImage">Upload Restaurant Images</label>
                <input type="file" class="form-control" id="UploadRestroImage" multiple>
            </div>
        </div>

        <div class="container border shadow rounded mt-3 py-3 mb-5">
            <div class="details px-5 py-3">
            <p class="display-6">Food images</p>
                <p class="small">Upload picture of food.</p>
            </div>
            <div class="input-group mb-3 px-5">
                <label class="input-group-text" for="UploadFoodImage">Upload Food Images</label>
                <input type="file" class="form-control" id="UploadFoodImage" multiple>
            </div>
        </div>

        <div class="container">
            <nav class="navbar fixed-bottom bg-light">
                <div class="container">
                    <a href="/Project_demo/Restaurant/Restaurant_type.php"><button class="btn btn-outline-secondary btn-lg">Go Back</button></a>
                    <a href="#"><button class="btn btn-success btn-lg">Done</button></a>
                </div>
            </nav>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>