<!DOCTYPE html/>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Operadores Relacionais - Eleições</title>
	<style>
		h1{
			color:#00e6e6;
			text-shadow: 1px 1px 1px black;
			font-size:25pt;
			font-family:arial,sans-serif;
		}
		h2{
			color:#0000a0;
			text-shadow: 1px 1px 1px black;
			font-size:18pt;
			font-family:arial,sans-serif;
		}
		h3{
			color: #000080;
			font-size:12pt;
			font-family:arial,sans-serif;
		}
		
	</style>
</head>
<body>
	<h1>Operadores Relacionais</h1>
	<h2>Eleições</h2>
	<h3>Mostrar se um eleitor é obrigado a votar ou não.</h3>
	<?php
		$idade = isset($_GET["i"])?$_GET["i"]:"[Não foi informado a idade]";
		echo "Sua idade é: $idade anos. ";
		$eleitor = ($idade >= 18 && $idade <= 64) ? "Obrigado a votar!" : "Liberado da votação!";
		echo "<br/> $eleitor";
	?>	
	
</body>
</html>