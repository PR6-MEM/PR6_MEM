<?php
	require_once("conexion.proc.php");
	session_start();
	if(!isset ($_SESSION['alu_matricula']))
	{
		echo "<script type='text/javascript'>alert('No esta registrado');
					location.href='../../index.html';</script>";
					die;
	}
	$sql="SELECT * FROM `tbl_alumno` WHERE `matricula_alumno` = ".$_SESSION['alu_matricula']."";
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
</head>
<body>
	<div class="container col-lg-10">
		<div class="header col-lg-10">
			<div class="user_div_logo col-lg-2">
				<img src="../../css/image/logo.png" class= "user_logo img-rounded" />
			</div><!-- END LOGO-->
			<div class="user_logged col-lg-8">
				<div class="col-lg-5">
					<p>
						<?php echo $name; ?>
					</p>
				</div>
			<div class="user_option col-lg-2">
				<i class="fa fa-power-off"></i>
			</div>
			</div><!-- END USER LOGGED-->
		</div><!--END HEADER -->
	<div class="show_proyects col-lg-8">
		<?php
		 $sql = "SELECT * FROM `tbl_proyecto` ";
		 $result	=	mysqli_query($conexion,$sql);
			while ($fila = mysqli_fetch_array($result)) 
				{
					echo $fila['titulo_proyecto'] . "<br/>";
				}

		?>
	</div>
</body>
</html>