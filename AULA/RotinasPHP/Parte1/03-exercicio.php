<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Soma com múltiplos parâmetros - Rotinas em PHP</title>
	<style>
		body{
			font-family:arial,sans-serif;
			font-size:15pt;
		}
		div#cabecalho{
			font-family:arial,sans-serif;
			text-shadow:1px 1px 1px black;
		}
		div#cabecalho h1{
			color:#0080ff;
		}
		div#cabecalho h2{
			color:#000080;
		}	
	</style>
</head>
	<div id="cabecalho">
		<h1>Rotinas em PHP</h1>
		<h2>Soma com múltiplos parâmetros</h2>
	</div>
	<div id="corpo">
		<?php
			function soma(){
				$p = func_get_args();
				$tot = func_num_args();
				$s = 0;
				for($i=0;$i<$tot;$i++){
					$s += $p[$i];
				}
				return $s;
			}
			$res = soma(1,2,1,5,1);
			echo "O valor de todos os números somados é igual a $res";
		?>
	</div>
</html>