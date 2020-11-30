<?php
	require_once "databaseconfig.php";
	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	$query = "DELETE FROM membership WHERE user_id = '{$_SESSION["user_id"]}'";
	$result = $connection -> query($query);

	header("Location: ../../index.php");
?>