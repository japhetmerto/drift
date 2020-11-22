<?php
	require_once "databaseconfig.php";

	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Show all articles and news
 	$query = "SELECT * FROM articles";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		echo "<tr><td>" . $row["article_title"] . "</td>";
		echo "<td>" . $row["article_desc"] . "</td>";
		echo "<td>" . $row["date"] . "</td>";
		echo "<td><a href='articledetails.php?article_id=" . $row["article_id"] . "'><i class='fas fa-link' style='color:black;''></i></a></td>";
		echo "<td><a href='assets/php/deletearticlenews.php?article_id=" . $row["article_id"] . "'><i class='far fa-trash-alt' style='color:#FF0000;''></i></a></td>";
		echo "<td><a href='adminupdatearticle.php?article_id=" . $row["article_id"] . "'><i class='fa fa-edit' style='cursor:pointer;'></i></a></td></tr>";
	}

	// Close all the connections
	$result -> close();
	$connection -> close();
?>