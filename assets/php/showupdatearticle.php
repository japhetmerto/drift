<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

	$query = "SELECT * FROM articles WHERE article_id = '" . $_SESSION["article_id"] . "'";
	$result = $connection -> query($query);

	$row = $result -> fetch_array(MYSQLI_ASSOC);

	$_SESSION["author_name"] = $row["author_name"];
	$_SESSION["article_title"] = $row["article_title"];
	$_SESSION["article_desc"] = $row["article_desc"];
	$_SESSION["article_content"] = $row["article_content"];
	$_SESSION["image_link"] = $row["image_link"];
	$_SESSION["date"] = $row["date"];

 	// Close all the connecitons
 	$result -> close();
 	$connection -> close();
?>