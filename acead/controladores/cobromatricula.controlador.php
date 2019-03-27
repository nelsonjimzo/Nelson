<?php

class ControladorCobroMatricula
{

  /*=============================================
  MOSTRAR ALUMNOS
  =============================================*/

  static public function ctrMostrarCobroMatricula($item, $valor)
  {
    $tabla 		= "tbl_alumnos";
    $respuesta 	= ModeloCobroMatricula::MdlMostrarCobroMatricula($tabla, $item, $valor);
    return $respuesta;
  }

  /*=============================================
	REGISTRO DE COBRO
	=============================================*/

	static public function ctrCrearCobroMatricula()
	{
		if(isset($_POST["nuevoTotalMatricula"]))
		{
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoTotalMatricula"]))
			{
				$tabla = "tbl_cobromatricula";
				$datos = array("TotalMatricula" => strtoupper($_POST["nuevoTotalMatricula"]));
				//$respuesta = ModeloCobroMatricula::mdlCobroMatricula($tabla, $datos);
				$respuesta = ModeloCobroMatricula::mdlIngresarMatriculaCobrada($tabla, $datos);
				//cambio de mdl
				if($respuesta == "ok")
				{
					echo '<script>
					swal(
					{
						type: "success",
						title: "¡Pago de matrícula agregado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false

					}).then((result)=>
					{
						if(result.value)
						{
							window.location = "cobromatricula";

						}
					});
					</script>';
				}

			}else
				{
					echo 
					'<script>
					swal({
						type: "error",
						title: "¡Campo devslor pagado, no puede ir vacío o llevar caracteres no numericos!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>
							{
								if(result.value)
							{	window.location = "modalidades";	}		}
						);
					</script>';
				}
		}
	}

  /*=============================================
 EDITAR MODALIDAD
 =============================================
 static public function ctrEditarModalidad()
 {
   if(isset($_POST["editarModalidad"])){


     if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarModalidad"]))
     {
       $tabla = "tbl_modalidades";
       $datos = array("Id_Modalidad" => $_POST["editarIdModalidad"],
                    "DescripModalidad" => strtoupper($_POST["editarModalidad"]));
       $respuesta = ModeloModalidades::mdlEditarModalidad($tabla, $datos);
       if($respuesta == "ok")
       {
         echo'<script>
         swal({
             type: "success",
             title: "La Modalidad ha sido editada correctamente",
             showConfirmButton: true,
             confirmButtonText: "Cerrar",
             closeOnConfirm: false
             }).then((result) => {
                 if (result.value) {

                 window.location = "modalidades";

                 }
               })

         </script>';
       }
     }
     else
     	{
       	echo'<script>
         swal({
             type: "error",
             title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
             showConfirmButton: true,
             confirmButtonText: "Cerrar",
             closeOnConfirm: false
             }).then((result) => {
             if (result.value) {
             window.location = "modalidades";
             }
           })
         </script>';
     }
    }
  }
*/

  /*=============================================
	BORRAR MODALIDAD
	=============================================

	static public function ctrBorrarModalidad(){

		if(isset($_GET["idModalidad"])){


			$tabla = "tbl_modalidades";
			$datos = $_GET["idModalidad"];

			$respuesta = ModeloModalidades::mdlBorrarModalidad($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La Modalidad ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then((result) => {
								if (result.value) {

								window.location = "modalidades";

								}
							})

				</script>';

			}
		}
	}*/
}
