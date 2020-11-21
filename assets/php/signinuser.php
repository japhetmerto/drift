<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Get the values from POST
 	$username = mysql_entities_fix_string($connection, $_POST["username"]);
 	$password = mysql_entities_fix_string($connection, $_POST["password"]);

 	// If staysignedin is set
 	if (isset($_POST["staysignedin"])) {
 		$staysignedin = mysql_entities_fix_string($connection, $_POST["staysignedin"]);
	}

	// Set session timeout
	if ($staysignedin == "on"){
		// 7 days
		ini_set("session.gc_maxlifetime", 7 * 60 * 60 * 24);
	} else {
		// 1 day
		ini_set("session.gc_maxlifetime", 60 * 60 * 24);
	}

	session_start();

	if (isset($_POST["staysignedin"])) {
		echo "staysignedin: $staysignedin <br>";
	}

	// Check username
	$stmt = $connection -> prepare("SELECT * FROM user_details WHERE username = ?");
	$stmt -> bind_param("s", $username);
	$stmt -> execute();
	$result = $stmt -> get_result();
	

	// If user not found
	if (!$result -> num_rows) {
		// Redirect to signinfail.php
		header("Location: ../../signinfail.php");
	} else {
		$row = $result -> fetch_array(MYSQLI_ASSOC);
 		
		// Set values to session variables
		$_SESSION["user_id"] = $row["user_id"];
		$_SESSION["firstname"] = $row["fname"];
		$_SESSION["lastname"] = $row["lname"];
		$_SESSION["username"] = $row["username"];
		$_SESSION["email"] = $row["email"];
		$_SESSION["user_type"] = $row["user_type"];

 		if (password_verify($password, $row["password"])) {
 			// User, redirect to index.php
			header("Location: ../../index.php");
 		} elseif ($row["user_type"] == "Admin" && $row["password"] == $password) {
 			// Admin
 			$_SESSION["phone_no"] = $row["phone_no"];
			$_SESSION["address"] = $row["address"];
			$_SESSION["postcode"] = $row["postcode"];
			$_SESSION["district"] = $row["district"];
			$_SESSION["state"] = $row["state"];
			$_SESSION["image_link"] = $row["image_link"];

			// Redirect to admin.php
 			header("Location: ../../admin.php");
 		} else {
 			// Redirect to siginfail.php
 			header("Location: ../../signinfail.php");
 		}
	}

	// Close all connection
	$result -> close();
	$stmt -> close();
	$connection -> close();
?>