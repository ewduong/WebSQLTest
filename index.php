<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<html>
	<head>
		<title>Test SQL Stuff</title>
	</head>
	<body>
		<div id="box1">
			<form method="post" action="process.php">
				<h1>MySQL Details</h1>
				<label>MySQL Host</label>
				<input type="text" placeholder="localhost" name="mysql_host" />
				<br />
				<label>MySQL Username</label>
				<input type="text" placeholder="username" name="mysql_user" />
				<br />
				<label>MySQL Password</label>
				<input type="password" placeholder="password" name="mysql_pass" />
		</div>
		<div id="box2">
			<h1>Add Database</h1>
			<label>Database Name</label>
				<input type="text" name="database_name" />
				<br />
				<input type="submit" value="Add Database">	
		</div>
		<div id="box3">
			<h1>Register</h1>
			<label>Username</label>
				<input type="text" placeholder="username" name="user" />
				<br />
				<label>Password</label>
				<input type="password" placeholder="password" name="pass" />
				<br /><br />
				<input type="submit" value ="Add User">
		</div>
			</form>
	</body>
</html>