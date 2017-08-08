<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Número Primo - Estrutura de repetição For</title>
	<style>
		div#cabecalho{
			text-shadow:1px 1px 1px black;
			font-family:arial,sans-serif;
		}
		div#cabecalho h1{
			color:#0080ff;
			font-size:24pt;
		}
		div#cabecalho h2{
			color:#000080;
			font-size:18pt;
		}
		div#corpo{
			font-family:arial,sans-serif;
			line-height: 35px;
		}
		.vm{
			font-size:15pt;
		}
		.foco{
			color:red;
		}
		.botao{
			background:#004891;
			color:white;
			border:0px;
			padding:4px;
		}
	</style>
</head>
<body>
	<div id="cabecalho">
		<h1>Estrutura de repetição For</h1>
		<h2>Número Primo</h2>
	</div>
	<div id="corpo">
		<?php
			$num = isset($_GET["n"])?$_GET["n"]:0;
			echo "<h1>Analisando o número $num ...	</h1>";
			$primo = 0;
			echo " <span class='vm'> Valores múltiplos: </span>";
			for ($c=1;$c<=$num;$c++){
				if(($num % $c) == 0){
					$mult = $c;
					$primo ++;
					echo "<span class='vm'> $mult </span>";
				}
			}
			echo "<br/>";
			echo "<span class='vm'>  Total de múltiplos: $primo </span>";
			If (($primo == 2) || ($num == 1) ){
				$res = "É PRIMO!";
			}
			Else{
				$res = "NÃO É PRIMO!";
			}
			echo "<br/>";
			echo "<span class='vm'>Resultado: $num <span class='foco'>$res</span></span>";
		?>
		<br/>
		<a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</div>
</body>
</html>