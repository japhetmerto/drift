<?php
    require_once "assets/php/utilities.php";
    session_start();
    
    if (isset($_SESSION["username"]) && $_SESSION["user_type"] != "Admin") {
      header("Location: index.php");
  }
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
  <!-- Bootstrap and CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
       <h3>Hello, <?php echo $_SESSION["firstname"] ?></h3>
  <a href="admin.php" ><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Home</a>
  <a href="adminarticlenews.php"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Article & News</a>
  <a class="active" href="adminproductlist.php"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Product List</a>
  <a href="adminorderstock.php"><i class='fas fa-pencil-alt'></i>&nbsp;&nbsp;Order Stock</a>
  <a href="adminprofile.php"><i class='fas fa-user-circle'></i>&nbsp;&nbsp;User Profile</a>
  <a href="assets/php/logout.php"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Logout</a>
  </center>
</div>
<div class="content" style="background-color:#d7dbde;">
<section style="background-color:;">
<center>
<br>
<h2>Add New Product</h2>
<br>

<center>
<form class="needs-validation" method="post" action="assets/php/addproduct.php">
			<div class="row g-3">
			  

			  <div class="col-12">
				<label for="productName" class="form-label">Product Name</label>
				<input type="text" class="form-control" id="productName" placeholder="" value="" required name="product_name">
				<div class="invalid-feedback">
				  Valid Product Name is required.
				</div>
			  </div>
			  <br>
			  
			  
<br>
			  <div class="col-12">
				<label for="productDesc" class="form-label">Product Description</label>
				<div class="input-group">
				  
				  <textarea type="text" class="form-control" id="productDesc" placeholder="" rows="10" cols="50" required name="product_description"></textarea>
				<div class="invalid-feedback">
					Your Description is required.
				  </div>
				</div>
			  </div>
			  
			  <div class="col-sm-4">
				<label for="stknum" class="form-label">Stock Number</label>
				<input type="number" class="form-control" id="stknum" required name="stock">
				<div class="invalid-feedback">
				  Please enter a valid Num.
				</div>
			  </div>
			  
			  <div class="col-sm-4">
				<label for="productPrice" class="form-label">Product Price</label>
				<input type="number" class="form-control" id="price" required name="price" step="any">
				<div class="invalid-feedback">
				  Please enter a valid Price.
				</div>
			  </div>
			  
			  <div class="col-sm-4">
				<label for="productTempPrice" class="form-label">Discount Offer</label>
				<input type="number" class="form-control" id="discount" name="discount_offer" step="any">
				<div class="invalid-feedback">
				  Please enter a valid Temp Price.
				</div>
			  </div>
			  
			  <div class="col-sm-4">
				<label for="productTempPrice" class="form-label">Discount Price</label>
				<input type="number" onclick="getPrice()" class="form-control" id="total" name="discount_price" step="any">
			  </div>
			  
			  <div class="col-sm-4">
				<label for="productTempPrice" class="form-label">Platform</label>
				<input type="text" class="form-control" id="productTempPrice" required name="platform">
				<div class="invalid-feedback">
				  Please enter a valid Temp Price.
				</div>
			  </div>
			  
			  <div class="col-sm-4">
				<label for="imageLink" class="form-label">Image Link</label>
				<input type="text" class="form-control" id="imageLink" required name="image_link">
				<div class="invalid-feedback">
				  Please enter a valid Image Link.
				</div>
			  </div>
			  
			  <div class="col-sm-4">
				<label for="imageLink" class="form-label">Product Image</label>
				<input type="text" class="form-control" id="imageLink" required name="product_image">
				<div class="invalid-feedback">
				  Please enter a valid Image Link.
				</div>
			  </div>
			  
			  <div class="col-sm-4">
				<label for="imageLink" class="form-label">Variant</label>
				<input type="text" class="form-control" id="imageLink" required name="variants">
				<div class="invalid-feedback">
				  Please enter a valid input.
				</div>
			  </div>
			  
			  <div class="col-sm-4">
				<label for="date" class="form-label">Release Date</label>
				<input type="date" class="form-control" id="date" required name="date_release">
				<div class="invalid-feedback">
				  Please enter a valid Date.
				</div>
			  </div>
			  
			  <div class="col-sm-4">	
				<label for="productTempPrice" class="form-label">Developer</label>	
				<input type="text" class="form-control" id="productTempPrice" required name="developer">	
				<div class="invalid-feedback">	
				  Please enter a Developer Name.	
				</div>	
			  </div>	
			  	
			  <div class="col-sm-4">
			  <label for="productCategory" class="form-label">Category</label><br>
						<select name="type">
				<option value="Game">Games</option>
				<option value="Console">Console</option>
				<option value="Accessories">Console Accessory</option>
				</select>
			  </div>
			  
			  <div class="form-group col-sm-4 mt-5">
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" id="invalidCheck" name="isMembershipExclusive" value="True">
				  <label class="form-check-label" for="invalidCheck">
					Membership exlusive
				  </label>
				  <div class="invalid-feedback">
					You must tick before submitting.
				  </div>
				</div>
			  </div>

			</div>
			<!-- Buttons -->
		  	<button class="btn btn-warning btn-lg mx-auto mt-3" type="submit">Add Product</button>
			
		  </form>
		  <a href="adminproductlist.php">
			  <button class="btn btn-warning btn-lg mx-auto mt-3" style="background-color:red;color:white;">Cancel</button>
			</a>
</center>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	
	<script>
        getPrice = function() {
            var numVal1 = Number(document.getElementById("price").value);
            var numVal2 = Number(document.getElementById("discount").value) / 100;
            var totalValue = numVal1 - (numVal1 * numVal2)
            document.getElementById("total").value = totalValue.toFixed(2);
        }
    </script>
</body>
</html>
