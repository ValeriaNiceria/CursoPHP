<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Estados e suas regiões</title>
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
			font-family: arial,sans-serif;
			font-size:13pt;
			font-weight:bold;
		}
		.foco{
			color:#ff0000;
		}
		.botao{
			background:#0080ff;
			color:white;
			border:0px;
			padding: 8px;
			font-weight:normal;
		}
	</style>
</head>
<body>
	<h1>Estrutura Condicional Switch</h1>
	<h2>Estados e suas regiões</h2>
	<div>
	<?php
		$est = isset($_GET["est"])?$_GET["est"]:"[Estado Inválido!]";
		Switch($est){
			case "ac":
			case "am":
			case "ap":
			case "pa":
			case "ro":
			case "rr":
			case "to":
				$regiao = "Região Norte";
				break;
			case "al":
			case "ba":
			case "ce":
			case "ma":
			case "pb":
			case "pe":
			case "pi":
			case "rn":
			case "se":
				$regiao = "Região Nordeste";
			break;
			case "df":
			case "go":
			case "mt":
			case "ms":
				$regiao = "Região Centro-Oeste";
			break;
			case "es":
			case "mg":
			case "rj":
			case "sp":
				$regiao = "Região Sudeste";
			break;
			case "pr":
			case "rs":
			case "sc":
				$regiao = "Região Sul";
			break;
			default:
				$regiao = "Estado inválido!";
		}
		echo "Você mora na <span class='foco'>$regiao</span>.";
	?>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
	
</body>
</html>