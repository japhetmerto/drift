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
 	$stock = mysql_entities_fix_string($connection, $_POST["stock"]);

 	// Update by product
 	if ($_SESSION["type"] == "Game") {
 		$stmt = $connection -> prepare("UPDATE store_game SET stock = ?  WHERE product_id = ?");
		$stmt -> bind_param("ss", $stock, $_SESSION["product_id"]);
		$stmt -> execute();
 	}  elseif ($_SESSION["type"] == "Console") {
 		$stmt = $connection -> prepare("UPDATE store_console SET stock = ?  WHERE product_id = ?");
		$stmt -> bind_param("ss", $stock, $_SESSION["product_id"]);
		$stmt -> execute();
 	} else {
 		$stmt = $connection -> prepare("UPDATE store_accessories SET stock = ?  WHERE product_id = ?");
		$stmt -> bind_param("ss", $stock, $_SESSION["product_id"]);
		$stmt -> execute();
 	}
 	
	// Close all the connecitons
 	$stmt -> close();
 	$connection -> close();

 	header("Location: ../../adminorderstock.php");
?>