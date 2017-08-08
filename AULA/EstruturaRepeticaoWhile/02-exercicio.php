<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura de Repetição While - Caixa de texto</title>
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
		form{
			font-family:arial,sans-serif;
			font-size:12pt;
		}
		input{
			margin:5px;
		}
		.botao{
			background:#007af4;
			color:white;
			border:0px;
			padding:5px;
			font-size:15pt;
		}
	</style>
</head>
<body>
	<h1>Estrutura de Repetição While</h1>
	<h2>Caixa de texto</h2>
	<form method="get" action="02-exercicio2.php">
		<?php
			$c = 1;
			while($c <= 5){
				echo "Valor $c:<input type='number' name='v$c' value='0' max='100' min='0'/> <br/>";
				$c++;
			}
		?>	
		<input type="submit" value="Enviar" class="botao"/>
	</form>
</body>
</html>