<?php
	require_once "databaseconfig.php";

	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Show Games
	$query = "SELECT * FROM product_details NATURAL JOIN store_game";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		echo "<tr><td>" . $row["product_name"] . "</td>";
		echo "<td>" . $row["stock"] . "</td>";
		echo "<td class='text-right'><a href='adminaddstock.php?product_id=" . $row["product_id"] . "&type=Game' style='color:black;'><i class='fa fa-plus' style='cursor:pointer;''>Add Stock</i></a></td></tr>";
	}

 	// Show Consoles
	$query = "SELECT * FROM product_details NATURAL JOIN store_console";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		echo "<tr><td>" . $row["product_name"] . "</td>";
		echo "<td>" . $row["stock"] . "</td>";
		echo "<td class='text-right'><a href='adminaddstock.php?product_id=" . $row["product_id"] . "&type=Console' style='color:black;'><i class='fa fa-plus' style='cursor:pointer;''>Add Stock</i></a></td></tr>";
	}

 	// Show Accessories
	$query = "SELECT * FROM product_details NATURAL JOIN store_accessories";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		echo "<tr><td>" . $row["product_name"] . "</td>";
		echo "<td>" . $row["stock"] . "</td>";
		echo "<td class='text-right'><a href='adminaddstock.php?product_id=" . $row["product_id"] . "&type=Accessories' style='color:black;'><i class='fa fa-plus' style='cursor:pointer;''>Add Stock</i></a></td></tr>";
	}

	// Close all the connections
	$result -> close();
	$connection -> close();
?>