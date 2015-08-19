<?php
$mysql_host = $_POST['mysql_host'];
$mysql_user = $_POST['mysql_user'];
$mysql_pass = $_POST['mysql_pass'];
$database_name = $_POST['database_name'];

$connect=mysql_connect($mysql_host, $mysql_user, $mysql_pass) or
die("Could not connect: " . mysql_error());
echo 'Connected! <br>';
?>