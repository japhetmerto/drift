<?php
	require_once "utilities.php";
	session_start();
	
	destroy_session_and_data();
	header("Location: ../../index.php");
?>