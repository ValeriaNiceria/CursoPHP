<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Operadores de Atribuição - Variáveis referenciadas</title>
	<style>
		h1{
			color:#8080ff;
			text-shadow: 1px 1px 1px black;
			font-size: 25pt;
			font-family: arial,sans-serif;
		}
		h2{
			color: #0000a0;
			text-shadow: 1px 1px 1px black;
			font-size:15pt;
			font-family:arial,sans-serif;
		}
	</style>
</head>
	<h1>Operadores de Atribuição</h1>
	<h2>Variáveis referenciadas</h2>
	
	<?php
	$a = 3;
	$b = &$a; #O '&' faz com que a variável seja referenciada a outra
	$b += 5;
	echo "A variável A vale $a";
	echo "<br/> A variável B vale $b";
	?>
</html>