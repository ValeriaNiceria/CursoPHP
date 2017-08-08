<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Operadores de Atribuição - Variáveis de variáveis</title>
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
	<h2>Variáveis de variáveis</h2>
	
	<?php
		$x = "abc";
		$$x = "def";
		echo "O conteúdo da variável X é $x";
		echo "<br/> A variável criada recebeu o valor $abc";
	?>
</html>