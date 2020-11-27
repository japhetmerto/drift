<?php
	session_start();
	$searchquery = $_POST["search"];

	if (empty($searchquery)) {
		header("Location: index.php");
	} else {
		$_SESSION["searchquery"] = $searchquery;
		header("Location: search-result-game.php");
	}
	
?>