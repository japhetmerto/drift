<?php
	require_once "assets/php/utilities.php";
	session_start();

	require_once "assets/php/showshoppingcartitems.php";
	require_once "assets/php/showshoppingcartsummary.php";

	require_once "assets/php/showoffcanvascart.php";
	require_once "assets/php/shownoofitems.php";
	require_once "assets/php/showoffcanvasmembership.php";
?>
<!DOCTYPE html>
<html lang="en" style="
    background-color: #1a1c1a;
">
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
	<?php require_once "assets/php/shownavbar.php"; ?>
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