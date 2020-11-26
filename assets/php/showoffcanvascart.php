<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	if (isset($_SESSION["username"])) {
	 	// Get the cart id
		$query = "SELECT * FROM cart WHERE user_id = '{$_SESSION["user_id"]}'";
		$result = $connection -> query($query);
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		$cart_id  = $row["cart_id"];

		// Show all items
	 	$_SESSION["showAllItemsOffCanvas"] = "";
	 	$query = "SELECT * FROM item WHERE cart_id = '$cart_id'";
		$result = $connection -> query($query);

		$rows = $result -> num_rows;

		for ($j = 0; $j < $rows; ++$j) {
			$row = $result -> fetch_array(MYSQLI_ASSOC);

			$queryProduct = "SELECT * FROM product_details WHERE product_id = '{$row["product_id"]}'";
			$resultProduc = $connection -> query($queryProduct);
			$rowProduct = $resultProduc -> fetch_array(MYSQLI_ASSOC);

			// Get last image
			// Split image links
			$string = $rowProduct["image_link"];

			$lastItemStart = strrpos($string, ' ') + 1;

			$firstItem = substr($string, 0, $lastItemStart);
			$lastItem = substr($string, $lastItemStart);

			// price
			$price = number_format((float)($row["price"]), 2, '.', '');

			$_SESSION["showAllItemsOffCanvas"] .= "<tr>
	              		<td><a href='#'><img src='assets/img/content/product/$lastItem' width='100' height='100'></a>
						</td>
	              		<td width='150' class='text-white'>
						<p>{$row["product_name"]}</p>
						x{$row["quantity"]}
						</td>
	              		<td class='text-center'>
						<a href='#'><i class='far fa-trash-alt pb-2 text-white' style='padding-top:20px;'></i></a><br>
						<span class='fw-500 text-warning'>RM $price</span>
						</td>
	            	</tr>";
		}

	} else {
		$_SESSION["showAllItemsOffCanvas"] = "";
	}

?>