<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Função implode</title>
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
	<h1>Função implode</h1>
	<?php
		$vetor[0] = "Curso";
		$vetor[1] = "em";
		$vetor[2] = "Vídeo";
		$texto = implode(" ",$vetor); //Junta elementos  de uma matriz em uma string.
		echo ($texto);
	?>
</html>