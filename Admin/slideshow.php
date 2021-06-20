<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Template</title>

    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row min-vh-100">
            <div class="col-12">
                <header class="row">
                    

                    <!-- Header -->
                    <div class="col-12 bg-white pt-4">
                        <div class="row">
                            <div class="col-lg-auto">
                                <div class="site-logo text-center text-lg-left">
                                    <a href="index.php">Sri Vaishnavi Fashions</a>
                                </div>
                            </div>
                            <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" class="form-control border-dark" placeholder="Search..." required>
                                            <button class="btn btn-outline-dark"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-auto text-center text-lg-left header-item-holder">
                            <a href="users.php" class="header-item">
                                    <i class="fas fa-user-edit me-2"></i>
                                </a>
                                <a href="heart.php" class="header-item">
                                    <i class="fas fa-heart me-2"></i><span id="header-favorite">0</span>
                                </a>
                                    <a href="save.php" class="header-item">
                                    <i class="fas fa-save me-2"></i><span id="header-favorite">2</span>
                                </a>
                                <a href="cart.php" class="header-item">
                                    <i class="fas fa-shopping-bag me-2"></i><span id="header-qty" class="me-3">2</span>
                                    <i class="fas fa-money-bill-wave me-2"></i><span id="header-price">₹4,000</span>
                                </a>
                            </div>
                        </div>

                        <!-- Nav -->
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
                                <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="mainNav">
                                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="slideshow.php">Slide show</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="models.php"> Models</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="fashion" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sale Products</a>
                                            <div class="dropdown-menu" aria-labelledby="fashion">
                                                <a class="dropdown-item" href="#">Sarees</a>
                                                <a class="dropdown-item" href="#">Materials</a>
                                                <a class="dropdown-item" href="#">Maggam Works</a>
                                                <a class="dropdown-item" href="#">Computer Embroidery</a>
                                                <a class="dropdown-item" href="#">Blouses</a>
                                                <a class="dropdown-item" href="#">Long Frocks</a>
                                                <a class="dropdown-item" href="#">Short Frocks</a>
                                                <a class="dropdown-item" href="#">Lehangas</a>
                                                <a class="dropdown-item" href="#">Dresses</a>
                                                <a class="dropdown-item" href="#">Kurtis</a>
                                                <a class="dropdown-item" href="#">Waist Belts</a>
                                                <a class="dropdown-item" href="#">Kids Wear</a>
                                                <a class="dropdown-item" href="#">Sharwani</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">AboutUs</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="contactus.php">Contact Us</a>
                                          </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Nav -->

                    </div>
                    <!-- Header -->

                </header>
            </div>
            <!--form to upload slides show-->
            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="col-md-6">
                                    <form action="#">
                                        <div class="form-group">
                                            <label class="form-control-label">Slideshow Image</label>
                                            <div class="custom-file">
                                                <input type="file" name="site_logo" class="custom-file-input">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                        </div>
                                        </form>
                                        
                                        <div class="form-group text-right">
                                            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
          
<script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>