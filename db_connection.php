<?php


	$location = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'survey';

$conn = mysqli_connect($location,	$username,$password, $database);

	if (!$conn) {
		die("database connection error.");
		// code...

	}


?>