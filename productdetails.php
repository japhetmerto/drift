<?php
	require_once "assets/php/utilities.php";
	session_start();

	$_SESSION["product_id"] = $_GET["product_id"];
	$_SESSION["type"] = $_GET["type"];
	$_SESSION["variants"] = $_GET["variants"];

	require_once "assets/php/utilities.php";
	require_once 'assets/php/showproductdetails.php';
	require_once 'assets/php/showrating.php';
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
	<?php require_once "assets/php/shownavbar.php"; ?>
	<!--- End NavBar -->
	
	<section class="content-section" style="background: linear-gradient(to bottom, #000000 0%,#4f4c4c 100%);">

	
	<!---- Content ----->
	<main class="container">
		<!---- Breadcrumb ----->
		<div class="container pt-3">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php" class="text-secondary">Home</a></li>
				<li class="breadcrumb-item"><a href="store-<?php echo $_SESSION["type"]; ?>.php" class="text-secondary"><?php echo $_SESSION["type"]; ?></a></li>
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
							<?php echo $_SESSION["ratingStars"]; ?><span class="text-secondary">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["ratings"]; ?> Ratings</span></li>
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
					  <form class="needs-validation" action="assets/php/additem.php" method="post">
					  <div>
						  <label for="quantity">Quantity :</label>
						  <input type="number" id="quantity" value="1" name="quantity" min="1" max="<?php echo $_SESSION["stock"]; ?>">
					  </div>
					  <div class="input-group mt-2 mb-3">
						  <div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Variants</label>
						  </div>
						  <select class="custom-select" id="inputGroupSelect01" name="variants" onchange="location = this.value;">
							<?php echo $_SESSION["selectvariants"]; ?>
						  </select>
					  </div>
					  	<input type="hidden" name="product_id" value="<?php echo $_SESSION["product_id"]; ?>">
					  	<input type="hidden" name="product_name" value="<?php echo $_SESSION["product_name"]; ?>">
					  	<input type="hidden" name="price" value="<?php echo $_SESSION["price"]; ?>">
					  <div class="text-center pt-3">
					  		<button type="submit" class="btn btn-warning btn-md mr-1 mb-2" name="buynow" value="buy">Buy now</button>
			  				<button type="submit" class="btn btn-warning btn-md mr-1 mb-2" name="addtocart" value="cart"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
						  </div>
					  </form>
			  </div>
			  

			</aside>
		
	  </div><!-- /.row -->
	  
	  
	   <!----- Ratings ----->
	   <section class="content-section" style="background-color:transparent;">
		  <div class="container mt-5 text-white">
		  		<h3 id="ratings">User <b class="text-warning">Rating</b></h3>
				<?php echo $_SESSION["userRatingStars"]; ?>
				<p><?php echo $_SESSION["average_rating"] . " average based on " . $_SESSION["total_reviews"] . " reviews." ?></p>
				<hr style="border:3px solid #f1f1f1">

				<div class="row px-3">
				  <div class="side">
					<div>5 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-5" style="width:<?php echo $_SESSION["fivestar_graph"]; ?>%"></div>
					</div>
				  </div>
				  <div class="side right">
					<div><?php echo $_SESSION["fivestar_amount"] ?></div>
				  </div>
				  <div class="side">
					<div>4 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-4" style="width:<?php echo $_SESSION["fourstar_graph"]; ?>%"></div>
					</div>
				  </div>
				  <div class="side right">
					<div><?php echo $_SESSION["fourstar_amount"]; ?></div>
				  </div>
				  <div class="side">
					<div>3 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-3" style="width:<?php echo $_SESSION["threestar_graph"]; ?>%"></div>
					</div>
				  </div>
				  <div class="side right">
					<div><?php echo $_SESSION["threestar_amount"]; ?></div>
				  </div>
				  <div class="side">
					<div>2 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-2" style="width:<?php echo $_SESSION["twostar_graph"]; ?>%"></div>
					</div>
				  </div>
				  <div class="side right">
					<div><?php echo $_SESSION["twostar_amount"]; ?></div>
				  </div>
				  <div class="side">
					<div>1 star</div>
				  </div>
				  <div class="middle">
					<div class="bar-container">
					  <div class="bar-1" style="width:<?php echo $_SESSION["onestar_graph"]; ?>%"></div>
					</div>
				  </div>
				  <div class="side right">
					<div><?php echo $_SESSION["onestar_amount"]; ?></div>
				  </div>
				</div>
				<hr class="bg-white mt-5">
			
				<div class="review text-white mt-5">
					<div class="rattings-wrapper">
						<?php require "assets/php/showreview.php"; ?>
					</div>
				</div> 
				
				<!----- Way to comment ------->
				<script src="assets/js/rating.js"></script>
				<form class="form-product-review pt-5" id="ratingForm" name="ratingForm" method="post" action="assets/php/addrating.php" onsubmit="DoSubmit()">
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
						 <input type="hidden" id="ratingStars" name="ratingStars" value="0"/>
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
		  
		</section>
	</main><!-- /.container -->

	<!------- More Like This ------->
	<div class="container pt-5">
		
	</div>


  </section>
	
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