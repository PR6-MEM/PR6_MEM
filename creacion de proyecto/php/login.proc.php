<?php
	//Obtenemos los datos del formulario
	extract($_REQUEST);
	// Desactivar toda notificación de error
		error_reporting(0);
	//Los comparamos con la BD
			//Conexion
			require_once("conexion.proc.php");
			//Si nos llega una variable de alumno, buscaremos en Alumno
			if(isset($matricula))
			{
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
						$_SESSION['user']=$fila['matricula_alumno'];
						header("location:ver_proyectos.php");
					}
				}
				
				else
				{
					
					echo "<script type='text/javascript'>alert('La matricula no existe');
						location.href='../../index.html';</script>";
				}
			} //END IF MATRICULA
			//Si nos llega una variable de usuario de profesor
			if(isset($prof_name))
			{
				//SQL
				$sql = "SELECT * FROM `tbl_profesor` WHERE `usuario_profesor` LIKE '".$prof_name."' AND `password` LIKE '".$prof_pass."' ";
				//Hacemos la petición a la BD
				$result	=	mysqli_query($conexion,$sql);
				//Contamos los resultados que nos devuelve
				$total  = mysqli_num_rows($result); 
				//Si nos devuelve un resultado, significa que tanto la contraseña como el usuario son correctos
				if($total==1){
					session_start();
					while ($fila = mysqli_fetch_array($result)) 
					{
						//Añadimos el nombre de usuario a la variable de session
						$_SESSION['user']=$fila['usuario_profesor'];
							//Comprobamos el tipo de usuario, si el profesor es administrador, lo redirigimos a la pagina de administración
							if($fila['id_tipo_usuario']==3)//El tres, es tipo administrador
							{
								header("location:administracion.php");
							}
							//Si es de tipo 2, es profesor normal
							else if($fila['id_tipo_usuario']==2)
							{
								$_SESSION['tipo']=$fila['id_tipo_usuario'];
								header("location:ver_proyectos.php");
							}
						//header("location:ver_proyectos.php");
					}
				}
				else{
					echo "<script type='text/javascript'>alert('Usuario o contraseña incorrectos');
						location.href='../../index.html';</script>";
				}
			}
?>