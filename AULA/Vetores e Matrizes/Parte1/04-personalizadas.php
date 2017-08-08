<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Chaves Personalizadas</title>
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
	<h2>Chaves Personalizadas</h2>
	<pre>
	<?php
		$v = array(1=>"A",4=>"B",7=>"C",8=>"D");
		$v[] = "E";
		unset($v[9]); //Desaloca o espaço na memória
		print_r($v);
	?>
	</pre>
</body>
</html>