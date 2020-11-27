<?php
	require_once "assets/php/utilities.php";
	session_start();

	require_once "assets/php/showsearchgame.php";

	require_once "assets/php/showoffcanvascart.php";
	require_once "assets/php/shownoofitems.php";
	require_once "assets/php/showoffcanvasmembership.php";
?>
<!doctype html>
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
	
	<title>Result</title>

  </head>
  <body>
  
  <!--- Navbar -->
	<?php require_once "assets/php/shownavbar.php"; ?>
	<!--- End Navbar ---->
	
	
	<!---- Product ---->
	<section class="content-section" style="background: linear-gradient(to bottom, #000000 0%,#4f4c4c 100%);">
		<main class="container pt-5">
			<!----- Sorting ----->
			<h4 class="text-white"><i class="fas fa-search pt-2 pb-3 text-white"></i>   Search result for: <b class="text-warning"><?php echo $_SESSION["searchquery"]; ?></b></h4>
		  <div class="row">
			<div class="col-md-8">
				<div class="row">
					<?php echo $_SESSION["firstSearchGamesAll"]; ?>
				</div>
				<div class="row position-static pt-5">
					<?php echo $_SESSION["otherSearchGamesAll"]; ?>
				</div>
				<div class="row position-static pt-5">
					
				</div>
				<div class="row position-static pt-5">
					
				</div>
				
				<!--- Pagination --->
				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-center pt-5 pb-5">
					
				  </ul>
				</nav>
				<!--- Pagination --->
			</div>	

			
			<!--- Filtering --->
			<aside class="col-md-4">
				<div class="filters border border-white rounded p-4 mb-4">
                  <ul class="sidebar-nav-warning-hover list-unstyled mb-0 text-unset small-3 fw-600">

                    <li class="nav-item text-light transition mb-2 active">
                      <a href="search-result-game.php" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title text-white"><b class="text-warning">Games</b></span>
                      </a>
					  <hr class="bg-white">
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="search-result-console.php" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title text-white">Consoles</span>
                      </a>
					  <hr class="bg-white">
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="search-result-accessories.php" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title text-white">Accessories</span>
                      </a>
					  
                    </li>

                  </ul>
                </div>
				

			</aside>
			<!--- End Filtering ---->
			
		  </div>
		  
		  <!--- End Product--->
		  
		</main>
		
	</section>
	
	
	<!--- Off canvas cart-->
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
    -->
	
	<!--- User JS -->
	<script src="assets/js/main.js"></script>
	
  </body>
</html>