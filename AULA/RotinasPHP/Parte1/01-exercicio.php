<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Soma - Rotinas em PHP</title>
	<style>
		body{
			font-family:arial,sans-serif;
		}
		div#cabecalho{
			text-shadow: 1px 1px 1px black;
		}
		div#cabecalho h1{
			color:#0080ff;
		}
		div#cabecalho h2{
			color:#000080;
		}
		h3 {
			font-weight:normal;
		}
		.botao{
			background:#0080ff;
			color:white;
			border:0px;
			padding:5px;
			font-size:14px;
			line-height:30px;
		}
		
	</style>
</head>
<body>
	<div id="cabecalho">
	<h1>Rotinas em PHP (Procedimento)</h1>
	<h2>Soma</h2>
	</div>
	<h3>Criar um procedimento que some dois valores númericos inteiros:</h3>
	<?php
		function soma ($n1,$n2){
			$s = $n1 + $n2;
			echo "A soma entre $n1 e $n2 é igual a $s";
		}
		soma(($n1 = isset($_GET["n1"])?$_GET["n1"]:0),($n2 = isset($_GET["n2"])?$_GET["n2"]:0));
	?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html