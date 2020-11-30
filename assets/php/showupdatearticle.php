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

	// if category is Announcements
	if ($row["category"] == "Announcements") {
		$_SESSION["category"] = "<option value='Announcements' selected='selected'>Announcements</option>
				<option value='Product Release'>Product Release</option>
				<option value='Press Conference'>Press Conference</option>";
	} elseif ($row["category"] == "Product Release") {
		$_SESSION["category"] = "<option value='Announcements'>Announcements</option>
				<option value='Product Release' selected='selected'>Product Release</option>
				<option value='Press Conference'>Press Conference</option>";
	} else {
		$_SESSION["category"] = "<option value='Announcements'>Announcements</option>
				<option value='Product Release'>Product Release</option>
				<option value='Press Conference' selected='selected'>Press Conference</option>";
	}
	

 	// Close all the connecitons
 	$result -> close();
 	$connection -> close();
?>