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
		$stmt -> bind_param('s', $string);
		$stmt -> execute();
		$result = $stmt -> get_result();
		$stmt -> close();

		if ($result -> num_rows) {
			return false;
		} else {
			return true;
		}
	}
?>