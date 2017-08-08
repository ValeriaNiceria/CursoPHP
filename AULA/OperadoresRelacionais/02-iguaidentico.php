<!DOCTYPE html/>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Operadores Relacionais - Igual Idêntico</title>
	<style>
		h1{
			color:#00e6e6;
			text-shadow: 1px 1px 1px black;
			font-size:25pt;
			font-family:arial,sans-serif;
		}
		h2{
			color:#0000a0;
			text-shadow: 1px 1px 1px black;
			font-size:18pt;
			font-family:arial,sans-serif;
		}
		
	</style>
</head>
<body>
	<h1>Operadores Relacionais</h1>
	<h2>Igual - Idêntico</h2>
	<?php
		$a = 3;
		$b = "3";
		$r = ($a == $b) ? "SIM" : "NÃO";
		echo "IGUAL: $r";
		$r = ($a === $b) ? "SIM" : "NÃO";
		echo "<br/> IDÊNTICO: $r";
		
	?>	
	
</body>
</html>