
/*=============================================
MATRICULA ALUMNO
=============================================

$(".tablas").on("click", ".btnMatriculaAlumno", function(){


 var idAlumno = $(this).attr("idAlumno");
 var datos = new FormData();
  datos.append("idAlumno", idAlumno);

  $.ajax({
    url:"ajax/alumnos.ajax.php",
    method: "POST",
    data: datos,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){
                        //alert(respuesta);
      $("#IdAlumno").val(respuesta["Id_Alumno"]);
      $("#nombreAlumno").val(respuesta["PrimerNombre"]);


  },
                error: function(xhr, status){
                    alert("ERROR: " + xhr + " >> " + status);
              }

  });

})
*/