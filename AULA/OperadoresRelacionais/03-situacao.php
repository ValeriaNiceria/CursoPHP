<!DOCTYPE html/>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Operadores Relacionais - Situação Aluno</title>
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
	<h2>Situação Aluno</h2>
	<h3>Mostrar a situação de um aluno, de acordo com a sua média obtida.</h3>
	<?php
		$n1 = isset($_GET["a"])?$_GET["a"]:"[Não informado o valor a]";
		$n2 = isset($_GET["b"])?$_GET["b"]:"[Não informado o valor b]";
		echo "Primeira Nota: $n1 <br/> Segunda Nota: $n2";
		$m = ($n1 + $n2)/2;
		echo "<br/> A média do Aluno foi: $m ";
		$sit = $m<6 ? "REPROVADO" : "APROVADO";
		echo "<br/> Situação do Aluno: $sit";
	?>	
	
</body>
</html>