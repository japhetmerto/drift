<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// $product_id = "PROD-f8c5530579";

 	// product details stars
 	$stmt = $connection -> prepare("SELECT * FROM average_rating WHERE product_id = ?");
	$stmt -> bind_param("s", $_SESSION["product_id"]);
	$stmt -> execute();
	$result = $stmt -> get_result();
	$row = $result -> fetch_array(MYSQLI_ASSOC);

	// Store rating id
	$_SESSION["rating_id"] = $row["rating_id"];

	$average_rating = $row["average_rating"];
	$numStars = round($average_rating, 0);
	$otherNumStars = 5 - $numStars;

	// ON <li class="fa fa-star text-warning"></li>
	// OFF <li class="fa fa-star"></li>

	$_SESSION["ratingStars"] = "";
	for ($x = 1; $x <= $numStars; $x++) {
		$_SESSION["ratingStars"] .= "<li class='fa fa-star text-warning'></li>";
	}
	for ($x = 1; $x <= $otherNumStars; $x++) {
		$_SESSION["ratingStars"] .= "<li class='fa fa-star'></li>";
	}

	// echo "numStars: " . $_SESSION["ratingStars"];

 	// User Rating stars
	// Same as product details stars  ^ Update: NOPE
	$_SESSION["userRatingStars"] = "";
	for ($x = 1; $x <= $numStars; $x++) {
		$_SESSION["userRatingStars"] .= "<span class='fa fa-star text-warning'></span>";
	}
	for ($x = 1; $x <= $otherNumStars; $x++) {
		$_SESSION["userRatingStars"] .= "<span class='fa fa-star'></span>";
	}

	// echo "<br>userRatingStars: " . $_SESSION["userRatingStars"];

 	// User Ratings average and number of reviews
 	$total_reviews = $row["total_reviews"];
 	$_SESSION["average_rating"] = $average_rating;
 	$_SESSION["total_reviews"] = $total_reviews;

 	// echo $_SESSION["average_rating"] . " average based on " . $_SESSION["total_reviews"] . " reviews.";

 	// User Ratings graphs
 	// 5 Star
 	$fivestar_amount = $row["5star_amount"];
 	if ($row["total_reviews"] == 0) {
 		$fivestar_graph == 0;
 	} else {
 		$fivestar_graph = round((((int)$row["5star_amount"] / (int)$row["total_reviews"]) * 100), 0);
 	}
 	
 	// echo "<br>fivestar_graph: " . $fivestar_graph;

 	$_SESSION["fivestar_amount"] = $fivestar_amount;
 	$_SESSION["fivestar_graph"] = $fivestar_graph;

 	// 4 Star
 	$fourstar_amount = $row["4star_amount"];
 	if ($row["total_reviews"] == 0) {
 		$fourstar_graph == 0;
 	} else {
 		$fourstar_graph = round((((int)$row["4star_amount"] / (int)$row["total_reviews"]) * 100), 0);
 	}
 	
 	// echo "<br>fivestar_graph: " . $fourstar_graph;

 	$_SESSION["fourstar_amount"] = $fourstar_amount;
 	$_SESSION["fourstar_graph"] = $fourstar_graph;

 	// 3 Star
 	$threestar_amount = $row["3star_amount"];
 	if ($row["total_reviews"] == 0) {
 		$threestar_graph == 0;
 	} else {
 		$threestar_graph = round((((int)$row["3star_amount"] / (int)$row["total_reviews"]) * 100), 0);
 	}
 	
 	// echo "<br>threestar_graph: " . $threestar_graph;

 	$_SESSION["threestar_amount"] = $threestar_amount;
 	$_SESSION["threestar_graph"] = $threestar_graph;

 	// 2 Star
 	$twostar_amount = $row["2star_amount"];
 	if ($row["total_reviews"] == 0) {
 		$twostar_graph == 0;
 	} else {
 		$twostar_graph = round((((int)$row["2star_amount"] / (int)$row["total_reviews"]) * 100), 0);
 	}
 	
 	// echo "<br>twostar_graph: " . $twostar_graph;

 	$_SESSION["twostar_amount"] = $twostar_amount;
 	$_SESSION["twostar_graph"] = $twostar_graph;

 	// 1 Star
 	$onestar_amount = $row["1star_amount"];
 	if ($row["total_reviews"] == 0) {
 		$onestar_graph == 0;
 	} else {
 		$onestar_graph = round((((int)$row["1star_amount"] / (int)$row["total_reviews"]) * 100), 0);
 	}
 	
 	// echo "<br>onestar_graph: " . $onestar_graph;

 	$_SESSION["onestar_amount"] = $onestar_amount;
 	$_SESSION["onestar_graph"] = $onestar_graph;
?>