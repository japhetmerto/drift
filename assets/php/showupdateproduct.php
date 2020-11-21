<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	if ($_SESSION["type"] == "Game") {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_game WHERE product_id = '" . $_SESSION["product_id"] . "'";
 		$result = $connection -> query($query);

		if (!$result) {
			die("Database Error");
		}

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];
		$_SESSION["product_description"] = $row["product_description"];
		$_SESSION["stock"] = $row["stock"];
		$_SESSION["price"] = $row["price"];
		$_SESSION["discount_offer"] = $row["discount_offer"];
		$_SESSION["discount_price"] = $row["discount_price"];
		$_SESSION["platform"] = $row["platform"];

		// Split image links
		$string = $row["image_link"];

		$lastItemStart = strrpos($string, ' ') + 1;

		$firstItem = substr($string, 0, $lastItemStart);
		$lastItem = substr($string, $lastItemStart);

		$newFirstItem = rtrim($firstItem, ", ");

		$_SESSION["image_link"] = $newFirstItem;
		$_SESSION["product_image"] = $lastItem;

		$_SESSION["variants"] = $row["variants"];
		$_SESSION["date_release"] = $row["date_release"];
		$_SESSION["developer"] = $row["developer"];

		$_SESSION["type"] = "<option value='Game' selected='selected'>Games</option><option value='Console'>Console</option><option value='Accessories'>Console Accessory</option>";

		if ($row["isMembershipExclusive"] == "True") {
			$_SESSION["isMembershipExclusive"] = "<div class='form-check'><input class='form-check-input' type='checkbox' id='invalidCheck' name='isMembershipExclusive' value='True' checked><label class='form-check-label' for='invalidCheck'>Membership exlusive</label><div class='invalid-feedback'>You must tick before submitting.</div></div>";
		} else {
			$_SESSION["isMembershipExclusive"] = "<div class='form-check'><input class='form-check-input' type='checkbox' id='invalidCheck' name='isMembershipExclusive' value='True'><label class='form-check-label' for='invalidCheck'>Membership exlusive</label><div class='invalid-feedback'>You must tick before submitting.</div></div>";
		}
		 
 	} elseif ($_SESSION["type"] == "Console") {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_console WHERE product_id = '" . $_SESSION["product_id"] . "'";
 		$result = $connection -> query($query);

		if (!$result) {
			die("Database Error");
		}

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];
		$_SESSION["product_description"] = $row["product_description"];
		$_SESSION["stock"] = $row["stock"];
		$_SESSION["price"] = $row["price"];
		$_SESSION["discount_offer"] = $row["discount_offer"];
		$_SESSION["discount_price"] = $row["discount_price"];
		$_SESSION["platform"] = $row["platform"];

		// Split image links
		$string = $row["image_link"];

		$lastItemStart = strrpos($string, ' ') + 1;

		$firstItem = substr($string, 0, $lastItemStart);
		$lastItem = substr($string, $lastItemStart);

		$newFirstItem = rtrim($firstItem, ", ");

		$_SESSION["image_link"] = $newFirstItem;
		$_SESSION["product_image"] = $lastItem;

		$_SESSION["variants"] = $row["variants"];
		$_SESSION["platform"] = $row["platform"];
		$_SESSION["date_release"] = $row["date_release"];
		$_SESSION["developer"] = $row["developer"];
		$_SESSION["type"] = "<option value='Game'>Games</option><option value='Console' selected='selected'>Console</option><option value='Accessories'>Console Accessory</option>";
		$_SESSION["isMembershipExclusive"] = " ";
 	} else {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_accessories WHERE product_id = '" . $_SESSION["product_id"] . "'";
 		$result = $connection -> query($query);

		if (!$result) {
			die("Database Error");
		}

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];
		$_SESSION["product_description"] = $row["product_description"];
		$_SESSION["stock"] = $row["stock"];
		$_SESSION["price"] = $row["price"];
		$_SESSION["discount_offer"] = $row["discount_offer"];
		$_SESSION["discount_price"] = $row["discount_price"];
		$_SESSION["platform"] = $row["platform"];

		// Split image links
		$string = $row["image_link"];

		$lastItemStart = strrpos($string, ' ') + 1;

		$firstItem = substr($string, 0, $lastItemStart);
		$lastItem = substr($string, $lastItemStart);

		$newFirstItem = rtrim($firstItem, ", ");

		$_SESSION["image_link"] = $newFirstItem;
		$_SESSION["product_image"] = $lastItem;

		$_SESSION["variants"] = $row["variants"];
		$_SESSION["platform"] = $row["platform"];
		$_SESSION["date_release"] = $row["date_release"];
		$_SESSION["developer"] = $row["developer"];
		$_SESSION["type"] = $row["type"];
		$_SESSION["type"] = "<option value='Game'>Games</option><option value='Console'>Console</option><option value='Accessories'  selected='selected'>Console Accessory</option>";
		$_SESSION["isMembershipExclusive"] = " ";
 	}

 	// Close all the connecitons
 	$result -> close();
 	$connection -> close();
?>