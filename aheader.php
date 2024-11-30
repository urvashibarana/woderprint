
<html lang="en">
<?php session_start();?>
<head>
    <meta charset="utf-8">
    <title>Wonderprint</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <?php
                 
                 if(isset($_SESSION['auname']))
                 {
                 $uname=$_SESSION['auname'];
                 print "welcome:".$uname;
                 }
                 else
                 {
                    header("location:login.php");
                 }
                 ?> 
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark py-2 pe-3 border-end border-white" href=""><i class="bi bi-telephone text-secondary me-2"></i>95674 89012</a>
                        <a class="text-dark py-2 px-3" href=""><i class="bi bi-envelope text-secondary me-2"></i>wonderprint@gmail.com</a>
                                                                                                                                                                            </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-facebook-f text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-twitter text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-linkedin-in text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-instagram text-secondary"></i>
                        </a>
                        <a class="text-body py-2 ps-3" href="">
                            <i class="fab fa-youtube text-secondary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-uppercase" style="color: var(--primary);">wonderprint</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="ahome.php" class="nav-item nav-link">Home</a>
                <a href="category_view.php" class="nav-item nav-link">Category</a>
                <a href="subcategory_view.php" class="nav-item nav-link">Subcategory</a>
                <a href="product_view.php" class="nav-item nav-link">Printproducts</a>
                <a href="order_view.php" class="nav-item nav-link">ViewOrders</a>
                <a href="registration_view.php" class="nav-item nav-link">Users</a>
                <a href="feedback_view.php" class="nav-item nav-link">Feedback</a>
                <a href="logout.php" class="nav-item nav-link">Logout</a>

                 <?php
                // Session_start();
                // $uname=$_SESSION['uname'];
                // print "welcome:".$uname;
                // ?> 
                <!--<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>-->
                </div>
                <!--<a href="contact.html" class="nav-item nav-link">Contact</a>-->
            </div>
            <!-- <div class="d-none d-lg-flex align-items-center ps-4">
                <i class="fa fa-2x fa-mobile-alt me-3" style="color: var(--primary);"></i>
                <div>
                    <h5 class="mb-1" style="color: var(--primary);"><small>Call Now</small></h5>
                    <h6 class="text-light m-0">+012 345 6789</h6>
                </div>
            </div> -->
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Navbar End -->
         <!-- Back to Top -->
         <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- Navbar End -->
<script src="js/main.js"></script> 
