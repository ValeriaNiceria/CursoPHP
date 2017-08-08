<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Ordenando Vetores</title>
	<style>
		body{
			font-family:arial,sans-serif;
		}
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
		}
	</style>
</head>
<body>
	<h1>Ordenando Vetores</h1>
	<pre>
		<?php
			$v = array(9,6,8,2,7);
			print_r($v);
			sort($v); //Ordena um array 
			print_r($v);
			
			rsort($v); //Ordena um array em ordem decrescente
			print_r($v);
			
			asort($v); //Ordena um array mantendo a associação entre índices e valores
			print_r($v);
			
			arsort($v); //Ordena um array em ordem decrescente mantendo a associação entre índices e valores.
			print_r($v);
			
			$n = array(3=>"C", 2=>"E", 0=>"H",1=>"B");
			print_r($n);
			ksort($n); //Ordena um array pelas chaves
			print_r($n);
			
			krsort($n); //Ordena um array pelas chaves em ordem decrescente
			print_r($n);
		?>
	</pre>
</body>
</html>