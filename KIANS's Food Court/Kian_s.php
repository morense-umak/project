<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kian's Food Court</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="home.css">
    <style>
        body {
            padding-top: 56px; /* Adjust based on the height of your navbar */
            min-height: 100vh; /* Ensure the content fills the screen */
        }
        #options {
            position: -webkit-sticky; /* For Safari */
            position: sticky;
            top: 56px; /* Adjust based on the height of your header */
            z-index: 1000;
        
        }
        main {
            padding-top: 80px; /* Adjust based on the height of your header */
        }

        section {
            height: calc(100vh - 120px); /* Adjust based on the height of your header and navbar */
            overflow-y: auto; /* Enable vertical scrolling */
        }

        .product-card {
            margin-bottom: 20px;
        }


    </style>
</head>
<body>
<?php include("head.php"); ?> 
    

    <header class="text-center text-white masthead" style="background: url(&quot;assets/img/bg.jpg&quot;) center / cover no-repeat, #c53636;">
        <div class="masthead-content">
            <div class="container"><input id="search-input" type="search" placeholder="Search" style="width: 600px;height: 60px;padding: 20px;border-style: none;border-radius: 50px;">
            <button type="submit" id="search-button">Search</button></div>
        </div>
    </header>

    <div>
        <ul class="nav nav-tabs flex-column" role="tablist" style="width: 25%!important;float: left; padding: 50px">
            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#mainmenu">Menu</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#special">Special Order</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#combo">Combo</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#short">Short Order</a></li>
        </ul>
        <div class="tab-content" style="width: 75%!important;float: right;">
            <div class="tab-pane active" role="tabpanel" id="mainmenu">
                <div class="row mt-5 ml-5">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s1.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA SOLO</h5>
                                    <p class="card-text price">Price: P65.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s2.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s3.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s4.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s5.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s6.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s7.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s8.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s9.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s10.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s11.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s12.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s13.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s14.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s15.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s16.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s17.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s18.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s19.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s20.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s21.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s22.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s23.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s24.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s25.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s26.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s27.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s28.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA BUDGET MEal</h5>
                                    <p class="card-text price">Price: 39.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                  
                    <!-- Add more product cards here -->
                </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="special">
            <div class="row mt-5 ml-5">
            <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s15.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s16.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s17.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s18.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s19.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s20.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s21.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s22.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s23.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s24.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane" role="tabpanel" id="combo">
            <div class="row mt-5 ml-5">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s1.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA SOLO</h5>
                                    <p class="card-text price">Price: P65.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s2.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s3.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s25.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Content for combo</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="short">
            <div class="row mt-5 ml-5">
            <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s4.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s5.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s6.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s26.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s7.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s8.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s9.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s10.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="s11.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">SHAWARMA PITA B1T1</h5>
                                    <p class="card-text price">Price: P70.00</p>
                                    <a class="btn btn-primary addCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <p>Content for short.</p>
            </div>
        </div>
    </div>
    </div>

    <div class="cartTab">
    <h1>Order List</h1>
    <div class="listorder">
        <div class="item">
            <div class="image">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <div class="btn">
        <button class="close">Close</button>
        <button class="checkout"><a href="checkOut.php">CheckOUT</a></button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addCartButtons = document.querySelectorAll('.addCart');

        addCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                
                const item = this.parentNode;
                const itemName = item.querySelector('h5').innerText;
                const itemPrice = item.querySelector('.price').innerText;

                
                const cartItem = {
                    name: itemName,
                    price: itemPrice
                };

                
                console.log('Item added to cart:', cartItem);
            });
        });
    });
</script>

<script src="app.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.card');

        document.getElementById('search-button').addEventListener('click', function() {
            const searchTerm = document.getElementById('search-input').value.toLowerCase();

            items.forEach(item => {
                const itemName = item.querySelector('.card-title').innerText.toLowerCase();
                if (itemName.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    
    const addToCartButtons = document.querySelectorAll('.addCart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            const itemName = event.target.dataset.itemName;
            
            console.log('Added', itemName, 'to cart!');
        });
    });
});

</script>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    
</body>
</html>


