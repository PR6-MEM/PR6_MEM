<?php
	require_once("conexion.proc.php");
	session_start();
	if(!isset ($_SESSION['user']))
	{
		echo "<script type='text/javascript'>alert('No esta registrado');
					location.href='../../index.html';</script>";
					die;
	}
	//Cargamos la consulta SQL de alumno si el usuario no es profesor, no existe la variable tipo
	if(!isset ($_SESSION['tipo']))
	{
		$sql="SELECT * FROM `tbl_alumno` WHERE `matricula_alumno` = ".$_SESSION['user']."";
		$result	=	mysqli_query($conexion,$sql);
		while ($fila = mysqli_fetch_array($result)) 
				{
					$name = $fila['nombre_alumno']." ".$fila['apellido1_alumno'];
				}
	}
	else if($_SESSION['tipo']=='2'){
		$name = $_SESSION['user'];

		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Valoración del público</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	   <!-- Bootstrap Core CSS -->
    <link href="../../valoracion publico/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../valoracion publico/css/sb-admin.css" rel="stylesheet">
 	<link href="../../css/myStyle.css" rel="stylesheet">
   
    <!-- Custom Fonts -->
    <link href="../../valoracion publico/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <script type="text/javascript">

		
		function desconecta(){
			return confirm("¿Estas seguro que te quieres desconectar?");
			
		}
		function show_prof_action(){
			document.getElementById("prof_formulario").style.display="block";
		}
		function hidden_prof_action(){
			document.getElementById("prof_formulario").style.display="none";
		}


	</script>


</head>


	
<body>

<div class="wrapper">

	 <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        	<img class="logoBase" sr../valoracion publico/img/base.jpg">
          <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <a href="logout.proc.php" onclick=" return desconecta(); "><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- /.navbar-collapse -->
        </nav>
<!-- parte central - votación -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="show_proyects col-lg-12">
				<div class="col-md-12">
				<!-- habrá que hacer una consulta para obtener el titulo del proyecto  -->
					<?php 
						$fecha_actual=date("Y-m-d");
						
						 $sql = "SELECT * FROM `tbl_proyecto` WHERE `fecha_proyecto` = '".$fecha_actual."'  ";

						 $result	=	mysqli_query($conexion,$sql);

						 if(isset($_SESSION['tipo']) AND $_SESSION['tipo']=='2')
						{
							 $sql = "SELECT * 
										FROM `tbl_proyecto` 
											INNER JOIN `tbl_tribunal` 
											ON tbl_proyecto.id_tribunal = tbl_tribunal.id_tribunal
    										INNER JOIN `tbl_profesor`
    										ON tbl_tribunal.id_profesor1 = tbl_profesor.usuario_profesor
    										WHERE `id_profesor2` LIKE '".$name."' OR `id_profesor1`  LIKE '".$name."'  OR `id_profesor1`  LIKE '".$name."'";
    							//echo $sql;die;
						 	 $result	=	mysqli_query($conexion,$sql);
							while ($fila = mysqli_fetch_array($result)) 
							{
								echo "<div class='proyect  col-lg-6'>";
								echo  $fila['titulo_proyecto'] . "<br/><button onclick='show_prof_action(); 'class='btn btn-info'><i class='fa fa-arrow-down' aria-hidden='true' ></i></button>";
								echo "<div class='prof_formulario' id='prof_formulario'>";
									echo "<table class='table'>";
										echo "<tr><td><a href='../../valoracion tribunal/valoracion_tribunal.php?id_proyecto=".$fila['id_proyecto']."'>Puntuar proyecto</a></td></tr>";
										echo "<tr><td><a href='../../valoracion tribunal/estadisticas.php?id_proyecto=".$fila['id_proyecto']."'>Ver estadisticas del proyecto</td></tr>";
										echo "<tr><td><button onclick='hidden_prof_action(); 'class='btn btn-info'><i class='fa fa-arrow-up' aria-hidden='true' ></i></button></td></tr>";
									echo "</table>";
								echo "</div>";

								echo "</div>";
							}
						}

			 else
		 	{
				while ($fila = mysqli_fetch_array($result)) 
					{
						echo "<div class='proyect  col-lg-6'>";
							echo "<a href='../../valoracion publico/valoracion_publico1.php?id_proyecto=".$fila['id_proyecto']."'>".$fila['titulo_proyecto'] . "</a><br/>";
						echo "</div>";
					}
			}
				 //echo $sql;die;
					?>
					
				</div>
			</div> <!-- END show_proyects-->
		</div> <!-- Final div class container-fluid -->
	</div>  <!-- Final div class wrapper -->	

<!-- jQuery -->
    <script src="../../valoracion publico/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../valoracion publico/js/bootstrap.min.js"></script>

    

</body>
</html>