<?php 
	include 'cabecera.inc.php';
	include 'conexion.inc.php';
	$sw = 3;
	if (isset($_POST["usuario"]) and isset($_POST["password"]))
	{
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];
		$res = mysqli_query($con, "select * from usuario where usuario='".$usuario."' ");
		$datos = mysqli_fetch_array($res);
		$sw = 0;
		if ($datos['usuario'] == $usuario and $datos['password'] == $password)
			$sw = 1;
	}
?>


<div class="cuadro">
	<figure><img src="img/logoEstadistica.jpg"></figure>
	<h2>Carrera de Estadística</h2>
	<br>
	<h3>Mision</h3>
	<p style="font-size: 0.8em;">
    La Misión de la carrera de Estadística es la formación de profesionales idóneos y competentes en el campo de la Estadística, capaces de generar y difundir conocimientos científicos, con pensamiento reflexivo-crítico, innovador y creativo de apoyo a los procesos de toma de decisiones, comprometidos con el desarrollo sostenible del país.
    </p>
	<h3>Vision</h3>
	<p style="font-size: 0.8em;">
	La Carrera de Estadística será una institución líder en la ciencia de la Estadística, dentro del ámbito académico, humanístico, investigativo, científico, tecnológico y práctico, con  participación activa en la opinión pública y académica en el desarrollo y transformación a nivel nacional e internacional.
    </p>
</div>


<div class="cuadro" >
    <h1 style="text-align: center;">Ingresar</h1>
    <form action="estadistica.php?<?php echo 'color='.$_SESSION["color"] ?>" method="post" style="padding: 5%;">
		
        Usuario: <input type="text" name="usuario" id="usuario">
        <br>
        Password: <input type="password" name="password" id="password">
        <br><br>
		<?php
			if ($sw == 1)
			{
				$cad = "Location: ingreso.php?color=".$_SESSION["color"]."&usuario=".$usuario;
				header($cad);
			}
			elseif ($sw == 0) 
				echo '<h3 style="text-align: center;">Contraseña o usuario incorrecto</h3>';
			
		?>
		<br>
        <input type="submit" value="Ingresar">
    </form>
</div>

<?php
include 'pie.inc.php';
?>