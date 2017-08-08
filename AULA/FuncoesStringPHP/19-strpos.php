<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função strpos</title>
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
	<h1>Função strpos</h1>
	<?php
		$frase = "Estou aprendendo PHP";
		$pos = strpos($frase,"PHP"); //Encontra a posição da primeira ocorrência de uma string.
		echo "A string 'PHP' foi encontrada na posição $pos";
	?>
</body>
</html>