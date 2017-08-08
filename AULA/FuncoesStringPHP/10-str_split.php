<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função str_split</title>
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
	<h1>Função str_split</h1>
	<?php
		$nome = "Maria";
		$vetor = str_split($nome);//Converte uma string para array
		print_r($vetor);
	?>
</html>