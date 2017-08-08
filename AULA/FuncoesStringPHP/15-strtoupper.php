<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função strtoupper</title>
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
	<h1>Função strtoupper</h1>
	<?php
		$nome = "Valeria Niceria";
		$nome = strtoupper($nome); //Converte uma string para maiúsculas.
		echo "Meu nome é $nome";
	?>
</body>
</html>