<?php
	// Database credentials
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'preparation');

	// Attempt to connect to MySQL database
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	// Check connection
	if($db === false)
		die("ERROR: Could not connect. " . mysqli_connect_error());
?>