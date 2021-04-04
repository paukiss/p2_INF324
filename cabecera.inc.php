<?php
	session_start();
	if (isset($_GET["color"]))
	{
		$_SESSION["color"] = $_GET["color"];
	}
	else 
		$_SESSION["color"] = 1;
?>
<html>
<head>
	<title>FCPN</title>
	<link rel="stylesheet" href="css/style.php">
	
</head>
<body>
	<header>
		<div style="display: inline; text-align: center; ">
			<h1 style="color: #f7f7f7; padding: 20px; font-size: 1.6em;">
				Facultad de Ciencias Puras y Naturales
			</h1>
		</div>
	
		<nav class="seleccion" style="text-align: center; ">
			<ul>
			<a href="index.php?<?php echo 'color='.$_SESSION["color"] ?>">Inicio</a>
			<a href="informatica.php?<?php echo 'color='.$_SESSION["color"] ?>">Informatica</a>
			<a href="matematica.php?<?php echo 'color='.$_SESSION["color"] ?>">Matematicas</a>
			<a href="estadistica.php?<?php echo 'color='.$_SESSION["color"] ?>">Estadistica</a>
			</ul>
		</nav>

	
	</header>
