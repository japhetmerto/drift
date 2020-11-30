<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Show comments
	$stmt = $connection -> prepare("SELECT * FROM articles_comment WHERE article_id = ?");
	$stmt -> bind_param("s", $_SESSION["article_id"]);
	$stmt -> execute();
	$result = $stmt -> get_result();

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		// Get Fullname by username
		$stmtUser = $connection -> prepare("SELECT * FROM user_details WHERE username = ?");
		$stmtUser -> bind_param("s", $row["username"]);
		$stmtUser -> execute();
		$resultUser = $stmtUser -> get_result();
		$rowUser = $resultUser -> fetch_array(MYSQLI_ASSOC);

		$firstname = $rowUser["fname"];
		$lastname = $rowUser["lname"];

		$timereview = $row["time"];
		$datereview = $row["date"];

		$userReview = $row["comment"];

		if ($j == 0) {
			echo "<div class='review-ratting'>
			<div class='star-author-all d-flex'>
				<div class='ratting-author'>
					<h3 class='ratting__name'>$firstname<span class='text-warning'> $lastname</span></h3>
					<span>$timereview</span>
					<span class='pl-2'>$datereview</span>
				</div>
			</div>
				<div class='reviews_content clearfix pt-3'>$userReview</div>
			</div>";
		} else {
			echo "<div class='review-ratting'>
			<div class='star-author-all pt-5'>
				<div class='ratting-author'>
					<h3 class='ratting__name'>$firstname<span class='text-warning'> $lastname</span></h3>
					<span>$timereview</span>
					<span class='pl-2'>$datereview</span>
				</div>
			</div>
				<div class='reviews_content clearfix pt-3'>$userReview</div>
			</div>";
		}
	}

	// Close all connections
	$result -> close();
	$stmt -> close();
	$connection -> close();
?>