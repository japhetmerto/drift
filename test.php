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

	$number = 13.50;
	echo round($number, 0);

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
?>