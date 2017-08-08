<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Foreach em PHP</title>
	<style>
		body{
			font-family:arial,sans-serif;
		}
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
		}
		h2{
			color:#0000a0;
			text-shadow:1px 1px 1px black;
		}
	</style>
</head>
<body>
	<h1>Vetores</h1>
	<h2>Foreach</h2>
	<table border="2">
	<tr>
	<?php
		$c = range(2,18,3);
		foreach($c as $valor){
			echo "<td>$valor </td>";
		}
	?>
	</tr>
	</table>
</body>
</html>