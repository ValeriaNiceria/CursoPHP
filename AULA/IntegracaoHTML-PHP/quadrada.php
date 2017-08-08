<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Raíz Quadrada</title>
	<style>
		h1{
			color: #8080ff;
			text-shadow: 1px 1px 1px black;
			font-size:20pt;
			font-family:arial,sans-serif;
		}
		div{
			color:#000080;
			font-size:12pt;
			font-family:arial,sans-serif;
		}
		a{
			text-decoration:none; 
			color: #ff0000;
		}
	</style>
</head>
<body>
	<h1>Raíz Quadrada</h1>
	<div>
	<?php
		$valor = $_GET["v"];
		$quadrada = sqrt($valor);
		echo "A raíz quadrada de √$valor é igual a ".number_format($quadrada,2,",",".");
	?>
	<br/>
	<a href="http://localhost/Aula/PHP/IntegracaoHTML-PHP/quadrada.html">Voltar </a>
	</div>
</body>
</html>