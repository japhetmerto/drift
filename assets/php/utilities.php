<?php
	function mysql_entities_fix_string($connection, $string) {
		return htmlentities(mysql_fix_string($connection, $string));
	}
	
	function mysql_fix_string($connection, $string) {
		if (get_magic_quotes_gpc()) {
			$string = stripslashes($string);
		}

		return $connection -> real_escape_string($string);
	}

	function isUnique($connection, $table, $column, $string) {
		$stmt = $connection -> prepare("SELECT * FROM $table WHERE $column = ?");
		$stmt -> bind_param("s", $string);
		$stmt -> execute();
		$result = $stmt -> get_result();

		if ($result -> num_rows) {
			return false;
		} else {
			return true;
		}

		$result -> close();
		$stmt -> close();
	}

	function destroy_session_and_data()	{
		$_SESSION = array();
		setcookie(session_name(), "", time() - 2592000, "/");
		session_destroy();
	}

	function showAdminName() {
		echo $_SESSION["firstname"];
	}
?>