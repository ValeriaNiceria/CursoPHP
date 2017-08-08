<!DOCTYPE html/>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Operadores Aritméticos </title>
	<style>
		h1{
			color: #8080ff;
			text-shadow: 1px 1px 1px black;
			font-size: 25pt;
			font-family:arial, sans-serif;
		}
		h2{
			color:#0000a0;
			text-shadow: 1px 1px 1px black;
			font-size:15pt;
			font-family:arial,sans-serif;
		}
	</style>
</head>
<body>
	<h1>Aula PHP - Operadores Aritméticos</h1>
	<h2>Recebendo valores através da url <i>(?a=10&b=2)</i></h2>
	<?php
		$n1 = $_GET["a"]; //Recebe o valor através da url (?a=10&b=2)
		$n2 = $_GET["b"]; //Recebe o valor através da url (?a=10&b=2)
		$m = ($n1 + $n2)/2;
		
		echo "A soma entre $n1 e $n2 é ".($n1+$n2);
		echo "<br/>  A subtração vale ".($n1-$n2);
		echo "<br/> A multiplicação vale ".($n1 * $n2);
		echo "<br/> A divisão vale ".($n1 / $n2);
		echo "<br/> O módulo vale ".($n1 % $n2);
		echo "<br/> A média entre $n1 e $n2 é $m";
		
		
	?>
</body>
</html>