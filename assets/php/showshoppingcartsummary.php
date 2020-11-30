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

	// Show all items
 	$query = "SELECT * FROM cart WHERE cart_id = '$cart_id'";
	$result = $connection -> query($query);

	$row = $result -> fetch_array(MYSQLI_ASSOC);

	$_SESSION["no_of_items"] = $row["no_of_items"];
	$_SESSION["full_price"] = number_format((float)($row["full_price"]), 2, '.', '');
	$_SESSION["discount"] = number_format((float)($row["discount"]), 2, '.', '');
	$_SESSION["tax"] = number_format((float)($row["tax"]), 2, '.', '');
	$_SESSION["shipping"] = number_format((float)($row["shipping"]), 2, '.', '');
	$_SESSION["total_amount"] = number_format((float)($row["total_amount"]), 2, '.', '');

?>