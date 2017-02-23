<?php
 extract($_REQUEST);
 //echo $curso_alumno;
// $curso_alumno = "daw2";

// echo $consulta;
//echo '<select name="alumno1" class="form-control">';
include ("../php/conexion.proc.php");

//$consulta= "SELECT matricula_alumno FROM  tbl_integrante_proyecto WHERE id_proyecto =". $id_proyecto; 

$consulta= "SELECT titulo_proyecto FROM tbl_proyecto WHERE id_proyecto=".$id_proyecto; 

$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());

while($fila = mysqli_fetch_array($resultado)){	
		
		echo"<h2>".$fila['titulo_proyecto']."</h2>";
			
	}
mysqli_close($conexion);
//echo '</select>';

?>
