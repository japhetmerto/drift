<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";
	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

	// If the user is not logged in
	if (!isset($_SESSION["username"])) {
		header("Location: ../../signin.php");
	} else {
		// If the ratingStars or comment is empty, go back
		if (empty($_POST['ratingStars']) || empty($_POST['comment'])) {
			header("Location: " . $_SESSION["lastproducturl"]);
		} else {
			// Debug
			echo "rating: " . $_POST['ratingStars'] . "<br>";
			echo "review: " . $_POST['comment'] . "<br>";
			date_default_timezone_set("Asia/Kuala_Lumpur");
			echo "time: " . date("H:i") . "<br>";
			echo "date: " . date("j M Y") . "<br>";

			// Get rating id based on product id
			$stmt = $connection -> prepare("SELECT * FROM average_rating WHERE product_id = ?");
			$stmt -> bind_param("s", $_SESSION["product_id"]);
			$stmt -> execute();
			$result = $stmt -> get_result();
			$row = $result -> fetch_array(MYSQLI_ASSOC);

			echo "rating_id: " . $row["rating_id"];

			// Insert to user_rating
			$rating_id = $row["rating_id"];
			$rating = mysql_entities_fix_string($connection, $_POST['ratingStars']);
			$review = mysql_entities_fix_string($connection, $_POST['comment']);
			$timenow = date_create() -> format('H:i');
			$datenow = date_create() -> format('j M Y');

			$stmt = $connection -> prepare("INSERT INTO user_rating VALUES (?, ?, ?, ?, ?, ?)");
			$stmt -> bind_param("ssssss", $rating_id, $_SESSION["username"], $rating, $review, $timenow, $datenow);
			$stmt -> execute();

			printf("%d Row inserted.\n", $stmt->affected_rows);


			// Insert to average rating
			$total_reviews = $row["total_reviews"] + 1;
			
			$fivestar_amount = $row["5star_amount"];
			$fourstar_amount = $row["4star_amount"];
			$threestar_amount = $row["3star_amount"];
			$twostar_amount = $row["2star_amount"];
			$onestar_amount = $row["1star_amount"];

			if ($rating == "5") {
				$fivestar_amount = (int)$row["5star_amount"] + 1;
			} elseif ($rating == "4") {
				$fourstar_amount = (int)$row["4star_amount"] + 1;
			} elseif ($rating == "3") {
				$threestar_amount = (int)$row["3star_amount"] + 1;
			} elseif ($rating == "2") {
				$twostar_amount = (int)$row["2star_amount"] + 1;
			} elseif ($rating == "1") {
				$onestar_amount = (int)$row["1star_amount"] + 1;
			}

			$average_rating = number_format((float)((((int)$fivestar_amount * 5) + ((int)$fourstar_amount * 4) + ((int)$threestar_amount * 3) + ((int)$twostar_amount * 2) + ((int)$onestar_amount * 1)) / $total_reviews), 1);

			$stmt = $connection -> prepare("UPDATE average_rating SET total_reviews = ?, average_rating = ?, 5star_amount = ?, 4star_amount = ?, 3star_amount = ?, 2star_amount = ?, 1star_amount = ? WHERE rating_id = ?");
			$stmt -> bind_param("ssssssss", $total_reviews, $average_rating, $fivestar_amount, $fourstar_amount, $threestar_amount, $twostar_amount, $onestar_amount, $rating_id);
			$stmt -> execute();

			// Update ratings number on product details also
			$stmt = $connection -> prepare("UPDATE product_details SET ratings = ? WHERE product_id = ?");
			$stmt -> bind_param("ss", $total_reviews, $_SESSION["product_id"]);
			$stmt -> execute();

			// Close all connections
			$result -> close();
			$stmt -> close();
			$connection -> close();

			// Redirect back to product details
			header("Location: " . $_SESSION["lastproducturl"] . "#ratings");
		}
	}
?>