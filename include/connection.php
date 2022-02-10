<?php
$db_username = "root";
$db_password = "";
$db_name = "bapu";
$db_host = "localhost";

set_time_limit(-1);
ini_set('display_errors', -1);
$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (!$db) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

