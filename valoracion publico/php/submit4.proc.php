<?php

extract($_REQUEST);
 
include ("conexion.proc.php");

session_start();
	if(!isset ($_SESSION['user']))
	{
		echo "<script type='text/javascript'>alert('No esta registrado');
					location.href='../../index.html';</script>";
					die;
	}
	$sql="SELECT * FROM `tbl_alumno` WHERE `matricula_alumno` = ".$_SESSION['user']."";
	$result	=	mysqli_query($conexion,$sql);
	while ($fila = mysqli_fetch_array($result)) 
				{
					$name = $fila['nombre_alumno']." ".$fila['apellido1_alumno'];
				}

//Creamos un array de alumnos para meter las notas que genera esta página.
	$alumnos = array($p4_alum1, $p4_alum1, $p4_alum1);

 //echo $alumnos[0];




	$consulta = "SELECT * from `tbl_integrante_proyecto` WHERE `id_proyecto` = ".$id_proyecto."";

	$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());

	$i=0;

	for ($i=0; $i<3; $i++){

		$alumno=$alumnos[$i];

		$fila =mysqli_fetch_array($resultado);
		
//Compruebamos con los echo que nos da los datos que necesitamos para el insert
		// echo "1";
		// echo "<br>";
		// echo $_SESSION['user'];
		// echo "<br>";
		// echo $alumno;
		// echo "<br>";
		// echo $fila['id_integrante'];
		// echo "<br>";
		// echo "fin";
		// echo "<br>";

		$sql_insert = "INSERT INTO `tbl_notas_publico` ( `id_pregunta_publico`, `matricula_alumno_publico`, `valor_nota`, `id_integrante`) VALUES ('4', ".$_SESSION['user'].", ".$alumno.", ".$fila['id_integrante'].")";

		$resultado_insert = mysqli_query($conexion, $sql_insert) or die (mysqli_error());

	}

	header ("location:../valoracion_publico5.php?id_proyecto=$id_proyecto");


?>