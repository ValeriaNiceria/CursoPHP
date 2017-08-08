<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura de repetição For - Exercício 1</title>
	<style>
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-size:24pt;
			font-family:arial,sans-serif;
		}
		h2{
			color:#000080;
			text-shadow:1px 1px 1px black;
			font-size:18pt;
			font-family:arial,sans-serif;
		}
		h3{
			font-size:13pt;
			font-family:arial,sans-serif;
			font-weight:bold;
		}
	</style>
</head>
<body>
	<h1>Estrutura de repetição For</h1>
	<h2>Exercício 01</h2>
	<h3>Mostrar várias contagens utilizando a estrutura For.</h3>
	<?php
		for($c=1;$c<=10;$c++){
			echo "$c ";
		}
		echo "<br/>";
		for($c=10;$c>=1;$c--){
			echo "$c ";
		}
		echo "<br/>";
		for($c=0;$c<=50;$c+=5){
			echo "$c ";
		}
		echo "<br/>";
		for ($c=20;$c>=0;$c-=2){
			print "$c ";
		}
	?>
</body>
</html>
