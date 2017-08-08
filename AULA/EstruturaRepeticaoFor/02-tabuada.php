<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Tabuada - Estrutura de repetição For</title>
	<style>
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-size:24pt;
			font-family:arial,sans-serif;
		}
		h2{
			color:#000080;
			text-shadow:1px 1px 1px black;
			font-size:18pt;
			font-family:arial,sans-serif;
		}
		div{
			margin:5px;
			font-family:arial,sans-serif;
			font-size:14pt;
		}
		.botao{
			background:#0065ca;
			color:white;
			font-size:13pt;
			font-family:arial,sans-serif;
			padding:6px;
		}
	</style>
</head>
	<h1>Estrutura de repetição For</h1>
	<h2>Tabuada</h2>
	<div>
	<?php
		$n = isset($_GET["n"])?$_GET["n"]:0;
		for ($c=1;$c<=10;$c++){
			echo "$n x $c = ".($n*$c);
			echo "<br/>";
		}
	?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</html>