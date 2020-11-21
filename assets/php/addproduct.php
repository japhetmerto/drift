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
 	$product_description = mysql_entities_fix_string($connection, $_POST["product_description"]);
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

 	// Generate random ID
	$bytes= random_bytes(5);
	$randomID = "";
	$randomID .="PROD-";
	$randomID .= bin2hex($bytes);

	// Insert values - product details
	$stmt = $connection -> prepare("INSERT INTO product_details (product_id, product_name, product_description, type, platform, developer, date_release, image_link) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt -> bind_param("ssssssss", $randomID, $product_name, $product_description, $type, $platform, $developer, $date_release, $image_link);
	$stmt -> execute();

	// Insert values by the product type
	if ($type == "Game") {
		$stmt = $connection -> prepare("INSERT INTO store_game (product_id, product_name, variants, discount_offer, price, discount_price, stock, isMembershipExclusive) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("ssssssss", $randomID, $product_name, $variants, $discount_offer, $price, $discount_price, $stock, $isMembershipExclusive);
		$stmt -> execute();
	} elseif ($type == "Console") {
		$stmt = $connection -> prepare("INSERT INTO store_console (product_id, product_name, variants, discount_offer, price, discount_price, stock) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("sssssss", $randomID, $product_name, $variants, $discount_offer, $price, $discount_price, $stock);
		$stmt -> execute();
	} else {
		$stmt = $connection -> prepare("INSERT INTO store_accessories (product_id, product_name, variants, discount_offer, price, discount_price, stock) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stmt -> bind_param("sssssss", $randomID, $product_name, $variants, $discount_offer, $price, $discount_price, $stock);
		$stmt -> execute();
	}

	// Close all connection
	$stmt -> close();
	$connection -> close();

	// Redirect to adminproductlist
	header("Location: ../../adminproductlist.php");
?>