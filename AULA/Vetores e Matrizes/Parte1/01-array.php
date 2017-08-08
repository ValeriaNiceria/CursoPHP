<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Array em PHP</title>
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
	<h2>Array</h2>
	<pre>
		<?php
			$n = array(3,1,4,7,4);
			$n[] = 9;
			print_r($n);
		?>
	</pre>
</body>
</html>