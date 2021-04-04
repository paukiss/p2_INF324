<?php 
	include 'cabecera.inc.php'

?>



<div class="cuadro">

	<figure><img src="img/logoInformatica.png"></figure>
	<h2>Carrera de Informática</h2>
	<p>
		Creada en 1973, la primera Carrera en el Sistema Universitario Boliviano, pionera en el campo de la Informática con el objetivo primordial de la formación profesional con excelencia. 
		En su plan curricular se encuentran asignaturas de Ciencias de la Computación, Informática, Matemáticas, Sistemas y Gestión conforme a las necesidades del mercado profesional.
	</p>
	
	<div>
		<a href="informatica.php?<?php echo 'color='.$_SESSION["color"] ?>">Ingresar</a>
	</div>

</div>

<div class="cuadro">

	<figure><img src="img/logoMatematica.png"></figure>
	<h2 style="text-align: center;">Carrera de Informática</h2>
	<p>
	El 30 de noviembre de 1830, es inaugurada la Universidad Mayor de San Andrés (UMSA), con la potestad de otorgar los grados menores de profesor, bachiller o licenciado. Se la instaló en "El Loreto'' (Colegio de Ciencias y Artes del Departamento de La Paz). Entre sus primeras facultades estaba la Facultad de Matemática (en realidad esta Facultad era la Cátedra de conocimientos básicos de matemática). Fuente: CEUB (1999). Documentos del IX Congreso Nacional de Universidades	
	</p>
	
	<div>
	<a href="matematica.php?<?php echo 'color='.$_SESSION["color"] ?>">Ingresar</a>
	</div>

</div>

<div class="cuadro">

	<figure><img src="img/logoEstadistica.jpg"></figure>

	
	<h2>Carrera de Matematica</h2>
	<p>
		Inicialmente la especialidad de la Carrera de Estadística, se otorgó como una mención en la carrera de Economía en la segunda mitad del decenio  1960. Después de la reapertura de la Universidad en 1972 tras la intervención militar en 1970 y la creación de la Facultad de Ciencias Puras y Naturales con los Departamentos de Biología, Física, Geología, Química, y Matemática se crea en 1972, la especialidad de Estadística dentro el Departamento de Matemática con un plan de estudios apenas diferenciado de la especialidad de Informática.
	</p>
	<div>
	<a href="estadistica.php?<?php echo 'color='.$_SESSION["color"] ?>">Ingresar</a>
	</div>

</div>


<?php 
	include 'pie.inc.php'
?>