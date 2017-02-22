<?php
 extract($_REQUEST);

//echo $id_proyecto;

include("conexion.proc.php");

echo $nota_7138_3;

	//tenemos que sacar las notas de cada alumno y cada pregunta. la nomenclatura de las notas es nota_matricula_idpregunta

	$consulta= "SELECT matricula_alumno FROM  tbl_integrante_proyecto WHERE id_proyecto=".$id_proyecto; 
	echo $consulta."<br>";
	$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());
	while($fila = mysqli_fetch_array($resultado)){	
			

			$sql= "SELECT id_pregunta_tribunal FROM  tbl_pregunta_tribunal "; 
			echo $sql."<br>";
			$ids= mysqli_query($conexion, $sql) or die (mysqli_error());
			while($id_pregunta = mysqli_fetch_array($ids)){	
					
				echo $.$fila['matricula_alumno']."_".$id_pregunta['id_pregunta_tribunal']."<br>";
				//echo $valoracion;
			}
				
		}
	mysqli_close($conexion);
	//echo '</select>';

?>
