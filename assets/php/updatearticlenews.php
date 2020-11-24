<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";

	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Get the values from POST
 	$article_title = mysql_entities_fix_string($connection, $_POST["article_title"]);
 	$article_desc = mysql_entities_fix_string($connection, $_POST["article_desc"]);
 	$author_name = mysql_entities_fix_string($connection, $_POST["author_name"]);
 	$article_content = mysql_entities_fix_string($connection, $_POST["article_content"]);
 	$image_link = mysql_entities_fix_string($connection, $_POST["image_link"]);
 	$date = mysql_entities_fix_string($connection, $_POST["date"]);
 	$category = mysql_entities_fix_string($connection, $_POST["category"]);

 	$stmt = $connection -> prepare("UPDATE articles SET author_name = ?, article_title = ?, article_desc = ?, article_content = ?, image_link = ?, date = ?, category = ? WHERE article_id = ?");
	$stmt -> bind_param("ssssssss", $author_name, $article_title, $article_desc, $article_content, $image_link, $date, $category,$_SESSION["article_id"]);
	$stmt -> execute();

	// Close all the connecitons
 	$stmt -> close();
 	$connection -> close();

 	header("Location: ../../adminarticlenews.php");
?>