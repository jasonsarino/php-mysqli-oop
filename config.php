<?php 
define("HOST",               "localhost");
define("USERNAME",           "root");
define("PASSWORD",           "");
define("DBNAME",             "phptutorial");
define("PORT",               "3306");

$db = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

if (mysqli_connect_errno()) {
	die("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>