<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	if (isset($_SESSION["username"]) && $_SESSION["user_type"] != "Admin") {
	 	// Get the cart id
		$query = "SELECT * FROM cart WHERE user_id = '{$_SESSION["user_id"]}'";
		$result = $connection -> query($query);
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		$cart_id  = $row["cart_id"];

		// Show all items
	 	$_SESSION["showAllItemsOffCanvas"] = "";
	 	$query = "SELECT * FROM item WHERE cart_id = '$cart_id'";
		$result = $connection -> query($query);

		if ($result -> num_rows) {
			$rows = $result -> num_rows;

			$_SESSION["showAllItemsOffCanvas"] .= "<table class='table'>
	          	<tbody>";

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
							<br>
							<span class='fw-500 text-warning'>RM $price</span>
							</td>
		            	</tr>";
			}

			$_SESSION["showAllItemsOffCanvas"] .= "</tbody>
	        </table>
			<div class='container'>
			  <div class='row' style='margin-left:40px;'>
				<a href='shopping-cart.php' class='btn btn-lg btn-outline-light'>View cart</a>
				<a href='checkout.php' class='btn btn-lg btn-outline-light ml-3'>Checkout</a>
			  </div>";
		} else {
			$_SESSION["showAllItemsOffCanvas"] = "<div class='container text-white'>
		<hr class='bg-white'>
		<p>Your Cart is : <b class='text-warning'>Empty</b></p>
		<hr class='bg-white'>
		  <div class='row' style='margin-left:70px;'>
			<a href='store-game.php' class='btn btn-lg btn-outline-light'>Browse Item</a>
		  </div>
		</div>";
		}

	} else {
		$_SESSION["showAllItemsOffCanvas"] = "<div class='container text-white'>
		<hr class='bg-white'>
		<p>Your Cart is : <b class='text-warning'>Empty</b></p>
		<hr class='bg-white'>
		  <div class='row' style='margin-left:70px;'>
			<a href='store-game.php' class='btn btn-lg btn-outline-light'>Browse Item</a>
		  </div>
		</div>";
	}

?>