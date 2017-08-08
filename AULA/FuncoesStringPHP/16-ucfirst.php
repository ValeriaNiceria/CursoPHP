<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função ucfirst</title>
	<style>
		body{
			font-family:arial,sans-serif;
		}
		h1{
			text-shadow:1px 1px 1px black;
			color:#0080ff;
		}
	</style>
</head>
<body>
	<h1>Função ucfirst</h1>
	<?php
		$nome = "valéria nicéria";
		print("Seu nome é ".ucfirst($nome)); //Converte para maiúscula o primeiro caractere de uma string
	?>
</body>
</html>