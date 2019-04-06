<?php

class ControladorCobroMensualidad
{
  /*=============================================  MOSTRAR ALUMNOS  ============================================= */
  static public function ctrMostrarAlumnosMensualidad($item, $valor)
  {
    	$tabla = "tbl_alumnos";
		$respuesta = ModeloAlumnos::MdlMostrarAlumnos($tabla, $item, $valor);
		return $respuesta;
  }
  	/*=============================================
	MOSTRAR COBRO DE MATRICULA 
	=============================================*/

	static public function ctrMostrarIdcobro($item, $valor)
	{
		$tabla 		= "tbl_cuentacorriente";
		$respuesta 	= ModeloCobroMensualidad::MdlMostrarIdcobro($tabla, $item, $valor);
		return $respuesta;
	}

  /*=============================================	REGISTRO DE COBRO	=============================================*/
	static public function ctrCrearCobroMensualidad()
	{
		if(isset($_POST["2nuevoCobroMensual"]))
		{
			if($_POST["2nuevoCobroMensual"])
			{
				$tabla = "tbl_cuentacorriente";
				$datos = array(	
								"Id_Cuenta"		=> null,
                                "MontoTotal"	=> strtoupper($_POST["2nuevoCobroMensual"]),
                                "Mespago"		=> strtoupper($_POST["mesesapagar"]),
                                "Id_Alumno"		=> strtoupper($_POST["editarAlumno"]),
                                "Id_cobro"		=> strtoupper($_POST["idcobromatri"]),
                                "Id_precio"		=> strtoupper($_POST["regidprecio"]),
                                "Id_Estado"		=> strtoupper($_POST["regidestado"]),
                                "Id_Matricula"	=> strtoupper($_POST["regidmatri"]),
								"Id_Descuento"	=> strtoupper($_POST["porcentDesto"])
								);
				$respuesta = ModeloCobroMensualidad::mdlIngresarMensualidadCobrada($tabla, $datos);
				if($respuesta == "ok")
				{
					echo '<script>
					swal(
					{
						type: "success",
						title: "¡Pago de Mensualidad agregado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
					}).then((result)=>
					{
						if(result.value)
						{
							window.location = "mensualidad";
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
						title: "¡Campo, no puede ir vacío o llevar caracteres no numericos!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>
							{
								if(result.value)
							{	window.location = "mensualidad";	}		}
						);
					</script>';
				}
		}
	}

/*=============================================	MOSTRAR ESTADO CIVIL	=============================================*/
	static public function ctrCargarSelectEstCivil()
	{
		$tabla = "tbl_descuento";
		//$respuesta = ModeloUsuarios::mdlCargarSelect($tabla);
		$respuesta = ModeloCobroMensualidad::mdlCargarSelectDescuento($tabla);
		return $respuesta;
	}
}

/*INSERT INTO `tbl_cuentacorriente` (`Id_Cuenta`, `MontoTotal`, `Mespago`, `Id_Alumno`, `Id_cobro`, `Id_precio`, `Id_Estado`, `Id_Matricula`, `Id_Descuento`) VALUES (NULL, '100', 'Julio', '3', '1', '2', '1', '1', '1');*/