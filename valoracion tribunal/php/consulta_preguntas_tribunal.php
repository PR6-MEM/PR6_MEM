<?php
 extract($_REQUEST);
 //echo $curso_alumno;
// $curso_alumno = "daw2";

// echo $consulta;
//echo '<select name="alumno1" class="form-control">';
include ("../php/conexion.proc.php");

$consulta= "SELECT * FROM  tbl_pregunta_tribunal"; 

$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());

?>

<?php

while($fila = mysqli_fetch_array($resultado)){	
		if($fila['id_pregunta_tribunal']  == 1 ){
			echo "<h3>Valoració de la presentació oral </h4>";
		}elseif($fila['id_pregunta_tribunal']  == 5){
			echo "<h3>Valoració del contingut de la presentació </h3>";
		}
			echo"<label>".$fila['pregunta_tribunal']."</label> <input  type='number' name='quantity' min='0' max='10' value='5'> <br><br><br>";
			echo"<input type='text'value='".$fila['id_pregunta_tribunal']."' style='display:none;'>";
			//echo"<input type='number' name='quantity' min='1' max='5' value='5'> <br><br>";
		
			
	}
mysqli_close($conexion);
//echo '</select>';

?>
