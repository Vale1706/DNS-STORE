<?php
	$fp = fopen("../txt/cart.txt", "w");
	fclose($fp);
	include "../php/scriptstampcart.php";	
?>
