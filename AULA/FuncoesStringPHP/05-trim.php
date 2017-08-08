<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função trim</title>
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
	<h1>Função trim</h1>
	<?php
		$nome = "   José da Silva   ";
		echo (strlen($nome));
		$novo = trim($nome); //retorna espaço no ínicio e final de uma string. 
		echo ($novo);
		echo (strlen($novo));
	?>
</body>
</html>