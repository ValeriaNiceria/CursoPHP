<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Contando os itens</title>
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
	<h1>Contando os itens</h1>
	<pre>
		<?php
			$v = array("A","B","H","V","W");
			echo "O vetor tem ".count($v)." elementos. <br/>";
		
			print_r($v);
		?>
	</pre>
</body>
</html>