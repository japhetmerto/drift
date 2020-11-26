<?php
	/*
	echo date("F j, Y", strtotime("2011-01-05"));


	$str = "The Last Of Us Part 2 - Standard Edition";
	echo substr($str, 0, 28) . "...";

	$number = 102.2;

	echo number_format((float)$number, 2, '.', '');
	*/

	/*
	$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

	$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
	echo '<a href="' . $escaped_url . '">' . $escaped_url . '</a>';
	*/

	/*
	$timenow = date("H:i");
	echo $timenow;
	$datenow = date("j M Y");
	*/

	/*
	$number = 13 / 4;
	echo round($number, 0);
	*/
	/*
	echo $_SERVER['REQUEST_URI'];
	*/

	/*
	$number = number_format((float)102.22222, 2, '.', '');

	echo $number;
	*/

	// Archive example SQL
	// SELECT MONTHNAME(date) as MONTH, Year(date) as YEAR FROM articles GROUP BY Year, Month ORDER BY date DESC

	// Generate link
	// SELECT * FROM articles WHERE MONTHNAME(date) = 'November' AND YEAR(date) = '2020'

	// Sort by Popularity (by the number of comments)
	// SELECT articles.article_title, COUNT(articles_comment.comment)
	// FROM articles, articles_comment 
	// WHERE articles.article_id = articles_comment.article_id 
	// GROUP BY articles.article_title 
	// ORDER BY COUNT(articles_comment.comment) DESC

	// Whats HOT home
	/*SELECT * FROM product_details, average_rating WHERE product_details.product_id = average_rating.product_id ORDER BY average_rating.average_rating DESC LIMIT 8;

	SELECT * FROM product_details, average_rating WHERE product_details.product_id = average_rating.product_id ORDER BY average_rating.average_rating DESC LIMIT 4;

	SELECT * FROM product_details, average_rating WHERE product_details.product_id = average_rating.product_id ORDER BY average_rating.average_rating DESC LIMIT 4, 4;
	*/
	/*
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$date = date('Y-m-d', time());
	*/
	// echo "date" . $date;
	/*
	$datetime1 = strtotime($date);
	$datetime2 = strtotime('2020-10-25');

	$secs = $datetime1 - $datetime2;// == <seconds between the two times>
	$days = $secs / 86400;

	if ($days <= 60) {
		echo "days: $days <br>";
		echo "NEW";
	} else {
		echo "days: $days <br>";
		echo "OLD";
	}
	*/

	/*
	$row  = 17;
	$column  = ceil($row / 4);
	$lastloop = $row - (($column - 1) * 4);

	if ($lastloop % 4 == 0) {
		echo "divisible by 4";
	} else {
		echo "offset: $lastloop";
	}
	*/

	// Split the string to array ($image_link_arr[0];)

	$itemname = "Persona 5 Royale - PlayStation Exclusive - Game";
	$itemname_arr = array();
	$itemname_arr = explode(" - ",$itemname);

	echo "$itemname_arr[0] <br>";
	echo "$itemname_arr[1] <br>";
	echo "$itemname_arr[2] <br>";
	
?>