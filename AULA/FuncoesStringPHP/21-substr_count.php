<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função substr_count</title>
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
	<h1>Função substr_count</h1>
	<?php
		$frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
		$cont = substr_count($frase,"PHP"); //Conta o número de ocorrências de uma substring.
		echo "PHP encontrado $cont vezes";
	?>
</body>
</html>