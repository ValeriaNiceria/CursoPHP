<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Repetição com teste lógico no final - Contagem Progressiva</title>
	<style>
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-size:24pt;
			font-family:arial,sans-serif;
		}
		h2{
			color:#000040;
			text-shadow:1px 1px 1px black;
			font-size:18pt;
			font-family:arial,sans-serif;
		}
	</style>
</head>
<body>
	<h1>Repetição com teste lógico no final</h1>
	<h2>Contagem Progressiva</h2>
	<?php
		$c = 1;
		do{
			echo $c." ";
			$c++;
		}while($c<=10);
	?>
	<h2>Contagem Regressiva</h2>
	<?php
		$c = 10;
		do{
			echo $c." ";
			$c--;
		}while($c >= 1);
	?>
</body>
</html>