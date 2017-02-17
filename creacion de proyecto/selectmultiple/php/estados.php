<?php
require ("conexion.php");
$consulta= "SELECT * FROM estados"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());

while($fila = mysql_fetch_array($resultado)){
echo "<option value='".$fila['id_estado']."'>".$fila['estado']."</option>";

			
							
						}
mysql_close($conexion);
?>
