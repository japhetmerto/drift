<?php
	session_start();

	require_once "assets/php/showshoppingcartitems.php";
	require_once "assets/php/showshoppingcartsummary.php";
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
	
    <title>Drift | Shopping Cart</title>
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
	
	<!--Section: Block Content-->
	<div class="container">

	  <!--Grid row-->
	  <div class="row">

		<!--Grid column-->
		<div class="col-lg-8">
		<h3 class="pt-5 pl-3 text-white"> Your <b class="text-warning">Cart</b></h3>
		<hr class="bg-white">
		
		  <!-- Card -->
		  <div class="card wish-list mb-3 border bg-transparent text-white">
			<div class="card-body">

			  <h5 class="mb-4">Cart (<span class="text-warning"><?php echo $_SESSION["no_of_items"]; ?></span> item(s))</h5>
			  <?php echo $_SESSION["showAllItems"]; ?>
			</div>
		  </div>
		  <!-- Card -->

		</div>
		<!--Grid column-->

		<!--Grid column-->
		<div class="col-lg-4">

		  <h3 class="mb-3 pt-5 text-white">Cart <b class="text-warning">Summary</b></h3>
		  <!-- Card -->
		  <div class="card mb-3 bg-transparent border-white">
			<div class="card-body text-white">
			
			  <ul class="list-group list-group-flush">
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 bg-transparent">
				  Full Price
				  <span>RM <?php echo $_SESSION["full_price"]; ?></span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 bg-transparent">
				  Discount
				  <span>RM <?php echo $_SESSION["discount"]; ?></span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 bg-transparent">
				  Tax
				  <span>RM <?php echo $_SESSION["tax"]; ?></span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-white px-0 bg-transparent">
				  Shipping
				  <span>RM <?php echo $_SESSION["shipping"]; ?></span>
				</li>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3 bg-transparent">
				  <div>
					<strong>The total amount of</strong>
					<strong>
					  <p class="mb-0">(including TAX)</p>
					</strong>
				  </div>
				  <span><strong class="text-warning">RM <?php echo $_SESSION["total_amount"]; ?></strong></span>
				</li>
			  </ul>

			  <a href="checkout.php" type="button" class="btn btn-warning btn-block waves-effect waves-light">Checkout</a>

			</div>
		  </div>
		  <!-- Card -->

		</div>
		<!--Grid column-->

	  </div>
	  <!--Grid row-->

	</div>
	<!--Section: Block Content-->
	
	</section>
	
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