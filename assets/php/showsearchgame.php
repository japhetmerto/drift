<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// First 4 Games
 	$_SESSION["firstSearchGamesAll"] = "";
 	$query = "SELECT * FROM product_details, store_game, average_rating 
WHERE product_details.product_id = store_game.product_id 
AND product_details.product_id = average_rating.product_id 
AND store_game.product_name LIKE '%{$_SESSION["searchquery"]}%' 
ORDER BY product_details.product_name LIMIT 3";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		// Get last image
		// Split image links
		$string = $row["image_link"];

		$lastItemStart = strrpos($string, ' ') + 1;

		$firstItem = substr($string, 0, $lastItemStart);
		$lastItem = substr($string, $lastItemStart);

		// price
		$price = number_format((float)($row["price"] - ($row["discount_offer"] / 100) * $row["price"]), 2, '.', '');

		// Product label
		date_default_timezone_set("Asia/Kuala_Lumpur");
		$currentdate = date('Y-m-d', time());

		$datetime1 = strtotime($currentdate);
		$datetime2 = strtotime($row["date_release"]);

		$secs = $datetime1 - $datetime2;// == <seconds between the two times>
		$days = $secs / 86400;

		$productLabel = "";
		$discountPrice = "";

		if ($row["isMembershipExclusive"] == "True") {
			$productLabel .= "Membership Only";
		} elseif ($days <= 60) {
			$productLabel .= "New";
		} elseif ($row["discount_offer"] > 0) {
			$productLabel .= $row["discount_offer"] . "% Off";
			$discountPrice .= "RM " . $row["price"];
		}

		// stars
		$average_rating = $row["average_rating"];
		$numStars = round($average_rating, 0);
		$otherNumStars = 5 - $numStars;

		// ON <li class="fa fa-star text-warning"></li>
		// OFF <li class="fa fa-star"></li>

		$ratingStars = "";
		for ($x = 1; $x <= $numStars; $x++) {
			$ratingStars .= "<li class='fa fa-star'></li>";
		}
		for ($x = 1; $x <= $otherNumStars; $x++) {
			$ratingStars .= "<li class='fa fa-star disable'></li>";
		}

		$_SESSION["firstSearchGamesAll"] .= "<div class='col-md-4 col-sm-6'>
				<div class='product-grid3'>
					<div class='product-image3'>
						<a href='productdetails.php?product_id=" . $row["product_id"] . "&type=" . $row["type"] . "&variants=" . str_replace(" ", "%20", $row['variants']) . "'>
							<img class='pic-1' src='assets/img/content/product/$lastItem'>
							<img class='pic-2' src='assets/img/content/product/$lastItem'>
						</a>
						 
						<span class='product-new-label'>$productLabel</span>
					</div>
					<div class='product-content'>
						<h3 class='title font-weight-bolder'><a href='#'>{$row["product_name"]}<br>{$row["variants"]}</a></h3>
						<div class='price'>
							RM $price
							<span>$discountPrice</span>
						</div>
						<ul class='rating'>
							$ratingStars
						</ul>
					</div>
				</div>
			</div>";
	}

	// First other 4 Games
	$_SESSION["otherSearchGamesAll"] = "";
 	$query = "SELECT * FROM product_details, store_game, average_rating 
WHERE product_details.product_id = store_game.product_id 
AND product_details.product_id = average_rating.product_id 
AND store_game.product_name LIKE '%{$_SESSION["searchquery"]}%' 
ORDER BY product_details.product_name LIMIT 3, 999999999";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	$column = ceil($rows / 3);
	$lastloop = $rows - (($column - 1) * 3);
	$loop = 3;
	$isOfffset = "";
	
	for ($i = 0; $i < $column; ++$i ) {
		$_SESSION["otherSearchGamesAll"] .= "<div class='row mt-5 mb-5'>";

		if ($i == ($column - 1) && $isOfffset == True) {
			$loop = $lastloop;
		}

		for ($j = 0; $j < $loop; ++$j) {
			$row = $result -> fetch_array(MYSQLI_ASSOC);

			// Get last image
			// Split image links
			$string = $row["image_link"];

			$lastItemStart = strrpos($string, ' ') + 1;

			$firstItem = substr($string, 0, $lastItemStart);
			$lastItem = substr($string, $lastItemStart);

			// price
			$price = number_format((float)($row["price"] - ($row["discount_offer"] / 100) * $row["price"]), 2, '.', '');

			// Product label
			date_default_timezone_set("Asia/Kuala_Lumpur");
			$currentdate = date('Y-m-d', time());

			$datetime1 = strtotime($currentdate);
			$datetime2 = strtotime($row["date_release"]);

			$secs = $datetime1 - $datetime2;// == <seconds between the two times>
			$days = $secs / 86400;

			$productLabel = "";
			$discountPrice = "";

			if ($row["isMembershipExclusive"] == "True") {
			$productLabel .= "Membership Only";
			} elseif ($days <= 60) {
				$productLabel .= "New";
			} elseif ($row["discount_offer"] > 0) {
				$productLabel .= $row["discount_offer"] . "% Off";
				$discountPrice .= "RM " . $row["price"];
			}

			// stars
			$average_rating = $row["average_rating"];
			$numStars = round($average_rating, 0);
			$otherNumStars = 5 - $numStars;

			// ON <li class="fa fa-star text-warning"></li>
			// OFF <li class="fa fa-star"></li>

			$ratingStars = "";
			for ($x = 1; $x <= $numStars; $x++) {
				$ratingStars .= "<li class='fa fa-star'></li>";
			}
			for ($x = 1; $x <= $otherNumStars; $x++) {
				$ratingStars .= "<li class='fa fa-star disable'></li>";
			}

			$_SESSION["otherSearchGamesAll"] .= "<div class='col-md-4 col-sm-6'>
					<div class='product-grid3'>
						<div class='product-image3'>
							<a href='productdetails.php?product_id=" . $row["product_id"] . "&type=" . $row["type"] . "&variants=" . str_replace(" ", "%20", $row['variants']) . "'>
								<img class='pic-1' src='assets/img/content/product/$lastItem'>
								<img class='pic-2' src='assets/img/content/product/$lastItem'>
							</a>
							<ul class='social'>
								<li><a href='product-detail.html'><i class='fa fa-shopping-bag'></i></a></li>
								<li><a href='product-detail.html'><i class='fa fa-shopping-cart'></i></a></li>
							</ul>
							<span class='product-new-label'>$productLabel</span>
						</div>
						<div class='product-content'>
							<h3 class='title font-weight-bolder'><a href='#'>{$row["product_name"]}<br>{$row["variants"]}</a></h3>
							<div class='price'>
								RM $price
								<span>$discountPrice</span>
							</div>
							<ul class='rating'>
								$ratingStars
							</ul>
						</div>
					</div>
				</div>";
		}

		$_SESSION["otherSearchGamesAll"] .= "</div>";
	}
	
?>