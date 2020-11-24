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
  <a class="active" href="adminarticlenews.php"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;Article & News</a>
  <a href="adminproductlist.php"><i class="fa fa-list-ul"></i>&nbsp;&nbsp;Product List</a>
  <a href="adminorderstock.php"><i class='fas fa-pencil-alt'></i>&nbsp;&nbsp;Order Stock</a>
  <a href="adminprofile.php"><i class='fas fa-user-circle'></i>&nbsp;&nbsp;User Profile</a>
  <a href="assets/php/logout.php"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;Logout</a>
  </center>
</div>
<div class="content" style="background-color:#d7dbde;">
<section style="background-color:;">
<center>
<br>
<h2>Add New Article / News</h2>
<br>

<center>
<form class="needs-validation" method="post" action="assets/php/addarticlenews.php">
			<div class="row g-3">
			  <div class="col-sm-6">
				<label for="id" class="form-label">Article Title</label>
				<input type="text" class="form-control" id="id" placeholder="" value="" required name="article_title">
				<div class="invalid-feedback">
				  Valid Article ID is required.
				</div>
			  </div>

			  <div class="col-sm-6">
				<label for="articleTitle" class="form-label">Article Desc</label>
				<input type="text" class="form-control" id="articleTitle" placeholder="" value="" required name="article_desc">
				<div class="invalid-feedback">
				  Valid Article Title is required.
				</div>
			  </div>
			  <br>
			  <div class="col-12">
				<label for="authorName" class="form-label">Author Name</label>
				<input type="text" class="form-control" id="authorName" placeholder="" value="" required name="author_name">
				<div class="invalid-feedback">
				  Valid Article Title is required.
				</div>
			  </div>
			  <br>
<br>
			  <div class="col-12">
				<label for="articleContent" class="form-label">Article Content</label>
				<div class="input-group">
				  
				  <textarea type="text" class="form-control" id="articleContent" placeholder="" rows="10" cols="50" required name="article_content"></textarea>
				<div class="invalid-feedback">
					Your Content is required.
				  </div>
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
        <label for="productCategory" class="form-label">Category</label><br>
            <select name="type" required>
        <option value="Game">Announcements</option>
        <option value="Console">Product Release</option>
        <option value="Accessories">Press Conference</option>
        </select>
        </div>
        
        <div class="col-sm-4">
				<label for="date" class="form-label">Date</label>
				<input type="date" class="form-control" id="date" required name="date">
				<div class="invalid-feedback">
				  Please enter a valid Image Link.
				</div>
			  </div>
			  
			  

			</div>
			<!-- Buttons -->
			  <button class="btn btn-warning btn-lg mx-auto mt-3" type="submit">Add Article</button>
			
		  </form>
		  <a href="adminarticlenews.php">
			  <button class="btn btn-warning btn-lg mx-auto mt-3" style="background-color:red;color:white;">Cancel</button>
			</a>
</center>

</body>
</html>
