<?php
	function getConnection()
	{
		$DB_user = 'root'; //database user to use login
		$DB_pass = ''; //database user password
		$DB_name = "bpptik_lat1"; //databasae name
		$DB_host = "localhost"; // database host

		// get connection to DB
		$conn = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name) or die(mysqli_error());$DB_user = 'root'; //database user to use login
		$DB_pass = ''; //database user password
		$DB_name = "bpptik_lat1"; //databasae name
		$DB_host = "localhost"; // database host

		// get connection to DB
		$conn = mysqli_connect($DB_host, $DB_user, $DB_pass, $DB_name) or die(mysqli_error());
		return $conn;
	}
?>