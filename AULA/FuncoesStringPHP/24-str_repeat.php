<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Função str_repeat</title>
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
	<h1>Função str_repeat</h1>
	<?php
		$txt = str_repeat("PHP ",5); //Repete uma string
		print("O texto gerado foi $txt <br/>");
		print (str_repeat("--",30));
	?>
</body>
</html>