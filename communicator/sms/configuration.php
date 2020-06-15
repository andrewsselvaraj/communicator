<?php
$host 		= "localhost"; // Your hostname
$username	= "learns84_root"; // Your host username
$password	= "Admin@123#"; // Your host password
$db			= "learns84_alphachoice"; // Your database name
mysql_connect($host, $username, $password) or die("Oops! Coudn't connect to server"); // Connect to the server
mysql_select_db($db) or die("Oops! Coudn't select Database"); // Select the database

?>