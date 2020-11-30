<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Store current url
	$_SESSION["lastarticleurl"] = $_SERVER['REQUEST_URI'];

	$stmt = $connection -> prepare("SELECT * FROM articles WHERE article_id = ?");
	$stmt -> bind_param("s", $_SESSION["article_id"]);
	$stmt -> execute();
	$result = $stmt -> get_result();

	$row = $result -> fetch_array(MYSQLI_ASSOC);

	$_SESSION["author_name"] = $row["author_name"];
	$_SESSION["article_title"] = $row["article_title"];
	$_SESSION["article_desc"] = $row["article_desc"];
	$_SESSION["article_content"] = $row["article_content"];
	$_SESSION["image_link"] = $row["image_link"];
	$_SESSION["date"] = date("j M Y", strtotime($row["date"]));
	$_SESSION["newdate"] = date("F j, Y", strtotime($row["date"]));

	// Close all the connecitons
 	$result -> close();
 	$stmt -> close();
 	$connection -> close();
?>