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

 	// If there is no variant for the specific product, delete its product details also
 	if ($type == "Game") {
 	 	$stmt = $connection -> prepare("SELECT * FROM store_game WHERE product_id = ?");
		$stmt -> bind_param("s", $product_id);
		$stmt -> execute();
		$result = $stmt -> get_result();
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		if ($row == 0) {
			// Get rating_id for this product
	 	 	$stmt = $connection -> prepare("SELECT * FROM average_rating WHERE product_id = ?");
			$stmt -> bind_param("s", $product_id);
			$stmt -> execute();
			$result = $stmt -> get_result();
			$row = $result -> fetch_array(MYSQLI_ASSOC);

			// Store rating id
			$rating_id = $row["rating_id"];

			// Delete in user rating
			$stmt = $connection -> prepare("DELETE FROM user_rating WHERE rating_id = ?");
			$stmt -> bind_param("s", $rating_id);
			$stmt -> execute();

			// Delete in average rating
		 	$stmt = $connection -> prepare("DELETE FROM average_rating WHERE rating_id = ?");
			$stmt -> bind_param("s", $rating_id);
			$stmt -> execute();

			// Delete in product_details
		 	$stmt = $connection -> prepare("DELETE FROM product_details WHERE product_id = ?");
			$stmt -> bind_param("s", $product_id);
			$stmt -> execute();
		}
	} elseif ($type == "Console") {
	 	$stmt = $connection -> prepare("SELECT * FROM store_console WHERE product_id = ?");
		$stmt -> bind_param("s", $product_id);
		$stmt -> execute();
		$result = $stmt -> get_result();
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		if ($row == 0) {
			// Get rating_id for this product
	 	 	$stmt = $connection -> prepare("SELECT * FROM average_rating WHERE product_id = ?");
			$stmt -> bind_param("s", $product_id);
			$stmt -> execute();
			$result = $stmt -> get_result();
			$row = $result -> fetch_array(MYSQLI_ASSOC);

			// Store rating id
			$rating_id = $row["rating_id"];

			// Delete in user rating
			$stmt = $connection -> prepare("DELETE FROM user_rating WHERE rating_id = ?");
			$stmt -> bind_param("s", $rating_id);
			$stmt -> execute();

			// Delete in average rating
		 	$stmt = $connection -> prepare("DELETE FROM average_rating WHERE rating_id = ?");
			$stmt -> bind_param("s", $rating_id);
			$stmt -> execute();

			// Delete in product_details
		 	$stmt = $connection -> prepare("DELETE FROM product_details WHERE product_id = ?");
			$stmt -> bind_param("s", $product_id);
			$stmt -> execute();
		}
	} elseif ($type == "Accessories") {
	 	$stmt = $connection -> prepare("SELECT * FROM store_accessories WHERE product_id = ?");
		$stmt -> bind_param("s", $product_id);
		$stmt -> execute();
		$result = $stmt -> get_result();
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		if ($row == 0) {
			// Get rating_id for this product
	 	 	$stmt = $connection -> prepare("SELECT * FROM average_rating WHERE product_id = ?");
			$stmt -> bind_param("s", $product_id);
			$stmt -> execute();
			$result = $stmt -> get_result();
			$row = $result -> fetch_array(MYSQLI_ASSOC);

			// Store rating id
			$rating_id = $row["rating_id"];

			// Delete in user rating
			$stmt = $connection -> prepare("DELETE FROM user_rating WHERE rating_id = ?");
			$stmt -> bind_param("s", $rating_id);
			$stmt -> execute();

			// Delete in average rating
		 	$stmt = $connection -> prepare("DELETE FROM average_rating WHERE rating_id = ?");
			$stmt -> bind_param("s", $rating_id);
			$stmt -> execute();

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