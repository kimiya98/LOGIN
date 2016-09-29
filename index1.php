<!DOCTYPE>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form method = "GET" action ="index1.php">
	<input type = "text" name ="input">
	<input type = "Submit" class = "btn btn-primary" >
	</form>
	
		<?php
			if(isset($_GET['input']) ){
				echo "<table class = 'table' table='bordered'>";
				for($x= 1; $x<=$_GET['input'];$x++){
					for($y=1; $y<=$_GET['input']; $y++){
						echo "<td>";
						echo $x*$y;
						echo "</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</table>
</body>
</html>
<script src ="js/jquery.min.js"></script>
