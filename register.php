<!-------
Jay
------>

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
	<link rel="stylesheet" href="assets/css/w3.css">
	
	
	<!--- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
	
	<!--- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!--Icons-->
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
    <title>Drift | Register</title>

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
	
	<div class="container text-white mt-5 mb-5">
		<div class="col-md-7 col-lg-8 p-4" style="background-color:#1a1c1a;">
		  <h4 class="mb-3">Register</h4>
		  <form class="needs-validation" novalidate action="assets/php/registeruser.php" method="post">
			<div class="row g-3">
			  <div class="col-sm-6">
				<label for="firstName" class="form-label">First name</label>
				<input type="text" class="form-control" id="firstName" placeholder="" value="" required name="firstname">
				<div class="invalid-feedback">
				  Valid first name is required.
				</div>
			  </div>

			  <div class="col-sm-6">
				<label for="lastName" class="form-label">Last name</label>
				<input type="text" class="form-control" id="lastName" placeholder="" value="" required name="lastname">
				<div class="invalid-feedback">
				  Valid last name is required.
				</div>
			  </div>

			  <div class="col-12">
				<label for="username" class="form-label">Username</label>
				<div class="input-group">
				  <span class="input-group-text">@</span>
				  <input type="text" class="form-control" id="username" placeholder="Username" required name="username">
				<div class="invalid-feedback">
					Your username is required.
				  </div>
				</div>
			  </div>

			  <div class="col-12">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" id="email" required name="email">
				<div class="invalid-feedback">
				  Please enter a valid email address.
				</div>
			  </div>
			  
			  <div class="col-12">
				<label for="inputPassword" class="form-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword" required name="password">
				</div>
				<div class="invalid-feedback">
				  Please fill this field.
				</div>
			  </div>
			  
			  <div class="col-12">
				<label for="inputPassword" class="form-label">Retype the Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword" required name="retypepassword">
				</div>
				<div class="invalid-feedback">
				  Please fill this field
				</div>
			  </div>

			</div>
			  <button class="btn btn-warning btn-lg mx-auto mt-3" type="submit" href=>Sign Up</button>
		  </form>
		</div>
	</div>
	
  

    </center>
    </body>
	
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
		  'use strict'

		  // Fetch all the forms we want to apply custom Bootstrap validation styles to
		  var forms = document.querySelectorAll('.needs-validation')

		  // Loop over them and prevent submission
		  Array.prototype.slice.call(forms)
			.forEach(function (form) {
			  form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				  event.preventDefault()
				  event.stopPropagation()
				}

				form.classList.add('was-validated')
			  }, false)
			})
		})()
	</script>

</html>