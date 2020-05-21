<?php
	// $nomegioco = $_REQUEST['nomegioco'];
	$nomegioco = "gioco3";
	$nomegioco = str_replace(' ', '', $nomegioco);

	
	$fp = fopen("catalogo.txt", "r");
	if(!$fp) die ("Errore");
	$data = fread($fp, 10000000);
	
	fclose($fp);
	$arr = explode(";", $data);
	
	$records = count($arr);
	$records--;
	
	$find=false;
	
	for($i=0; $find!=true && $i<$records;$i=$i+2)
	{
		$dacatalogo = str_replace(' ', '', $arr[$i]);
		
		if($nomegioco==$dacatalogo)
		{
			$id = $arr[$i+1];
			$find = true;
			echo "gioco trovato";
			echo $id;
		}
	}
?>