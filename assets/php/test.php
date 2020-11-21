<?php
	$string = "1.jpg, 2.jpg, 3.jpg, 4.jpg";

	$lastItemStart = strrpos($string, ' ') + 1;

	$firstItem = substr($string, 0, $lastItemStart);
	$lastItem = substr($string, $lastItemStart);

	echo $firstItem;
?>