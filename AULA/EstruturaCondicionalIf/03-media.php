<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Média Aluno - Estrutura Condicional If</title>
	<style>
		h1{
			color:#55aaff;
			text-shadow:1px 1px 1px black;
			font-family:arial,sans-serif;
			font-size:25pt;
		}
		div{
			font-family:arial,sans-serif;
			font-size:12pt;
		}
		span.v{
			color:#ff0000;
			font-weight:bold;
		}
		.botao{
			font-family:arial,sans-serif;
			font-size:14pt;
			color:white;
			background:#009393;
			border:0px;
			padding:10px;
		}
	</style>
</head>
<body>
	<h1>Média Aluno</h1>
	<div>
	<?php
		$nota1 = isset($_GET["n1"])?$_GET["n1"]:"[Não informado]";
		$nota2 = isset($_GET["n2"])?$_GET["n2"]:"[Não informado]";
		$media=($nota1+$nota2)/2;
		echo "A média entre <span class='v'>$nota1</span> e <span class='v'>$nota2</span> é igual a <span class='v'>".number_format($media,2)."</span>";
		If ($media >= 7){
			$sit = "APROVADO";
		}
		ElseIf ($media<7 && $media >=5){
			$sit = "RECUPERAÇÃO";
		}
		Else {
			$sit = "REPROVADO";
		}
		echo "<br/> Situação do aluno: <span class='v'>$sit</span>";
	?>
	</div>
	<br/>
	<a href="http://localhost/Aula/PHP/EstruturaCondicionalIf/03-media.html" class="botao">Voltar</a>
</body>
</html>