<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Rotinas Externas - Rotinas em PHP</title>
	<style>
		body{
			font-family:arial,sans-serif;
		}
		div#cabecalho{
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
		<h1>Rotinas em PHP</h1>
		<h2>Rotinas Externas</h2>
	</div>
	<?php
		include "funcoes.php";
		ola();
		mostraValor(87);
	?>
</body>
</html>