<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Número Primo - Estrutura de repetição For</title>
	<style>
		body{
			font-family:arial,sans-serif;
			font-size:14pt;
		}
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
		.botao{
			background:#0060bf;
			color:white;
			border:0px;
			font-size:14pt;
			padding:3px;
		}
	</style>
</head>
<body>
	<h1>Estrutura de repetição For</h1>
	<h2>Número Primo</h2>
	<form method="get" action="03-primo2.php">
		<label for "in">Número:</label>
		<select id="in" name="n">
			<?php
				for ($c=1;$c<=20;$c++){
					echo "<option value='$c'>$c</option>";
				}
			?>
		</select>
		<input type="submit" value="É primo?" class="botao">
	</form>
</body>
</html>