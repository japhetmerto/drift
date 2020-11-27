<?php
	require_once "assets/php/utilities.php";
	session_start();

	require_once "assets/php/showcheckoutcartitems.php";
	require_once "assets/php/showshoppingcartsummary.php";

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
	
	
    <title>Drift | Checkout</title>
  </head>
  <body>
  
	<!--- Navbar -->
	<?php require_once "assets/php/shownavbar.php"; ?>
	<!--- End NavBar -->
	
	<!------ Checkout ------>
	<section class="content-section" style="background: linear-gradient(to bottom, #000000 0%,#4f4c4c 100%);">
    
	<div class="container text-white">
	  <div class="py-5 text-center">
		<img class="d-block mx-auto mb-4" src="assets/img/favicons/apple-touch-icon-57x57.png" alt="" width="72" height="72">
		<h2><b class="text-warning">Checkout</b> form</h2>
	  </div>

	  <div class="row g-3">
		<div class="col-md-5 col-lg-4 order-md-last">
		  <h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text-white">Your <b class="text-warning">Cart</b></span>
			<span class="badge bg-secondary rounded-pill"><?php echo $_SESSION["no_of_items"]; ?></span>
		  </h4>
		  <ul class="list-group mb-3">
			<?php echo $_SESSION["showCheckoutAllItems"]; ?>
			<li class="list-group-item d-flex justify-content-between bg-light">
			  <div class="text-success">
				<h6 class="my-0">Discount</h6>
			  </div>
			  <span class="text-success">RM <?php echo $_SESSION["discount"]; ?></span>
			</li>
			<li class="list-group-item d-flex justify-content-between bg-light">
			  <div class="text-danger">
				<h6 class="my-0">Tax</h6>
			  </div>
			  <span class="text-danger">RM <?php echo $_SESSION["tax"]; ?></span>
			</li>
			<li class="list-group-item d-flex justify-content-between bg-light">
			  <div class="text-danger">
				<h6 class="my-0">Shipping</h6>
			  </div>
			  <span class="text-danger">RM <?php echo $_SESSION["shipping"]; ?></span>
			</li>
			<li class="list-group-item d-flex justify-content-between text-dark">
			  <span>Total (RM)</span>
			  <strong>RM <?php echo $_SESSION["total_amount"]; ?></strong>
			</li>
		  </ul>
		</div>
		<div class="col-md-7 col-lg-8">
		  <h4 class="mb-3 ">Billing <b class="text-warning">Address</b></h4>
		  <form class="needs-validation" novalidate action="assets/php/addcheckout.php" method="post">
			<div class="row g-3">
			  <div class="col-sm-6">
				<label for="firstName" class="form-label">First name</label>
				<input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $_SESSION["firstname"]; ?>" required>
				<div class="invalid-feedback">
				  Valid first name is required.
				</div>
			  </div>

			  <div class="col-sm-6">
				<label for="lastName" class="form-label">Last name</label>
				<input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $_SESSION["lastname"]; ?>" required>
				<div class="invalid-feedback">
				  Valid last name is required.
				</div>
			  </div>

			  <div class="col-12">
				<label for="username" class="form-label">Username</label>
				<div class="input-group">
				  <span class="input-group-text">@</span>
				  <input type="text" class="form-control" id="username" placeholder="Username" required value="<?php echo $_SESSION["username"]; ?>">
				<div class="invalid-feedback">
					Your username is required.
				  </div>
				</div>
			  </div>

			  <div class="col-12">
				<label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
				<input type="email" class="form-control" id="email" placeholder="you@example.com" required value="<?php echo $_SESSION["email"]; ?>">
				<div class="invalid-feedback">
				  Please enter a valid email address for shipping updates.
				</div>
			  </div>

			  <div class="col-12">
				<label for="address" class="form-label">Address</label>
				<input type="text" class="form-control" id="address" placeholder="1234 Main St" required name="address">
				<div class="invalid-feedback">
				  Please enter your shipping address.
				</div>
			  </div>

			  <div class="col-12">
				<label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
				<input type="text" class="form-control" id="address2" placeholder="Apartment or suite" name="address2">
			  </div>

			  <div class="form-group col-md-4">
				  <label for="validationCustom03">Country</label>
				  <select class="custom-select" id="validationCustom03" required name="country">
					<option selected disabled value="">Choose...</option>
					<option value="Malaysia">Malaysia</option>
					<option value="China">China</option>
					<option value="India">India</option>
					<option value="Phillipines">Phillipines</option>
					<option value="USA">USA</option>
				  </select>
				  <div class="invalid-feedback">
					Please select a valid state.
				  </div>
			  </div>

			  <div class="form-group col-md-4">
				  <label for="validationCustom04">State</label>
				  <select class="custom-select" id="validationCustom04" required name="state">
					<option selected disabled value="">Choose...</option>
					<option value="Selangor">Selangor</option>
					<option value="Kedah">Kedah</option>
					<option value="Pulau Pinang">Pulau Pinang</option>
					<option value="Terangganu">Terengganu</option>
					<option value="Kelantan">Kelantan</option>
				  </select>
				  <div class="invalid-feedback">
					Please select a valid state.
				  </div>
			  </div>

			  <div class="col-md-3">
				<label for="zip" class="form-label">Zip</label>
				<input type="text" class="form-control" id="zip" placeholder="" required name="zip">
				<div class="invalid-feedback">
				  Zip code required.
				</div>
			  </div>
			</div>

			<hr class="my-4 bg-white">

			<h4 class="mb-3 text-warning">Payment</h4>

			<div class="my-3">
			  <div class="form-check">
				<input id="credit" name="payment_method" type="radio" class="form-check-input" checked required value="Credit card">
				<label class="form-check-label" for="credit">Credit card</label>
			  </div>
			  <div class="form-check">
				<input id="debit" name="payment_method" type="radio" class="form-check-input" required value="Debit Card">
				<label class="form-check-label" for="debit">Debit card</label>
			  </div>
			  <div class="form-check">
				<input id="paypal" name="payment_method" type="radio" class="form-check-input" required value="Paypal">
				<label class="form-check-label" for="paypal">PayPal</label>
			  </div>
			</div>

			<div class="row gy-3">
			  <div class="col-md-6">
				<label for="cc-name" class="form-label">Name on card</label>
				<input type="text" class="form-control" id="cc-name" placeholder="" required name="card_name">
				<small class="text-muted">Full name as displayed on card</small>
				<div class="invalid-feedback">
				  Name on card is required
				</div>
			  </div>

			  <div class="col-md-6">
				<label for="cc-number" class="form-label">Credit card number</label>
				<input type="text" class="form-control" id="cc-number" placeholder="" required name="card_no">
				<div class="invalid-feedback">
				  Credit card number is required
				</div>
			  </div>

			  <div class="col-md-3">
				<label for="cc-expiration" class="form-label">Expiration</label>
				<input type="text" class="form-control" id="cc-expiration" placeholder="" required name="expiration">
				<div class="invalid-feedback">
				  Expiration date required
				</div>
			  </div>

			  <div class="col-md-3">
				<label for="cc-cvv" class="form-label">CVV</label>
				<input type="text" class="form-control" id="cc-cvv" placeholder="" required name="cvv">
				<div class="invalid-feedback">
				  Security code required
				</div>
			  </div>
			</div>

			<hr class="my-4 bg-white">

			<button class="btn btn-warning btn-lg btn-block mb-5" type="submit">Place Order</button>
		  </form>
		</div>
	  </div>
	 </div>
	 <!----- End Checkout ------>
	
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