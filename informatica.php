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

	<figure><img src="img/logoInformatica.png"></figure>
	<h2>Carrera de Informática</h2>
	<br>
	<h3>Mision</h3>
	<p style="font-size: 0.8em;">
		Formar profesionales idóneos con calidad humana, ética, valores, excelencia científica, compromiso social, capacidad crítica y creativa para potenciar el desarrollo de la ciencia y la tecnología en el área de la Informática en concordancia con los requerimientos de la sociedad y sus instituciones, desempeñándose con éxito en el ámbito regional, nacional e internacional.
	</p>
	<h3>Vision</h3>
	<p style="font-size: 0.8em;">
		Ser la unidad académica líder a nivel nacional y un referente de alto nivel en la formación de profesionales del área de la Informática, que aporta a la región y el país no solo con sus graduados sino también con proyectos de investigación y extensión de alto impacto relacionados con ciencia y tecnología.
	</p>
</div>

<div class="cuadro" >
    <h1 style="text-align: center;">Ingresar</h1>
    <form action="informatica.php?<?php echo 'color='.$_SESSION["color"] ?>" method="post" style="padding: 5%;">
		
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