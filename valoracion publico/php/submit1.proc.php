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

// $p1_alum1 = array ();
// $p2_alum2 = array ();
// $p3_alum3 =	array ();
echo $p1_alum1;
echo $p1_alum2;
echo $p1_alum3;
echo $id_proyecto; 

//En este caso como no generamos dinámicamente las preguntas podemos ponerlo directamente. 
INSERT INTO `tbl_notas_publico` (`id_notas_publico`, `id_pregunta_publico`, `matricula_alumno_publico`, `valor_nota`, `id_integrante`) VALUES (NULL, '1', '10000585', '10', '1');


header ("location:../valoracion_publico2.php?id_proyecto=$id_proyecto");

//

// //modifico los nombres de las variables para unificarlos con los creados por Marc

// $consulta= "SELECT matricula_alumno FROM  tbl_integrante_proyecto WHERE id_proyecto =". $id_proyecto; 


// $resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());

// //Como necesito saber el nombre creamos consulta -- a través del número de matrícula obtenemos el nombre.

// 	while($fila = mysqli_fetch_array($resultado)){	
		
// 		$consulta = "SELECT nombre_alumno, apellido1_alumno, apellido2_alumno, foto_alumno FROM tbl_alumno WHERE matricula_alumno=".$fila['matricula_alumno']; 

// 		$nombres_alumnos= mysqli_query($conexion, $consulta) or die (mysqli_error());



// 		while($nombre_alumno = mysqli_fetch_array($nombres_alumnos)){

// 			// echo $nombre_alumno['nombre_alumno']." ".$nombre_alumno ['apellido1_alumno']." ".$nombre_alumno ['apellido2_alumno'];
// 			//Copio parte de arrays ya que no sabía como solucionarlo
// 			//y ahora meteremos cada nombre en la array creada antes
// 			 array_push($nombres, $nombre_alumno['nombre_alumno']." ".$nombre_alumno ['apellido1_alumno']." ".$nombre_alumno ['apellido2_alumno']);
// 			 array_push ($fotos, $nombre_alumno['foto_alumno']);
// 			 // array_push($nombres[1], $nombre_alumno['apellido1_alumno'])  
// 			 array_push($matriculas, $fila['matricula_alumno']); 
// 		}

// 	}

// 	echo "<img class='img-circle' src='img/".$fotos[2]."'> </a>" . $nombres[2];
// // ahora tengo un array de alumnos que quiero 


// ?>
