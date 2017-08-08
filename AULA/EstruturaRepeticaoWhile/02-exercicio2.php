<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura de Repetição While - Caixa de Texto</title>
	<style>
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-family:arial,sans-serif;
			font-size:24pt;
		}
		.botao{
			background:#0069d2;
			color:white;
			font-size:14pt;
			font-family:arial,sans-serif;
			border:0px;
			padding:5px;
		}
	</style>
</head>
<body>
	<h1>Estrutura de Repetição While</h1>
	<?php
		$c=1;
		while($c <= 5){
			$valor = isset($_GET["v$c"])?$_GET["v$c"]:0;
			echo "$c ° valor: ".$valor."<br/>";
			$c++;
		}
	?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>