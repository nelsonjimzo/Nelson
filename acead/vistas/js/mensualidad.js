/*=============================================     MOSTRAR ALUMNOS     =============================================
*/
$(".tablas").on("click", ".btnCobroMensualidad", function()
{
  var idAlumno = $(this).attr("idAlumno");
  var datos = new FormData();
  datos.append("idAlumno", idAlumno);
  $.ajax(
  {
    url:          "ajax/alumnos.ajax.php",
    method:       "POST",
    data:         datos,
    cache:        false,
    contentType:  false,
    processData:  false,
    dataType:     "json",
    success: function(respuesta)
    {  //alert(respuesta);
      $("#editarAlumno").val(respuesta["Id_Alumno"]);
      $("#editarNombre1").val(respuesta["PrimerNombre"]);
      $("#editarApellido1").val(respuesta["PrimerApellido"]);
      $("#2nuevoCobroMensual").val(respuesta["MontoTotal"]);
      
      $("#mesesapagar").val(respuesta["Mespago"]);
      $("#idcobromatri").val(respuesta["Id_cobro"]);
      $("#regidmatri").val(respuesta["Id_Matricula"]);
      $("#reidestado").val(respuesta["Id_Estado"]);
      $("#regidprecio").val(respuesta["Id_precio"]);
      $("#porcentDesto").val(respuesta["Id_Descuento"]);
    },
    	error: function(xhr, status)
    	{
    		alert("ERROR: " + xhr + " >> " + status);
    	}
  });
  
  function()
{
  var idCuenta = $(this).attr("idCuenta");
  var datos = new FormData();
  datos.append("idCuenta", idCuenta);
  $.ajax(
  {
    url:          "ajax/mensualidad.ajax.php",
    method:       "POST",
    data:         datos,
    cache:        false,
    contentType:  false,
    processData:  false,
    dataType:     "json",
    success: function(respuesta)
    {  //alert(respuesta);
    //  $("#editarAlumno").val(respuesta["Id_Alumno"]);
      //$("#editarNombre1").val(respuesta["PrimerNombre"]);
      //$("#editarApellido1").val(respuesta["PrimerApellido"]);
      $("#2nuevoCobroMensual").val(respuesta["MontoTotal"]);
      $("#mesesapagar").val(respuesta["Mespago"]);
      $("#idcobromatri").val(respuesta["Id_cobro"]);
      $("#regidmatri").val(respuesta["Id_Matricula"]);
      $("#reidestado").val(respuesta["Id_Estado"]);
      $("#regidprecio").val(respuesta["Id_precio"]);
      $("#porcentDesto").val(respuesta["Id_Descuento"]);
    },
      error: function(xhr, status)
      {
        alert("ERROR: " + xhr + " >> " + status);
      }
  });
  
})
