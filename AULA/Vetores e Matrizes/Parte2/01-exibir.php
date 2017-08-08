<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Exibir vetor</title>
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
	<h1>Exibir vetor</h1>
	<pre>
		<?php
			$v = array(3,5,8,2);
			print_r($v);
			
			var_dump($v);
		?>
	</pre>
</body>
</html>