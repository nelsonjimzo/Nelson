
/*=============================================
EDITAR COBRO DE MATRICULA
=============================================*/

$(".tablas").on("click", ".btnCobroMatricula", function()
{
	var idCobro = $(this).attr("idCobro");
	var datos = new FormData();
	datos.append("idCobro", idCobro);
	$.ajax(
  {
		url:"ajax/cobromatricula.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta)
    {
                        //alert(respuesta);
			$("#editarIdCobro").val(respuesta["Id_Cobro"]);
			$("#editarTotalMatricula").val(respuesta["TotalMatricula"]);

		},
                error: function(xhr, status){
                    alert("ERROR: " + xhr + " >> " + status);
                }

	});

})

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