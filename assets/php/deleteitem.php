<?php
	require_once "databaseconfig.php";
	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	$item_id = $_GET["item_id"];
 	$cart_id = $_GET["cart_id"];
 	$product_name = $_GET["product_name"];
 	$quantity = $_GET["quantity"];
 	$product_id = $_GET["product_id"];

 	echo "item_id: $item_id <br>";
 	echo "cart_id: $cart_id <br>";
 	echo "product_name: $product_name <br>";
 	echo "quantity: $quantity <br>";
 	echo "product_id: $product_id <br>";

 	$itemname_arr = array();
	$itemname_arr = explode(" - ", $product_name);

	// Get the current product real price and discount offer
	$queryProduct = "SELECT * FROM store_{$itemname_arr[2]} WHERE product_id = '{$product_id}' AND variants = '{$itemname_arr[1]}'";
	$resultProduct = $connection -> query($queryProduct);
	$rowProduct = $resultProduct -> fetch_array(MYSQLI_ASSOC);

	$real_price = $rowProduct["price"];
	$discount_price = $rowProduct["discount_price"];

	// Get the cart id
	$query = "SELECT * FROM cart WHERE user_id = '{$_SESSION["user_id"]}'";
	$result = $connection -> query($query);
	$row = $result -> fetch_array(MYSQLI_ASSOC);

	$no_of_items = $row["no_of_items"];
	$full_price = ($real_price * $quantity);
	$discount = (($real_price - $discount_price) * $quantity);

	// shipping
	$shipping = "5.20";

	$tax = ((6 * ($full_price - $discount)) / 100);

	$total_amount  = (($full_price - $discount) + $tax + $shipping);

	echo "quantity: $quantity <br>";
 	echo "full_price: $full_price <br>";
 	echo "discount: $discount <br>";
 	echo "tax: $tax <br>";
 	echo "shipping: $shipping <br>";
 	echo "total_amount: $total_amount <br>";
	
 	$newno_of_items = $row["no_of_items"] - $quantity;
 	$newfull_price = number_format((float)$row["full_price"], 9) - number_format((float)$full_price, 9);
 	$newdiscount = number_format((float)$row["discount"], 9) - number_format((float)$discount, 9);
 	$newtax = number_format((float)$row["tax"], 9) - number_format((float)$tax, 9);
 	$newtotal_amount = number_format((float)$row["total_amount"], 9) - number_format((float)$total_amount, 9);

 	echo "newno_of_items: $newno_of_items <br>";
 	echo "newfull_price: $newfull_price <br>";
 	echo "newdiscount: $newdiscount <br>";
 	echo "newtax: $newtax <br>";
 	echo "newtotal_amount: $newtotal_amount <br>";

	// Update
	// Insert to cart table 
 	$newshipping = "";
	if ($row["no_of_items"] == $quantity) {
		$newshipping = "0";
	} else {
		$newshipping = "5.20";
	}
	
	$stmt = $connection -> prepare("UPDATE cart SET no_of_items = ?, full_price = ?, discount = ?, tax = ?, shipping = ?, total_amount = ? WHERE cart_id = ? AND user_id = ?");
	$stmt -> bind_param("ssssssss", $newno_of_items, $newfull_price, $newdiscount, $newtax, $newshipping, $newtotal_amount, $cart_id, $_SESSION["user_id"]);
	$stmt -> execute();

	// Recalculate the tax and total_amount
		// Get the cart id
	$query = "SELECT * FROM cart WHERE user_id = '{$_SESSION["user_id"]}'";
	$result = $connection -> query($query);
	$row = $result -> fetch_array(MYSQLI_ASSOC);

	$Xfull_price = $row["full_price"];
	$Xdiscount = $row["discount"];
	// $Xshipping = "5.25";

	$Xtax = ((6 * ($Xfull_price - $Xdiscount)) / 100);
	$Xtotal_amount  = (($Xfull_price - $Xdiscount) + $Xtax + $newshipping);

	$stmt = $connection -> prepare("UPDATE cart SET tax = ?, total_amount = ? WHERE cart_id = ? AND user_id = ?");
	$stmt -> bind_param("ssss", $Xtax, $Xtotal_amount, $cart_id, $_SESSION["user_id"]);
	$stmt -> execute();
	

 	$stmt = $connection -> prepare("DELETE FROM item WHERE item_id = ? AND cart_id = ?");
	$stmt -> bind_param("ss", $item_id, $cart_id);
	$stmt -> execute();

	header("Location: ../../shopping-cart.php");
?>