<?php
	require_once "databaseconfig.php";
	session_start();

	// Connect to the database
	$connection = new mysqli($hn, $un, $pw, $db);

 	if ($connection -> connect_error) {
 		die("Database Connection Error");
 	}

 	// Insert to membership table
	$MembershipID = "";
	$bytes = "";
	$bytes= random_bytes(5);
	$MembershipID .="MEMB-";
	$MembershipID .= bin2hex($bytes);

 	$month = $_POST["month"];

 	date_default_timezone_set("Asia/Kuala_Lumpur");

 	$user_id = $_SESSION["user_id"];
 	$membership_type = "$month Month(s) Of Membership";
 	$status = "Active";
	$sub_date = date('Y-m-d', time());

	$date = new DateTime('now');
	$date -> modify("+$month month"); // or you can use '-90 day' for deduct
	$exp_date = $date -> format('Y-m-d');

 	echo "month: $month <br>";
 	echo "MembershipID: $MembershipID <br>";
 	echo "user_id: $user_id <br>";
 	echo "membership_type: $membership_type <br>";
 	echo "status: $status <br>";
 	echo "sub_date: $sub_date <br>";
 	echo "exp_date: $exp_date <br>";

 	$stmt = $connection -> prepare("INSERT INTO membership VALUES (?, ?, ?, ?, ?, ?)");
	$stmt -> bind_param("ssssss", $MembershipID, $user_id, $membership_type, $status, $sub_date, $exp_date);
	$stmt -> execute();

	header("Location: ../../order-placed.php");
?>