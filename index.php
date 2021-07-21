<!doctype html>
<html lang="en">
<head>
<title>Finances-master  </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div id="overlayer"></div>
<div class="loader">
<div class="spinner-border text-primary" role="status">
<span class="sr-only">Loading...</span>
</div>
</div>
<div class="site-wrap">
<div class="site-mobile-menu site-navbar-target">
<div class="site-mobile-menu-header">
<div class="site-mobile-menu-close mt-3">
<span class="icon-close2 js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
<div class="container">
<div class="row align-items-center">
<div class="col-6 col-xl-2">
<h1 class="mb-0 site-logo"><a href="index.php" class="h2 mb-0">Finances<span class="text-primary">.</span>
</a></h1>
</div>
<div class="col-12 col-md-10 d-none d-xl-block">
<nav class="site-navigation position-relative text-right" role="navigation">
<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
<li><a href="index.php" class="nav-link">Home</a></li>
<li><a href="phplogic.php" class="nav-link">Transfer</a></li>
<li class="has-children">
<a href="index.php#about-section=" class="nav-link">Customers</a>
<ul class="dropdown">
<li class="has-children">
<a href="#">View all customers</a>
<ul class="dropdown">
<?php
include('connect.php');
$sql7="Select * from customers";
$query_run7 = mysqli_query($connection,$sql7);
while($row7 = mysqli_fetch_assoc($query_run7))
{
?>
<li><?php echo $row7["Name"];?></li>
<?php
}
?>
</ul>
</li>
</ul>
</li>
<li class="smoothscroll"><a href="#about-section" class="nav-link">Contact</a></li>
<li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a>
</li>
<li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a>
</li>
<li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a>
</li>
</ul>
</nav>
</div>
<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#"
class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
</div>
</div>
</header>
<div class="site-blocks-cover overlay" style="background-image: url(images/img_1.jpg);" data-aos="fade">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-md-12 mt-lg-5 text-center">
<h1>The Sparks Foundation Task1</h1>
<p class="post-meta">Made By Vedansh Khurana
</p>
</div>
</div>
</div>
</div>
<footer class="site-footer">
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="row">
<div class="col-md-5">
<h2 class="footer-heading mb-4">About me</h2>
<p>I am Vedansh Khurana currently doing my BCA with specialization in BFSI from UPES Dehradun.I am doing my internship at The Sparks Foundation</p>
</div>
<div class="col-md-3 ml-auto">
<h2 class="footer-heading mb-4">Quick Links</h2>
<ul class="list-unstyled">
<li><a href="#about-section" class="smoothscroll">Terms</a></li>
<li><a href="#about-section" class="smoothscroll">Policy</a></li>
<li><a href="#about-section" class="smoothscroll">About Us</a></li>
<li><a href="#services-section" class="smoothscroll">Services</a></li>
<li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
</ul>
</div>
<div class="col-md-3 footer-social">
<h2 class="footer-heading mb-4">Follow Us</h2>
<a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
<a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
<a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
<a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
</div>
</div>
</div>
<div class="col-md-3">
<h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
<form action="#" method="post" class="footer-subscribe">
<div class="input-group mb-3">
<input type="text" class="form-control border-secondary text-white bg-transparent"
placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
<div class="input-group-append">
<button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
</div>
</div>
</form>
</div>
</div>
</div>
</footer>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
