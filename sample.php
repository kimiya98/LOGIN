<!DOCTYPE>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class = "text-center">
		<h1>Enter Products</h1>
		<input type = "text" name="pname"><br>
		<input type = "text" name="price"><br>
		<input type = "text" name="qty"><br>
		<input type = "button" value="Add" id ="add">
	</div>
	<div class ='row text-center'>
	<div class ="col-xs-12 new_products">
	</div>
	<form method = "POST" action ="saveProducts.php">
	<div class = "col-xs-6 special_area hidden">
	</div>
	<input type = 'submit'>
	</form>
	</div>
</body>
</html>
<script src ="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#add").on("click", function(){
		var name = $("input[name='pname']").val();
		var price = $("input[name='price']").val();
		var qty = $("input[name='qty']").val();

		var a ="<div class ='alert alert-info'>"+name+" @ Php " +price+" ("+qty+")</div>";
		$(".new_products").append(a);

		var b ="<input type ='text' value='"+name+"' name ='pname[]'>
		<input type ='text' value='"+price+"' name ='price[]'>
		<input type ='text' value='"+qty+"' name ='qty[]'>
		";
		$(".special_area").append(b);
	});
});
</script>
