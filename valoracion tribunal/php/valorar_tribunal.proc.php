<?php
extract($_REQUEST);

//echo $id_proyecto;
include("conexion.proc.php");

$id_tribunal = 0;

$alumnos = array();
$id_integrantes = array();

foreach ($nombres_alu as $nombres) {
	
	$sql = "SELECT `matricula_alumno` FROM `bd_mem_app`.`tbl_alumno` WHERE nombre_alumno LIKE '".$nombres."'";
//echo $sql;
		$resultado= mysqli_query($conexion, $sql) or die (mysqli_error());

		while($fila = mysqli_fetch_array($resultado)){	

		$sql2="SELECT `id_integrante` FROM `bd_mem_app`.`tbl_integrante_proyecto` WHERE matricula_alumno = ".$fila['matricula_alumno']." AND id_proyecto =".$id_proyecto;

		//echo $sql2."<br>.";
			
					$resultado2= mysqli_query($conexion, $sql2) or die (mysqli_error());

					while($ids = mysqli_fetch_array($resultado2)){	

						//echo $ids['id_integrante'] ."<br>.";
						array_push($id_integrantes, $ids['id_integrante']);
					}

		} 

}

		//primero hacemos una consulta para obtener el id de tribunal a partir del id proyecto
		$sql = "SELECT `id_tribunal` FROM `bd_mem_app`.`tbl_proyecto` WHERE id_proyecto =".$id_proyecto;

		$resultado= mysqli_query($conexion, $sql) or die (mysqli_error());

		while($fila = mysqli_fetch_array($resultado)){	

		$id_tribunal = $fila['id_tribunal'];
			
		} 

//ahora hacemos otra connsulta para obtener los id integrante segun la matricula del alumno
//ESTO ES PARA LAS NOTAS INDIVIDUALES
for ($cont=0; $cont < count($notas) ; $cont++) { 

	$sql = "SELECT `id_integrante` FROM `bd_mem_app`.`tbl_integrante_proyecto` WHERE matricula_alumno = ".$matriculas[$cont]." AND id_proyecto =".$id_proyecto;

		$resultado= mysqli_query($conexion, $sql) or die (mysqli_error());

		while($fila = mysqli_fetch_array($resultado)){	

			$sql = "INSERT INTO `tbl_notas_tribunal` (`id_pregunta_tribunal`, `id_tribunal`, `valor_nota`, `id_integrante`) VALUES ( ".$idpreguntas[$cont].", ".$id_tribunal.", ".$notas[$cont].", ".$fila['id_integrante'].")";
			//echo $fila['id_integrante']."<br>";
			
		//	if ($fila['id_integrante'] == $alumnos[$cont-1]) {
				
		//	}else{
				
		//		array_push($alumnos, $fila['id_integrante']);
		//	}
			

		} 

		//una vez echo el sql, ejecutamos la consuta.
			echo "<br>";
			//echo $notas[$cont]." ".$idpreguntas[$cont]." ".$matriculas[$cont]."<br>";
		 	echo $sql;	

			$resultado= mysqli_query($conexion, $sql) or die (mysqli_error());

}

//AQUI VIENE PARA LAS NOTAS GLOBALES 




for ($cont=0; $cont < count($notas_globales) ; $cont++) { 


		//una vez echo el sql, ejecutamos la consuta.
			//echo "<br>";
			//echo $notas_globales[$cont]." ".$id_pregunta_global[$cont]."<br>";
		 		

		 	$sql1 = "INSERT INTO `tbl_notas_tribunal` (`id_pregunta_tribunal`, `id_tribunal`, `valor_nota`, `id_integrante`) VALUES ( ".$id_pregunta_global[$cont].", ".$id_tribunal.", ".$notas_globales[$cont].", ".$id_integrantes[0].")";
		 	$sql2 = "INSERT INTO `tbl_notas_tribunal` (`id_pregunta_tribunal`, `id_tribunal`, `valor_nota`, `id_integrante`) VALUES ( ".$id_pregunta_global[$cont].", ".$id_tribunal.", ".$notas_globales[$cont].", ".$id_integrantes[1].")";
		 	$sql3 = "INSERT INTO `tbl_notas_tribunal` (`id_pregunta_tribunal`, `id_tribunal`, `valor_nota`, `id_integrante`) VALUES ( ".$id_pregunta_global[$cont].", ".$id_tribunal.", ".$notas_globales[$cont].", ".$id_integrantes[2].")";

			//$resultado= mysqli_query($conexion, $sql) or die (mysqli_error());
		 	echo $sql1 ."<br>";
		 	echo $sql2 ."<br>";
		 	echo $sql3 ."<br>";
		 	$resultado= mysqli_query($conexion, $sql1) or die (mysqli_error());
			$resultado= mysqli_query($conexion, $sql2) or die (mysqli_error());
			$resultado= mysqli_query($conexion, $sql3) or die (mysqli_error());
}



mysqli_close($conexion);
	//echo '</select>';
//LO ÚNICO QUE FALTARÍA ES CERRAR EL PROYECTO.
	
	header('Location: ../valoracion_recibida.php');

?>
