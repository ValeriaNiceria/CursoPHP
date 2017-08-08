<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função stripos</title>
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
	<h1>Função stripos</h1>
	<?php
		$frase = "Estou aprendendo PHP";
		$pos = stripos($frase,"php"); //Encontra a primeira ocorrencia  de uma string sem diferenciar maiúsculas e minúsculas.
		echo "A string foi encontrada na posição $pos";
	?>
</body>
</html>