<?php

 extract($_REQUEST);
 
include ("../php/conexion.proc.php");

$nombres = array();
$matriculas = array();

//modifico los nombres de las variables para unificarlos con los creados por Marc

$consulta= "SELECT matricula_alumno FROM  tbl_integrante_proyecto WHERE id_proyecto =". $id_proyecto; 


$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());

//Como necesito saber el nombre creamos consulta -- a través del número de matrícula obtenemos el nombre.

	while($fila = mysqli_fetch_array($resultado)){	
		
		$consulta = "SELECT nombre_alumno FROM tbl_alumno WHERE matricula_alumno=".$fila['matricula_alumno']; 

		$nombres_alumnos= mysqli_query($conexion, $consulta) or die (mysqli_error());

		while($nombre_alumno = mysqli_fetch_array($nombres_alumnos)){	

			//Copio parte de arrays ya que no sabía como solucionarlo
			//y ahora meteremos cada nombre en la array creada antes
			array_push($nombres, $nombre_alumno['nombre_alumno']); 
			array_push($matriculas, $fila['matricula_alumno']); 
		}

	}

// ahora tengo un array de alumnos que quiero 


?>
