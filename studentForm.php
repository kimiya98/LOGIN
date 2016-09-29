<?php
	include("connector.php");
?>

<html>
<head>
		<link rel='stylesheet' href = 'css/bootstrap.min.css'>
	</head>
	<body>
		<form action = 'insertStudent.php' method ='POST' autocomplete = "off">
			<label>First Name
			<input type ='text'name ='firstName'>
			</label>
			<br>
			<label>Last Name
			<input type ='text'name ='lastName'>
			</label>
			<br>
			<label>Password
			<input type ='password'name ='passWord'>
			</label>
			<br>
			<input type = 'submit'>
		</form>

	</body>
</html>