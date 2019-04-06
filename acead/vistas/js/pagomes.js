
/*=============================================
INSERTAR PAGO DE MENSUALIDAD
=============================================*/

$(".tablas").on("click", ".btnEditarAlumno", function(){

	var idAlumno = $(this).attr("idAlumno");

	var datos = new FormData();

	datos.append("idAlumno", idAlumno);

	$.ajax(
  {
		url:"ajax/pagomes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta)
    {
                        //alert(respuesta);
			$("#editarAlumno")   .val(respuesta["Id_Alumno"]         );
			$("#editarNombre1")  .val(respuesta["PrimerNombre"]      );
			$("#editarApellido1").val(respuesta["PrimerApellido"]    );
      $("#editarDescuento").val(respuesta["Id_Descuento"]      );
		},
        error: function(xhr, status)
        {
            alert("ERROR: " + xhr + " >> " + status);
        }
	});

})
