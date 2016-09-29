<?php
	session_start();
 	if(!isset($_SESSION['user'])){
 		header("location:home.php");
 	}

?>
<html>
<head>
	<link rel = 'stylesheet' href ='css/bootstrap.min.css'>
</head>
	<body>
		<h1 class ='text-center'>Welcome <?php echo $_SESSION['user'];?>!</h1>
		<p class ='text-center'>
			<a href = 'logout.php'>
				<button class = 'btn btn-sm btn-danger'>Sign Out</button>
			</a>	
		</p>
	</body>
</html>
