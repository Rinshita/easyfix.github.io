<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <title>EasyFix</title>
</head>
<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-info pl-5 fixed-top">
<a href="index.php" class="navbar-brand">EasyFix</a>
<span class="navbar-text">Customer's Happiness is our Aim</span>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link active bg-dark">Home</a></li>
        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/requesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>

    </ul>
</div>
    </nav>
    <!-- End Navigation -->

<!-- Start Header Jumbotron -->
<header class="jumbotron back-image" style="background-image:url(images/banner1.jpg)">
<div class="myclass mainHeading">
    <h1 class="text-capitalize text-info font-weight-bold">Welcome to EasyFix</h1>
    <p class="font-italic text-light">Customer's Happiness is our Aim</p>
    <a href="Requester/requesterLogin.php" class="btn btn-success mr-4">Login</a>
    <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
</div>
</header>
<!-- End Header Jumbotron -->

<!-- start introduction section -->
<div class="container">
<div class="jumbotron">
<h3 class="text-center">What we can do for you?</h3>
<p>
Service management systems are large modular systems which incorporate all or most aspects of a 
service-oriented organization. To have a service-management mindset, an organization must understand 
the level of process maturity that is required to become a service-oriented organization.
Standardization organizations such as the Information Technology Infrastructure Library (ITIL) and 
the International Organization for Standardization/International Electrotechnical Commission (ISO/IEC)
e standard frameworks for the creation of service management systems.
</p>
</div>
</div>
<!-- end introduction section  container-->

<!-- start services section -->
<div class="container text-center border-bottom" id="services">
<h2>Our Services</h2>
<div class="row mt-4">
<div class="col-sm-4">
<a href="#"><i class="fas fa-tv fa-6x mb-4 text-success"></i></a>
<h4 class="mt-4">Electronic Appliances</h4>
</div>
<div class="col-sm-4">
<a href="#"><i class="fas fa-sliders-h fa-6x mb-4 text-primary"></i></a>
<h4 class="mt-4">Preventive Maintenance</h4>
</div>
<div class="col-sm-4">
<a href="#"><i class="fas fa-cogs fa-6x mb-4 text-info"></i></a>
<h4 class="mt-4">Fault Repair</h4>
</div>
</div>
</div>
<!-- end services section container-->

<!-- start registration form -->
<?php include('userRegistration.php') ?>
<!-- end registration form -->

<!-- Start Satisfied Customers -->
<div class="jumbotron bg-info">
<div class="container">
<h2 class="text-center text-white">Our Satisfied Customers</h2>
<div class="row mt-5">
<div class="col-lg-3 col-sm-6">  <!--Start first column-->
<div class="card shadow-lg mb-2">
<div class="card-body text-center">
<img src="images/avatar.jpg" class="img-fluid" style="width:60%; border-radius:100px;" alt="pic1">
<h4 class="card-title">Selena Gomez</h4>
<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, neque!</p>
</div>
</div>
</div>
<!-- first column end -->
<div class="col-lg-3 col-sm-6">  <!--Start sec column-->
<div class="card shadow-lg mb-2">
<div class="card-body text-center">
<img src="images/avatar2.webp" class="img-fluid" style="width:65%; border-radius:100px;" alt="pic2">
<h4 class="card-title">Hande Ercel</h4>
<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, neque!</p>
</div>
</div>
</div>
<!-- sec column end -->
<div class="col-lg-3 col-sm-6">  <!--Start third column-->
<div class="card shadow-lg mb-2">
<div class="card-body text-center">
<img src="images/avatar3.jpg" class="img-fluid" style="width:60%; border-radius:100px;" alt="pic3">
<h4 class="card-title">Alia bhatt</h4>
<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, neque!</p>
</div>
</div>
</div>
<!-- third column end -->
<div class="col-lg-3 col-sm-6">  <!--Start fourth column-->
<div class="card shadow-lg mb-2">
<div class="card-body text-center">
<img src="images/avatar4.webp" class="img-fluid" style="width:80%; border-radius:100px;" alt="pic4">
<h4 class="card-title">Deepika</h4>
<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, neque!</p>
</div>
</div>
</div>
<!-- fourth column end -->
</div>
</div>
</div>
<!-- End Satisfied Customers -->

<!-- Start Contact Us -->
<div class="container" id="contact">
<h2 class="text-center mb-4">Contact Us</h2>
<div class="row">
<!-- Start 1 col -->
<?php include("contactForm.php") ?>
<!-- End 1 col -->
<div class="col-md-4 text-center"><!-- Start 2 col -->
<strong>Headquarter:</strong><br>
EasyFix Pvt Ltd,<br>
Sanjay Palace, Agra<br>
Uttar Pradesh - 282007<br>
Phone: +000000000<br>
<a href="#" target="_blank">www.easyfix.com</a><br>
<br><br>
<strong>Branch:</strong><br>
EasyFix Pvt Ltd,<br>
Nehru Nagar, Delhi<br>
Delhi - 564564<br>
Phone: +000000000<br>
<a href="#" target="_blank">www.easyfix.com</a><br>
</div><!-- End 2 col -->
</div>
</div>
<!-- End Contact Us -->

<!-- Start footer -->
<footer class="container-fluid bg-dark mt-5 text-white">
<div class="container">
<div class="row py-3">
<div class="col-md-6">
<span class="pr-2">Follow Us:</span>
<a href="#" target="_blank" class="pr-2 fi-color">
<i class="fab fa-facebook-f"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color">
<i class="fab fa-twitter"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color">
<i class="fab fa-youtube"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color">
<i class="fab fa-google-plus-g"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color">
<i class="fas fa-rss"></i></a>
</div>

<div class="col-md-6 text-right">
<small>Designed by Rinshita &copy; 2020</small>
<small class="ml-2"><a href="Admin/adminLogin.php">Admin Login</a></small>
</div>
</div>
</div>
</footer>
<!-- End footer -->
<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>