<?php
	$email = $_REQUEST['email'];
	$password = $_REQUEST['pass'];

	$correctpass=false;
	$correctemail=false;

	$fp = fopen("../txt/test.txt", "r");
	if(!$fp) die ("Errore");
	$data = fread($fp, 10000000);

	fclose($fp);
	$arr = explode(";", $data);

	$records = count($arr);
	$records--;


	//x controllo fornitore
	$fp = fopen("../txt/fornitore.txt", "r");
	if(!$fp) die ("Errore");
	$data = fread($fp, 10000000);
	fclose ($fp);
	$arrfornitore = explode(";", $data);
	$findfornitore = false;
	$numfornitore = count($arrfornitore);
	$numfornitore--;

	for($i=0;$correctpass!=true && $correctemail!=true && $i<$records;$i=$i+3)
	{
		$email1=$arr[$i];
		if($email==$email1)
		{
			$password1 = $arr[$i+1];
			$password1 = trim($password1);

			if($password==$password1)
			{

				$correctpass=true;
				$correctemail=true;
			}
			else
			{
				$correctpass=false;
				$correctemail=true;
			}
		}

	}

	for($j=0; $findfornitore!=true && $j<$numfornitore;$j=$j+1)
	{
		$email1=$arrfornitore[$j];
		if($email==$email1)
		{
			$findfornitore = true;
		}
	}

	if ($correctpass==true && $correctemail=true)
	{
		$fp = fopen("../txt/loginfo.txt", "w");
		fclose($fp);
		$fp = fopen("../txt/loginfo.txt", "a+");
		if(!$fp) die ("Errore");
		fwrite($fp, $email);
		fclose($fp);
		if($findfornitore==true)
		{
			include ("../html/indexloggedfornitore.html");
		}
		else
		{
			include ("../html/indexlogged.html");
		}
	}
	else
	{
		if($correctemail==true)
		{
			$message = "Password errata";
			echo "<script type='text/javascript'>alert('$message');</script>";
			include ("../html/index.html");
		}
		else
		{
			$message = "Email non riconosciuta";
			echo "<script type='text/javascript'>alert('$message');</script>";
			include ("../html/index.html");
		}
	}


?>
