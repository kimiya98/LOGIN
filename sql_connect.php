<?php
	$db = mysqli_connect("localhost","root","","it2103fdsf");

	/* check connection */
	//mysqli function that displays any error#:
	//mysqli_connect_errno()
	
	if(mysqli_connect_errno() != 0){
		echo "Error: ".mysqli_connect_error();
		exit();
	}

	$result = mysqli_query($db, "SELECT * FROM student");
	while($row = mysqli_fetch_assoc($result)){
		echo $row['student_Id']." - ".$row['last_name']." - ".$row['first_name']." - ".$row['password'];
		echo "<br>";
	}
	mysqli_close($db);
?>