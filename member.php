<?php
	require_once "assets/php/utilities.php";
	session_start();

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
	
	<style>
		body, html {
		  height: 100%;
		  margin: 0;
		  font: 400 15px/1.8 "Lato", sans-serif;
		  color: #777;
		}

		.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4{
		  position: relative;
		  opacity: 1;
		  background-attachment: fixed;
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;

		}
		.bgimg-1 {
		  background-image: url("assets/img/content/member/bg-03.jpg");
		  min-height: 100%;
		}

		.bgimg-2 {
		  background-image: url("assets/img/content/member/bg-04.jpg");
		  min-height: 400px;
		}

		.bgimg-3 {
		  background-image: url("assets/img/content/member/bg-02.jpg");
		  min-height: 400px;
		}

		.bgimg-4 {
		  background-image: url("assets/img/content/member/bg-01.jpg");
		  min-height: 400px;
		}

		.caption {
		  position: absolute;
		  left: 0;
		  top: 50%;
		  width: 100%;
		  text-align: center;
		  color: #000;
		}

		.caption span.border {
		  background-color: #111;
		  color: #fff;
		  padding: 18px;
		  font-size: 25px;
		  letter-spacing: 10px;
		}

		h3 {
		  letter-spacing: 5px;
		  text-transform: uppercase;
		  font: 20px "Lato", sans-serif;
		  color: #111;
		}

		/* Turn off parallax scrolling for tablets and phones */
		@media only screen and (max-device-width: 1024px) {
		  .bgimg-1, .bgimg-2, .bgimg-3 {
			background-attachment: scroll;
		  }
		}

	</style>

	<!--- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
    <title>Drift | Membership</title>
  </head>
  <body>
  
	<!--- Navbar -->
	<?php require_once "assets/php/shownavbar.php"; ?>
	<!--- End NavBar -->
	
			<!----- Content ----->
		    <div class="bgimg-1">
			  <div class="caption">
			  <span class="border">Why You Should Be a Member ?</span>
			  </div>
			</div>

			<div style="color: #777;background-color:black;text-align:center;padding:50px 80px;text-align: center;">
			  <h3 class="text-white" style="text-align:center;">Gain a lot of privileges</h3>
			  <p class="text-white">Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam.</p>
			</div>

			<div class="bgimg-2">
			  <div class="caption">
			  <span class="border">GET EXCLUSIVE GAME FROM US</span>
			  </div>
			</div>

			<div style="position:relative;">
			  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: center;">
			  <p>Expand your game collection with exclusive game included every month—yours to play for as long as you're a member.Build your collection with blockbuster hits, indie gems and multiplayer party games to play online or at home with family and friends.</p>
			  </div>
			</div>

			<div class="bgimg-3">
			  <div class="caption">
			  <span class="border">EXCLUSIVE DISCOUNT</span>
			  </div>
			</div>

			<div style="position:relative;">
			  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: center;">
			  <p>Join us to get exclusive access to the best deals on select games, add-ons, pre-orders and more from ou website. Members can enjoy extra savings on top of regular Drift promotional prices, early access to demos, beta trials, pre-orders and other exclusive rewards and offers reserved for our member</p>
			  </div>
			</div>

			<!------- Pricing ------->
			<div class="bgimg-4">
			  <div class="container pt-5">
				  <div class="border text-center bg-dark mb-5">
					  <h1 class="text-white">Pricing</h1>
					  <p class="text-white lead">Choose a one, three or 12-month recurring payment plan and take your gaming experience to the next level.</p>
				  </div>
			  </div>
				<div class="container">
				  <div class="row row-cols-1 row-cols-md-3 text-center">
					<div class="col">
					  <div class="card mb-4 shadow-sm">
					  <div class="card-header">
						<h4 class="my-0 font-weight-normal">12 Months</h4>
					  </div>
					  <div class="card-body">
						<h1 class="card-title pricing-card-title">RM159</h1>
						<ul class="list-unstyled mt-3 mb-4">
						  <li>Equivalent to RM13.25 / month</li>
						</ul>
						<a href="checkout-membership.php?month=12&price=159" type="button" class="btn btn-lg btn-block btn-warning">Buy now</a>
					  </div>
					</div>
					</div>
					<div class="col">
					  <div class="card mb-4 shadow-sm">
					  <div class="card-header">
						<h4 class="my-0 font-weight-normal">3 Months</h4>
					  </div>
					  <div class="card-body">
						<h1 class="card-title pricing-card-title">RM69</h1>
						<ul class="list-unstyled mt-3 mb-4">
						  <li>Equivalent to RM23.00 / month</li>
						</ul>
						<a href="checkout-membership.php?month=3&price=69"type="button" class="btn btn-lg btn-block btn-warning">Buy now</a>
					  </div>
					</div>
					</div>
					<div class="col">
					  <div class="card mb-4 shadow-sm">
					  <div class="card-header">
						<h4 class="my-0 font-weight-normal">1 Months</h4>
					  </div>
					  <div class="card-body">
						<h1 class="card-title pricing-card-title">RM29</h1>
						<ul class="list-unstyled mt-3 mb-4">
						  <li>Equivalent to RM29.00 / month</li>
						</ul>
						<a href="checkout-membership.php?month=1&price=29"type="button" class="btn btn-lg btn-block btn-warning">Buy now</a>
					  </div>
					</div>
					</div>
				  </div>
				</div>
			</div>
			<!----- End Content ----->

	
	
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