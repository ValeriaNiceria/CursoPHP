<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura Switch - Operação</title>
	<style>
		h1{
			color:#2894ff;
			text-shadow:1px 1px 1px black;
			font-family:arial,sans-serif;
			font-size:24pt;
		}
		div{
			font-family:arial,sans-serif;
			font-size:13pt;
			font-weight:bold;
		}
		.botao{
			background:#2894ff;
			color:white;
			font-size:13pt;
			font-family:arial,sans-serif;
			border:0px;
			padding:8px;
		}
	</style>
</head>	
<body>
	<h1>Estrutura Switch - Operação</h1>
	<div>
	<?php
		$num = isset($_GET["n"])?$_GET["n"]:0;
		$esc = isset($_GET["e"])?$_GET["e"]:1;
		switch($esc){
			Case 1:
				echo "O dobro de $num é ".($num * 2);
				break;
			Case 2:
				echo "O cubo de $num é ".pow($num,3);
				break;
			Case 3:
				echo "A raíz quadrada de √$num é ".number_format(sqrt($num),2);
		}
	?>
	</div>
	<br/>
	<a href="http://localhost/Aula/PHP/EstruturaCondicionalSwitch/01-operacao.html" class="botao">Voltar</a>
</body>
</html>