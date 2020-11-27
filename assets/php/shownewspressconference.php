<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// First 3 News
 	$_SESSION["showAllNews"] = "";
 	$query = "SELECT * FROM articles WHERE category = 'Press Conference' ORDER BY DATE(date) DESC";
	$result = $connection -> query($query);

	$rows = $result -> num_rows;

	for ($j = 0; $j < $rows; ++$j) {
		$row = $result -> fetch_array(MYSQLI_ASSOC);

		$articleDate = date("j M Y", strtotime($row["date"]));

		$_SESSION["showAllNews"] .= "<li class='media mb-5'>
				<img src='assets/img/bg/{$row["image_link"]}' class='align-self-start mr-3' alt='kda' style='max-width:330px; max-height:200px'>
				<div class='media-body'>
					<h5 class='card-title text-white font-weight-bolder'>{$row["article_title"]}</h5>
					<p class='card-text'><small class='text-muted'><i class='fas fa-tag text-primary'>$articleDate</i></small></p>
					<p class='card-text text-white'>{$row["article_desc"]}</p>
					<a href='articledetails.php?article_id=" . $row["article_id"] . "'>
					<button type='button' class='btn btn-lg btn-transparent btn-outline-warning text-white'>Read More</button>
					</a>
				</div>
			  </li>";
	}

	
?>