<?php
session_start();
include('connect.php');
$_SESSION["default"]="0";
$var_name=$_SESSION["default"];
?>
<html>
<head>
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
<div class="site-blocks-cover overlay" style="background-image: url(images/colour.jpg.png);" data-aos="fade">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-lg-12 col-md-12 col-sm-12">
<form method="post" action="logic2.php">
<h2><b>Transfer from:<input type = "text" name = "transfer_from" /></b></h2>
<br><br>
<h2> <b>Transfer to:<input type="text" name="transfer_to"></b></h2>
<br><br>
<h2><b>Amount:<input type="text" name="amount"></b></h2>
<br>
<br>
<button onclick="myFunction()">Submit</button>
</form>
</div>
</div>
</div>
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
</html>
