<!DOCTYPE html>
<html>
<head>
	<title>Añadir un credito de sintesi nuevo</title>
	    <link rel="stylesheet" href="css/bootstrap.min.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
 <script type="text/javascript" src="js/validacion.js"> </script>
</head>
<script type="text/javascript">
			function showselect(str){
				var xmlhttp; 
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  }
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("alumno1").innerHTML=xmlhttp.responseText;
					 document.getElementById("alumno2").innerHTML=xmlhttp.responseText;
					 document.getElementById("alumno3").innerHTML=xmlhttp.responseText;
					 }
				  }
			  	xmlhttp.open("POST","php/select_option_alumnos.php?curso_alumno="+str,true);
				xmlhttp.send();
			}
		</script>
<body>
<form name="newproject" action="php/anadir_proyecto.proc.php" method="post" onsubmit="return validar();">
	<label>Título del proyecto</label>
		<div class="form-group">
						<input type="text" class="form-control" name="titulo_proyecto" size="20" placeholder="Título del Crédito">
					</div>
	
	<br>
	<label>Ciclo del proyecto</label>
	
					<div class="form-group">
						<select name="curso_alumno" class="form-control" onchange="showselect(this.value)" >
							<option value="0">Seleccione</option>
							<?php 
							include("/php/select_option_curso.php")
							?>
						</select>
					</div>
					<br>
			<label>Integrantes del proyecto</label>
		<div class="form-group">
						
							<select id="alumno1" name="alumno1" class="form-control">
								<option value="0">Seleccione</option>
							</select>
						
					</div>
				
				<div class="form-group">
						
							<select id="alumno2" name="alumno2" class="form-control">
								<option value="0">Seleccione</option>
							</select>
						
					</div>
					
							<div class="form-group">
						
							<select id="alumno3" name="alumno3" class="form-control">
								<option value="0">Seleccione</option>
							</select>
						
					</div>	  		
				
		
	<br>

	<label>Integrantes del tribunal</label>



					<div class="form-group">
						<select id="profesor1" name="profesor1" class="form-control" " >
							<option value="">Seleccione</option>

							<?php 
							include("/php/select_option_profesor.php")
							?>
						</select>
					</div>
	

					<div class="form-group">
						<select name="profesor2" class="form-control" " >
							<option value="">Seleccione</option>
							<?php 
							include("/php/select_option_profesor.php")
							?>
						</select>
					</div>


					<div class="form-group">
						<select name="profesor3" class="form-control" o" >
							<option value="">Seleccione</option>
							<?php 
							include("/php/select_option_profesor.php")
							?>
						</select>
					</div>

	<br>

	<label>Tutor del crédito</label>
	<div class="form-group">
	<select name="tutor_proyecto" class="form-control" o" >
							<option value="">Seleccione</option>
							<?php 
							include("/php/select_option_profesor.php")
							?>
						</select>
					
	</div>
	<br>

<label>Fecha presentación</label>

<div class="container">
  <div class="row">
    <div class='col-sm-6'>
      <div class="form-group">
        <div class='input-group date' id='datetimepicker1'>
          <input type='date' name="fecha_proyecto" class="form-control" />
           </div>
      </div>
    </div>
  </div>
</div>
		<input type="submit" class="btn btn-primary" value="Crear proyecto">

		</form>
	</body>
</html>