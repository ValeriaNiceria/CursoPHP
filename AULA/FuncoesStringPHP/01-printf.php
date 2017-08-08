<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função Printf</title>
	<style>
		body{
			font-family:arial,sans-serif;
		}
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-size:24pt;
		}
	</style>
</head>
<body>
	<h1>Função Printf</h1>
	<?php
		$prod = "leite";
		$preco = 4.5;
		printf("O %s está custando R$ %.2f",$prod,$preco); //Mostra uma string formatada
	?>
</body>
</html>