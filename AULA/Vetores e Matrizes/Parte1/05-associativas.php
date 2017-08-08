<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Chaves Associativas</title>
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
	<h2>Chaves Associativas</h2>
	<pre>
	<?php
		$cad = array (
				"nome" => "Ana",
				"idade" => 23,
				"peso" => 78.5);
		print_r($cad);
	?>
	<h2>FOREACH Associativo</h2>
	<?php
		$cad = array (
				"nome" => "Ana",
				"idade" => 23,
				"peso" => 78.5);
		$cad["fuma"] = true;
		foreach($cad as $campo => $valor){
			echo "O valor de $campo é $valor <br/>";
		}
	?>
	</pre>
</body>
</html>