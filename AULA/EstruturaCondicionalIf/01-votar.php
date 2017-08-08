<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura Condicional If</title>
	<style>
		h1{
			color:#8080ff;
			text-shadow:1px 1px 1px black;
			font-size: 25pt;
			font-family: arial, sans-serif;
		}
		div{
			color:#000080;
			font-size:12pt;
			font-family:arial,sans-serif;
		}
	</style>
</head>
<body>
	<h1>Estrutura Condicional</h1>
	<div>
	<?php
		$nome = isset($_POST["n"])?$_POST["n"]:"[Não foi informado o nome]";
		$nasc = isset($_POST["dt"])?$_POST["dt"]:0;
		$idade = date("Y") - $nasc;
		If($idade >= 18){
			$vota = "pode votar";
			$dirige = "pode dirigir!";
		}
		else{
			$vota = "não pode votar";
			$dirige = "não pode dirigir!";
		}
		echo "$nome, você tem $idade anos e $vota e também $dirige";
	?>
	</div>
</body>
</html>
