<?php
	require_once "assets/php/utilities.php";
	session_start(); 
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
	<nav class="navbar navbar-expand-lg border-bottom border-secondary" style="background: linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);">
	  <div class="container">
		  <div class="col-2">
		    <a class="navbar-brand logo mt-2" href="main.html">
			  <img src="assets/img/favicons/logo-Drift.png" alt="Logo" class="logo-light mx-auto">
			</a>
		  </div>
		  <div class="col-5">
		    <form class="input-group border-0 bg-transparent">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <a href="search-result.html" class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit" role="button">
				  <i class="fas fa-search mt-2"></i>
				</a>
              </div>
            </form>
		  </div>
		  <?php showUserName(); ?>
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
			  <a class="nav-link pr-3" href="store.html" aria-haspopup="true" aria-expanded="false">Console</a>
			  <a class="nav-link pr-3" href="store.html" aria-haspopup="true" aria-expanded="false">Accessories</a>
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
			<img src="assets/img/content/carousel/xbox.jpg" width="100%" height="510">

			<div class="container">
			  <div class="carousel-caption">
				<h3>TURN</h3>
				<h1>YOUR</h1>
				<h1>DREAM</h1>
				<h3 class="mb-5">ON</h3>
				<p><a class="btn btn-lg btn-warning mt-5" href="product-detail.html" role="button">Learn more</a></p>
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
					<a href="product-detail" class="btn btn-warning" type="button" href="product-detail.html">Buy Now</a>
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
					<a class="btn btn-warning" type="button" href="product-detail.html">Buy Now</a>
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
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="product-detail.html">
							<img class="pic-1" src="assets/img/content/product/tlou2.jpg">
							<img class="pic-2" src="assets/img/content/product/tlou2.jpg">
						</a>
						<ul class="social">
							<li><a href="product-detail.html"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="product-detail.html"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
						<span class="product-new-label">New</span>
					</div>
					<div class="product-content">
						<h3 class="title font-weight-bolder"><a href="#">The Last Of Us Part 2</a></h3>
						<div class="price">
							RM189
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
							<li class="fa fa-star disable"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="product-detail.html">
							<img class="pic-1" src="assets/img/content/product/re3.jpg">
							<img class="pic-2" src="assets/img/content/product/re3.jpg">
						</a>
						<ul class="social">
							<li><a href="product-detail.html"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="product-detail.html"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="product-content">
						<h3 class="title font-weight-bolder"><a href="#">Resident Evil 3</a></h3>
						<div class="price">
							RM 159
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="product-detail.html">
							<img class="pic-1" src="assets/img/content/product/doom.jpg">
							<img class="pic-2" src="assets/img/content/product/doom.jpg">
						</a>
						<ul class="social">
							<li><a href="product-detail.html"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="product-detail.html"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
						<span class="product-new-label">New</span>
					</div>
					<div class="product-content">
						<h3 class="title font-weight-bolder"><a href="#">Doom Eternal</a></h3>
						<div class="price">
							RM199
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/product/minecraft.jpg">
							<img class="pic-2" src="assets/img/content/product/minecraft.jpg">
						</a>
						<ul class="social">
							<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
						<span class="product-new-label">20% Off</span>
					</div>
					<div class="product-content">
						<h3 class="title font-weight-bolder"><a href="#">Minecraft</a></h3>
						<div class="price">
							RM79
							<span>RM129</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/product/marvel.jpg">
							<img class="pic-2" src="assets/img/content/product/marvel.jpg">
						</a>
						<ul class="social">
							<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
						<span class="product-new-label">40% Off</span>
					</div>
					<div class="product-content">
						<h3 class="title font-weight-bolder"><a href="#">Marvel Avengers</a></h3>
						<div class="price">
							RM199
							<span>RM249</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
							<li class="fa fa-star disable"></li>
							<li class="fa fa-star disable"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/product/nioh.jpg">
							<img class="pic-2" src="assets/img/content/product/nioh.jpg">
						</a>
						<ul class="social">
							<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
						<span class="product-new-label">30% Off</span>
					</div>
					<div class="product-content">
						<h3 class="title font-weight-bolder"><a href="#">Nioh 2</a></h3>
						<div class="price">
							RM179
							<span>RM209</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/product/fallguys.jpg">
							<img class="pic-2" src="assets/img/content/product/fallguys.jpg">
						</a>
						<ul class="social">
							<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
						<span class="product-new-label">70% Off</span>
					</div>
					<div class="product-content">
						<h3 class="title font-weight-bolder"><a href="#">Fall Guys</a></h3>
						<div class="price">
							RM89
							<span>RM159</span>
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="product-grid3">
					<div class="product-image3">
						<a href="#">
							<img class="pic-1" src="assets/img/content/product/ds.jpg">
							<img class="pic-2" src="assets/img/content/product/ds.jpg">
						</a>
						<ul class="social">
							<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="product-content">
						<h3 class="title font-weight-bolder"><a href="#">Death Stranding</a></h3>
						<div class="price">
							RM119
						</div>
						<ul class="rating">
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star"></li>
							<li class="fa fa-star disable"></li>
							<li class="fa fa-star disable"></li>
						</ul>
					</div>
				</div>
			</div>
			<button type="button" class="btn btn-lg btn-warning" style="margin-left:480px; margin-top:50px;">Browse More</button>
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
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="#">
								<img class="pic-1" src="assets/img/content/product/ps5.png">
								<img class="pic-2" src="assets/img/content/product/ps5.png">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
							<span class="product-new-label">New</span>
						</div>
						<div class="product-content">
							<h3 class="title font-weight-bolder"><a href="#">Playstation 5</a></h3>
							<div class="price">
								RM2000
							</div>
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="#">
								<img class="pic-1" src="assets/img/content/product/xbox3.jpg">
								<img class="pic-2" src="assets/img/content/product/xbox3.jpg">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
							<span class="product-new-label">New</span>
						</div>
						<div class="product-content">
							<h3 class="title font-weight-bolder"><a href="#">Xbox Series X</a></h3>
							<div class="price">
								RM2000
							</div>
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star disable"></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="#">
								<img class="pic-1" src="assets/img/content/product/ps4pro.jpg">
								<img class="pic-2" src="assets/img/content/product/ps4pro.jpg">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
							<span class="product-new-label">30% Off</span>
						</div>
						<div class="product-content">
							<h3 class="title font-weight-bolder"><a href="#">Playstation 4 Pro</a></h3>
							<div class="price">
								RM1400
								<span>RM1600</span>
							</div>
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star disable"></li>
								<li class="fa fa-star disable"></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="#">
								<img class="pic-1" src="assets/img/content/product/switch.jpg">
								<img class="pic-2" src="assets/img/content/product/switch.jpg">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product-content">
							<h3 class="title font-weight-bolder"><a href="#">Nintendo Switch</a></h3>
							<div class="price">
								RM1300
							</div>
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star disable"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="#">
								<img class="pic-1" src="assets/img/content/product/ps4.png">
								<img class="pic-2" src="assets/img/content/product/ps4.png">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
							<span class="product-new-label">20% Off</span>
						</div>
						<div class="product-content">
							<h3 class="title font-weight-bolder"><a href="#">Playstation 4 Slim</a></h3>
							<div class="price">
								RM1199
								<span>RM1399</span>
							</div>
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="#">
								<img class="pic-1" src="assets/img/content/product/xboxone.jpg">
								<img class="pic-2" src="assets/img/content/product/xboxone.jpg">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
							<span class="product-new-label">20% Off</span>
						</div>
						<div class="product-content">
							<h3 class="title font-weight-bolder"><a href="#">Xbox One S</a></h3>
							<div class="price">
								RM1499
								<span>RM1699</span>
							</div>
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star disable"></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="#">
								<img class="pic-1" src="assets/img/content/product/switchlite.jpg">
								<img class="pic-2" src="assets/img/content/product/switchlite.jpg">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product-content">
							<h3 class="title font-weight-bolder"><a href="#">Nintendo Switch Lite</a></h3>
							<div class="price">
								RM1399
							</div>
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star disable"></li>
								<li class="fa fa-star disable"></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="product-grid3">
						<div class="product-image3">
							<a href="#">
								<img class="pic-1" src="assets/img/content/product/ps41.jpg">
								<img class="pic-2" src="assets/img/content/product/ps41.jpg">
							</a>
							<ul class="social">
								<li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
							<span class="product-new-label">50% Off</span>
						</div>
						<div class="product-content">
							<h3 class="title font-weight-bolder"><a href="#">Playstation 4</a></h3>
							<div class="price">
								RM799
								<span>RM1299</span>
							</div>
							<ul class="rating">
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star"></li>
								<li class="fa fa-star disable"></li>
							</ul>
						</div>
					</div>
				</div>
				<button type="button" class="btn btn-lg btn-warning" style="margin-left:480px; margin-top:50px; margin-bottom:50px;">Browse More</button>
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
		  <button type="button pt-5" class="btn btn-sm btn-warning" style="margin-left:125px;">Browse More</button>
		</div>
		<div class="col-sm">
		  <h4 class="text-warning" style="padding-left:100px;">Shop Amazing</h4>
		  <h2 class="text-white text-center" style="margin-left:50px; margin-bottom:20px;">Latest Accessories</h2>
		  <button type="button pt-5" class="btn btn-sm btn-warning" style="margin-left:140px;">Browse More</button>
		</div>
		<div class="col-sm">
		  <h4 class="text-warning" style="padding-left:90px;">Greatness Await</h4>
		  <h2 class="text-white text-center" style="margin-left:30px; margin-bottom:20px;">Become a Member</h2>
		  <button type="button pt-5" class="btn btn-sm btn-warning btn-round" style="margin-left:120px; margin-bottom:100px;"><a href="member.html" class="text-dark">Sign Up</a></button>
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
			  <li class="media mb-5">
				<img src="assets/img/content/product/kda.jpg" class="align-self-start mr-3" alt="kda" style="max-width:330px; max-height:200px">
				<div class="media-body">
					<h5 class="card-title text-white font-weight-bolder">KDA IS MAKING A NEW ALBUM</h5>
					<p class="card-text"><small class="text-muted"><i class="fas fa-tag text-primary">9th November 2020</i></small></p>
					<p class="card-text text-white">Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<a href="article.html">
					<button type="button" class="btn btn-lg btn-transparent btn-outline-warning text-white">Read More</button>
					</a>
				</div>
			  </li>
			  <li class="media mb-5">
				<img src="assets/img/content/product/robot.jpg" class="align-self-start mr-3" alt="kda" style="max-width:330px; max-height:200px">
				<div class="media-body">
					<h5 class="card-title text-white font-weight-bolder">REVENGE OF ROBOT 2 IS ON DEVELOPMENT</h5>
					<p class="card-text"><small class="text-muted"><i class="fas fa-tag text-primary">9th November 2020</i></small></p>
					<p class="card-text text-white">Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<a href="article.html">
					<button type="button" class="btn btn-lg btn-transparent btn-outline-warning text-white">Read More</button>
					</a>
				</div>
			  </li>
			  <li class="media mb-5">
				<img src="assets/img/content/product/warrior.jpg" class="align-self-start mr-3" alt="kda" style="max-width:330px; max-height:200px">
				<div class="media-body">
					<h5 class="card-title text-white font-weight-bolder">ELDEN RING IS BEATING DARK SOUL</h5>
					<p class="card-text"><small class="text-muted"><i class="fas fa-tag text-primary">9th November 2020</i></small></p>
					<p class="card-text text-white">Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
					<a href="article.html">
					<button type="button" class="btn btn-lg btn-transparent btn-outline-warning text-white">Read More</button>
					</a>
				</div>
			  </li>
			</ul>
	   </div>
	  <!--- End News-->
	  
	  <!--- Banner -->
	  <div class="content-section pt-0" style="margin-top:80px; padding-bottom:80px;">
        <div class="container">
          <a href="#" class="d-block">
            <div class="position-relative br-n bs-cont bp-c" style="background-image: url('assets/img/content/product/banner_01.jpg');">
              <img src="assets/img/content/product/banner_01.jpg" alt="banner" class="invisible" />
            </div>
          </a>
        </div>
      </div>
	</section>
	<!--- End Banner-->
	
	<!--- Footer -->
	<footer class="footer pt-5 footer-dark" style="background: linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);">
      <div class="container">
          <div class="row gutters-y">
              <div class="col-6 col-lg-3">
                <a href="#" class="logo d-block"><img src="assets/img/favicons/logo-Drift.png" alt="Drift" class="logo-dark"></a>
                <p class="text-white">Drift is your no 1 destination for gaming related goods at the best prices.</p>
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
                  <a class="nav-link text-white" href="about.html">Console</a>
                  <a class="nav-link text-white" href="about.html">Accessories</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase text-white mb-1 ml-3">ABOUT</h6>
                <div class="nav flex-column">
                  <a class="nav-link text-white" href="about.html">Our Team</a>
                  <a class="nav-link text-white" href="news.html">News</a>
                  <a class="nav-link text-white" href="news.html">Team</a>
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
			<a href="checkout-order.html" class="btn btn-lg btn-outline-light">View cart</a>
			<a href="checkout-order.html" class="btn btn-lg btn-outline-light ml-3">Checkout</a>
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
			<a href="checkout-order.html" class="btn btn-lg btn-outline-light">Renew</a>
			<a href="checkout-order.html" class="btn btn-lg btn-outline-light ml-3">Cancel</a>
		  </div>
		</div>
    </div> 
	
	
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