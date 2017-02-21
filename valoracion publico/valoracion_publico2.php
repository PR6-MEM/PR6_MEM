<!DOCTYPE html>
<html>
<head>
	<title>Valoración del público</title>
	    <link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
 		<script type="text/javascript" src="js/validacion.js"> </script>
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
		  border-radius: 50px;
		}

	</style>
<body>

<div class="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-header text-center">VALORACION<small> <br>Me encanta!<img src="img/1.jpg"> Sonries? <img src="img/2.jpg"> Te aburres? <img src="img/3.jpg"> o no te ha gustado nada?<img src="img/4.jpg"></small></h1>
				</div>
			</div> <!-- Final div class row -->
			<!--  -->
			<div class="row">
				<div class="col-md-12">
					<!-- internamente el amor=10 sonrio=7 aburro=5 muero=2 -->
						<h2>Proyecto tal tal tal tal </h2>
						<h3>Presentación Oral</h3>
							<h4>¿Te ha quedado una idea clara de la parte que ha expuesto?</h4>
							<br>
								<p>Alumno 1 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p1_alum1" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<p>Alumno 2 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p1_alum2" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum2" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum2" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum2" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<p>Alumno 3 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p1_alum3" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum3" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum3" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum3" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<h4>¿Cómo valoras la expresión oral?</h4>
								<br>
								<p>Alumno 1 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p2_alum1" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum1" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum1" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum1" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<p>Alumno 2 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p2_alum2" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum2" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum2" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum2" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<p>Alumno 3 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p2_alum3" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum3" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum3" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p2_alum3" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<h4>¿Crees que la presentación está bien estructurada?</h4>
								<br>
								<p>Alumno 1 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p3_alum1" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum1" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum1" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum1" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<p>Alumno 2 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p3_alum2" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum2" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum2" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum2" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<p>Alumno 3 Esto lo leerá de la base de datos</p>	
								<label>
					  				<input type="radio" name="p3_alum3" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum3" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum3" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p3_alum3" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
						<h3>Contenidos</h3>
							<h4>¿Cómo valoras la calidad del power-point, flash, etc que se ha usado para la exposición?</h4>
							<br>
								<p> Respuesta general para los tres así que ya veré cómo lo paso</p>	
								<label>
					  				<input type="radio" name="p1_alum1" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<h4>¿Te ha quedado claro el contenido del proyecto?</h4>
								<br>
								<p> Respuesta general para los tres así que ya veré cómo lo paso</p>	
								<label>
					  				<input type="radio" name="p1_alum1" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
								<h4>¿Cómo valoras la calidad del proyecto expuesto?</h4>
								<br>
								<p> Respuesta general para los tres así que ya veré cómo lo paso</p>	
								<label>
					  				<input type="radio" name="p1_alum1" value="encanta" />
									<img src="img/1.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="sonrio" />
									<img src="img/2.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="aburro" />
									<img src="img/3.jpg">
								</label>
								<label>
					  				<input type="radio" name="p1_alum1" value="muero" />
									<img src="img/4.jpg">
								</label>
								<br>
						</form>	
				</div> <!-- Final div class col-md-12 -->
			</div> <!-- Final div class row -->
		</div> <!-- Final div class container-fluid -->
	</div> <!-- Final div class page-wrapper -->
</div>  <!-- Final div class wrapper -->		
</body>
</html>