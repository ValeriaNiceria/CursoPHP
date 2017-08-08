<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Repetição com Teste Lógico no Final - Tabuada de um número</title>
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
		div{
			margin:8px;
			font-family:arial,sans-serif;
			font-weight:bold;
			color:#000066;
		}
		.botao{
			background:#0060bf;
			color:white;
			border:0px;
			padding:5px;
			font-family:arial,sans-serif;
			font-size:13pt;
		}
	</style>
</head>
<body>
	<h1>Repetição com Teste Lógico no Final</h1>
	<?php
		$numero = isset($_GET["n"])?$_GET["n"]:0;
		echo "<h2>Tabuada de $numero</h2>";
		$c = 1;
		do{
			$tab = $numero * $c;
			echo "<div> $numero X $c = $tab <br/></div>";
			$c++;
		}while($c <=10);
	?>
	<br/>
	<a href = "javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>