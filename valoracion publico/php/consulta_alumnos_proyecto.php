<?php
 extract($_REQUEST);
 //echo $curso_alumno;
// $curso_alumno = "daw2";

// echo $consulta;
//echo '<select name="alumno1" class="form-control">';
include ("../php/conexion.proc.php");

$consulta= "SELECT * FROM  tbl_integrante_proyecto where id_proyecto=="; 

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
			echo"<label><input type='radio' name='p1_alum1' value='encanta'/><img src='img/1.jpg'></label><label><input type='radio' name='p1_alum1' value='sonrio/><img src='img/2.jpg'></label><label><input type='radio' name='p1_alum1' value='aburro/><img src='img/3.jpg'></label><label><input type='radio' name='p1_alum1' value='muero'/><img src='img/4.jpg'></label><br>";
			//echo"<input type='number' name='quantity' min='1' max='5' value='5'> <br><br>";
		

	}
mysqli_close($conexion);
//echo '</select>';

?>