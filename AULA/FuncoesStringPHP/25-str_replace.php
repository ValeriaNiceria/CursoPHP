<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função str_replace</title>
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
	<h1>Função str_replace</h1>
	<?php
		$frase = "Gosto de estudar Programação!!!!";
		$novaFrase = str_replace("Programação", "PHP",$frase); //Substitui todas as ocorrências da string de procura com string de substituição.
		print($novaFrase);
	?>
	
</body>
</html>