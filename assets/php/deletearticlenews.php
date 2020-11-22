<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	$article_id = $_GET["article_id"];

 	$stmt = $connection -> prepare("DELETE FROM articles WHERE article_id = ?");
	$stmt -> bind_param("s", $article_id);
	$stmt -> execute();

	// Close all the connections
	$stmt -> close();
	$connection -> close();

	header("Location: ../../adminarticlenews.php");
?>