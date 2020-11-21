<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	session_start();

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

 	// Insert values - product details
	$stmt = $connection -> prepare("UPDATE product_details SET product_name = ?, product_description = ?, type = ?, platform = ?, developer = ?, date_release = ?, image_link = ? WHERE product_id = ?");
	$stmt -> bind_param("ssssssss", $product_name, $product_description, $type, $platform, $developer, $date_release, $image_link, $_SESSION["product_id"]);
	$stmt -> execute();

	// Insert values by the product type
	if ($type == "Game") {
		$stmt = $connection -> prepare("UPDATE store_game SET product_name = ?, variants = ?, discount_offer = ?, price = ?, discount_price = ?, stock = ?, isMembershipExclusive = ? WHERE product_id = ?");
		$stmt -> bind_param("ssssssss", $product_name, $variants, $discount_offer, $price, $discount_price, $stock, $isMembershipExclusive, $_SESSION["product_id"]);
		$stmt -> execute();
	} elseif ($type == "Console") {
		$stmt = $connection -> prepare("UPDATE store_console SET product_name = ?, variants = ?, discount_offer = ?, price = ?, discount_price = ?, stock = ? WHERE product_id = ?");
		$stmt -> bind_param("sssssss", $product_name, $variants, $discount_offer, $price, $discount_price, $stock, $_SESSION["product_id"]);
		$stmt -> execute();
	} else {
		$stmt = $connection -> prepare("UPDATE store_accessories SET product_name = ?, variants = ?, discount_offer = ?, price = ?, discount_price = ?, stock = ? WHERE product_id = ?");
		$stmt -> bind_param("sssssss", $product_name, $variants, $discount_offer, $price, $discount_price, $stock, $_SESSION["product_id"]);
		$stmt -> execute();
	}

	// Close all the connecitons
 	$stmt -> close();
 	$connection -> close();
 	
	header("Location: ../../adminproductlist.php");
?>