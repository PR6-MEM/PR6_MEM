<?php
	//Obtenemos los datos del formulario
	extract($_REQUEST);
	// Desactivar toda notificación de error
		error_reporting(0);
	//Los comparamos con la BD
			//Conexion
			require_once("conexion.proc.php");
			//SQL
			$sql = "SELECT * FROM `tbl_alumno` WHERE `matricula_alumno` = ".$matricula." ";
			//Hacemos la petición a la BD
			$result	=	mysqli_query($conexion,$sql);
			//Contamos los resultados que nos devuelve
			$total  = mysqli_num_rows($result); 
			//Si existe la matrícula creamos la sesion con su ID
			if($total==1){
				session_start();
				while ($fila = mysqli_fetch_array($result)) 
				{
					//Añadimos la matricula del usuario en una variable de session
					$_SESSION['alu_matricula']=$fila['matricula_alumno'];
					header("location:ver_proyectos.php");
				}
			}
			//Si no, alerta y reenviamos hacía atras
			else
			{
				echo "<script type='text/javascript'>alert('La matricula no existe');
					location.href='../../index.html';</script>";
			}
			
?>