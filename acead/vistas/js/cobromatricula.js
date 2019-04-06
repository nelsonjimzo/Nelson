/*=============================================     MOSTRAR ALUMNOS     =============================================
*/
$(".tablas").on("click", ".btnCobroMatricula", function(){

  var idAlumno = $(this).attr("idAlumno");

  var datos = new FormData();

  datos.append("idAlumno", idAlumno);

  $.ajax({

    url:"ajax/alumnos.ajax.php",
    //url:"ajax/cobrormatricula.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){

                        //alert(respuesta);
      $("#editarAlumno").val(respuesta["Id_Alumno"]);
      $("#editarNombre1").val(respuesta["PrimerNombre"]);
      $("#editarApellido1").val(respuesta["PrimerApellido"]);
      


    },
                error: function(xhr, status){
                    alert("ERROR: " + xhr + " >> " + status);
                }

  });

})
/*
$(".tablas").on("click", ".btnCobroMatricula", function()
{
  var idAlumno = $(this).attr("idAlumno");
  var datos = new FormData();
  datos.append("idAlumno", idAlumno);
  $.ajax(
  {
    url:"ajax/mensualidad.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta)
    {                 //alert(respuesta);
      $("#editarAlumno").val(respuesta["Id_Alumno"]);
      $("#editarNombre1").val(respuesta["PrimerNombre"]);
      //$("#editarNombre2").val(respuesta["SegundoNombre"]);
      $("#editarApellido1").val(respuesta["PrimerApellido"]);
      //$("#editarApellido2").val(respuesta["SegundoApellido"]);
      //$("#editarFechaNac").val(respuesta["FechaNacimiento"]);
      //$("#editarTelefono").val(respuesta["Telefono"]);
      //$("#editarCedula").val(respuesta["Cedula"]);
      //$("#editarEmail").val(respuesta["CorreoElectronico"]);
      //$("#editarEstCivil").val(respuesta["Id_estadocivil"]);
      //$("#editarGenero").val(respuesta["Id_genero"]);
    },
                error: function(xhr, status)
                {         alert("ERROR: " + xhr + " >> " + status);   }

  });
})*/
/*=============================================     EDITAR COBRO DE MATRICULA       =============================================

$(".tablas").on("click", ".btn-primary", function()
{
	var idCobro = $(this).attr("idCobro");
	var datos = new FormData();
	datos.append("idCobro", idCobro);
	$.ajax(
  {
		url:          "ajax/cobromatricula.ajax.php",
		method:       "POST",
		data:         datos,
		cache:        false,
		contentType:  false,
		processData:  false,
		dataType:     "json",
		success: function(respuesta)
    {         //alert(respuesta);
			$("#editarIdCobro").val(respuesta["Id_Cobro"]);
      $("#editarIdAlumno").val(respuesta["Id_Alumno"]);
			$("#editarTotalMatricula").val(respuesta["TotalMatricula"]);
		}
          error: function(xhr, status)
          {         alert("ERROR: " + xhr + " >> " + status);       }
	});
})
*/

/*=============================================
ELIMINAR MODALIDAD
=============================================
$(".tablas").on("click", ".btnEliminarModalidad", function(){

  var idModalidad = $(this).attr("idModalidad");


  swal({
    title: '¿Está seguro de esta modalidad?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar Modalidad!'
  }).then((result)=>{

    if(result.value){


      window.location = "index.php?ruta=modalidades&idModalidad="+idModalidad;


    }

  })

})
*/
