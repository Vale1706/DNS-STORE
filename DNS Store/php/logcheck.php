<?php
	$fp = fopen("../txt/loginfo.txt", "r");
	if(!$fp) die ("Errore");
	$loggedmail = fread($fp, 10000000);

	$fp = fopen("../txt/fornitore.txt", "r");
	if(!$fp) die ("Errore");
	$data = fread($fp, 10000000);
	fclose ($fp);
	$arrfornitore = explode(";", $data);
	$findfornitore = false;
	$numfornitore = count($arrfornitore);
	$numfornitore--;
	
	if($loggedmail=="")
	{
		echo "<script type='text/javascript'>alert('Per accedere all'area personale devi essere loggato');</script>";
		include '../html/index.html';
	}
	else
	{
		for($i=0;$findfornitore!=true && $i<$numfornitore;$i=$i+1)
		{
			if($arrfornitore[$i]==$loggedmail)
			{
				$findfornitore=true;
			}
		}
		if($findfornitore)
		{
			include '../html/areapersonalefornitore.html';
		}
		else
		{
			include '../html/areapersonale.html';
		}
	}
?>