<?php
 extract($_REQUEST);
 //echo $curso_alumno;
// $curso_alumno = "daw2";

// echo $consulta;
//echo '<select name="alumno1" class="form-control">';
include ("conexion.proc.php");


$nota_oral;
$nota_contenidos;

//PRIMERO SACAMOS EL ID TRIBUNAL DEL ID PROYECTP

$consulta= "SELECT id_tribunal FROM tbl_proyecto WHERE id_proyecto=".$id_proyecto; 

$resultado= mysqli_query($conexion, $consulta) or die (mysqli_error());

while($fila = mysqli_fetch_array($resultado)){	
		
		
		//SEGUNDO SACAMOS EL ID INTEGRANTE A PARTIR DEL ID TRIBUNAL
		

		$consulta_id_integrante= "SELECT DISTINCT id_integrante FROM tbl_notas_tribunal WHERE id_tribunal=".$fila['id_tribunal'] ; 

		//echo $sql; 
		$res= mysqli_query($conexion, $consulta_id_integrante) or die (mysqli_error());
		
		while($id_integrante = mysqli_fetch_array($res)){	


//AHORA SACAMOS LA MATRICULA DEL ALUMNO A PARTIR DEL ID INTEGRANTE

			$sql_matricula= "SELECT  matricula_alumno FROM tbl_integrante_proyecto WHERE id_integrante=".$id_integrante['id_integrante'] ; 

		//echo $sql; 
		$matriculas= mysqli_query($conexion, $sql_matricula) or die (mysqli_error());
		
		while($matricula = mysqli_fetch_array($matriculas)){	

			//Y CON LAS MATRICULAS GUARDADAS, HACEMOS LA CONSULTA PARA SUMAR POR UN LADO TODAS LAS NOTAS DE LA PARTE ORAL DE CADA INTEGRANTE DE PROYECTO

			//NOTA: AHORA SOLO COJEMOS LAS NOTAS DE LAS PREGUNTAS DE LA PARTE ORAL ES A DECIR, CON ID PREGUNTA INFERIOR A 5
		$sql2= "SELECT AVG(valor_nota)as'total_nota_p_oral' FROM tbl_notas_tribunal WHERE id_integrante=".$id_integrante['id_integrante']." AND id_pregunta_tribunal < 5";

		//echo $sql2."<BR>"; 

		$res2= mysqli_query($conexion, $sql2) or die (mysqli_error());
		
		while($fila = mysqli_fetch_array($res2)){	

			//AHORA TENEMOS QUE HACER EL 40% DE ESTA SUMA

			$nota_oral = (0.4*$fila['total_nota_p_oral']);
			//echo $nota_oral."<br>";
			echo $matricula['matricula_alumno']." té de nota mitja de la part oral un ".$fila['total_nota_p_oral']."<br>";

			}	


			$sql3= "SELECT AVG(valor_nota)as'total_nota_contenido' FROM tbl_notas_tribunal WHERE id_integrante=".$id_integrante['id_integrante']." AND id_pregunta_tribunal > 5";

			//echo $sql3."<BR>"; 

			$res3= mysqli_query($conexion, $sql3) or die (mysqli_error());
		
			while($nota = mysqli_fetch_array($res3)){	

				$nota_contenidos=(0.6*$nota['total_nota_contenido']);
				//echo $nota_contenidos."<br>";
				echo $matricula['matricula_alumno']." té de nota mitja de la part de continguts un ".$nota['total_nota_contenido']."<br>";

			}

			echo $matricula['matricula_alumno']." té de nota de presentació un: ".($nota_oral + $nota_contenidos)."<br><br>" ;
		}








		


		}	
	}
mysqli_close($conexion);
//echo '</select>';

?>
