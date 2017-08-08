<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Função ord</title>
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
	<h1>Função ord</h1>
	<?php
		$letra = "C";
		$cod = ord($letra);//Retorna o valor ASCII do caractere
		echo "O código da letra $letra é $cod.";
	?>
</body>
</html>