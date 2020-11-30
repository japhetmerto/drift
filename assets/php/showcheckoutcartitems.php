<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Get the cart id
	$query = "SELECT * FROM cart WHERE user_id = '{$_SESSION["user_id"]}'";
	$result = $connection -> query($query);
	$row = $result -> fetch_array(MYSQLI_ASSOC);
	$cart_id  = $row["cart_id"];
	$_SESSION["cart_id"] = $cart_id;

	// Show all items
 	$_SESSION["showCheckoutAllItems"] = "";
 	$query = "SELECT * FROM item WHERE cart_id = '$cart_id'";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		// price
		$price = number_format((float)($row["price"]), 2, '.', '');

		$_SESSION["showCheckoutAllItems"] .= "<li class='list-group-item d-flex justify-content-between lh-sm'>
			  <div>
				<h6 class='my-0 text-dark'>{$row["product_name"]}</h6>
				<small class='text-muted'>x{$row["quantity"]}</small>
			  </div>
			  <span class='text-muted'>RM {$row["price"]}</span>
			</li>";
	}
	
?>