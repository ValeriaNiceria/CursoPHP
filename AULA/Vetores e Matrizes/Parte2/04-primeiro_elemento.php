<!DOCTYPE hmtl>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Gerenciando os primeiros elementos</title>
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
	<h1>Gerenciando os primeiros elementos</h1>
	<pre>
		<?php
			$v = array(4,3,1,5,7,3);
			print_r($v);
			
			array_unshift($v,0); //Adiciona um ou mais elementos no início do array.
			print_r($v);
			
			array_shift($v); //Retira o primeiro elemento de um array.
			print_r($v);
		?>
	</pre>
</body>
</html>