<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função str_pad</title>
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
	<h1>Função str_pad</h1>
	<?php
		$nome = "Valeria";
		$novo = str_pad($nome,30," ++ ", STR_PAD_RIGHT); //Preenche uma string para um certo tamanho com outra string
		print ("A $novo que está estudando é linda!");
	?>
</body>
</html>