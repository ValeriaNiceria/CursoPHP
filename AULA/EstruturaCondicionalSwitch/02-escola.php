<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estrutura Condicional Switch - Ir para Escola</title>
	<style>
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-size:24pt;
			font-family:arial,sans-serif;
		}
		h2{
			color:#000080;
			text-shadow:1px 1px 1px black;
			font-size:18pt;
			font-family:arial,sans-serif;
		}
		.foco{
			font-size:13pt;
			font-family:arial,sans-serif;
			color:#0000a0;
			font-weight:bold;
		}
		.botao{
			background:#0080ff;
			font-size:12pt;
			font-family:arial,sans-serif;
			color:white;
			border:0px;
			padding:8px;
		}
		
	</style>
</head>
	<h1>Estrutura Condicional Switch</h1>
	<h2>Ir para Escola</h2>
	<?php
		$dia = isset($_GET["sem"])?$_GET["sem"]:0;
			Switch($dia){
				Case 1:
				$escola = "É domingo, não precisa ir a escola.";
				break;
				Case 2:
				Case 3:
				Case 4:
				Case 5:
				Case 6:
				$escola = "Meio de semana, precisa ir a escola.";
				break;
				Case 7:
				$escola = "É sábado, não precisa ir a escola.";
				break;
				default:
				$escola = "Dia inválido!";
			}
			echo "<span class='foco'>$escola</span>";
	?>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</html>