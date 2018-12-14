<?php 
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'marketart';

	$conn = mysqli_connect($hostname, $username, $password, $dbname);

	if (!$conn) {
		die("could not connect");
	}
?>