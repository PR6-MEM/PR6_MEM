<?php
	require_once("php/conexion.proc.php");
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
    <link href="../valoracion publico/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../valoracion publico/css/sb-admin.css" rel="stylesheet">
 	<link href="../css/myStyle.css" rel="stylesheet">
   
    <!-- Custom Fonts -->
    <link href="../valoracion publico/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        	<img class="logoBase" src="../valoracion publico/img/base.jpg">
          <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <a href="../creacion de proyecto/php/logout.proc.php" onclick=" return desconecta(); "><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
				
				  <?php
                        //<h2> consulta para obtener el título del proyecto </h2>
                     
                      //echo"<input type='text'value=".$id_proyecto." style='display:none;'>";
                      echo" 'estadísticas' del projecte: "; include("php/consulta_titulo.proc.php");
                       ?>
                        <form action="php/valorar_tribunal.proc.php" method="GET">
                         <!-- hacer una consulta para obtener las preguntas, con su y id y su texto correspondiente  -->
                         <div class='col-lg-12' >


                        <?php

                        echo"<input type='hidden' name='id_proyecto' value=".$id_proyecto." '>";                  
                        include("php/calcular_votaciones.proc.php");

                         //ya genera el contenido de las preguntas, luego habrá que cojer la puntuación de cada elemento
                         ?>
                        
                        <input type="submit" value="Enviar valoración">
                        </form> 
				</div>
			</div> <!-- END show_proyects-->
		</div> <!-- Final div class container-fluid -->
	</div>  <!-- Final div class wrapper -->	

<!-- jQuery -->
    <script src="../valoracion publico/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../valoracion publico/js/bootstrap.min.js"></script>

    

</body>
</html>