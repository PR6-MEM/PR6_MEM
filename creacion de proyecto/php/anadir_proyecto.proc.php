<?php
	//iniciamos sesion (siempre tiene que estar en la primera linea)

	//session_start();

	//incluimos el fichero conexion.proc.php que realiza la conexión a MySQL
	include("conexion.proc.php");


	 extract($_REQUEST);






//primero creamos el tribunal de ese proyecto
	 	$sql = "INSERT INTO `tbl_tribunal` (`id_profesor1`,`id_profesor2`,`id_profesor3` ) VALUES
				('$profesor1', '$profesor2', '$profesor3')";
				echo $sql;
				echo "<br>";
		$anadir = mysqli_query($conexion,$sql);
$lastid = mysqli_insert_id($conexion);

//ahora que tenemos el tribunal, se puede crear el proyecto

							$consulta= "SELECT usuario_profesor FROM tbl_profesor WHERE nombre_profesor LIKE '".$tutor_proyecto."'"; 
							echo $consulta;
							echo "<br>";
							$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());

							if(mysqli_num_rows($resultado)>0){

							while($fila = mysqli_fetch_array($resultado)){

							//echo $fila['usuario_profesor'];
							$tutor_proyecto = $fila['usuario_profesor'];
								
								}
							}

		

		$sql = "INSERT INTO `tbl_proyecto` (`titulo_proyecto`,`id_tutor_profesor`, `fecha_proyecto`, `id_tribunal` ) VALUES
			('$titulo_proyecto','$tutor_proyecto', '$fecha_proyecto', $lastid)";

		echo $sql;
		echo "<br>";
		$anadir = mysqli_query($conexion,$sql);


//ya tenemos el proyecto creado, ahora toca asignar los alumnos a la tabla integrante.
		//integrante 1
		$lastid = mysqli_insert_id($conexion);
		
		$sql = "INSERT INTO `tbl_integrante_proyecto` (`matricula_alumno`,`id_proyecto`) VALUES
				('$alumno1', $lastid)";
				echo $sql;
				echo "<br>";
		$anadir = mysqli_query($conexion,$sql);

//ya tenemos el proyecto creado, ahora toca asignar los alumnos a la tabla integrante.
		//integrante 2

		
		$sql = "INSERT INTO `tbl_integrante_proyecto` (`matricula_alumno`,`id_proyecto`) VALUES
				('$alumno2', $lastid)";
				echo $sql;
				echo "<br>";
		$anadir = mysqli_query($conexion,$sql);

//ya tenemos el proyecto creado, ahora toca asignar los alumnos a la tabla integrante.
		//integrante 3

		
		$sql = "INSERT INTO `tbl_integrante_proyecto` (`matricula_alumno`,`id_proyecto`) VALUES
				('$alumno3', $lastid)";
				echo $sql;
				echo "<br>";
		$anadir = mysqli_query($conexion,$sql);		



		header("location: main_proyectos.php");
	

?>
