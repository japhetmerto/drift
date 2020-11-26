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
 	$_SESSION["showAllItems"] = "";
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

		if ($j > 0) {
            $_SESSION["showAllItems"] .= "<hr class='mb-4 bg-white'>";
		}

		$_SESSION["showAllItems"] .= "<div class='row mb-4'>
				<div class='col-md-5 col-lg-3 col-xl-3'>
				  <div class='view zoom overlay z-depth-1 rounded mb-3 mb-md-0'>
					<img class='img-fluid w-100'
					  src='assets/img/content/product/$lastItem' alt='Sample'>
					<a href='#!'>
					</a>
				  </div>
				</div>
				<div class='col-md-7 col-lg-9 col-xl-9'>
				  <div>
					<div class='d-flex justify-content-between'>
					  <div>
						<h5>{$row["product_name"]}</h5>
					  </div>
					  <div>
						<p class='mb-0'><span><strong>RM $price</strong></span></p>
					  </div>
					</div>
					<div class='d-flex justify-content-between align-items-center'>
					  <p>Quantity : {$row["quantity"]}</p>
					  <div>
						<a href='assets/php/deleteitem.php?item_id={$row["item_id"]}&cart_id={$row["cart_id"]}&product_name={$row["product_name"]}&quantity={$row["quantity"]}&product_id={$row["product_id"]}' type='button' class='card-link-secondary small text-uppercase mr-3'><i
							class='fas fa-trash-alt mr-1 text-warning'></i></a>
					  </div>
					</div>
				  </div>
				</div>
			  </div>";
	}

	if ($rows > 0) {
		$_SESSION["showAllItems"] .= "<p class='text-warning mb-0'><i class='fas fa-info-circle mr-1'></i> Do not delay the purchase, adding
				items to your cart does not mean booking them.</p>";
	}
?>