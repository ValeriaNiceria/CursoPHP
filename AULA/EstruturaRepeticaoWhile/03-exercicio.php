<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura de Repetição While - Contador Personalizável</title>
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
			margin:10px;
			color:#000080;
			font-family:arial,sans-serif;
			font-size:12pt;
			font-weight:bold;
		}
		.botao{
			background:#0070df;
			color:white;
			border:0px;
			font-family:arial,sans-serif;
			font-size:14pt;
			padding:5px;
		}
	</style>
</head>
	<h1>Estrutura de Repetição While</h1>
	<h2>Resultado do Contador Personalizável</h2>
	<div>
	<?php
		$inicio = isset($_GET["i"])?$_GET["i"]:0;
		$final = isset($_GET["f"])?$_GET["f"]:1;
		$inc = isset ($_GET["in"])?$_GET["in"]:1;
		If($inicio < $final){
			while($inicio <= $final){
				echo $inicio." ";
				$inicio += $inc;
			}
		}
		ElseIf($inicio > $final){
			while($inicio >= $final){
				echo $inicio." ";
				$inicio -= $inc;
			}
		}
	?>
	</div>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</html>