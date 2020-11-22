<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	$product_id = mysql_entities_fix_string($connection, $_GET["product_id"]);
 	$type = mysql_entities_fix_string($connection, $_GET["type"]);
 	$variants = mysql_entities_fix_string($connection, $_GET["variants"]);

 	// Delete by type
 	if ($type == "Game") {
 		$stmt = $connection -> prepare("DELETE FROM store_game WHERE product_id = ? AND variants = ?");
		$stmt -> bind_param("ss", $product_id, $variants);
		$stmt -> execute();
 	} elseif ($type == "Console") {
 		$stmt = $connection -> prepare("DELETE FROM store_console WHERE product_id = ? AND variants = ?");
		$stmt -> bind_param("ss", $product_id, $variants);
		$stmt -> execute();
 	} else {
 		$stmt = $connection -> prepare("DELETE FROM store_accessories WHERE product_id = ? AND variants = ?");
		$stmt -> bind_param("ss", $product_id, $variants);
		$stmt -> execute();
 	}

 	// If there is only one variant for the specific product, delete its product details also
 	if ($type == "Game") {
	 	$query = "SELECT * FROM store_game WHERE product_id = $product_id";
		$result = $connection -> query($query);
		
		$rows = $result -> num_rows;

		if ($rows == 0) {
			// Delete in product_details
		 	$stmt = $connection -> prepare("DELETE FROM product_details WHERE product_id = ?");
			$stmt -> bind_param("s", $product_id);
			$stmt -> execute();
		}
	} elseif ($type == "Console") {
	 	$query = "SELECT * FROM store_console WHERE product_id = $product_id";
		$result = $connection -> query($query);
		
		$rows = $result -> num_rows;

		if ($rows == 0) {
			// Delete in product_details
		 	$stmt = $connection -> prepare("DELETE FROM product_details WHERE product_id = ?");
			$stmt -> bind_param("s", $product_id);
			$stmt -> execute();
		}
	} else {
	 	$query = "SELECT * FROM store_game WHERE product_id = $product_id";
		$result = $connection -> query($query);
		
		$rows = $result -> num_rows;

		if ($rows == 0) {
			// Delete in product_details
		 	$stmt = $connection -> prepare("DELETE FROM product_details WHERE product_id = ?");
			$stmt -> bind_param("s", $product_id);
			$stmt -> execute();
		}
	}

 	

	// Close all the connections
	$stmt -> close();
	$connection -> close();

	header("Location: ../../adminproductlist.php");
?>