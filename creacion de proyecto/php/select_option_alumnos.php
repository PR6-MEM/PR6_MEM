<?php
 extract($_REQUEST);
 //echo $curso_alumno;
// $curso_alumno = "daw2";

// echo $consulta;
//echo '<select name="alumno1" class="form-control">';
include ("conexion.proc.php");

$consulta= "SELECT `matricula_alumno`, `nombre_alumno`, `apellido1_alumno`, `apellido2_alumno` FROM tbl_alumno WHERE curso_alumno ='".$curso_alumno."'"; 

$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());

?>

<?php
echo "<option value='0'>Selecciona </option>";
while($fila = mysqli_fetch_array($resultado)){	
		
			echo "<option value='".$fila['matricula_alumno']."'> ".$fila['nombre_alumno']." ".$fila['apellido1_alumno']." ".$fila['apellido2_alumno']."</option>";	
	}
mysqli_close($conexion);
//echo '</select>';

?>
