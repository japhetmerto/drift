<?php
	require_once "assets/php/utilities.php";

	session_start();

	require_once "assets/php/showaccessoriesbestdeals.php";
	require_once "assets/php/showaccessorieshotselling.php";
	require_once "assets/php/showallaccessories.php";

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

    <title>Drift | Accessories</title>
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
			<img src="assets/img/content/carousel/xbox-controller.jpg" width="100%" height="510">
			<div class="container">
			  <div class="carousel-caption text-left text-dark h-75">
				<h1 class="font-weight-bolder">Xbox Controller.</h1>
				<h3 class=" font-weight-normal py-4">Greatness in Hand</h3>
				  <div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text px-auto" id="btnGroupAddon2">
					   <strong>RM249</strong>
					  </div>
					</div>
					<a class="btn btn-warning" type="button" href="productdetails.php?product_id=PROD-27b7dfa5be&type=Accessories&variants=Carbon%20Black">Buy Now</a>
				  </div>
			  </div>
			</div>
		  </div>
		  
		  
		  <div class="carousel-item">
			<img src="assets/img/content/carousel/hardisk.jpg" width="100%" height="510">
			<div class="container">
			  <div class="carousel-caption text-left text-white h-75">
				<h1 class="font-weight-bolder">Seagate Storage Expansion.</h1>
				<h3 class=" font-weight-normal py-4">Store More</h3>
				  <div class="input-group">
					<div class="input-group-prepend">
					  <div class="input-group-text px-auto" id="btnGroupAddon2">
					   <strong>RM349</strong>
					  </div>
					</div>
					<a class="btn btn-warning" type="button" href="productdetails.php?product_id=PROD-3a1d05c788&type=Accessories&variants=Standard%20Edition">Buy Now</a>
				  </div>
			  </div>
			</div>
		  </div>
		  
		  <div class="carousel-item">
			<img src="assets/img/content/carousel/ps4-controller.jpg" width="100%" height="510">
			<div class="container">
			  <div class="carousel-caption">
				<h1 class="text-white">Dualshock 4</h1>
				<p><a class="btn btn-lg btn-warning" href="productdetails.php?product_id=PROD-93d85705b5&type=Accessories&variants=Standard%20Edition" role="button">Learn more</a></p>
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
			<?php echo $_SESSION["firstFourAccessoriesDeals"]; ?>
		</div>
		<div class="row mt-5">
			<?php echo $_SESSION["otherFourAccessoriesDeals"]; ?>
		</div>
	</div>
	<!--- End of Best Deal--->
	
	<!--- Banner -->
	<div class="content-section pt-0 position-relative" style="margin-top:150px; padding-bottom:100px;">
          <a href="store-accessories.php" class="img-fluid">
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
		  <h1 class="text-center text-white pt-5"><b class="text-warning">Hot</b> Selling</h1>
		  <p class="text-center text-white lead">These Items is People Favourite Now</p>
		  <hr class="bg-white" style="margin-bottom:70px;">
		</div>
	
	<!---- New Releases --->
	 <div class="container">
		<div class="row">
			<?php echo $_SESSION["firstFourAccessoriesHot"]; ?>
		</div>
		<div class="row mt-5">
			<?php echo $_SESSION["otherFourAccessoriesHot"]; ?>
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
		  <h1 class="text-center text-white pt-5">All <b class="text-warning">Accessories</b></h1>
		  <p class="text-center text-white lead">Browse Our Huge Library of Accessories</p>
		  <hr class="bg-white" style="margin-bottom:70px;">
		</div>
		
	<!--- All Games --->
	<div class="container">
		<div class="row">
			<?php echo $_SESSION["firstFourAccessoriesAll"]; ?>
		</div>
			<?php echo $_SESSION["otherFourAccessoriesAll"]; ?>
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