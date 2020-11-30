<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Get the values from POST
 	$article_title = $_POST["article_title"];
 	$article_desc = $_POST["article_desc"];
 	$author_name = $_POST["author_name"];
 	$article_content = $_POST["article_content"];
 	$image_link = mysql_entities_fix_string($connection, $_POST["image_link"]);
 	$category = mysql_entities_fix_string($connection, $_POST["category"]);
 	$date = mysql_entities_fix_string($connection, $_POST["date"]);

 	// Generate random ID
	$bytes= random_bytes(5);
	$randomID = "";
	$randomID .="ARNW-";
	$randomID .= bin2hex($bytes);

	// Insert values - product details
	$stmt = $connection -> prepare("INSERT INTO articles VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt -> bind_param("ssssssss", $randomID, $author_name, $article_title, $article_desc, $article_content, $image_link, $date, $category);
	$stmt -> execute();

	// Close all connection
	$stmt -> close();
	$connection -> close();

	// Redirect to adminproductlist
	header("Location: ../../adminarticlenews.php");
?>