<?php
	require_once "assets/php/utilities.php";
	session_start();

	require_once "assets/php/showgamesbestdeals.php";
	require_once "assets/php/showgamesnewreleases.php";
	require_once "assets/php/showallgames.php";

	require_once "assets/php/showoffcanvascart.php";
	require_once "assets/php/shownoofitems.php";
	require_once "assets/php/showoffcanvasmembership.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main-styles.css">
	
	<!--- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
	
	<!--- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <title>Drift | Game</title>
  </head>
  <body>
  
	<!--- Navbar -->
	<?php require_once "assets/php/shownavbar.php"; ?>
	<!--- End NavBar -->
	
	<!--- Carousel -->
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="assets/img/content/carousel/doom.jpg" width="100%" height="510">
			<div class="container">
			  <div class="carousel-caption text-right h-75">
				<h1 class="font-weight-bolder">Doom Eternal.</h1>
				<h3 class=" font-weight-normal py-4">Be the Demon Slayer</h3>
				  <div class="input-group" style="margin-left:760px;">
					<div class="input-group-prepend">
					  <div class="input-group-text px-auto" id="btnGroupAddon2">
					   <strong>RM199</strong>
					  </div>
					</div>
					<a class="btn btn-warning" type="button" href="productdetails.php?product_id=PROD-06b0faf765&type=Game&variants=Standard%20Edition">Buy Now</a>
				  </div>
			  </div>
			</div>
		  </div>
		  
		  
		  <div class="carousel-item">
			<img src="assets/img/content/carousel/marvel.jpg" width="100%" height="510">
			<div class="container">
			  <div class="carousel-caption text-right h-75">
				<h1 class="font-weight-bolder">Marvel Avengers.</h1>
				<h3 class="font-weight-normal py-4">Embrace the Power</h3>
				  <div class="input-group" style="margin-left:740px;">
					<div class="input-group-prepend">
					  <div class="input-group-text px-auto" id="btnGroupAddon2">
					    <p><del>RM249</del></p><strong>RM199</strong>
					  </div>
					</div>
					<a class="btn btn-warning" type="button" href="productdetails.php?product_id=PROD-dc3e5ec873&type=Game&variants=Standard%20Edition">Buy Now</a>
				  </div>
			  </div>
			</div>
		  </div>
		  
		  <div class="carousel-item">
			<img src="assets/img/content/carousel/tlou2.jpg" width="100%" height="510">
			<div class="container">
			  <div class="carousel-caption text-right h-75">
				<h1 class="font-weight-bolder">The Last Of Us Part 2</h1>
				<h3 class="font-weight-normal py-4">Survival is The Key</h3>
				  <div class="input-group" style="margin-left:740px;">
					<div class="input-group-prepend">
					  <div class="input-group-text px-auto" id="btnGroupAddon2">
					    <strong>RM189</strong>
					  </div>
					</div>
					<a class="btn btn-warning" type="button" href="productdetails.php?product_id=PROD-d4612e03fa&type=Game&variants=Standard%20Edition">Buy Now</a>
				  </div>
			  </div>
			</div>
		  </div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	<!--- End of Carousel -->
	
	<!--- Item Header -->
	  <section class="content-section" style="background: linear-gradient(to bottom, #000000 0%,#4f4c4c 100%);">
		<div class="container">
		  <h1 class="text-center text-white pt-5">Best <b class="text-warning">Deal</b></h1>
		  <p class="text-center text-white lead">Save More, Play More</p>
		  <hr class="bg-white" style="margin-bottom:70px;">
		</div>
		
	<!--- Best Deal -->
	  <div class="container">
		<div class="row">
			<?php echo $_SESSION["firstFourGamesDeals"]; ?>
		</div>
		<div class="row mt-5">
			<?php echo $_SESSION["otherFourGamesDeals"]; ?>
		</div>
	</div>
	<!--- End of Best Deal--->
	
	<!--- Banner -->
	<div class="content-section pt-0 position-relative" style="margin-top:150px; padding-bottom:100px;">
          <a href="store-game.php" class="img-fluid">
            <div style="background-image: url('assets/img/content/product/banner_02.jpg');object-fit:cover;">
              <img src="assets/img/content/product/banner_02.jpg" alt="banner" width="100%" height="100%">
			  <div class="text-block">
				<h2>Dont Miss The Deal</h2>
				<p>Claim The Product at Great Price Now</p>
			  </div>
			</div>
          </a>
    </div>
	
	
	<!--- Item Header -->
		<div class="container">
		  <h1 class="text-center text-white pt-5">New <b class="text-warning">Releases</b></h1>
		  <p class="text-center text-white lead">Play The Latest Game in The Market</p>
		  <hr class="bg-white" style="margin-bottom:70px;">
		</div>
	
	<!---- New Releases --->
	 <div class="container">
		<div class="row">
			<?php echo $_SESSION["firstFourGamesNew"]; ?>
		</div>
		<div class="row mt-5">
			<?php echo $_SESSION["otherFourGamesNew"]; ?>
		</div>
	</div>
	<!--- End New Releases-->
	
	
	<!--- Banner 2--->
	<div class="content-section pt-0 position-relative" style="margin-top:150px; padding-bottom:100px;">
          <a href="productdetails.php?product_id=PROD-548dc5302a&type=Game&variants=Mamba%20Forever%20Edition" class="img-fluid">
            <div style="background-image: url('assets/img/content/product/banner_03.jpg');object-fit:cover;">
              <img src="assets/img/content/product/banner_03.jpg" alt="banner" width="100%" height="100%">
			  <div class="text-block-2">
				<h1>Be The Legend</h1>
				<h4>NBA 2K21 Is Out Now</h4>
			  </div>
			</div>
          </a>
    </div>
	
	<!--- Item Header -->
		<div class="container">
		  <h1 class="text-center text-white pt-5">All <b class="text-warning">Games</b></h1>
		  <p class="text-center text-white lead">Browse Our Huge Library of Games</p>
		  <hr class="bg-white" style="margin-bottom:70px;">
		</div>
		
	<!--- All Games --->
	<div class="container">
		<div class="row">
			<?php echo $_SESSION["firstFourGamesAll"]; ?>
		</div>
			<?php echo $_SESSION["otherFourGamesAll"]; ?>
	</div>
	
	<!--- Footer -->
	<?php require_once "assets/php/showfooter.php"; ?>
	
	<?php require_once "assets/php/showoffcanvas.php"; ?>	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	
	<!--- User JS -->
	<script src="assets/js/main.js"></script>
	
  </body>
</html>