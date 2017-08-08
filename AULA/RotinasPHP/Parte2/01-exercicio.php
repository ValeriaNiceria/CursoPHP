<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Passagem por referência - Rotina em PHP</title>
	<style>
		body{
			font-family:arial,sans-serif;
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
<body>
	<div id="cabecalho">
		<h1>Rotina em PHP</h1>
		<h2>Passagem por referência</h2>
	</div>
	<?php
		function soma(&$x){
			$x += 2;
			echo "<p>O valor de x é $x</p>";
		}
		$a = 4;
		soma($a);
		echo "<p>O valor de a é $a</p>";
	?>
</body>
</html>