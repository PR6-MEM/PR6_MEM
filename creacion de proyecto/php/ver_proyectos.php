<?php
	require_once("conexion.proc.php");
	session_start();
	if(!isset ($_SESSION['user']))
	{
		echo "<script type='text/javascript'>alert('No esta registrado');
					location.href='../../index.html';</script>";
					die;
	}
	$sql="SELECT * FROM `tbl_alumno` WHERE `matricula_alumno` = ".$_SESSION['user']."";
	$result	=	mysqli_query($conexion,$sql);
	while ($fila = mysqli_fetch_array($result)) 
				{
					$name = $fila['nombre_alumno']." ".$fila['apellido1_alumno'];
				}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ver proyecto</title>
		<!-- Bootstrap  CSS -->
   			<link href="../../css/bootstrap.min.css" rel="stylesheet">
	    <!-- Custom CSS -->
	   		<link href="../../css/myStyle.css" rel="stylesheet">
	    <!-- Custom Fonts -->
	    	<link href="../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    	<script type="text/javascript">
	    	//Funcion de confirmacion de logout
	    	//Devuelve la var confirmación que recoge la respuesta del usuario
	    	function confirmacion()
	    	{
	    		var confirmacion  = confirm("¿Estás seguro que te quieres desloguear?");
	    		return confirmacion;
	    	}
	    	</script>
</head>
<body>
	<div class="container col-lg-12">
		<div class="header col-lg-12">
				<img src="../../css/image/logo.png" class= "user_logo img-rounded" />
					<div class="head_text">
							<?php echo $name; ?>
							<a href="logout.proc.php" onclick="return confirmacion();"><i class="fa fa-power-off"></i></a>
					</div><!-- END HEAD_TEXT-->
		</div><!--END HEADER -->
	<div class="show_proyects col-lg-12">
		
		<?php
		 $sql = "SELECT * FROM `tbl_proyecto` ";
		 $result	=	mysqli_query($conexion,$sql);
			while ($fila = mysqli_fetch_array($result)) 
				{
					echo "<div class='proyect  col-lg-6'>";
						echo $fila['titulo_proyecto'] . "<br/>";
					echo "</div>";
				}

		?>
	</div>

</body>
</html>