<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Matriz em PHP</title>
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
	<h1>Matriz em PHP</h1>
	<pre>
	<?php
		$m = array(
					array(2,3),
					array(3,5),
					array(9,4)
				);
		$m [0][1] = $m[2][1];
		print_r($m);
		
	?>
	</pre>
</body>
</html>