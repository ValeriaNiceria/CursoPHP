<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função explode</title>
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
	<h1>Função explode</h1>
	<?php
		$site = "Curso em Vídeo";
		$vetor = explode(" ",$site); //Divide uma string em strings	
		print_r($vetor);
	?>
</body>
</html>