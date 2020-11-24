<?php
	require_once "databaseconfig.php";
	require_once "utilities.php";
	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	$comment = mysql_entities_fix_string($connection, $_POST['comment']);

 	// If the user is not logged in
	if (!isset($_SESSION["username"])) {
		header("Location: ../../signin.php");
	} else {
		if (empty($comment)) {
			header("Location: " . $_SESSION["lastarticleurl"] . "#comments");
		} else {
			// Get Post values
			$article_id = $_SESSION["article_id"];
			$timenow = date_create() -> format('H:i');
			$datenow = date_create() -> format('j M Y');

			// Debug Echo
			echo "article_id: $article_id<br>";
			echo "username: {$_SESSION["username"]}<br>";
			echo "comment: $comment<br>";
			echo "timenow: $timenow<br>";
			echo "datenow: $datenow";

			// Insert to articles_comment
			$stmt = $connection -> prepare("INSERT INTO articles_comment VALUES (?, ?, ?, ?, ?)");
			$stmt -> bind_param("sssss", $_SESSION["article_id"], $_SESSION["username"], $comment, $timenow, $datenow);
			$stmt -> execute();
		}
	}
?>