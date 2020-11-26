<?php
	require_once "databaseconfig.php";
	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Check if the user is logged in
 	if (isset($_SESSION["username"])) {
	 	if (isset($_POST['buynow'])) {
	    	echo "Add to Cart <br><br>";

			// Get the cart id
			$query = "SELECT * FROM cart WHERE user_id = '{$_SESSION["user_id"]}'";
			$result = $connection -> query($query);
			$row = $result -> fetch_array(MYSQLI_ASSOC);

			// Prepare values for cart table
			$cart_id  = $row["cart_id"];
			echo "cart_id: $cart_id <br>";
			$user_id = $_SESSION["user_id"];
			echo "user_id: $user_id <br>";

			// No of items
			$quantity = $_POST['quantity'];
			$no_of_items = $row["no_of_items"] + $quantity;
			echo "no_of_items: $no_of_items <br>";

			// full price without discount
			$full_price = $row["full_price"] + ($_SESSION["real_price"] * $quantity);
			echo "full_price: $full_price <br>";

			// discount
			$discount = $row["discount"] + (($_SESSION["real_price"] - $_SESSION["discount_price"]) * $quantity);
			echo "discount: $discount <br>";

			// shipping
			$shipping = "";
			if ($row["shipping"] != "5.20") {
				$shipping = "5.20";
			} else {
				$shipping = "5.20";
			}

			// tax
			$tax = $row["tax"] + ((6 * ($full_price - $discount)) / 100);
			echo "tax: $tax <br>";

			echo "shipping: $shipping <br>";

			// total_amount
			$total_amount  = (($full_price - $discount) + $tax + $shipping);
			echo "total_amount: $total_amount <br><br>";

			// Insert to cart table 
			$stmt = $connection -> prepare("UPDATE cart SET no_of_items = ?, full_price = ?, discount = ?, tax = ?, shipping = ?, total_amount = ? WHERE cart_id = ? AND user_id = ?");
			$stmt -> bind_param("ssssssss", $no_of_items, $full_price, $discount, $tax, $shipping, $total_amount, $cart_id, $user_id);
			$stmt -> execute();

			// Insert to ITEM
	 		$ItemID = "";
	 		$bytes = "";
			$bytes= random_bytes(5);
			$ItemID .="ITEM-";
			$ItemID .= bin2hex($bytes);

			$item_id = $ItemID;
			echo "item_id: $item_id <br>";

			$product_id = $_POST['product_id'];
			echo "product_id: $product_id <br>";

			$product_name = $_POST['product_name'] . " - " . $_SESSION["variants"] . " - " . $_SESSION["type"];
			echo "product_name: $product_name <br>";

			$price = $_POST['price'] * $quantity;
			echo "price: $price <br>";

			// Insert to item table
			$stmt = $connection -> prepare("INSERT INTO item VALUES (?, ?, ?, ?, ?, ?)");
			$stmt -> bind_param("ssssss", $item_id, $cart_id, $product_id, $product_name, $quantity, $price);
			$stmt -> execute();
			header("Location: ../../checkout.php");

	    	// Insert to CART
		} else if (isset($_POST['addtocart'])) {
		    echo "Add to Cart <br><br>";

			// Get the cart id
			$query = "SELECT * FROM cart WHERE user_id = '{$_SESSION["user_id"]}'";
			$result = $connection -> query($query);
			$row = $result -> fetch_array(MYSQLI_ASSOC);

			// Prepare values for cart table
			$cart_id  = $row["cart_id"];
			echo "cart_id: $cart_id <br>";
			$user_id = $_SESSION["user_id"];
			echo "user_id: $user_id <br>";

			// No of items
			$quantity = $_POST['quantity'];
			$no_of_items = $row["no_of_items"] + $quantity;
			echo "no_of_items: $no_of_items <br>";

			// full price without discount
			$full_price = $row["full_price"] + ($_SESSION["real_price"] * $quantity);
			echo "full_price: $full_price <br>";

			// discount
			$discount = $row["discount"] + (($_SESSION["real_price"] - $_SESSION["discount_price"]) * $quantity);
			echo "discount: $discount <br>";

			// shipping
			$shipping = "";
			if ($row["shipping"] != "5.20") {
				$shipping = "5.20";
			} else {
				$shipping = "5.20";
			}

			// tax
			$tax = $row["tax"] + ((6 * ($full_price - $discount)) / 100);
			echo "tax: $tax <br>";

			echo "shipping: $shipping <br>";

			// total_amount
			$total_amount  = (($full_price - $discount) + $tax + $shipping);
			echo "total_amount: $total_amount <br><br>";

			// Insert to cart table 
			$stmt = $connection -> prepare("UPDATE cart SET no_of_items = ?, full_price = ?, discount = ?, tax = ?, shipping = ?, total_amount = ? WHERE cart_id = ? AND user_id = ?");
			$stmt -> bind_param("ssssssss", $no_of_items, $full_price, $discount, $tax, $shipping, $total_amount, $cart_id, $user_id);
			$stmt -> execute();

			// Insert to ITEM
	 		$ItemID = "";
	 		$bytes = "";
			$bytes= random_bytes(5);
			$ItemID .="ITEM-";
			$ItemID .= bin2hex($bytes);

			$item_id = $ItemID;
			echo "item_id: $item_id <br>";

			$product_id = $_POST['product_id'];
			echo "product_id: $product_id <br>";

			$product_name = $_POST['product_name'] . " - " . $_SESSION["variants"] . " - " . $_SESSION["type"];
			echo "product_name: $product_name <br>";

			$price = $_POST['price'] * $quantity;
			echo "price: $price <br>";

			// Insert to item table
			$stmt = $connection -> prepare("INSERT INTO item VALUES (?, ?, ?, ?, ?, ?)");
			$stmt -> bind_param("ssssss", $item_id, $cart_id, $product_id, $product_name, $quantity, $price);
			$stmt -> execute();
			header("Location: ../../shopping-cart.php");
		}
	} else {
		header("Location: ../../signin.php");
	}
?>