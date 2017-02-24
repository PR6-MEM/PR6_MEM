<?php
	require_once("php/conexion.proc.php");
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

	$consulta= "SELECT titulo_proyecto FROM tbl_proyecto WHERE fecha_proyecto like current_date"; 

	$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());

	while($fila = mysqli_fetch_array($resultado)){	
		
			$titulo = $fila['titulo_proyecto']."<br>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Valoración del público</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	<style type="text/css">

		label > input{ /* Oculto el botón de radio */
		  visibility: hidden; /* hace que el input no sea clicable*/
		  position: absolute; 
		}
		label > input + img{ /* estilo para la imagen */
		  cursor:pointer;
		  border:2px solid transparent;
		}
		label > input:checked + img{ /* Le doy estilo a la imagen cuando está checkeada */
		  border:2px solid #005cb9;
		  border-radius: 40px;
		 

		}
		.navbar-custom {
			background-color: #005cb9 !important;
		}

		.logoBase {
			float: left
		}

	</style>

	<script type="text/javascript">

		 function seleccionAmarilla_1 (){
            var imagen = document.getElementsByName('p1_alum1');
            var cara  =  document.getElementsByName('cara1');
            if (imagen[0].checked) {
                cara[0].src = "img/1.1.jpg";
            }else{
                cara[0].src = "img/1.jpg";
            }

            if (imagen[1].checked) {
                 cara[1].src = "img/2.1.jpg";
            }else{
                cara[1].src = "img/2.jpg";
            }


            if (imagen[2].checked) {
                 cara[2].src = "img/3.1.jpg";
            }else{
                cara[2].src = "img/3.jpg";
            }


            if (imagen[3].checked) {
                cara[3].src = "img/4.1.jpg";
            }else{
                cara[3].src = "img/4.jpg";
            }
        }

        function seleccionAmarilla_2 (){
            var imagen = document.getElementsByName('p1_alum2');
            var cara  =  document.getElementsByName('cara2');
            if (imagen[0].checked) {
                cara[0].src = "img/1.1.jpg";
            }else{
                cara[0].src = "img/1.jpg";
            }

            if (imagen[1].checked) {
                 cara[1].src = "img/2.1.jpg";
            }else{
                cara[1].src = "img/2.jpg";
            }


            if (imagen[2].checked) {
                 cara[2].src = "img/3.1.jpg";
            }else{
                cara[2].src = "img/3.jpg";
            }


            if (imagen[3].checked) {
                cara[3].src = "img/4.1.jpg";
            }else{
                cara[3].src = "img/4.jpg";
            }
        }

        function seleccionAmarilla_3 (){
            var imagen = document.getElementsByName('p1_alum3');
            var cara  =  document.getElementsByName('cara3');
            if (imagen[0].checked) {
                cara[0].src = "img/1.1.jpg";
            }else{
                cara[0].src = "img/1.jpg";
            }

            if (imagen[1].checked) {
                 cara[1].src = "img/2.1.jpg";
            }else{
                cara[1].src = "img/2.jpg";
            }


            if (imagen[2].checked) {
                 cara[2].src = "img/3.1.jpg";
            }else{
                cara[2].src = "img/3.jpg";
            }


            if (imagen[3].checked) {
                cara[3].src = "img/4.1.jpg";
            }else{
                cara[3].src = "img/4.jpg";
            }
        }

		function desconecta(){
			var desconecta  = confirm("¿Estás seguro que te quieres salir?");
	    		return desconecta;
		}

	</script>

<body>

<div class="wrapper">

	 <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        	<img class="logoBase" src="img/base.jpg">
          <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" style=" float:right!important">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $name; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i>Proyecto de hoy</p>
                                        <p><?php echo $titulo; ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Espacio destinado a futuros mensajes</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../creacion de proyecto/php/ver_proyectos.php"><i class="fa fa-fw fa-undo"></i> Proyectos</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../index.html" onclick=" return desconecta(); "><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            <!-- /.navbar-collapse -->
        </nav>



<!-- parte central - votación -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
				<!-- habrá que hacer una consulta para obtener el titulo del proyecto  -->
					<?php include("php/consulta_titulo.proc.php");?>
					<!-- esta parte se genera dinámicamente por el php -->
					<!-- <h2 class="page-header text-center">Proyecto tal tal tal tal <small> <br>Me encanta! <img src="img/5.jpg"> Sonries? <img src="img/6.jpg"> Te aburres? <img src="img/7.jpg"> o no te ha gustado nada?<img src="img/8.jpg"></small></h2> -->
				</div>
			</div> <!-- Final div class row -->
			<!--  -->
			<div class="row">
				<div class="col-md-12 text-center">
					<!-- internamente el amor=10 sonrio=7 aburro=5 muero=2 -->
						
						<form class="" action="">
						<h4>Presentación Oral</h4>
							<h4>¿Te ha quedado una idea clara de la parte que ha expuesto?</h4>
							<br>
								<p> <?php include ("php/consulta_integrante1_proyecto.php");?></p>	
								<label>
					  				<input type="radio" name="p1_alum1" value="encanta" onclick ="seleccionAmarilla_1()"  />
									<img src="img/1.jpg" name="cara1">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="sonrio" onclick="seleccionAmarilla_1()" />
									<img src="img/2.jpg" name="cara1">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="aburro" onclick="seleccionAmarilla_1()"/>
									<img src="img/3.jpg" name="cara1">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="muero" onclick="seleccionAmarilla_1()" />
									<img src="img/4.jpg" name="cara1">
								</label>
								<br>
								<p><?php include ("php/consulta_integrante2_proyecto.php");?></p>	
								<label>
					  				<input type="radio" name="p1_alum2" value="encanta" onclick="seleccionAmarilla_2()"/>
									<img src="img/1.jpg" name="cara2">
								</label>
								<label>
					  				<input type="radio" name="p1_alum2" value="sonrio" onclick="seleccionAmarilla_2()" />
									<img src="img/2.jpg" name="cara2">
								</label>
								<label>
					  				<input type="radio" name="p1_alum2" value="aburro"  onclick="seleccionAmarilla_2()"/>
									<img src="img/3.jpg" name="cara2">
								</label>
								<label>
					  				<input type="radio" name="p1_alum2" value="muero" onclick="seleccionAmarilla_2()" />
									<img src="img/4.jpg" name="cara2">
								</label>
								<br>
								<p><?php include ("php/consulta_integrante3_proyecto.php");?></p>	
								<label>
					  				<input type="radio" name="p1_alum3" value="encanta" onclick="seleccionAmarilla_3()" />
									<img src="img/1.jpg" name="cara3">
								</label>
								<label>
					  				<input type="radio" name="p1_alum3" value="sonrio" onclick="seleccionAmarilla_3()" />
									<img src="img/2.jpg" name="cara3">
								</label>
								<label>
					  				<input type="radio" name="p1_alum3" value="aburro" onclick="seleccionAmarilla_3()"/>
									<img src="img/3.jpg" name="cara3">
								</label>
								<label>
					  				<input type="radio" name="p1_alum3" value="muero" onclick="seleccionAmarilla_3()"/>
									<img src="img/4.jpg" name="cara3">
								</label>
								<br>
									<input type="submit" class="btn btn-primary" name="btn_preg1">
						</form>	
						<br>
				</div> <!-- Final div class col-md-12 -->
			</div> <!-- Final div class row -->
		</div> <!-- Final div class container-fluid -->
	</div> <!-- Final div class page-wrapper -->
</div>  <!-- Final div class wrapper -->	

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>
</html>