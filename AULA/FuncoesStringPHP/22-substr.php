<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função substr</title>
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
	<h1>Função substr</h1>
	<?php
		$site = "Curso em Vídeo";
		$sub = substr($site,0,5); //Retorna uma parte de uma string
		echo "$sub ";
		print (substr($site,-5,3));
		print (substr($site,9,5));
	?>
</body>
</html>