<!DOCTYPE html>
<html>
<head>
	<title>Añadir un credito de sintesi nuevo</title>
	    <link rel="stylesheet" href="css/bootstrap.min.css" >
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
<form action="anadir_proyecto.proc.php" method="post">
	<label>Título del proyecto</label>
		<div class="form-group">
						<input type="text" class="form-control" name="titulo_Credito" size="20" placeholder="Título del Crédito">
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
						<div id="alumno1">
							<select name="alumno1" class="form-control">
								<option value="">Seleccione</option>
							</select>
						</div>
					</div>
				
				<div class="form-group">
						<div id="alumno2">
							<select name="alumno2" class="form-control">
								<option value="">Seleccione</option>
							</select>
						</div>
					</div>
					
							<div class="form-group">
						<div id="alumno3">
							<select name="alumno3" class="form-control">
								<option value="">Seleccione</option>
							</select>
						</div>
					</div>	  		
				
		
	<br>

	<label>Integrantes del tribunal</label>



					<div class="form-group">
						<select name="profesor1" class="form-control" " >
							<option value="0">Seleccione</option>
							<?php 
							include("/php/select_option_profesor.php")
							?>
						</select>
					</div>
	

					<div class="form-group">
						<select name="curso_alumno" class="form-control" onchange="showselect(this.value)" >
							<option value="0">Seleccione</option>
							<?php 
							include("/php/select_option_profesor.php")
							?>
						</select>
					</div>


					<div class="form-group">
						<select name="curso_alumno" class="form-control" onchange="showselect(this.value)" >
							<option value="0">Seleccione</option>
							<?php 
							include("/php/select_option_profesor.php")
							?>
						</select>
					</div>

	<br>

	<label>Tutor del crédito</label>
	<div class="form-group">
	<input type="text" class="form-control" name="tutor_proyecto" size="20" placeholder="Tutor del crédito">
					</div>
	<br>


		<input type="submit" class="btn btn-primary" value="Submit">

		</form>
	</body>
</html>