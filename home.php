<?php
require("connector.php");
if(isset($_POST['username']) && isset($_POST['password'])){
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	
	$qry = mysqli_query($sql,
	"SELECT * FROM user WHERE username = '".$username."'AND 
	password = '".$password."'");

	if($qry){
		$x = mysqli_num_rows($qry);
		if($x == 1){
			session_start();
			$_SESSION['user'] = $username;
			header("location:homepage.php");
		}else{
			$login = false;
		}
	}


}
?>
<html>
<head>
	<link rel = 'stylesheet' href ='css/bootstrap.min.css'>
</head>
<style>
 body{
 	padding-top: 10%;
 }
</style>
<body>
	<div class = 'col-sm-4 col-sm-offset-4'>
		<?php
			if(isset($login) && $login == false){
		?>
		<div class = 'alert alert-danger'>
			<span class = "glyphicon glyphicon-exclamation-sign"></span>
			Login Failed!
		</div>
		<?php
			}
		?>
		<div class ='panel panel-primary'>
			<div class = 'panel-heading'>
				<h2 class='panel-title'>Log in</h2>
			</div>
			<div class = 'panel-body'>
			<form method ='POST' action='home.php' autocomplete ='OFF'>
				<input name='username' type ='text' placeholder='Username' class ='form-control'>
				<br>
				<input name='password'type ='password' placeholder='Password' class = 'form-control'>
				<br>
				<span><a href ='#'>Forgot Password?</a>
				<button class = 'btn btn-success pull-right'>Log in</button>
			</span>
			</form>
			</div>
		</div>
	</div>
</body>
</html>