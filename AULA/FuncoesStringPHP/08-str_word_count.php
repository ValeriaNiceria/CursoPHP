<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função str_word_count</title>
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
	<h1>Função str_word_count</h1>
	<?php
		$frase = "Eu vou estudar PHP";
		$cont = str_word_count($frase,0); //Retorna informações sobre as palavras usadas emm uma string (0 = conta as palavras, 1 = ele cria um vetor, 2 = um vetor que mantém o posicionamento de cada palavra)
		echo ($cont); //Se utilizar o "0"
		//print_r($cont); // Se utilizar o "1"
		//print_r($cont); //Se utilizar o "2"
	?>
</html>