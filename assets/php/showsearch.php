<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// First 4 Games
 	$_SESSION["firstFourGamesAll"] = "";
 	$query = "SELECT * FROM product_details, store_game, average_rating WHERE product_details.product_id = store_game.product_id AND product_details.product_id = average_rating.product_id ORDER BY product_details.product_name LIMIT 4";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {

	

?>