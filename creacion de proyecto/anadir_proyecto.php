<!DOCTYPE html>
<html>
<head>
	<title>Añadir un credito de sintesi nuevo</title>
</head>
<body>
<form action="anadir_proyecto.proc.php" method="post">
	<label>Título del proyecto</label>
	<input type="text" name="titulo_Credito" size="20" placeholder="Título del Crédito">
	<br>
	<label>Ciclo del proyecto</label>
	<select name="articulo">
		<optgroup label="Ciclo Superior">
			<option value="1">ASIX</option>
			<option value="2">DAW</option>
			<option value="3">...</option>
		</optgroup>
			<optgroup label="Ciclo medio">
			<option value="7">SMX</option>
			<option value="8">...</option>
			<option value="9">...</option>
		</optgroup>
	</select>
	<br>
	<label>Integrantes del tribunal</label>
	<input type="text" name="profesor1" size="20" placeholder="Profesor1">
	<input type="text" name="profesor2" size="20" placeholder="Profesor2">
	<input type="text" name="profesor3" size="20" placeholder="Profesor3">
	<br>

	<label>Integrantes del Proyecto</label>
	
	<input type="text" name="alumno1" size="20" placeholder="Alumno 1">
	<input type="text" name="alumno2" size="20" placeholder="Alumno 2">
	<input type="text" name="alumno3" size="20" placeholder="Alumno 3">
	
	<br>
	<label>Tutor del crédito</label>
	<input type="text" name="tutor_proyecto" size="20" placeholder="Tutor del crédito">
	
	<br>
<input type="submit" value="enviar">

</body>
</html>