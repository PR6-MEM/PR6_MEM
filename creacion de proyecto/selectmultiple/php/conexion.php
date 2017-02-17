<?php 
    include_once("config.php");
    $conexion= @mysql_connect($Servidor,$Usuario,$Password) or die("Error: El servidor no puede conectar con la base de datos");
    $selector=@mysql_select_db($BaseDeDatos,$conexion);
    @mysql_set_charset("utf8", $conexion);
?>