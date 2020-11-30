<?php
	require_once "assets/php/utilities.php";
	session_start();
	require_once "assets/php/showhomewhatshot.php";
	require_once "assets/php/showhomenextgengaming.php";
	require_once "assets/php/showhomelatestnews.php";
	
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

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main-styles.css">
	
	
	<!--- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
	
	<!--- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
    <title>Drift | Home</title>
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
			<img src="assets/img/content/carousel/xbox.jpg" width="100%" height="510">

			<div class="container">
			  <div class="carousel-caption">
				<h3>TURN</h3>
				<h1>YOUR</h1>
				<h1>DREAM</h1>
				<h3 class="mb-5">ON</h3>
				<p><a class="btn btn-lg btn-warning mt-5" href="store-console.php" role="button">Learn more</a></p>
			  </div>
			</div>
		  </div>
		  
		  <div class="carousel-item">
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
					<a href="productdetails.php?product_id=PROD-06b0faf765&type=Game&variants=Standard%20Edition" class="btn btn-warning" type="button" href="productdetails.php?product_id=PROD-06b0faf765&type=Game&variants=Standard%20Edition">Buy Now</a>
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
	  <h1 class="text-center text-white pt-5">What's <b class="text-warning">Hot</b></h1>
	  <p class="text-center text-white lead">Games People Can't Get Enough Now</p>
	  <hr class="bg-white" style="margin-bottom:70px;">
	</div>
	
	<!--- What's Hot -->
	  <div class="container">
		<div class="row">
			<?php echo $_SESSION["firstFourGames"]; ?>
		</div>
		<div class="row mt-5">
			<?php echo $_SESSION["otherFourGames"]; ?>
			<button type="button" class="btn btn-lg btn-warning" style="margin-left:480px; margin-top:50px;" onclick="document.location='store-game.php'">Browse More</button>
		</div>
	</div>
	
	  
	  <!-- Header -->
	  <div class="container">
		  <h1 class="text-center text-white" style="margin-top:100px;">Next Gen <b class="text-warning">Gaming</b></h1>
		  <p class="text-center text-white lead">The Future is Now</p>
		  <hr class="bg-white" style="margin-bottom:70px;">
	  </div>
	  
	  <!--- Console -->
	  <div class="container">
			<div class="row">
				<?php echo $_SESSION["firstFourConsole"]; ?>
			</div>
			<div class="row mt-5">
				<?php echo $_SESSION["otherFourConsole"]; ?>
				<button type="button" class="btn btn-lg btn-warning" style="margin-left:480px; margin-top:50px; margin-bottom:50px;" onclick="document.location='store-console.php'">Browse More</button>
			</div>
		</div>
	
	<!-- Header -->
	<section class="content-section" style="background-image: url(assets/img/bg/bg-2.jpg);">
		<div class="container">
		  <h1 class="text-center text-white pt-5">There's <b class="text-warning">More</b></h1>
		  <p class="text-center text-white lead">Look What We Have For You</p>
		  <hr class="bg-white mb-5">
		</div>
		
		
	<!--- More -->
	<div class="container">
	  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
	    <img src="assets/img/content/product/games.png" alt="game">
		<img src="assets/img/content/product/headphone.png" alt="...">
		<img src="assets/img/content/product/membership.png" style="padding-right:30px;" alt="...">
	  </div>
	</div>
	
	<div class="container">
	  <div class="row pt-3">
		<div class="col-sm">
		  <h4 class="text-warning" style="padding-left:110px;">Browse the</h4>
		  <h2 class="text-white" style="margin-left:85px; margin-bottom:20px;">Latest Game</h2>
		  <button type="button pt-5" class="btn btn-sm btn-warning" style="margin-left:125px;" onclick="document.location='store-game.php'">Browse More</button>
		</div>
		<div class="col-sm">
		  <h4 class="text-warning" style="padding-left:100px;">Shop Amazing</h4>
		  <h2 class="text-white text-center" style="margin-left:50px; margin-bottom:20px;">Latest Accessories</h2>
		  <button type="button pt-5" class="btn btn-sm btn-warning" style="margin-left:140px;" onclick="document.location='store-console.php'">Browse More</button>
		</div>
		<div class="col-sm">
		  <h4 class="text-warning" style="padding-left:90px;">Greatness Await</h4>
		  <h2 class="text-white text-center" style="margin-left:30px; margin-bottom:20px;">Become a Member</h2>
		  <button type="button pt-5" class="btn btn-sm btn-warning btn-round" style="margin-left:120px; margin-bottom:100px;" onclick="document.location='member.php'">Sign Up</button>
		</div>
	  </div>
	</div>
	</section>
	<!--- End of More-->
	
	<!--- News -->
	<section class="content-section text-light" style="background: linear-gradient(to bottom, #111931 0%, #0f131e 100%);">
	  <div class="container" style="font-family: 'Open Sans', sans-serif;">
		<header class="header-text-left">
		  <h2 class="mb-6" style="padding-top:100px;">Latest <b class="text-warning">News</b></h2>
		</header>
		<hr class="bg-white">
			<ul class="list-unstyled">
			  <?php echo $_SESSION["firstThreeNewsLatest"]; ?>
			</ul>
	   </div>
	  <!--- End News-->
	  
	  <!--- Banner -->
	  <div class="content-section pt-0" style="margin-top:80px; padding-bottom:80px;">
        <div class="container">
          <a href="store-game.php" class="d-block">
            <div class="position-relative br-n bs-cont bp-c" style="background-image: url('assets/img/content/product/banner_01.jpg');">
              <img src="assets/img/content/product/banner_01.jpg" alt="banner" class="invisible" />
            </div>
          </a>
        </div>
      </div>
	</section>
	<!--- End Banner-->
	
	<!--- Footer -->
	<?php require_once "assets/php/showfooter.php"; ?>
	
	<?php require_once "assets/php/showoffcanvas.php"; ?>
	
	
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    -->
	
	<!--- User JS -->
	<script src="assets/js/main.js"></script>
	
  </body>
</html>