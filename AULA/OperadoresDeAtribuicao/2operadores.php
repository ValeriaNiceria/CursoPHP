<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Operadores de Atribuição - Exercício 2</title>
	<style>
		h1{
			color:#8080ff;
			text-shadow: 1px 1px 1px black;
			font-size: 25pt;
			font-family: arial,sans-serif;
		}
		h2{
			color: #0000a0;
			text-shadow: 1px 1px 1px black;
			font-size:15pt;
			font-family:arial,sans-serif;
		}
		h3{
			color:#000000;
			font-size:12pt;
			font-family:arial,sans-serif;
			
		}
	</style>
</head>
<body>
	<h1>Operadores de Atribuição</h1>
	<h2>Exercício 2</h2>
	<h3>Mostrar qual foi o ano anterior ao ano atual</h3>
	
	<?php
		/* Esse exercício pretende demonstrar o uso de operadores de 
		incremento e decremento */
		$ano = $_GET["a"]; //Essa Linha vai pegar o ano na URL
		echo "O ano atual é $ano";
		echo "<br/> O ano anterior foi " . --$ano;
	?>
</body>
</html>