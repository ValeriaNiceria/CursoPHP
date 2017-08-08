<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função ltrim</title>
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
	<h1>Função ltrim</h1>
	<?php
		$nome = "   José da Silva   ";
		echo (strlen($nome));  
		$novo = ltrim($nome);//ltrim - vai eliminar os espaços do ínicio
		echo (strlen($novo));
	?>
</body>
</html>


		