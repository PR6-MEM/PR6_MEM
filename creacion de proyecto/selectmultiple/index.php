<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >

	<head>
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
					 document.getElementById("municipios").innerHTML=xmlhttp.responseText;
					 }
				  }
			  	xmlhttp.open("GET","php/municipios.php?c="+str,true);
				xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<div class="col-md-12">
			<h2>Select dependientes<h2>
			<legend></legend>
			<br>
			<div class="col-md-6">

				<form action="">

					<div class="form-group">
						<select name="estados" class="form-control" onchange="showselect(this.value)" >
							<option value="">Seleccione</option>
							<?php include "php/estados.php" ?>
						</select>
					</div>

					<div class="form-group">
						<div id="municipios">
							<select name="municipios" class="form-control">
								<option value="">Seleccione</option>
							</select>
						</div>
					</div>
			  		<input type="submit" class="btn btn-primary" value="Submit">
				</form>
			</div>
	</body>
</html>
