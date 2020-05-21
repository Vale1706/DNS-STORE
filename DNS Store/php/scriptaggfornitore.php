<?php
	$nome = $_REQUEST['nome'];
	$cognome = $_REQUEST['cognome'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['pass'];
	$confermapass = $_REQUEST['confermapass'];
	$fornitore = $_REQUEST['fornitore'];
	$flag=false;

	if($password==$confermapass)
	{
		$flag=true;
	}
	if($fornitore=="on")
	{
		$fp = fopen("../txt/fornitore.txt", "a+");
		if(!$fp) die ("Errore");
		fwrite($fp, $email.";");
		fclose($fp);
	}
	if($flag)
	{
		$fp = fopen("../txt/test.txt", "a+");
		if(!$fp) die ("Errore");
		fwrite($fp, $email.";".$password.";".$nome.";");
		fclose($fp);
		$message = "Il fornitore è stato aggiunto!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		sleep(1);
		include '../html/areapersonalefornitore.html';
	}
?>
