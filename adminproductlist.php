<?php
    require_once "assets/php/utilities.php";
    session_start();
?>
<!----
Jay
---->

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
<body style="background-color:#d7dbde;">
<div class="sidebar max-width auto" style="color:#000;background-color:#bdc3c7">
	<center>
    <h3>Hello, Anon</h3>
  <a href="admin.php" ><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Home</a>
  <a href="adminarticlenews.php"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Article & News</a>
  <a class="active" href="adminproductlist.php"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Product List</a>
  <a href="adminorderstock.php"><i class='fas fa-pencil-alt'></i>&nbsp;&nbsp;Order Stock</a>
  <a href="adminprofile.php"><i class='fas fa-user-circle'></i>&nbsp;&nbsp;User Profile</a>
  <a href="assets/php/logout.php"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Logout</a>
  </center>
</div>
<div class="content">
<center>
<br>
<h1>Product List</h1>

<br><a class="btn btn-primary" href="adminaddproduct.php">
  Add New Product
</a>
</center><br>
  <table class="table">
  <thead class="thead-dark">
    
                      <th>
                        Product Name
                      </th>
                      <th>
                        Variant
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Stock Left
                      </th>
                      <th>
                        Platform
                      </th>
                      <th>
                        Release Date
                      </th>
                      <th>
                      
                      </th>
                      <th>
                      
                      </th>
                      <th class="text-right">
                        
                      </th>
  </thead >
  <tbody>
    <?php require 'assets/php/showproduct.php'; ?>
  </tbody>
</table>
</div>

</body>
</html>
