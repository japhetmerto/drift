<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Store current url
	$_SESSION["lastproducturl"] = $_SERVER['REQUEST_URI'];

 	if ($_SESSION["type"] == "Game") {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_game WHERE product_id = '" . $_SESSION["product_id"] . "' AND variants = '" . $_SESSION["variants"] . "'";
 		$result = $connection -> query($query);

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];

		// Split name
		// Create new product name
		$newProduct_name = '';

		if(strpos(trim($_SESSION["product_name"]), ' ') !== false) {
		    $last_word_start = strrpos($_SESSION["product_name"], ' ') + 1;

			$first_words = substr($_SESSION["product_name"], 0, $last_word_start);
			$last_word = substr($_SESSION["product_name"], $last_word_start);

			$newProduct_name = "$first_words <b class='text-warning'>$last_word</b>";
		} else {
		    $newProduct_name = "<b class='text-warning'>" . $_SESSION["product_name"] . "</b>";
		}

		$_SESSION["newproduct_name"] = $newProduct_name;
		$_SESSION["isMembershipExclusive"] = $row["isMembershipExclusive"];
		$_SESSION["product_description"] = $row["product_description"];
		$_SESSION["ratings"] = $row["ratings"];
		$_SESSION["stock"] = $row["stock"];
		$_SESSION["real_price"] = $row["price"];
		$_SESSION["price"] = number_format((float)($row["price"] - ($row["discount_offer"] / 100) * $row["price"]), 2, '.', '');
		$_SESSION["discount_offer"] = $row["discount_offer"];
		$_SESSION["discount_price"] = $row["discount_price"];
		$_SESSION["platform"] = $row["platform"];

		// Split image links
		$string = $row["image_link"];

		$lastItemStart = strrpos($string, ' ') + 1;

		$firstItem = substr($string, 0, $lastItemStart);
		$lastItem = substr($string, $lastItemStart);

		$newFirstItem = rtrim($firstItem, ", ");

		// Split the string to array ($image_link_arr[0];)
		$image_link_arr = array();
		$image_link_arr = explode(", ",$newFirstItem);

		$_SESSION["image_link"] = $image_link_arr;

		// Get all the variants of the selected product
		$query = "SELECT * FROM product_details NATURAL JOIN store_game WHERE product_id = '" . $_SESSION["product_id"] . "'";
 		$result = $connection -> query($query);

 		$rows = $result->num_rows;

 		$_SESSION["selectvariants"] = "";

		for ($j = 0; $j < $rows; ++$j) {
			$row = $result->fetch_array(MYSQLI_ASSOC);

			// Set checked if it is the same as the current variant
			if ($_SESSION["variants"] == $row["variants"]) {
				$_SESSION["selectvariants"] .= "<option value='" . $row['variants'] . "' selected>". $row["variants"] ."</option>";
			} else {
				$_SESSION["selectvariants"] .= "<option value='productdetails.php?product_id=" . $_SESSION['product_id'] . "&type=" . $_SESSION['type'] . "&variants=" . str_replace(" ", "%20", $row['variants']) . "'>". $row["variants"] ."</option>";
			}
		}	

		$_SESSION["date_release"] = $row["date_release"];
		$_SESSION["developer"] = $row["developer"];
 	} elseif ($_SESSION["type"] == "Console") {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_console WHERE product_id = '" . $_SESSION["product_id"] . "' AND variants = '" . $_SESSION["variants"] . "'";
 		$result = $connection -> query($query);

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];

		// Split name
		// Create new product name
		$newProduct_name = '';

		if(strpos(trim($_SESSION["product_name"]), ' ') !== false) {
		    $last_word_start = strrpos($_SESSION["product_name"], ' ') + 1;

			$first_words = substr($_SESSION["product_name"], 0, $last_word_start);
			$last_word = substr($_SESSION["product_name"], $last_word_start);

			$newProduct_name = "$first_words <b class='text-warning'>$last_word</b>";
		} else {
		    $newProduct_name = "<b class='text-warning'>" . $_SESSION["product_name"] . "</b>";
		}

		$_SESSION["newproduct_name"] = $newProduct_name;

		$_SESSION["product_description"] = $row["product_description"];
		$_SESSION["ratings"] = $row["ratings"];
		$_SESSION["stock"] = $row["stock"];
		$_SESSION["real_price"] = $row["price"];
		$_SESSION["price"] = number_format((float)($row["price"] - ($row["discount_offer"] / 100) * $row["price"]), 2, '.', '');
		$_SESSION["discount_offer"] = $row["discount_offer"];
		$_SESSION["discount_price"] = $row["discount_price"];
		$_SESSION["platform"] = $row["platform"];

		// Split image links
		$string = $row["image_link"];

		$lastItemStart = strrpos($string, ' ') + 1;

		$firstItem = substr($string, 0, $lastItemStart);
		$lastItem = substr($string, $lastItemStart);

		$newFirstItem = rtrim($firstItem, ", ");

		// Split the string to array ($image_link_arr[0];)
		$image_link_arr = array();
		$image_link_arr = explode(", ",$newFirstItem);

		$_SESSION["image_link"] = $image_link_arr;

		// Get all the variants of the selected product
		$query = "SELECT * FROM product_details NATURAL JOIN store_console WHERE product_id = '" . $_SESSION["product_id"] . "'";
 		$result = $connection -> query($query);

 		$rows = $result->num_rows;

 		$_SESSION["selectvariants"] = "";

		for ($j = 0; $j < $rows; ++$j) {
			$row = $result->fetch_array(MYSQLI_ASSOC);

			// Set checked if it is the same as the current variant
			if ($_SESSION["variants"] == $row["variants"]) {
				$_SESSION["selectvariants"] .= "<option value='" . $row['variants'] . "' selected>". $row["variants"] ."</option>";
			} else {
				$_SESSION["selectvariants"] .= "<option value='productdetails.php?product_id=" . $_SESSION['product_id'] . "&type=" . $_SESSION['type'] . "&variants=" . str_replace(" ", "%20", $row['variants']) . "'>". $row["variants"] ."</option>";
			}
		}	

		$_SESSION["date_release"] = $row["date_release"];
		$_SESSION["developer"] = $row["developer"];
 	} else {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_accessories WHERE product_id = '" . $_SESSION["product_id"] . "' AND variants = '" . $_SESSION["variants"] . "'";
 		$result = $connection -> query($query);

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];

		// Split name
		// Create new product name
		$newProduct_name = '';

		if(strpos(trim($_SESSION["product_name"]), ' ') !== false) {
		    $last_word_start = strrpos($_SESSION["product_name"], ' ') + 1;

			$first_words = substr($_SESSION["product_name"], 0, $last_word_start);
			$last_word = substr($_SESSION["product_name"], $last_word_start);

			$newProduct_name = "$first_words <b class='text-warning'>$last_word</b>";
		} else {
		    $newProduct_name = "<b class='text-warning'>" . $_SESSION["product_name"] . "</b>";
		}

		$_SESSION["newproduct_name"] = $newProduct_name;

		$_SESSION["product_description"] = $row["product_description"];
		$_SESSION["ratings"] = $row["ratings"];
		$_SESSION["stock"] = $row["stock"];
		$_SESSION["real_price"] = $row["price"];
		$_SESSION["price"] = number_format((float)($row["price"] - ($row["discount_offer"] / 100) * $row["price"]), 2, '.', '');
		$_SESSION["discount_offer"] = $row["discount_offer"];
		$_SESSION["discount_price"] = $row["discount_price"];
		$_SESSION["platform"] = $row["platform"];

		// Split image links
		$string = $row["image_link"];

		$lastItemStart = strrpos($string, ' ') + 1;

		$firstItem = substr($string, 0, $lastItemStart);
		$lastItem = substr($string, $lastItemStart);

		$newFirstItem = rtrim($firstItem, ", ");

		// Split the string to array ($image_link_arr[0];)
		$image_link_arr = array();
		$image_link_arr = explode(", ",$newFirstItem);

		$_SESSION["image_link"] = $image_link_arr;

		// Get all the variants of the selected product
		$query = "SELECT * FROM product_details NATURAL JOIN store_accessories WHERE product_id = '" . $_SESSION["product_id"] . "'";
 		$result = $connection -> query($query);

 		$rows = $result->num_rows;

 		$_SESSION["selectvariants"] = "";

		for ($j = 0; $j < $rows; ++$j) {
			$row = $result->fetch_array(MYSQLI_ASSOC);

			// Set checked if it is the same as the current variant
			if ($_SESSION["variants"] == $row["variants"]) {
				$_SESSION["selectvariants"] .= "<option value='" . $row['variants'] . "' selected>". $row["variants"] ."</option>";
			} else {
				$_SESSION["selectvariants"] .= "<option value='productdetails.php?product_id=" . $_SESSION['product_id'] . "&type=" . $_SESSION['type'] . "&variants=" . str_replace(" ", "%20", $row['variants']) . "'>". $row["variants"] ."</option>";
			}
		}	

		$_SESSION["date_release"] = $row["date_release"];
		$_SESSION["developer"] = $row["developer"];
 	}

 	// Ratings

 	// Close all the connecitons
 	$result -> close();
 	$connection -> close();
?>