<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Soma - Rotinas em PHP (Funções)</title>
	<style>
		body{
			font-family:arial,sans-serif;
			font-size:15pt;
		}
		div#cabecalho{
			font-family:arial,sans-serif;
			text-shadow:1px 1px 1px black;
		}
		div#cabecalho h1{
			color:#0080ff;
		}
		div#cabecalho h2{
			color:#000080;
		}
	</style>
</head>
	<div id="cabecalho">
		<h1>Rotinas em PHP (Funções)</h1>
		<h2>Soma</h2>
	</div>
	<?php
		function soma($a,$b){
			$s = $a + $b;
			return $s;
		}
		$x = 5;
		$y = 8;
		$r = soma($x,$y);
		echo "A soma entre $x e $y é igual a $r";
	?>
</html>