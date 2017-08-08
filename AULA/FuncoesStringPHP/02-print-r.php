<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função Print_r</title>
	<style>
		body{
			font-family:arial,sans-serif;
		}
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
		}
	</style>
</head>
<body>
	<h1>Função Print_r</h1>
	<?php
		$x[0] = 3;
		$x[1] = 7;
		$x[2] = 4;
		print_r($x); //Imprime informações sobre uma variável de forma legível.	
		
		echo "<br/>";
		
		$x2 = array(1,2,4,6,8,9); //Função que cria vetor
		print_r($x2);
	?>
</body>
</html>
