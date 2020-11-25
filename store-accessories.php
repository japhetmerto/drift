<?php
	session_start();

	require_once "assets/php/showaccessoriesbestdeals.php";
	require_once "assets/php/showaccessorieshotselling.php";
	require_once "assets/php/showallaccessories.php";
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
	<nav class="navbar navbar-expand-lg border-bottom border-secondary" style="background: linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);">
	  <div class="container">
		  <div class="col-2">
		    <a class="navbar-brand logo mt-2" href="main.html">
			  <img src="assets/img/favicons/logo-Drift.png" alt="Logo" class="logo-light mx-auto">
			</a>
		  </div>
		  <div class="col-5 ">
		    <form class="input-group border-0 bg-transparent">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <a href="search-result.html" class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit" role="button">
				  <i class="fas fa-search mt-2"></i>
				</a>
              </div>
            </form>
		  </div>
		  <div class="col-2">
			 <a class="btn btn-sm btn-warning text-black mr-2" href="signin.html">Sign in</a>
             <a class="btn btn-sm text-light d-none d-sm-inline-block style" href="Register.html">Sign up</a>
		  </div>
		  <div class="nav-item">
			<a class=" order-xl-last nav-link small bg" data-toggle="canvas" href="#member" aria-expanded="false" aria-controls="bs-canvas-right" role="button">
				<i class="fas fa-crown text-white"></i>
			</a>
		  </div>
		  <div class="nav-item">
			<a class=" order-xl-last nav-link small bg" data-toggle="canvas" href="#bs-canvas-right" aria-expanded="false" aria-controls="bs-canvas-right" role="button">
				<i style="color:white" class="fas fa-shopping-cart"></i>
				<span class="badge badge-pill badge-warning">3</span>
			</a>
		  </div>
		</div>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);">
      <div class="container" style="font-family: 'Montserrat', sans-serif;">
        <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">☰</button>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
          <ul class="navbar-nav">
              <a class="nav-link pr-3" href="store.html" aria-haspopup="true" aria-expanded="false">Games</a>
			  <a class="nav-link pr-3" href="store-console.html" aria-haspopup="true" aria-expanded="false">Console</a>
			  <a class="nav-link pr-3" href="store-accessories.html" aria-haspopup="true" aria-expanded="false">Accessories</a>
            <li class="nav-item pr-3">
              <a class="nav-link" href="member.html">Membership</a>
            </li>
            <li class="nav-item pr-3">
              <a class="nav-link" href="news.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
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
					<a class="btn btn-warning" type="button" href="product-detail.html">Buy Now</a>
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
					<a class="btn btn-warning" type="button" href="product-detail.html">Buy Now</a>
				  </div>
			  </div>
			</div>
		  </div>
		  
		  <div class="carousel-item">
			<img src="assets/img/content/carousel/ps4-controller.jpg" width="100%" height="510">
			<div class="container">
			  <div class="carousel-caption">
				<h1 class="text-white">Dualshock 4</h1>
				<p><a class="btn btn-lg btn-warning" href="product-detail.html" role="button">Learn more</a></p>
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
          <a href="#" class="img-fluid">
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
          <a href="#" class="img-fluid">
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
	<footer class="footer pt-5 footer-dark" style="background: linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);">
      <div class="container">
          <div class="row gutters-y">
              <div class="col-6 col-lg-3">
                <a href="#" class="logo d-block"><img src="assets/img/favicons/logo-Drift.png" alt="Drift" class="logo-dark"></a>
                <p class="text-white">Drift is your No 1 destination for gaming related goods at the best prices.</p>
                <div class="social-buttons">
                  <a class="pr-2 text-white" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="pr-2 text-white" href="#"><i class="fab fa-facebook"></i></a>
                  <a class="pr-2 text-white" href="#"><i class="fab fa-instagram"></i></a>
				  <a class="text-white" href="#"><i class="fab fa-snapchat"></i></a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-white ml-3">OUR SERVICE</h6>
                <div class="nav flex-column">
                  <a class="nav-link text-white" href="store.html">Games</a>
                  <a class="nav-link text-white" href="store.html">Console</a>
                  <a class="nav-link text-white" href="store.html">Accessories</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase text-white mb-1 ml-3">ABOUT</h6>
                <div class="nav flex-column">
                  <a class="nav-link text-white" href="about.html">Our Team</a>
                  <a class="nav-link text-white" href="news.html">News</a>
				  <a class="nav-link text-white" href="article.html">Blog</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase text-white mb-1 ml-3">Powered By</h6>
                <div class="nav flex-column">
                  <a class="nav-link text-white" href="about.html">Shamsul</a>
                  <a class="nav-link text-white" href="about.html">Jay</a>
                  <a class="nav-link text-white" href="about.html">Japhet</a>
                  <a class="nav-link text-white" href="about.html">Wei Shen</a>
                </div>
              </div>
              
              <div class="col col-lg-3 order-lg-last">
                <div class="mb-2">
                  <h6 class="text-uppercase text-white mb-4">Ways to pay</h6>
                  <div class="text-light">
                    <a href="store.html" class="mr-2 text-white"><i class="fab fa-cc-paypal"></i></a>
                    <a href="store.html" class="mr-2 text-white"><i class="fab fa-cc-visa"></i></a>
                    <a href="store.html" class="mr-2 text-white"><i class="fab fa-cc-amazon-pay"></i></a>
                    <a href="store.html" class="mr-2 text-white"><i class="fab fa-cc-stripe"></i></a>
                    <a href="store.html" class="mr-2 text-white"><i class="fab fa-cc-jcb"></i></a>
                  </div>
                </div>
                <div>
                  <h6 class="mb-2 text-white">Reviews</h6>
                  <div class="text-warning lead-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star text-secondary"></i>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </footer>
	
	<!--- Off canvas cart-->
	<div class="container">
	<div id="bs-canvas-right" class="bs-canvas bs-canvas-right position-fixed bg-dark h-100">
		<header class="bs-canvas-header p-3 bg-dark overflow-auto">
			<button type="button" class="bs-canvas-close float-right close" aria-label="Close" aria-expanded="false"><span aria-hidden="true" class="text-light">&times;</span></button>
			<h4 class="d-inline-block text-light mb-0 text-center">Your <b class="text-warning">Cart</b></h4>
		</header>
		<table class="table">
          	<tbody>
            	<tr>
              		<td><a href="#"><img src="assets/img/content/product/re3.jpg" width="100" height="100"></a>
					</td>
              		<td width="150" class="text-white">
					<p>Resident Evil 3</p>
					x1
					</td>
              		<td class="text-center">
					<a href="#"><i class="far fa-trash-alt pb-2 text-white" style="padding-top:20px;"></i></a><br>
					<span class="fw-500 text-warning">RM159</span>
					</td>
            	</tr>
            	<tr>
              		<td><a href="#"><img src="assets/img/content/product/tlou2.jpg" width="100" height="100"></a>
					</td>
              		<td width="150" class="text-white">
					<p>The Last Of Us Part 2</p>
					x1
					</td>
              		<td class="text-center">
					<a href="#"><i class="far fa-trash-alt pb-2 text-white" style="padding-top:20px;"></i></a><br>
					<span class="fw-500 text-warning">RM189</span>
					</td>
            	</tr>
                <tr>
              		<td><a href="#"><img src="assets/img/content/product/doom.jpg" width="100" height="100"></a>
					</td>
              		<td width="150" class="text-white">
					<p>Doom Eternal</p>
					x1
					</td>
              		<td class="text-center">
					<a href="#"><i class="far fa-trash-alt pb-2 text-white" style="padding-top:20px;"></i></a><br>
					<span class="fw-500 text-warning">RM199</span>
					</td>
            	</tr>
          	</tbody>
        </table>
		<div class="container">
		  <div class="row" style="margin-left:40px;">
			<a href="shopping-cart.html" class="btn btn-lg btn-outline-light">View cart</a>
			<a href="checkout.html" class="btn btn-lg btn-outline-light ml-3">Checkout</a>
		  </div>
		</div>
    </div> 
	
	<!------ Off Canvas Membership ----->
	<div id="member" class="bs-canvas bs-canvas-right position-fixed bg-dark h-100">
		<header class="bs-canvas-header pt-3 pl-3 bg-dark overflow-auto">
			<button type="button" class="bs-canvas-close float-right close" aria-label="Close" aria-expanded="false"><span aria-hidden="true" class="text-light">&times;</span></button>
			<h4 class="d-inline-block text-light text-center">Membership <b class="text-warning">Status</b></h4>
		</header>
		<div class="container text-white">
		<hr class="bg-white">
		<p>Status : <b class="text-warning">Active</b></p>
		<p>Subcription Date : <b class="text-warning">14/11/2020</b></p>
		<p>Expiration Date : <b class="text-warning">14/11/2021</b></p>
		<p>Days Left : <b class="text-warning">365 Days Left</b></p>
		<hr class="bg-white">
		  <div class="row" style="margin-left:50px;">
			<a href="shopping-cart.html" class="btn btn-lg btn-outline-light">Renew</a>
			<a href="#" class="btn btn-lg btn-outline-light ml-3">Cancel</a>
		  </div>
		</div>
    </div>	

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