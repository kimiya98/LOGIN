<?php
if(!isset($_POST['id']) ||
	$_POST['id'] == ""){
	echo "Incomplete Data";
	exit();
} 

include("connector.php");
$sql = mysqli_query($db, "DELETE FROM student WHERE student_Id =".$_POST['id']);

if($sql){
	echo "Success! <br>";
	echo "<a href ='second_query.php'>";
	echo "<button class ='btn btn-success'>View Data</button></a>";

}else{
	echo "Oops! Error in Deleting Data!";
	echo mysqli_error($sql);
}
?>