<?php
	$nomegioco = $_REQUEST['nomegioco'];
	$prezzogioco = $_REQUEST['prezzogioco'];
	$fp = fopen("../txt/cart.txt", "a+");
	if(!$fp) die ("Errore");
	
	fwrite($fp, $nomegioco.";".$prezzogioco.";");
	fclose ($fp);
	
	$message = "Il prodotto è stato aggiunto al carrello!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	sleep(1);
	echo "<script type='text/javascript'>history.go(-1);</script>";
?>