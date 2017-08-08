<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Integração HTML-PHP</title>
	<style>
		h1{
			color:#8080c0;
			text-shadow:1px 1px 1px black;
			font-size:20pt;
			font-family:arial,sans-serif;
		}
		div{
			color:#000080;
			font-size:13pt;
			font-family:sans-serif;
		}
		a{
			text-decoration:none;
			color: #e80000;
		}
	</style>	
</head>
<body>
	<h1>Resultado do formulário</h1>
	<div>
	<?php
		$nome = isset($_POST["n"])?$_POST["n"]:"[Não Informado]";
		$nasc = isset($_POST["dt"])?$_POST["dt"]:0;
		$sx = isset($_POST["sexo"])?$_POST["sexo"]:"[Sem Sexo]";
		$idade = date("Y") - $nasc;
		echo "$nome do sexo $sx tem $idade anos.";
	?>
	</div>
	<br/>
	<a href="http://localhost/Aula/PHP/IntegracaoHTML-PHP/dados.html">Voltar</a>
</body>
</html>
