<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Gerenciando o último elemento</title>
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
	<h1>Gerenciando o último elemento</h1>
	<pre>
		<?php
			$v = array("A","B","C","D","E");
			print_r($v);
			$v[] = "F"; //Vai adicionar um elemento no final do array.
			print_r($v);
			
			array_push($v,"G"); //Vai adicionar um ou mais elementos no final de um array.
			print_r($v);
			
			$v[] = "Z";
			array_pop($v); //Extrai um elemento do final do array.
			
			
		?>
	</pre>
</body>
</html>