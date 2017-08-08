<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função rtrim</title>
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
	<h1>Função rtrim</h1>
	<?php
		$nome = "   José da Silva   ";
		echo (strlen($nome));  
		$novo = rtrim($nome);//rtrim - vai eliminar os espaços do final
		echo (strlen($novo));
	?>
</body>
</html>


		