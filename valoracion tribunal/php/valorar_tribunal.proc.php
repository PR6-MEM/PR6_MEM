<?php

 extract($_REQUEST);

include("conexion.proc.php");

//echo $nota_7138_3;
$notas = array();
$
foreach ($notas as $nota ) {
	echo $nota."<br>";
}
foreach ($idpreguntas as $id ) {
	echo $id."<br>";
}

foreach ($matriculas as $matric ) {
	echo $matric."<br>";
}

//echo $variable;


	//tenemos que sacar las notas de cada alumno y cada pregunta. la nomenclatura de las notas es nota_matricula_idpregunta

	$consulta= "SELECT matricula_alumno FROM  tbl_integrante_proyecto WHERE id_proyecto=".$id_proyecto; 
	//echo $consulta."<br>";
	$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());
	while($fila = mysqli_fetch_array($resultado)){	
			

			$sql= "SELECT id_pregunta_tribunal FROM  tbl_pregunta_tribunal "; 
			//echo $sql."<br>";
			$ids= mysqli_query($conexion, $sql) or die (mysqli_error());
			while($id_pregunta = mysqli_fetch_array($ids)){	
				
				//$valor = $($fila['matricula_alumno']."-".$id_pregunta['id_pregunta_tribunal'])."<br>";	
				array_push($notas,$valoracion);
				//echo $valoracion;
			}
				
		}




		foreach ($notas as $nota) {
			//echo $nota."<br>";

		}
	mysqli_close($conexion);
	//echo '</select>';

?>
