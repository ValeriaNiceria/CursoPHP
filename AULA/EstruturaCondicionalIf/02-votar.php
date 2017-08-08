<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura Condicional If</title>
	<style>
		h1{
			color:#8080ff;
			text-shadow:1px 1px 1px black;
			font-size: 25pt;
			font-family: arial, sans-serif;
		}
		div{
			color:#000080;
			font-size:12pt;
			font-family:arial,sans-serif;
		}
	</style>
</head>
<body>
	<h1>Estrutura Condicional</h1>
	<div>
	<?php
		$nome = isset($_POST["n"])?$_POST["n"]:"[Não foi informado o nome]";
		$nasc = isset($_POST["dt"])?$_POST["dt"]:0;
		$idade = date("Y") - $nasc;
		If($idade<16){
			$tipoVoto = "não vota!";
		}
		elseIf($idade>=16 && $idade<18 || $idade>65){
			$tipoVoto = "voto opcional!";
		}
		else{
			$tipoVoto = "voto obrigatório!";
		}
		
		echo "$nome, $tipoVoto";
	?>
	</div>
</body>
</html>
