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

	function showUserName() {
		// Check if logged in
		// If logged in
		if (isset($_SESSION["username"])) {
			echo "<div class='col-3'>
		 		<a class='btn btn-sm btn-warning text-black mr-2' data-toggle='modal'>Hi " . $_SESSION['firstname'] . " !
	 			</a>
             	<a class='btn btn-sm text-light d-none d-sm-inline-block style' href='assets/php/logout.php'>Log Out</a>
		  		</div>";
		} else {
			// If not logged in
			echo "<div class='col-2'>
				<a class='btn btn-sm btn-warning text-black mr-2' href='signin.php'>Sign in</a>
            	<a class='btn btn-sm text-light d-none d-sm-inline-block style' href='register.php'>Sign up</a>
		  		</div>";
		}
	}
?>