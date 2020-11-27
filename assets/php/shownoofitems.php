<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	$_SESSION["noitemscart"] = "";

 	if (isset($_SESSION["username"]) && $_SESSION["user_type"] != "Admin") {	
		// Get the cart id
		$query = "SELECT * FROM cart WHERE user_id = '{$_SESSION["user_id"]}'";
		$result = $connection -> query($query);
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["noitemscart"] .= $row['no_of_items'];

	} else {
		$_SESSION["noitemscart"] .= "0";
	}

?>