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
                <a href="/Project_demo/Restaurant/index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">

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
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-label="Animated striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 33%">33%</div>
        </div>
        <div class="container text-center my-3">
            <div class="row">
                <div class="col">
                    <p class="h4">Restaurant Information</p>
                    <p class="small">Restaurant name, Address, Contact no. , Owner details</p>
                </div>

                <div class="col disabled">
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
                <p class="display-6">Select options which best describe your outlet</p>
            </div>
            <div class="container pb-3">
                <div class="row">
                    <div class="col px-5">
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="Bakery">
                            <label class="form-check-label" for="Bakery">
                                Bakery
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="Bar">
                            <label class="form-check-label" for="Bar">
                                Bar
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="BeverageShop">
                            <label class="form-check-label" for="BeverageShop">
                                Beverage Shop
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="Bhojanalya">
                            <label class="form-check-label" for="Bhojanalya">
                                Bhojanalya
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="Cafe">
                            <label class="form-check-label" for="Cafe">
                                Cafe
                            </label>
                        </div>
                    </div>
                    <div class="col px-5">
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="Club">
                            <label class="form-check-label" for="Club">
                                Club
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="DessertParlour">
                            <label class="form-check-label" for="DessertParlour">
                                Dessert Parlour
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="Dhaba">
                            <label class="form-check-label" for="Dhaba">
                                Dhaba
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="FoodCourt">
                            <label class="form-check-label" for="FoodCourt">
                                Food Court
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="FoodTruck">
                            <label class="form-check-label" for="FoodTruck">
                                Food Truck
                            </label>
                        </div>
                    </div>
                    <div class="col px-5">
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="Lounge">
                            <label class="form-check-label" for="Lounge">
                                Lounge
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="Mess">
                            <label class="form-check-label" for="Mess">
                                Mess
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="PaanShop">
                            <label class="form-check-label" for="PaanShop">
                                Paan Shop
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="QuickBites">
                            <label class="form-check-label" for="QuickBites">
                                Quick Bites
                            </label>
                        </div>
                        <div class="form-check py-1">
                            <input class="form-check-input" type="checkbox"  id="SweetShop">
                            <label class="form-check-label" for="SweetShop">
                                Sweet Shop
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container border shadow rounded my-5 py-3">
            <div class="details px-5 py-3">
                <p class="display-6">Type of cuisines</p>
                <p class="small">Enter type which best describe food.</p>
                <div class="form">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Type of cuisines">
                        <label for="floatingInput">Type of cuisines</label>
                    </div>
                </div>
                <p class="small">Example : Pizza , Burger , Chinese , Street Food , Fast Food , Desserts.</p>
            </div>

        </div>

        <div class="container border shadow rounded my-5 py-3">
            <div class="details px-5 py-3">
                <p class="display-6">Restaurant opening hours</p>
                <p class="small">Restaurant opening and closing hours.</p>
            </div>
            <div class="container text-center">
                <div class="row justify-content-md-center">
                    <div class="form-group col-md-3">
                        <label for="time">Open at</label>
                        <div class="input-group">
                            <input type="time" class="form-control timePicker">
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <p class="text-secondary"> to </p>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="time">Close at</label>
                        <div class="input-group">
                            <input type="time" class="form-control timePicker">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="details px-5 py-3">
                    <p class="display-6">Open days</p>
                    <p class="small">Mark open days</p>
                </div>
                <div class="container pb-3">
                    <div class="row">
                        <div class="col px-5">
                            <div class="form-check py-1">
                                <input class="form-check-input" type="checkbox"  id="Monday">
                                <label class="form-check-label" for="Monday">
                                    Monday
                                </label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="checkbox"  id="Tuesday">
                                <label class="form-check-label" for="Tuesday">
                                    Tuesday
                                </label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="checkbox"  id="Wednesday">
                                <label class="form-check-label" for="Wednesday">
                                    Wednesday
                                </label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="checkbox"  id="Thursday">
                                <label class="form-check-label" for="Thursday">
                                    Thursday
                                </label>
                            </div>
                        </div>
                        <div class="col px-5">
                            <div class="form-check py-1">
                                <input class="form-check-input" type="checkbox"  id="Friday">
                                <label class="form-check-label" for="Friday">
                                    Friday
                                </label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="checkbox"  id="Saturday">
                                <label class="form-check-label" for="Saturday">
                                    Saturday
                                </label>
                            </div>
                            <div class="form-check py-1">
                                <input class="form-check-input" type="checkbox"  id="Sunday">
                                <label class="form-check-label" for="Sunday">
                                    Sunday
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar fixed-bottom bg-light">
                <div class="container">
                    <a href="/Project_demo/Restaurant/Restaurant_info.php"><button class="btn btn-outline-secondary btn-lg">Go Back</button></a>
                    <a href="/Project_demo/Restaurant/Restaurant_Upload_images.php"><button class="btn btn-success btn-lg">Next</button></a>
                </div>
            </nav>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>