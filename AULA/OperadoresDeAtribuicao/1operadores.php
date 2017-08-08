<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Operadores de Atribuição - Exercício 1</title>
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
	<h2>Exercício 01</h2>
	<h3>Aplicar 10% de desconto ao preço de um produto</h3>
	<?php
		$produto = $_GET["x"];
		echo "O valor do produto é R$".number_format($produto,2,",",".");
		$produto -= ($produto*10/100);
		echo "<br/> O valor do produto com 10% de desconto é R$".number_format($produto,2,",",".");
	?>
</body>
</html>