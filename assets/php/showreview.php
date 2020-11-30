<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Show reviews
	$stmt = $connection -> prepare("SELECT * FROM user_rating WHERE rating_id = ?");
	$stmt -> bind_param("s", $_SESSION["rating_id"]);
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

		// Stars
		$userRating = $row["rating"];
		$numStars = round($userRating, 0);
		$otherNumStars = 5 - $numStars;
		// User Rating stars
		// Same as product details stars  ^ Update: NOPE
		$userRatingStars = "";
		for ($x = 1; $x <= $numStars; $x++) {
			$userRatingStars .= "<span class='fa fa-star text-warning'></span>";
		}
		for ($x = 1; $x <= $otherNumStars; $x++) {
			$userRatingStars .= "<span class='fa fa-star'></span>";
		}

		$userReview = $row["review"];


		echo "<div class='review-ratting'>
			<div class='star-author-all d-flex pt-5'>
				<div class='ratting-author'>
					<h3 class='ratting__name'>$firstname<span class='text-warning'> $lastname</span></h3>
					<span>$timereview</span>
					<span class='pl-2'>$datereview</span>
				</div>
				<div class='star-rating pt-1 pl-3'>
					$userRatingStars
					<span>($userRating)</span>
				</div>
			</div>

			<div class='reviews_content clearfix pt-3'>$userReview</div>
		</div>";

	}

?>