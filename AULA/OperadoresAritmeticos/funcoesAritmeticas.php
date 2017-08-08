<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Funções Aritméticas</title>
	<style>
		h1{
			color:#8080ff;
			text-shadow: 1px 1px 1px black;
			font-size: 25pt;
			font-family: arial,sans-serif;
		}
		h2{
			color: #0000a0;
			text-shadow: 1px 1px 1px black;
			font-size:15pt;
			font-family:arial,sans-serif;
		}
	</style>
	
</head>
<body>
	<h1>Aula PHP - Funções Aritméticas</h1>
	<?php
		$v1 = $_GET["x"];
		$v2 = $_GET["y"];
		
		echo "<h2>Valores recebidos $v1 e $v2</h2>";
		echo "<br/> O valor absoluto  de $v2 é ".abs($v2);
		echo "<br/> A potenciação de $v1 <sup>$v2</sup> ".pow($v1,$v2);
		echo "<br/> A raiz quadrada de $v1 é ".sqrt($v1);
		echo "<br/> O valor de $v2 arredondado é ".round($v2); //ceil(arredonda para cima) - floor(arredonda para baixo)
		echo "<br/> A parte inteira de $v2 é ". intval($v2);
		echo "<br/> O valor de $v1 em moeda é R$".number_format($v1,2,",",".");
		
		
	?>
</body>
</html>