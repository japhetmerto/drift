<?php
	require_once "assets/php/databaseconfig.php";
	require_once "assets/php/utilities.php";
	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

	$_SESSION["article_id"] = mysql_entities_fix_string($connection, $_GET["article_id"]);


	require_once 'assets/php/showarticledetails.php';
	require_once "assets/php/shownewsarchives.php";

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
	
    <title>Drift | Article</title>
  </head>
  <body>
  
	<!--- Navbar -->
	<?php require_once "assets/php/shownavbar.php"; ?>
	<!--- End NavBar -->
	
	<section class="content-section" style="background: linear-gradient(to bottom, #000000 0%,#4f4c4c 100%);">
		
		<div class="container">
			<!---- Breadcrumb ----->
			<div class="container pt-3 pb-2">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php" class="text-secondary">Home</a></li>
					<li class="breadcrumb-item"><a href="news.php" class="text-secondary">News</a></li>
					<li class="breadcrumb-item active" aria-current="page">Article</li>
				  </ol>
				</nav>
			</div>
		
		
			<div class="card text-white bg-transparent rounded">
			  <img src="assets/img/bg/<?php echo $_SESSION["image_link"]; ?>" class="card-img" alt="title" style="opacity:0.25; height:350px; object-fit:cover;">
			  <div class="card-img-overlay col-md-8 p-4">
				<h1 class="display-4 font-italic text-warning"><b><?php echo $_SESSION["article_title"]; ?></b></h1>
				<p class="lead my-3"><?php echo $_SESSION["article_desc"]; ?></p>
				<p class="lead mb-0"><?php echo $_SESSION["date"]; ?></p>
			  </div>
			</div>
			
			<div class="row pt-5">
				<div class="col-md-8">
				  <h3 class="pb-4 mb-4 font-italic border-bottom text-white">
					From <b class="text-warning"><?php echo $_SESSION["author_name"]; ?></b>
				  </h3>

				  <div class="blog-post text-white">
					<h2 class="blog-post-title"><?php echo $_SESSION["article_title"]; ?></h2>
					<p class="blog-post-meta"><?php echo $_SESSION["newdate"]; ?> by <a href="#"><?php echo $_SESSION["author_name"]; ?></a></p>
					<?php echo $_SESSION["article_content"]; ?>
				  </div><!-- /.blog-post -->

				</div>

				<aside class="col-md-4">

				  <div class="p-4 border rounded">
					<h4 class="font-italic text-warning">Archives</h4>
					<ol class="list-unstyled mb-0">
					  <?php echo $_SESSION["newsArchives"] ; ?>
					</ol>
				  </div>
				</aside>

			  </div><!-- /.row -->
			  
			  
			  <!----- Comments ------>
			  <h3 id="comments" class="text-warning pt-5">Comments</h3>
			  <hr class="bg-white">
				  <div class="review text-white mt-5">
					<div class="rattings-wrapper">
						<?php require_once "assets/php/showcomment.php"; ?>
					</div>
				</div> 
				
				<!----- Way to comment ------->
				<form class="form-product-review pt-5 text-white" method="post" action="assets/php/addcomment.php">
					<h5>ADD <b class="text-warning">YOUR</b> COMMENT</h5>
					<div class="form-group">
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
				 
				 
				 <!----- Related Post ----->
				 
				 <div class="card-deck pb-5">
					 
				</div>
	
		</div><!----- container ----->
		
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