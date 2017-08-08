<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função strlen</title>
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
	<h1>Função strlen</h1>
	<?php
		$txt = "Testando Função";
		$tam = strlen($txt); //Retorna o tamanho de uma string
		echo($tam);
	?>
</body>
</html>