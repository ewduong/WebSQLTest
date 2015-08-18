<?php

//print_r($_POST);

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "root";
$database_name = $_POST['database_name'];

$connect=mysql_connect($mysql_host, $mysql_user, $mysql_pass) or
die("Could not connect: " . mysql_error());
echo 'Connected! <br>';

$db_selected = mysql_select_db($database_name, $connect);

$sql = "CREATE DATABASE $database_name";
if  (mysql_query($sql, $connect)) {
	echo "Database $database_name created successfully\n";
} else {
	echo 'Error creating database: ' . mysql_error() . "\n";
}

mysql_close($connect);
?>