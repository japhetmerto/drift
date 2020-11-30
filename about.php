<?php
	require_once "assets/php/utilities.php";
	session_start();

	require_once "assets/php/showoffcanvascart.php";
	require_once "assets/php/shownoofitems.php";
	require_once "assets/php/showoffcanvasmembership.php";
?>
<!---
Jay
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main-styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<!--- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
	
	<!--- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
    <title>Drift | About Us</title>
  </head>
  <body>
  
	<!--- Navbar -->
	<?php require_once "assets/php/shownavbar.php"; ?>
	<!---- End Navbar ---->
	
	<!--- Item Header -->
  <section class="content-section" style="background: linear-gradient(to bottom, #000000 0%,#4f4c4c 100%);">
  <div class="container">
<h1 class="text-center text-white pt-5">About <b class="text-warning">Us</b></h1><br>
	  <h3 class="text-center text-white pt-5"><b class="text-warning">Who</b> Are We?</h3>
	  <hr class="bg-white" style="margin-bottom:70px;">
	
	<center>
	<p style="color:white">
		We are a group of passionate people that love games. We started this website on 2020 an have over 1 million visitors since the website first launched
		<br>
		We sell varieties of gaming goods including games, console, and gaming accessories with reasonable and affordable price for our customers
		<br>
		Drift Website is No 1 destination for gamers to find gaming related goods at the best price
		<br><br><br>
	</p>
	</center>
	<hr class="bg-white" style="margin-bottom:70px;">
	</div>
	<div class="container">

	  <h3 class="text-center text-white pt-5">Our <b class="text-warning">Goal</b></h3>
	  <hr class="bg-white" style="margin-bottom:70px;">
	  <center>
	<p style="color:white">
		Our goals is to provide our customers with great service and the best surfing experience in our website.
		<br>
		We are dedicated to bring the best gaming goods to customer for a very reasonable price
		<br>
		We also aim to be the hub for all the gamers from all around the world to fulfill their gaming needs.
		<br><br><br>
	</p>
	</center>
	<hr class="bg-white" style="margin-bottom:70px;">
	</div>
	<br><br>
	
	<div class="container">
	  
	  <h3 class="text-center text-white pt-5">Meet The <b class="text-warning">Makers</b> Of Drift</h3>
	  <hr class="bg-white" style="margin-bottom:70px;">
	</div>
	
	<!--- The Makers Of Drift -->
	  <div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/jay/sha.jpeg">
							<img class="pic-2" src="assets/img/content/jay/sha.jpeg">
						</a>
						<ul class="social">
							<li><a href="https://instagram.com/jay__tech" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://instagram.com/jay__tech" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
						
					</div>
					<div class="product-content">
						<h3 class="title">Shamsul</h3>
						<h6 class="title">Front End Developer</h6>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/jay/j.jpeg">
							<img class="pic-2" src="assets/img/content/jay/j.jpeg">
						</a>
						<ul class="social">
							<li><a href="https://instagram.com/jay__tech" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="mailto: jayvelu2@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
					<div class="product-content">
						<h3 class="title">Jagaanathan</h3>
						<h6 class="title">Front End Developer</h6>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/jay/ja.jpeg">
							<img class="pic-2" src="assets/img/content/jay/ja.jpeg">
						</a>
						<ul class="social">
							<li><a href="https://instagram.com/jay__tech" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://instagram.com/jay__tech" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
					<div class="product-content">
						<h3 class="title">Japhet</h3>
						<h6 class="title">Back End Developer</h6>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/jay/wei.jpeg">
							<img class="pic-2" src="assets/img/content/jay/wei.jpeg">
						</a>
						<ul class="social">
							<li><a href="https://instagram.com/jay__tech" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://instagram.com/jay__tech" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
					<div class="product-content">
						<h3 class="title">Wei Shen</h3>
						<h6 class="title">Back End Developer</h6>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	<br><br>
	
	<!--- Footer -->
	<?php require_once "assets/php/showfooter.php"; ?>
	
	<?php require_once "assets/php/showoffcanvas.php"; ?>
	
	
	
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
	
	<!--- User JS -->
	<script src="assets/js/main.js"></script>
	
  </body>
</html>