<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Show Games
	$query = "SELECT * FROM product_details NATURAL JOIN store_game";
	$result = $connection -> query($query);

	if (!$result) {
		die("Database Error");
	}

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		echo "<tr><td>" . $row["product_name"] . "</td>";
		echo "<td>" . $row["variants"] . "</td>";
		echo "<td>" . ($row["price"] - ($row["discount_offer"] / 100) * $row["price"]) . "</td>";
		echo "<td>" . $row["stock"] . "</td>";
		echo "<td>" . $row["platform"] . "</td>";
		echo "<td>" . $row["date_release"] . "</td>";
		echo "<td><a href='productdetails.php?product_id=" . $row["product_id"] . "&type=Game&variants=" . $row["variants"] . "'><i class='fas fa-link' style='color:black;''></i></a></td>";
		echo "<td><a href='assets/php/deleteproduct.php?product_id=" . $row["product_id"] . "&type=Game&variants=" . $row["variants"] . "'><i class='far fa-trash-alt' style='color:#FF0000;''></i></a></td>";
		echo "<td><a href='adminupdateproduct.php?product_id=" . $row["product_id"] . "&type=Game&variants=" . $row["variants"] . "'><i class='fa fa-edit' style='cursor:pointer;''></i></a></td></tr>";
	}

 	// Show Consoles
	$query = "SELECT * FROM product_details NATURAL JOIN store_console";
	$result = $connection -> query($query);

	if (!$result) {
		die("Database Error");
	}

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		echo "<tr><td>" . $row["product_name"] . "</td>";
		echo "<td>" . $row["variants"] . "</td>";
		echo "<td>" . $row["price"] . "</td>";
		echo "<td>" . $row["stock"] . "</td>";
		echo "<td>" . $row["platform"] . "</td>";
		echo "<td>" . $row["date_release"] . "</td>";
		echo "<td><a href='productdetails.php?product_id=" . $row["product_id"] . "&type=Console&variants=" . $row["variants"] . "'><i class='fas fa-link' style='color:black;''></i></a></td>";
		echo "<td><a href='assets/php/deleteproduct.php?product_id=" . $row["product_id"] . "&type=Console&variants=" . $row["variants"] . "'><i class='far fa-trash-alt' style='color:#FF0000;''></i></a></td>";
		echo "<td><a href='adminupdateproduct.php?product_id=" . $row["product_id"] . "&type=Console&variants=" . $row["variants"] . "'><i class='fa fa-edit' style='cursor:pointer;''></i></a></td></tr>";
	}

 	// Show Accessories
	$query = "SELECT * FROM product_details NATURAL JOIN store_accessories";
	$result = $connection -> query($query);

	if (!$result) {
		die("Database Error");
	}

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		echo "<tr><td>" . $row["product_name"] . "</td>";
		echo "<td>" . $row["variants"] . "</td>";
		echo "<td>" . $row["price"] . "</td>";
		echo "<td>" . $row["stock"] . "</td>";
		echo "<td>" . $row["platform"] . "</td>";
		echo "<td>" . $row["date_release"] . "</td>";
		echo "<td><a href='productdetails.php?product_id=" . $row["product_id"] . "&type=Accessories&variants=" . $row["variants"] . "'><i class='fas fa-link' style='color:black;''></i></a></td>";
		echo "<td><a href='assets/php/deleteproduct.php?product_id=" . $row["product_id"] . "&type=Accessories&variants=" . $row["variants"] . "'><i class='far fa-trash-alt' style='color:#FF0000;''></i></a></td>";
		echo "<td><a href='adminupdateproduct.php?product_id=" . $row["product_id"] . "&type=Accessories&variants=" . $row["variants"] . "'><i class='fa fa-edit' style='cursor:pointer;''></i></a></td></tr>";
	}

	// Close all the connections
	$result -> close();
	$connection -> close();
?>