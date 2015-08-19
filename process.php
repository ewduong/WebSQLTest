<?php
include 'database.php';

$db_selected = mysql_select_db($database_name, $connect);

$sql = "CREATE DATABASE $database_name";
if  (mysql_query($sql, $connect)) {
	echo "Database $database_name created successfully\n";
} else {
	echo 'Error creating database: ' . mysql_error() . "\n";
}

mysql_close($connect);
?>