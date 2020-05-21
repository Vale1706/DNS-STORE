<?php
	 $fp = fopen("../txt/fornitore.txt", "r");
	 if(!$fp) die ("Errore");
	 $data = fread($fp, 10000000);
	
	 fclose($fp);
	 $arr = explode(";", $data);
	
	 $records = count($arr);
	 $records--;

	echo '<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/animate.css" >
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="icon" href="../img/icona.png" type="image/png" />

		<title>
			DNS Store
		</title>
	</head>

	<body link="red" alink="red" vlink="red">
		<a name="primo"></a>
		<div class="top-container">
			<img  height="250px" width="1920px" src="../img/prova2banner3.0.png">
		</div>

		<div class="header" id="myHeader">
			<ul>
				<li><a href="../html/index.html">Home</a></li>
				<li><a href="../games/gameslist.html">Cosa Vendiamo</a></li>
				<li><a href="../html/ChiSiamo.html">Chi siamo</a></li>
				<div class="topnav"> <input type="text" style="float:left" placeholder="Cerca i giochi..."> </div>
				<li style="float:right">
						<button class="open-button active" onclick="openForm()" style="font-family: Montserrat; font-size:15px; cursor: default">Area Personale</button>
				</li>
				<li style="float:right">
				<button class="open-cart" onclick="location.href="scriptstampcart.php"" style="font-family: Montserrat; font-size:15px"><img src="../img/shoppingcart.png" height="42" width="42"></button>
				</li>
			</ul>
		</div>
			<div class="content">
				<a href="../html/areapersonalefornitore.html" style="text-decoration: none; color: #4CAF50">Torna indietro</a>';
				//////////////
				echo '<h2><p align=center>Elenco Fornitori</p></h2>';
				$Rows = $records;
				$Cols = 1;
				$contatore=0;
				echo '<table border="3" align="center" class="carttable">';
				for($i=1;$i<=$Rows;$i++){ echo '<tr>';
					for($j=1;$j<=$Cols;$j++){ 
						echo '<td>' . $arr[$i-1] . '</td>'; 
					}
					echo '</tr>';
				}
				echo '</table>';
				//////////////
	echo	'</div>

	<script src="../js/script.js"	></script>

	</body>
	</html>';
?>
	
	
