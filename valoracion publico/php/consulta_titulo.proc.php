<?php
 extract($_REQUEST);

include ("php/conexion.proc.php");

$consulta= "SELECT titulo_proyecto FROM tbl_proyecto WHERE id_proyecto=".$id_proyecto; 

$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());

while($fila = mysqli_fetch_array($resultado)){	
		
		echo"<h2 class='page-header text-center'>".$fila['titulo_proyecto']."<small> <br>Me encanta! <img src='img/5.jpg'> Sonries? <img src='img/6.jpg'> Te aburres? <img src='img/7.jpg'> o no te ha gustado nada?<img src='img/8.jpg'></small></h2>";
		
	}
mysqli_close($conexion);

?>
