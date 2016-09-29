<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
img{
	width:50%;
}
</style>

<body>
	<div class = 'text-center'>
		<?php
		echo "<h1>".$_GET['fn']."</h1>";
		echo "<div class ='col-md-6 col-md-offset-3'>";
		echo "<img src ='img/".$_GET['fn'].".jpg'>";
		echo "</div>";

		?>
	</div>
</body>
</html>
