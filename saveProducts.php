<?php
	if(isset($_POST['pname'])){
		$product_name = $_POST['pname'];
		$product_price = $_POST['price'];
		$product_qty = $_POST['qty'];

		var_dump($product_name);
		echo "<br>";
		foreach($product_name as $key=>$value){
			echo "Product #: ".($key+1)." - ".$value."<br>";
		}foreach($product_price as $key=>$value){
			echo "Price #: ".($key+1)." - ".$value."<br>";
		}foreach($product_qty as $key=>$value){
			echo "Qty #: ".($key+1)." - ".$value."<br>";
		}

	}else{
		echo "NO DATA FOUND";
	}
?>