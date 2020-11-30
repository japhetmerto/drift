<?php
	require_once "databaseconfig.php";
	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	$address = $_POST["address"];
 	$address2 = $_POST["address2"];
 	$country = $_POST["country"];
 	$state = $_POST["state"];
 	$zip = $_POST["zip"];
 	$payment_method = $_POST["payment_method"];
 	$card_name = $_POST["card_name"];
 	$card_no = $_POST["card_no"];
 	$expiration = $_POST["expiration"];
 	$cvv = $_POST["cvv"];

 	echo "address: $address <br>";
 	echo "address2: $address <br>";
 	echo "country: $country <br>";
 	echo "state: $state <br>";
 	echo "zip: $zip <br>";
 	echo "payment_method: $payment_method <br>";
 	echo "card_name: $card_name <br>";
 	echo "card_no: $card_no <br>";
 	echo "expiration: $expiration <br>";
 	echo "cvv: $cvv <br>";

 	// Insert to checkout table
	$CheckoutID = "";
	$bytes = "";
	$bytes= random_bytes(5);
	$CheckoutID .="BILL-";
	$CheckoutID .= bin2hex($bytes);

	date_default_timezone_set("Asia/Kuala_Lumpur");
	$currentdate = date('Y-m-d', time());

	// Insert to item table
	$stmt = $connection -> prepare("INSERT INTO checkout VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt -> bind_param("ssssssssssssssss", $CheckoutID, $_SESSION["cart_id"], $_SESSION["user_id"], $currentdate, $_SESSION["no_of_items"], $_SESSION["total_amount"], $address, $address2, $country, $state, $zip, $payment_method, $card_name, $card_no, $expiration, $cvv);
	$stmt -> execute();

	// Minus the items on the product stocks
	$query = "SELECT * FROM item WHERE cart_id = '{$_SESSION["cart_id"]}'";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$product_id = $row["product_id"];
		$quantity = $row["quantity"];
		$product_name = $row["product_name"];

		$itemname_arr = array();
		$itemname_arr = explode(" - ", $product_name);

		/*
		echo "$itemname_arr[0] <br>";
		echo "$itemname_arr[1] <br>";
		echo "$itemname_arr[2] <br>";
		*/

		// Get the current product stock
		$queryProduct = "SELECT * FROM store_{$itemname_arr[2]} WHERE product_id = '{$product_id}' AND variants = '{$itemname_arr[1]}'";
		$resultProduct = $connection -> query($queryProduct);
		$rowProduct = $resultProduct -> fetch_array(MYSQLI_ASSOC);

		$stock = $rowProduct["stock"];
		$newStock = $stock - $quantity;
		$variants = $itemname_arr[1];

		// Update stock
		$stmt = $connection -> prepare("UPDATE store_{$itemname_arr[2]} SET stock = ? WHERE product_id = ? AND variants = ?");
		$stmt -> bind_param("sss", $newStock, $product_id, $variants);
		$stmt -> execute();
	}


	// Remove the userID from the cart
	$stmt = $connection -> prepare("UPDATE cart SET user_id = NULL WHERE `cart_id` = ?");
	$stmt -> bind_param("s", $_SESSION["cart_id"]);
	$stmt -> execute();

	// And Create a new Cart with new userID
	// New User, new cart id
	$cartID = "";
	$bytes = "";
	$bytes= random_bytes(5);
	$cartID .="CART-";
	$cartID .= bin2hex($bytes);

	$zeroValue = "0";
	$stmt = $connection -> prepare("INSERT INTO cart VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt -> bind_param("ssssssss", $cartID, $_SESSION["user_id"], $zeroValue, $zeroValue, $zeroValue, $zeroValue, $zeroValue, $zeroValue,);
	$stmt -> execute();

	// Redirect user
	header("Location: ../../order-placed.php");
?>