<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Range em PHP</title>
	<style>
		body{
			font-family:arial,sans-serif;
		}
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
		}
		h2{
			color:#0000a0;
			text-shadow:1px 1px 1px black;
		}
	</style>
</head>
<body>
	<h1>Vetores</h1>
	<h2>Range</h2>
	<?php
		$c = range(3,20,5); //Cria um array contendo uma faixa de elementos (Que significa que ele vai começar em 3, vai até 20, pulando de 5 em 5)
		print_r($c);
	?>
</body>
</html>