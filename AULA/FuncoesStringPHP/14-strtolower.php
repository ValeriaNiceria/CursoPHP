<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função strtolower</title>
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
	<h1>Função strtolower</h1>
	<?php
		$nome = "Valéria Nicéria";
		print("Seu nome é ".strtolower($nome)); //Converte uma string para minúsculas.
	?>
</body>
</html>