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
	<figure><img src="img/logoMatematica.png"></figure>
	<h2>Carrera de Matematica</h2>
	<br>
	<h3>Mision</h3>
	<p style="font-size: 0.8em;">
    La Carrera de Matemática, como parte del Sistema Universitario público boliviano, es una institución de generación, transmisión y aplicación de conocimientos matemáticos, orientada hacia la investigación, la formación de profesionales calificados y al fortalecimiento de la enseñanza de la matemática a todo nivel.
    </p>
	<h3>Vision</h3>
	<p style="font-size: 0.8em;">
	Ser la Unidad nacional modelo de eficiencia, desarrollo e impacto social en Matemática que brinda formación sólida en pregrado y postgrado. Apoyar y contribuir al desarrollo científico y tecnológico de Bolivia a través de la resolución de problemas que competen a sus áreas de interés.
    </p>
</div>



<div class="cuadro" >
    <h1 style="text-align: center;">Ingresar</h1>
    <form action="matematica.php?<?php echo 'color='.$_SESSION["color"] ?>" method="post" style="padding: 5%;">
		
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