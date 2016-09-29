<?php
	include("connector.php");
	$sql = mysqli_query($db, "SELECT * FROM student");
?>
<html>
<head>
	<link rel='stylesheet' href = 'css/bootstrap.min.css'>
</head>

<body>
	<?php
		if($sql){
		while($stud =mysqli_fetch_array($sql)){
			echo "<a href ='showStudents.php?id=".$stud[0]."'>";
			echo "<button class ='btn btn-primary'>";
			echo "<span class='glyphicon glyphicon-user'>";
			echo $stud[1];
			echo "</span></button>";
		}
	}
	?>
</body>
</html>