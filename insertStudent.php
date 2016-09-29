<?php
if(!isset($_POST['firstName']) ||
	!isset($_POST['lastName']) ||
	!isset($_POST['passWord'])){
	echo "Incomplete POST data!";
	exit();

}


$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$password = $_POST['passWord'];

include("connector.php");
$sql = mysqli_query($db,
	"INSERT INTO student (student_id, first_name, last_name, password, rating) 
	VALUES (NULL, '".$first_name."', '".$last_name."' , '".$password."', 1)");

	if($sql){
		echo "Success! <br>";
		echo "<a href ='second_query.php'>";
		echo "<button class = 'btn btn-success'>View Data</button></a>";

	}else{
		echo "Oops! Error in inserting Data!";
		echo mysqli_error($sql);
	}
?>