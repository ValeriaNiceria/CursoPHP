<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função Wordwrap</title>
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
	<h1>Função Wordwrap</h1>
	<?php
		$txt = "Esse é um exemplo de string gigante criado pelo PHP e vai mostrar a funcionalidade da função wordwrap...";
		$res = wordwrap($txt,5,"<br/>\n",false); //Quebra uma string em um dado número de caracteres
		echo ($res);
	?>
</body>
</html>