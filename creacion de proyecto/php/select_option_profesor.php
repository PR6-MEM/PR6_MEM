<?php
							include("conexion.proc.php");
							$consulta= "SELECT `nombre_profesor`, `apellido1_profesor`, `apellido2_profesor` FROM `bd_mem_app`.`tbl_profesor` "; 
							//echo $consulta;

							$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error());

							if(mysqli_num_rows($resultado)>0){

							while($fila = mysqli_fetch_array($resultado)){

							echo "<option value='".$fila['usuario_profesor']."'>".$fila['nombre_profesor']." ".$fila['apellido1_profesor']." ".$fila['apellido2_profesor']." </option>";

								
								}
							}
							mysqli_close($conexion);
?>
