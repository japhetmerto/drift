<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

	// isMembershipExclusive - if not set
	if (!isset($_POST["isMembershipExclusive"])) {
		$isMembershipExclusive = "False";
	} else {
		$isMembershipExclusive = mysql_entities_fix_string($connection, $_POST["isMembershipExclusive"]);
	}

	// Get the values from POST
 	$product_name = mysql_entities_fix_string($connection, $_POST["product_name"]);
 	$product_description = $_POST["product_description"];
 	$stock = mysql_entities_fix_string($connection, $_POST["stock"]);
 	$price = mysql_entities_fix_string($connection, $_POST["price"]);
 	$discount_offer = mysql_entities_fix_string($connection, $_POST["discount_offer"]);
 	$discount_price = mysql_entities_fix_string($connection, $_POST["discount_price"]);
 	$platform = mysql_entities_fix_string($connection, $_POST["platform"]);
 	$developer = mysql_entities_fix_string($connection, $_POST["developer"]);
 	$image_link = mysql_entities_fix_string($connection, $_POST["image_link"]);
 	$product_image = mysql_entities_fix_string($connection, $_POST["product_image"]);
 	$variants = mysql_entities_fix_string($connection, $_POST["variants"]);
 	$date_release = mysql_entities_fix_string($connection, $_POST["date_release"]);
 	$type = mysql_entities_fix_string($connection, $_POST["type"]);

 	// Add the `product image` at the end of `image link`
 	$image_link .= ", " . $product_image;

 	// If there is an existing game
	$stmt = $connection -> prepare("SELECT * FROM product_details WHERE product_name = ?");
	$stmt -> bind_param("s", $product_name);
	$stmt -> execute();
	$result = $stmt -> get_result();

	$randomID = "";

	// If game not found
	if (!$result -> num_rows) {
		// Generate random ID
		$bytes= random_bytes(5);
		$randomID .="PROD-";
		$randomID .= bin2hex($bytes);
	} else {
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		$randomID .= $row["product_id"];
	}

	// Default ratings
	$ratings = "0";

	// Insert values - product details
	$stmt = $connection -> prepare("INSERT INTO product_details VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt -> bind_param("sssssssss", $randomID, $product_name, $product_description, $type, $ratings, $platform, $developer, $date_release, $image_link);
	$stmt -> execute();

	// Insert values by the product type
	if ($type == "Game") {
		$stmt = $connection -> prepare("INSERT INTO store_game VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("ssssddis", $randomID, $product_name, $variants, $discount_offer, $price, $discount_price, $stock, $isMembershipExclusive);
		$stmt -> execute();
	} elseif ($type == "Console") {
		$stmt = $connection -> prepare("INSERT INTO store_console VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("ssssddi", $randomID, $product_name, $variants, $discount_offer, $price, $discount_price, $stock);
		$stmt -> execute();
	} else {
		$stmt = $connection -> prepare("INSERT INTO store_accessories VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("ssssddi", $randomID, $product_name, $variants, $discount_offer, $price, $discount_price, $stock);
		$stmt -> execute();
	}


	// If there is an existing game
	$stmt = $connection -> prepare("SELECT * FROM average_rating WHERE product_id = ?");
	$stmt -> bind_param("s", $randomID);
	$stmt -> execute();
	$result = $stmt -> get_result();

	// If game not found
	if (!$result -> num_rows) {
		// Ratings
		// Generate random ID
		$rating_id = "";
		$bytes= random_bytes(5);
		$rating_id .="RATE-";
		$rating_id .= bin2hex($bytes);

		$total_reviews = "0";
		$average_rating = "0";
		$fivestar_amount = 0;
		$fourstar_amount = 0;
		$threestar_amount = 0;
		$twostar_amount = 0;
		$onestar_amount = 0;

		$stmt = $connection -> prepare("INSERT INTO average_rating VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("ssssiiiii", $rating_id, $randomID, $total_reviews, $average_rating, $fivestar_amount, $fourstar_amount, $threestar_amount, $twostar_amount, $onestar_amount);
		$stmt -> execute();
	}

	// Close all connection
	$stmt -> close();
	$connection -> close();

	// Redirect to adminproductlist
	header("Location: ../../adminproductlist.php");
?>