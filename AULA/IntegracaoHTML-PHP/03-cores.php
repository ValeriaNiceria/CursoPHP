<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Personalização</title>
	
	<?php
		$txt = isset($_GET["t"])?$_GET["t"]:"Sem texto";
		$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
	?>
	
	<style>
		h1{
			color:#0080ff;
			text-shadow:1px 1px 1px black;
			font-size:25pt;
			font-family:arial,sans-serif;
		}
		span.texto{
		font-size:<?php echo $tam; ?>;
		color: <?php echo $cor; ?>;
		}
	</style>
</head>
<body>
	<h1>Personalização</h1>
	<?php
		echo "<span class='texto'>$txt</span>";
	?>
</body>
</html>