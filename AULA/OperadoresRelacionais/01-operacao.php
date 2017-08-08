<!DOCTYPE html/>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Operadores Relacionais - Exercício 1</title>
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
			color:#000080;
			font-size:12pt;
			font-family:arial,sans-serif;
		}
	</style>
</head>
<body>
	<h1>Operadores Relacionais</h1>
	<h2>Exercício 1</h2>
	<h3>Permitir que o usuário escolha entre somar e multiplicar dois números.</h3>
	
	<?php
		$n1 = isset($_GET["a"])?$_GET["a"]:"[Não foi informado o valor de a]";
		$n2 = isset($_GET["b"])?$_GET["b"]:"[Não foi informado o valor de b]";
		$tipo = isset($_GET["op"])?$_GET["op"]:"[Não foi informado]";
		echo "Os valores recedidos foram: $n1 e $n2 <br/>";
		$resp = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
		echo "O resultado será $resp";
	?>
</body>
</html>