<?php
    session_start();

    $_SESSION["product_id"] = $_GET["product_id"];
    $_SESSION["type"] = $_GET["type"];
    $_SESSION["variants"] = $_GET["variants"];

    require_once 'assets/php/showaddstock.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <!--- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
  <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Drift | Admin-Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <!--Fonts and icons-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!--CSS Files-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assest/css/admin2.css" rel="stylesheet">
  <link href="assest/css/materialcolor.css" rel="stylesheet">
  
</head>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: linear-gradient(to top left, #00ffff 0%, #ff6666 100%);
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
  width: 100%;
  border-radius: 12px;

  
}

.sidebar a:hover:not(.active) {
  background-color: black;
  color: white;
  width: 100%;
  border-radius: 12px;
  
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
<body>
<div class="sidebar max-width auto" style="color:#000;background-color:#bdc3c7">
	<center>
    <h3>Hello, Anon</h3>
  <a href="admin.php" ><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Home</a>
  <a href="adminarticlenews.php"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Article & News</a>
  <a href="adminproductlist.php"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Product List</a>
  <a class="active" href="adminorderstock.php"><i class='fas fa-pencil-alt'></i>&nbsp;&nbsp;Order Stock</a>
  <a href="adminprofile.php"><i class='fas fa-user-circle'></i>&nbsp;&nbsp;User Profile</a>
  <a href="assets/php/logout.php"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Logout</a>
  </center>
</div>
<div class="content" style="background-color:#d7dbde;">
<section style="background-color:;">
<center>
<br>
<h2>Add Stock</h2>
<br>

<center>
<form class="needs-validation" method="post" action="assets/php/updatestock.php" >
			<div class="row g-3">
			  

			  <div class="col-12">
				<label for="productName" class="form-label">Product Name</label>
				<input type="text" class="form-control" id="productName" placeholder="" value="<?php echo $_SESSION["product_name"] . " - " . $_SESSION["variants"]; ?>" disabled name="product_name">
				<div class="invalid-feedback">
				  Valid Product Name is required.
				</div>
			  </div>
			  <br>
			  
			  
<br>
			  <div class="col-12">
				<label for="stknum" class="form-label">Stock Number</label>
				<input type="num" class="form-control" id="stknum" required value="<?php echo $_SESSION["stock"]; ?>" name="stock">
				<div class="invalid-feedback">
				  Please enter a valid Num.
				</div>
			  </div>
			  
			  
			  
			  

			</div>
			<!-- Buttons -->
			  <button class="btn btn-warning btn-lg mx-auto mt-3" type="submit" href=>Update Product</button>
			
		  </form>
		  <a href="adminorderstock.php">
			  <button class="btn btn-warning btn-lg mx-auto mt-3" style="background-color:red;color:white;">Cancel</button>
			</a>
</center>

</body>
</html>
