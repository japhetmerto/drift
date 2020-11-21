<!-------
Jay
------>

<!DOCTYPE html>
<html lang="en">
    
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main-styles.css"
	
	
	<!--- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
	
	<!--- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
    <title>Drift | Login</title>

    </head>

    <body style="background-image: url(assets/img/bg/bg-1.jpg);height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <center>
		<!--- Navbar -->
	<nav class="navbar navbar-expand-lg border-bottom border-secondary" style="background: linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);">
	  <div class="container rounded mx-auto d-block"> <!--- Align center --->
		    <a class="navbar-brand logo mt-2" href="index.php">
			  <img src="assets/img/favicons/logo-Drift.png" alt="Logo" class="logo-light mx-auto">
			</a>
		</div>
	</nav>
	
    <!--- Background --->
		
		<!--Form Design 1-->
		<h3><br></h3>
		<form class="modal-content animate" action="assets/php/signinuser.php" method="post" style="background:linear-gradient(to bottom, #1a1c1a 0%, #1a1c1a 100%);border-radius: 25px;max-width:50%;padding: 70px 0;text-align: center;">
			<div class="container">
			  <span class="login100-form--title p-b-41 text-white pl-4"> Sign In</span>
			  <br><br>
			  <!--<label for="uname" style="color:white"><b><br><br>Username</b></label>
			  <br>-->
			  <i style="font-size:24px;color:white;" class="fa">&#xf2bd;&nbsp;&nbsp;</i><input type="text" placeholder="Enter Username" name="username" required style="border-radius: 25px;text-align:center;">
				<br><br>
			  <!--<label for="psw" style="color:white"><b>Password</b></label>
			  <br>-->

			  <i style="font-size:24px;color:white;" class="fa">&#xf084;&nbsp;&nbsp;</i><input type="password" placeholder="Enter Password" name="password" required style="border-radius: 25px;text-align:center;">
				<br><br>
			  
			  <button class="btn btn-sm btn-warning text-black ml-3" type="submit">Sign in</button>
			  <br>
			  <label style="color:white">
				<input type="checkbox"  class="ml-2" checked="checked" name="staysignedin"> Stay Signed In
			  </label>
			  <br>
			  <p class="btn btn-sm text-light d-none d-sm-inline-block style ml-2">New To Drift? <a class="" href="register.php">Sign up</a> now!</p>
			</div>

			<div class="container" style="background:black;border-radius: 25px;">
			  
			  <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
			</div>
		</form><!---->

        </center>

    </body>

</html>