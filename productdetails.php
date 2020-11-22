<?php
	session_start();

	$_SESSION["product_id"] = $_GET["product_id"];
	$_SESSION["type"] = $_GET["type"];
	$_SESSION["variants"] = $_GET["variants"];

	require_once 'assets/php/showproductdetails.php'
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
	
	<style>
		.carousel {
			margin: 50px auto;
			padding: 0 70px;
		}
		.carousel .carousel-item {
			min-height: 330px;
			text-align: center;
			overflow: hidden;
		}
		.carousel .carousel-item .img-box {
			height: 160px;
			width: 100%;
			position: relative;
		}
		.carousel .carousel-item img {	
			max-width: 100%;
			max-height: 100%;
			display: inline-block;
			position: absolute;
			bottom: 0;
			margin: 0 auto;
			left: 0;
			right: 0;
		}
		.carousel .carousel-item h4 {
			font-size: 18px;
			margin: 10px 0;
		}
		.carousel .carousel-item .btn {
			color: #333;
			border-radius: 0;
			font-size: 11px;
			text-transform: uppercase;
			font-weight: bold;
			background: none;
			border: 1px solid #ccc;
			padding: 5px 10px;
			margin-top: 5px;
			line-height: 16px;
		}
		.carousel .carousel-item .btn:hover, .carousel .carousel-item .btn:focus {
			color: #fff;
			background: #000;
			border-color: #000;
			box-shadow: none;
		}
		.carousel .carousel-item .btn i {
			font-size: 14px;
			font-weight: bold;
			margin-left: 5px;
		}
		.carousel .thumb-wrapper {
			text-align: center;
		}
		.carousel .thumb-content {
			padding: 15px;
		}
		.carousel-control-prev, .carousel-control-next {
			height: 100px;
			width: 40px;
			background: none;
			margin: auto 0;
			background: rgba(0, 0, 0, 0.2);
		}
		.carousel-control-prev i, .carousel-control-next i {
			font-size: 30px;
			position: absolute;
			top: 50%;
			display: inline-block;
			margin: -16px 0 0 0;
			z-index: 5;
			left: 0;
			right: 0;
			color: rgba(0, 0, 0, 0.8);
			text-shadow: none;
			font-weight: bold;
		}
		.carousel-control-prev i {
			margin-left: -3px;
		}
		.carousel-control-next i {
			margin-right: -3px;
		}
		.carousel .item-price {
			font-size: 13px;
			padding: 2px 0;
		}
		.carousel .item-price strike {
			color: #999;
			margin-right: 5px;
		}
		.carousel .item-price span {
			color: #86bd57;
			font-size: 110%;
		}	
		.carousel .carousel-indicators {
			bottom: -50px;
		}
		.carousel-indicators li, .carousel-indicators li.active {
			width: 10px;
			height: 10px;
			margin: 4px;
			border-radius: 50%;
			border-color: transparent;
			border: none;
		}
		.carousel-indicators li {	
			background: rgba(0, 0, 0, 0.2);
		}
		.carousel-indicators li.active {	
			background: rgba(0, 0, 0, 0.6);
		}
		.star-rating li {
			padding: 0;
		}
		.star-rating i {
			font-size: 14px;
			color: #ffc000;
		}
	</style>
	
    <title>Drift | Product</title>
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
	
	<section class="content-section" style="background: linear-gradient(to bottom, #000000 0%,#4f4c4c 100%);">

	
	<!---- Content ----->
	<main class="container">
		<!---- Breadcrumb ----->
		<div class="container pt-3">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="main.html" class="text-secondary">Home</a></li>
				<li class="breadcrumb-item"><a href="store.html" class="text-secondary"><?php echo $_SESSION["type"]; ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php echo $_SESSION["product_name"]; ?></li>
			  </ol>
			</nav>
		</div>
		
	  <!---- Image ---->
	  <div class="row">
		  <div class="col-md-8">
				<div class="container" style="position:relative;">
				<h2 class ="text-white pb-2"style="text-align:left"><?php echo $_SESSION["product_name"]; ?></h2>
				  <div class="mySlides">
					<img src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][0]; ?>" style="width:100%">
				  </div>

				  <div class="mySlides">
					<img src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][1]; ?>" style="width:100%">
				  </div>

				  <div class="mySlides">
					<img src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][2]; ?>" style="width:100%">
				  </div>
					
				  <div class="mySlides">
					<img src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][3]; ?>" style="width:100%">
				  </div>

				  <div class="mySlides">
					<img src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][4]; ?>" style="width:100%">
				  </div>
					
				  <div class="mySlides">
					<img src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][5]; ?>" style="width:100%">
				  </div>
					
				  <a class="prev" onclick="plusSlides(-1)">❮</a>
				  <a class="next" onclick="plusSlides(1)">❯</a>

				  <div class="row">
					<div class="column">
					  <img class="demo cursor" src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][0]; ?>" style="width:100%" onclick="currentSlide(1)">
					</div>
					<div class="column">
					  <img class="demo cursor" src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][1]; ?>" style="width:100%" onclick="currentSlide(2)">
					</div>
					<div class="column">
					  <img class="demo cursor" src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][2]; ?>" style="width:100%" onclick="currentSlide(3)">
					</div>
					<div class="column">
					  <img class="demo cursor" src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][3]; ?>" style="width:100%" onclick="currentSlide(4)">
					</div>
					<div class="column">
					  <img class="demo cursor" src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][4]; ?>" style="width:100%" onclick="currentSlide(5)">
					</div>    
					<div class="column">
					  <img class="demo cursor" src="assets/img/content/product-detail/<?php echo $_SESSION["image_link"][5]; ?>" style="width:100%" onclick="currentSlide(6)">
					</div>
				  </div>
				</div>
				
				<!----- Product Description ----->
					<div class="detail text-white bg-transparent border shadow rounded p-4 mt-4">
						<h2 class="blog-post-title">Product <b class="text-warning">Description</b></h2>

						<hr class="bg-white">
						<?php echo $_SESSION["product_description"]; ?>
					</div>
				<!----- End Product Description----->
				  
			</div>

			<!------ Product detail ------>
			<aside class="col-md-4">
			
			  <div class="detail shadow p-4 mb-3 text-white border rounded mt-5">
				<h4><?php echo $_SESSION["newproduct_name"]; ?></h4>
					  <p class="mb-2 text-muted text-uppercase small"><?php echo $_SESSION["type"]; ?></p>
						<div class="rating">
							<li class="fa fa-star text-warning"></li>
							<li class="fa fa-star text-warning"></li>
							<li class="fa fa-star text-warning"></li>
							<li class="fa fa-star text-warning"></li>
							<li class="fa fa-star text-warning"><span class="text-secondary">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["ratings"]; ?> Ratings</span></li>
						</div>
					  <h4 class="mt-3"><span class="mr-1"><strong>RM <?php echo $_SESSION["price"]; ?></strong></span></h4>
					  <div class="table-responsive">
						<table class="table table-sm table-borderless mb-0 text-white">
						  <tbody>
							<tr>
							  <th class="pl-0 w-30" scope="row">Platform</th>
							  <td><?php echo $_SESSION["platform"]; ?></td>
							</tr>
							<tr>
							  <th class="pl-0 w-30" scope="row">Developer</th>
							  <td><?php echo $_SESSION["developer"]; ?></td>
							</tr>
							<tr>
							  <th class="pl-0 w-30" scope="row">Stock Left</th>
							  <td><?php echo $_SESSION["stock"]; ?></td>
							</tr>
						  </tbody>
						</table>
					  </div>
					  <hr class="bg-white">
					  <div>
						  <label for="quantity">Quantity :</label>
						  <input type="number" id="quantity" value="1" name="quantity" min="1" max="5">
					  </div>
					  <div class="input-group mt-2 mb-3">
						  <div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Variants</label>
						  </div>
						  <select class="custom-select" id="inputGroupSelect01" name="variants" onchange="location = this.value;">
							<?php echo $_SESSION["selectvariants"]; ?>
						  </select>
					  </div>
					  <div class="text-center pt-3">
						  <a href="checkout.html" type="button" class="btn btn-warning btn-md mr-1 mb-2">Buy now</a>
						  <a href="shopping-cart.html" type="button" class="btn btn-warning btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</a>
					  </div>
			  </div>
			  

			</aside>
		
	  </div><!-- /.row -->
	  
	  
	   <!----- Ratings ----->
	   <section class="content-section" style="background-color:transparent;" >
		  <div class="container mt-5 text-white">
				<h3>User <b class="text-warning">Rating</b></h3>
				<span class="fa fa-star checked text-warning"></span>
				<span class="fa fa-star checked text-warning"></span>
				<span class="fa fa-star checked text-warning"></span>
				<span class="fa fa-star checked text-warning"></span>
				<span class="fa fa-star"></span>
				<p>4.1 average based on 254 reviews.</p>
				<hr style="border:3px solid #f1f1f1">

				<div class="row px-3">
				  <div class="side">
					<div>5 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-5"></div>
					</div>
				  </div>
				  <div class="side right">
					<div>150</div>
				  </div>
				  <div class="side">
					<div>4 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-4"></div>
					</div>
				  </div>
				  <div class="side right">
					<div>63</div>
				  </div>
				  <div class="side">
					<div>3 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-3"></div>
					</div>
				  </div>
				  <div class="side right">
					<div>15</div>
				  </div>
				  <div class="side">
					<div>2 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-2"></div>
					</div>
				  </div>
				  <div class="side right">
					<div>6</div>
				  </div>
				  <div class="side">
					<div>1 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-1"></div>
					</div>
				  </div>
				  <div class="side right">
					<div>20</div>
				  </div>
				</div>
				<hr class="bg-white mt-5">
			
				<div class="review text-white mt-5">
					<div class="rattings-wrapper">
						<div class="review-ratting">
							<div class="star-author-all d-flex">
								<div class="ratting-author">
									<h3 class="ratting__name">Jane <span class="text-warning">Watson</span></h3>
									<span>12:24</span>
									<span class="pl-2">9 March 2018</span>
								</div>
								<div class="star-rating pt-1 pl-3">
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span>(5)</span>
								</div>
							</div>

							<div class="reviews_content clearfix pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</div>
						</div>
						<div class="review-ratting pt-5">
							<div class="star-author-all d-flex">
								<div class="ratting-author">
									<h3 class="ratting__name">Emma <span class="text-warning">Doe</span></h3>
									<span >12:24</span>
									<span class="pl-2">9 March 2018</span>
								</div>
								<div class="star-rating pt-1 pl-3">
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span class="fa fa-star text-warning" aria-hidden="true"></span>
									<span>(5)</span>
								</div>
							</div>
							<div class="reviews_content clearfix pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</div>
						</div>
					</div>
				</div> 
				
				<!----- Way to comment ------->
				<form class="form-product-review pt-5" method="post">
					<h5>ADD <b class="text-warning">YOUR</b> REVIEW</h5>
					<div class="form-group">
						<label class="control-label">Your Rating</label>
						<div class='rating-stars'>
							<ul id='stars'>
							  <li class='star' title='Poor' data-value='1'>
								<i class='fa fa-star fa-fw'></i>
							  </li>
							  <li class='star' title='Fair' data-value='2'>
								<i class='fa fa-star fa-fw'></i>
							  </li>
							  <li class='star' title='Good' data-value='3'>
								<i class='fa fa-star fa-fw'></i>
							  </li>
							  <li class='star' title='Excellent' data-value='4'>
								<i class='fa fa-star fa-fw'></i>
							  </li>
							  <li class='star' title='WOW!!!' data-value='5'>
								<i class='fa fa-star fa-fw'></i>
							  </li>
							</ul>
						 </div>
					</div>
					<div class="form-group">
						<label class="control-label" for="comment">Your Review</label>
						<textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
					</div>
					<div class="row">
						<div class="form-submit col-md-12">
							<input name="submit" type="submit" id="submit" class="btn btn-warning" value="Send"> 
							<input type="hidden" name="comment_post_ID" value="" id="comment_post_ID"> 
							<input type="hidden" name="comment_parent" id="comment_parent" value="">
						</div>
					</div>
				 </form>
				
		  </div>
		  <hr class="bg-white mt-5">
		</section>
	</main><!-- /.container -->

	<!------- More Like This ------->
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center text-white"><b class="text-warning">More </b>Like This</h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner text-white">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/re3.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Resident Evil 3</h4>
										<p class="item-price">RM159</p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="product-detail.html" class="btn btn-warning text-white">Add to Cart</a>
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/minecraft.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Minecraft</h4>
										<p class="item-price"><strike>RM129</strike> <span>RM79</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="product-detail.html" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>		
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/marvel.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Marvel Avengers</h4>
										<p class="item-price"><strike>RM249</strike> <span>RM199</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<a href="product-detail.html" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>								
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/nioh.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Nioh</h4>
										<p class="item-price"><strike>RM209</strike> <span>RM179</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/fallguys.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Fall Guys</h4>
										<p class="item-price"><strike>RM159</strike> <span>RM89</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/predator.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Predator Hunting Ground</h4>
										<p class="item-price"><strike>RM199</strike> <span>RM149</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/persona.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Persona 5 Royale</h4>
										<p class="item-price"><strike>RM179</strike> <span>RM139</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/doom.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Doom Eternal</h4>
										<p class="item-price">RM199</p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>						
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/tsubasa.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Captain Tsubasa</h4>
										<p class="item-price">RM229</p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/ds.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Death Stranding</h4>
										<p class="item-price">RM119</p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/destiny.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Destiny 2</h4>
										<p class="item-price">Destiny 2</p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>	
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="assets/img/content/product/tlou2.jpg" class="img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>The Last Of Us Part 2</h4>
										<p class="item-price">RM189</p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary text-white">Add to Cart</a>
									</div>						
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			</div>
		</div>
	</div>


  </section>
	
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
			<a href="shopping-cart.html" class="btn btn-lg btn-outline-light">View cart</a>
			<a href="checkout.html" class="btn btn-lg btn-outline-light ml-3">Checkout</a>
		  </div>
		</div>
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