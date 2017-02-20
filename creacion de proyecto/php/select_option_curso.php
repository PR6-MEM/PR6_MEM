<?php
							include("conexion.proc.php");
							$consulta= "SELECT DISTINCT curso_alumno FROM tbl_alumno GROUP BY curso_alumno"; 
							//echo $consulta;

							$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());

							if(mysqli_num_rows($resultado)>0){

							while($fila = mysqli_fetch_array($resultado)){

							echo "<option value='".$fila['curso_alumno']."'>".$fila['curso_alumno']."</option>";

								
								}
							}
							mysqli_close($conexion);
?>
