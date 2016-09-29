<!DOCTYPE>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class = 'text-center'>
		Choose A Photo
		<br>
		<?php
			$gallery = array("Chrysanthemum","Hydrangeas","Lighthouse","Jellyfish","Koala");
			foreach ($gallery as $filename) {
				echo "<a href ='showPhoto.php?fn=".$filename."'>";
				echo "<button class ='btn btn-primary'>".$filename."</button>";
				echo "</a>";
	
			}
		?>

	</div>
</body>
</html>
<script src ="js/jquery.min.js"></script>

        