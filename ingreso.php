<?php 
	include 'cabecera.inc.php';
    include 'conexion.inc.php';

    if (isset($_GET['usuario']))
        $usuario = $_GET["usuario"];
    else 
        $usuario = $_SESSION['usuario'];
    $resUsuario = mysqli_query($con, "select * from usuario where usuario='".$usuario."' ");
    $datosUsuario = mysqli_fetch_array($resUsuario);
    $ci = $datosUsuario['ci'];

    $resPersona = mysqli_query($con, "select * from persona where ci='".$ci."' ");
    $datosPersona = mysqli_fetch_array($resPersona);
    $_SESSION['usuario'] = $usuario
?>


<div  class="cuadro" style="padding: 10% 2% 10% 2%; width: 10%; ">
	Escoge una configuracion:	
	<br>
	<br>
	<form action="ingreso.php" method="GET">
		<select name="color">
			<option value="1">Blue Template</option>   
			<option value="2">Pink Template</option>
			<option value="3">Orange Template</option>
		</select>
        <br><br>
        <input type="submit" value="Cambiar">
	</form>
	
</div>

<div class="cuadro" style="width: 50%; margin-left: 10%; padding: 2%;">

    <br>
    Nombre Completo: <?php echo $datosPersona['nombreCompleto']?>
    <br>
    CI: <?php echo $datosPersona['ci']?>
    <br>
    Fecha Nacimiento: <?php echo $datosPersona['fechaNacimiento']?>
    <br>
    Departamento: <?php echo $datosPersona['departamento']?>
    <br>

</div>

<?php 
	include 'pie.inc.php';
?>
