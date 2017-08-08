<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Repetição com Teste Lógico no Final - Calcular o Fatorial</title>
	<style>
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-size:24pt;
			font-family:arial,sans-serif;
		}
		h2{
			color:#000040;
			text-shadow:1px 1px 1px black;
			font-size:18pt;
			font-family:arial,sans-serif;
		}
		div{
			font-family:arial,sans-serif;
			font-size:12pt;
			font-weight:bold;
		}
		.botao{
			background:#0069d2;
			color:white;
			border:0px;
			padding:5px;
		}
	</style>
</head>
<body>
	<h1>Repetição com Teste Lógico no Final</h1>
	<h2>Calcular o Fatorial</h2>
	<div>
	<?php
		$numero = isset($_GET["n"])?$_GET["n"]:0;
		echo "O fatorial de $numero!";
		$fatorial = $numero;
		do{
			$numero--;
			$fatorial = $fatorial * $numero;
		}while($numero > 1);
		echo " é igual a $fatorial. ";
	?>
	<a href = "javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>