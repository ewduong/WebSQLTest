<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="css/test.css" />
<html>
	<head>
		<title>Test SQL Stuff</title>
	</head>
	<body>
		<form method="post" action="process.php">
			<label>MySQL Host</label>
			<input type="text" name="mysql_host" />
			<br />
			<label>MySQL Username</label>
			<input type="text" name="mysql_user" />
			<br />
			<label>MySQL Password</label>
			<input type="text" name="mysql_pass" />
			<br />
			<label>Database Name</label>
			<input type="text" name="database_name" />
			<br />
			<input type="submit" value="Add Database">
		</form>
	</body>
</html>