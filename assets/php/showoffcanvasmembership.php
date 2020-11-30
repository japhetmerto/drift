<?php
	require_once "databaseconfig.php";

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	if (isset($_SESSION["username"]) && $_SESSION["user_type"] != "Admin") {
 		// Get the cart id
		$query = "SELECT * FROM membership WHERE user_id = '{$_SESSION["user_id"]}'";
		$result = $connection -> query($query);

		$_SESSION["membership_type"] = "";
		$_SESSION["status"] = "";
		$_SESSION["sub_date"] = "";
		$_SESSION["exp_date"] = "";

		if ($result -> num_rows) {
			$row = $result -> fetch_array(MYSQLI_ASSOC);
			$_SESSION["membership_type"] = $row["membership_type"];
			$_SESSION["status"] = $row["status"];
			$_SESSION["sub_date"] = $row["sub_date"];
			$_SESSION["exp_date"] = $row["exp_date"];

			date_default_timezone_set("Asia/Kuala_Lumpur");
			$currentdate = date('Y-m-d', time());

			$datetime1 = strtotime($_SESSION["exp_date"]);
			$datetime2 = strtotime($currentdate);

			$secs = $datetime1 - $datetime2;// == <seconds between the two times>
			$days = $secs / 86400;

			$_SESSION["offcanvasmember"] = "<p>Type : <b class='text-warning'>{$_SESSION["membership_type"]}</b></p><p>Status : <b class='text-warning'>{$_SESSION["status"]}</b></p>
		<p>Subcription Date : <b class='text-warning'>{$_SESSION["sub_date"]}</b></p>
		<p>Expiration Date : <b class='text-warning'>{$_SESSION["exp_date"]}</b></p>
		<p>Days Left : <b class='text-warning'>$days Days Left</b></p>";

			$_SESSION["offcanvasmember"] .= "<hr class='bg-white'><div class='row' style='margin-left:50px;'>
			<a href='#' class='btn btn-lg btn-outline-light' style='cursor: not-allowed;'>Renew</a>
			<a href='assets/php/cancelmembership.php' class='btn btn-lg btn-outline-light ml-3'>Cancel</a>
		  </div>";
		} else {
			$_SESSION["isMembershipExclusive"] = "False";
			$_SESSION["offcanvasmember"] = "<p>Status : <b class='text-warning'>Inactive</b></p>
		<hr class='bg-white'>
		  <div class='row' style='margin-left:70px;'>
			<a href='member.php' class='btn btn-lg btn-outline-light'>Subscribe Now</a>
		  </div>";
		}

	} else {
		$_SESSION["isMembershipExclusive"] = "False";
		$_SESSION["offcanvasmember"] = "<p>Status : <b class='text-warning'>Inactive</b></p>
		<hr class='bg-white'>
		  <div class='row' style='margin-left:70px;'>
			<a href='member.php' class='btn btn-lg btn-outline-light'>Subscribe Now</a>
		  </div>";
	}
?>