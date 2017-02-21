var validar=function() {
      var error="Errores en:\n";
alert("alumno1 = "+document.newproject.alumno1.value);
alert("alumno2 = "+document.newproject.alumno2.value);
alert("alumno3 = "+document.newproject.alumno3.value);
alert("titulo = "+document.newproject.titulo_Credito.value);
alert("profe1 = "+document.newproject.profesor1.value);
alert("profe2 = "+document.newproject.profesor2.value);
alert("profe3 = "+document.newproject.profesor3.value);
alert("curso = "+document.newproject.curso_alumno.value);


        if(document.newproject.titulo_Credito.value==""){
            error+="El proyecto no tiene titulo\n";
        }
        if(document.newproject.curso_alumno.value=="0"){
            error+="hay que poner el curso al que pertenece el proyecto\n";
        }

        if(document.newproject.alumno1.value=="0"){
            error+="hay que asignar alumnos al proyecto\n";
        }else if (document.newproject.alumno2.value=="0"){
          error+="hay que asignar alumnos al proyecto\n";
        }else if (document.newproject.alumno3.value=="0"){
          error+="hay que asignar alumnos al proyecto\n";
        }
        if (((document.newproject.alumno1.value == document.newproject.alumno2.value)||(document.newproject.alumno1.value == document.newproject.alumno3.value)||(document.newproject.alumno2.value == document.newproject.alumno3.value))) {
          error+="los integrantes del proyecto están repetidos\n";
        }
        if(document.newproject.profesor1.value=="0"){
            error+="hay que asignar profesores al tribunal\n";
        }else if (document.newproject.profesor2.value=="0"){
          error+="hay que asignar profesores al tribunal\n";
        }else if (document.newproject.profesor3.value=="0"){
          error+="hay que asignar profesores al tribunal\n";
        }else if (((document.newproject.profesor1.value == document.newproject.profesor2.value) || (document.newproject.profesor1.value == document.newproject.profesor3.value)||(document.newproject.profesor2.value == document.newproject.profesor3.value))) {
           error+="los integrantes del tribunal están repetidos\n";
        }
        if(document.newproject.tutor_proyecto.value==""){
            error+="hay que asignar un tutor al proyecto\n";
        }
        if(error=="Errores en:\n"){
            return true;
        } else {
            alert(error);
            return false;
        }

}