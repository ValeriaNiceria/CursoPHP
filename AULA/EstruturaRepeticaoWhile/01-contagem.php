<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura de Repetição While - Contagem</title>
	<style>
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-family:arial,sans-serif;
			font-size:24pt;
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
	<h1>Estrutura de Repetição While</h1>
	<h2>Contagem Progressiva</h2>
	<?php
		$c = 1;
		while($c <= 10){
			echo $c." ";
			$c++;
		}
	?>
	<br/>
	<h2>Contagem Regressiva</h2>
	<?php
		$c = 10;
		while($c >= 1){
			echo $c." ";
			$c--;
		}
	?>
	
</body>	
</html>