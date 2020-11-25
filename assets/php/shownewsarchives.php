<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	$_SESSION["newsArchives"] = "";

 	$query = "SELECT MONTHNAME(date) as MONTH, Year(date) as YEAR FROM articles GROUP BY Year, Month ORDER BY date DESC";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$_SESSION["newsArchives"] .= "<li><a href='#' class='text-white'>{$row["MONTH"]} {$row["YEAR"]}</a></li>";
	}
?>