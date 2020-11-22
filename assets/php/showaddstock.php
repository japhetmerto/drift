<?php
	require_once "databaseconfig.php";

	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Select by type
 	if ($_SESSION["type"] == "Game") {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_game WHERE product_id = '" . $_SESSION["product_id"] . "' AND variants = '" . $_SESSION["variants"] . "'";
 		$result = $connection -> query($query);

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];
		$_SESSION["variants"] = $row["variants"];
		$_SESSION["stock"] = $row["stock"];
 	} elseif ($_SESSION["type"] == "Console") {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_console WHERE product_id = '" . $_SESSION["product_id"] . "' AND variants = '" . $_SESSION["variants"] . "'";
 		$result = $connection -> query($query);

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];
		$_SESSION["variants"] = $row["variants"];
		$_SESSION["stock"] = $row["stock"];
 	} else {
 		$query = "SELECT * FROM product_details NATURAL JOIN store_accessories WHERE product_id = '" . $_SESSION["product_id"] . "' AND variants = '" . $_SESSION["variants"] . "'";
 		$result = $connection -> query($query);

		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["product_name"] = $row["product_name"];
		$_SESSION["variants"] = $row["variants"];
		$_SESSION["stock"] = $row["stock"];
 	}

 	// Close all connections
 	$result -> close();
 	$connection -> close();

?>