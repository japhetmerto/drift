<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

	// Get the values from POST
	$firstname = mysql_entities_fix_string($connection, $_POST["firstname"]);
	$lastname = mysql_entities_fix_string($connection, $_POST["lastname"]);
	$username = mysql_entities_fix_string($connection, $_POST["username"]);
	$email = mysql_entities_fix_string($connection, $_POST["email"]);
	$password = mysql_entities_fix_string($connection, $_POST["password"]);
	$retypepassword = mysql_entities_fix_string($connection, $_POST["retypepassword"]);

	// Check if the username is not unique
	$table = "user_details";
	$column = "username";
	$isUniqueUsername = isUnique($connection, $table, $column, $username);

	$_SESSION["errormessage"] = "";

	// If username is not unique
	if ($isUniqueUsername == 0) {
		$_SESSION["errormessage"] .= "Username is not unique <br>";
	} 

	// If password did not match
	if (strcmp($password, $retypepassword) != 0) {
		$_SESSION["errormessage"] .= "Password did not match";
	}

	// Check if the password and retypepassword are the same
	if ($isUniqueUsername && strcmp($password, $retypepassword) == 0) {
		// Create a hash for the password
		$hash = password_hash($password, PASSWORD_DEFAULT);

		// Generate random ID
		$bytes= random_bytes(5);
		$randomID = "";
		$randomID .="USER-";
		$randomID .= bin2hex($bytes);

		$userType = "User";

		// Insert values
		$stmt = $connection -> prepare("INSERT INTO user_details (user_id, user_type, fname, lname, username, password, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
 		$stmt -> bind_param("sssssss", $randomID, $userType, $firstname, $lastname, $username, $hash, $email);
 		$stmt -> execute();

 		// New User, new cart id
 		$cartID = "";
 		$bytes = "";
		$bytes= random_bytes(5);
		$cartID .="CART-";
		$cartID .= bin2hex($bytes);

		$zeroValue = "0";
		$stmt = $connection -> prepare("INSERT INTO cart VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
 		$stmt -> bind_param("ssssssss", $cartID, $randomID, $zeroValue, $zeroValue, $zeroValue, $zeroValue, $zeroValue, $zeroValue,);
 		$stmt -> execute();
 		
		// Redirect to registersuccessful
		header("Location: ../../registersuccessful.php");
	} else {
		// Redirect to registerfail
		header("Location: ../../registerfail.php");
	}

	// Closing connection
	$stmt -> close();
	$connection -> close();
?>