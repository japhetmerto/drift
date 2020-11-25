<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	if (isset($_POST['buynow'])) {
    	echo "Buy Now <br>";
    	echo "Quantity: {$_POST['quantity']} <br>";
    	echo "Variant: {$_POST['variants']} <br>";
    	echo "product_id: {$_POST['product_id']} <br>";
    	echo "product_name: {$_POST['product_name']} <br>";
    	echo "price: {$_POST['price']} <br>";

    	// Insert to ITEM
 		$ItemID = "";
 		$bytes = "";
		$bytes= random_bytes(5);
		$ItemID .="ITEM-";
		$ItemID .= bin2hex($bytes);

    	// Insert to CART
	} else if (isset($_POST['addtocart'])) {
	    echo "Add to Cart <br>";
	    echo "Quantity: {$_POST['quantity']} <br>";
    	echo "Variant: {$_POST['variants']}";
	}
?>