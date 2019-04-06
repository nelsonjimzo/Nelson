<?php

class ControladorPagomes
{

	/*=============================================	MOSTRAR ALUMNO	=============================================*/
	static public function ctrMostrarAlumnosPagomes($item, $valor)
	{
		$tabla = "tbl_alumnos";
		$respuesta = ModeloPagomes::MdlMostrarAlumnosPagomes($tabla, $item, $valor);
		return $respuesta;
	}

	/*=============================================	EDITAR ALUMNO	=============================================

	static public function ctrEditarPagomes()
	{
		if(isset($_POST["editarAlumno"]))
		{
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre1"]))
			{
				$tabla = "tbl_alumnos";
				$datos = array(	 "Id_Alumno" 			=> 				$_POST["editarAlumno"]		,
								 "PrimerNombre" 		=> strtoupper(	$_POST["editarNombre1"]		),
								 "PrimerApellido"		=> strtoupper(	$_POST["editarApellido1"]	),
								 "SegundoNombre"		=> strtoupper(	$_POST["editarNombre2"]		),
								 "SegundoApellido"		=> strtoupper(	$_POST["editarApellido2"]	),
								 "CorreoElectronico" 	=> 				$_POST["editarEmail"]		,
								 "Telefono" 			=> 				$_POST["editarTelefono"]	,
								 "Cedula" 				=> 				$_POST["editarCedula"]		,
								 "Id_EstadoCivil" 		=> 				$_POST["editarEstCivil"]	,
								 "Id_Genero" 			=> 				$_POST["editarGenero"]		,
								 "Id_Descuento" 		=> 				$_POST["editarDescuento"]	);
				$respuesta = ModeloPagomes::mdlEditarAlumnoPagomes($tabla, $datos);
				if($respuesta == "ok")
				{
					echo'<script>
					swal({
						  type: "success",
						  title: "El Alumno ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "pagomes";

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
							}).then((result) => 
							{
							if (result.value) 
							{
							window.location = "pagomes";
							}
						})
					</script>';
			}
		}
	}*/

/*=====================================================================================================================================================		INGRESAR PAGO DE MENSUALIDAD	===========================================================================================================================================================*/

	static public function ctrIngresoPagomes()
	{
		if(isset($_POST["editarAlumno"]))
		{
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre1"]))
			{
				$tabla = "tbl_alumnos";
				$datos = array(	 "Id_Alumno" 			=> 				$_POST["editarAlumno"]		,
								 "PrimerNombre" 		=> strtoupper(	$_POST["editarNombre1"]		),
								 "PrimerApellido"		=> strtoupper(	$_POST["editarApellido1"]	),
								 "SegundoNombre"		=> strtoupper(	$_POST["editarNombre2"]		),
								 "SegundoApellido"		=> strtoupper(	$_POST["editarApellido2"]	),
								 "CorreoElectronico" 	=> 				$_POST["editarEmail"]		,
								 "Telefono" 			=> 				$_POST["editarTelefono"]	,
								 "Cedula" 				=> 				$_POST["editarCedula"]		,
								 "Id_EstadoCivil" 		=> 				$_POST["editarEstCivil"]	,
								 "Id_Genero" 			=> 				$_POST["editarGenero"]		,
								 "Id_Descuento" 		=> 				$_POST["editarDescuento"]	);
				$respuesta = ModeloPagomes::mdlPagomesIngreso($tabla, $datos);
				if($respuesta == "ok")
				{
					echo'<script>
					swal({
						  type: "success",
						  title: "El Alumno ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
									if (result.value) {

									window.location = "pagomes";

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
							}).then((result) => 
							{
							if (result.value) 
							{
							window.location = "pagomes";
							}
						})
					</script>';
			}
		}
	}

/*::::::::::::::::::::::::::::::::::::::::::::::::::::::::  FIN  ::::::::::::::::::::::::::::::::::::::::::::::::*/

	/*=============================================	BORRAR ALUMNO	=============================================*/

	static public function ctrBorrarPagomes()
	{
		if(isset($_GET["idAlumno"]))
		{
			$tabla = "tbl_alumnos";
			$datos = $_GET["idAlumno"];
			$respuesta = ModeloPagomes::mdlBorrarAlumnoPagomes($tabla, $datos);
			if($respuesta == "ok")
			{
				echo'<script>
				swal({
					  type: "success",
					  title: "El Alumno ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar",
					  closeOnConfirm: false
					  }).then((result) => {
								if (result.value) 
								{
								window.location = "pagomes";
								}
							})
				</script>';
			}
		}
	}

	/*=============================================	MOSTRAR GENERO	=============================================*/
	static public function ctrCargarSelectGenero()
	{	$tabla = "tbl_genero";
		$respuesta = ModeloPagomes::mdlCargarSelect($tabla);
		return $respuesta;
	}

/*=============================================	MOSTRAR ESTADO CIVIL ============================================*/
	static public function ctrCargarSelectEstCivil()
	{	$tabla = "tbl_estadocivil";
		$respuesta = ModeloPagomes::mdlCargarSelect($tabla);
		return $respuesta;
	}

/*=============================================	MOSTRAR DESCUENTO	=============================================*/
	static public function ctrCargarSelectDescuento()
	{	$tabla = "tbl_descuento";
		$respuesta = ModeloPagomes::mdlCargarSelect($tabla);
		return $respuesta;
	}
/*=======================	MOSTRAR ID DE MATRICULA =============================================*/
	static public function ctrCargarMatricula()
	{	$tabla = "tbl_cobromatricula";
		$respuesta = ModeloPagomes::mdlSelectidcrobo($tabla);
		return $respuesta;
	}
/*===========================	MOSTRAR ID DE PRECIO	=============================================*/
	static public function ctrCargarPrecio()
	{	$tabla = "tbl_precio";
		$respuesta = ModeloPagomes::mdlSelectIdPrecio($tabla);
		return $respuesta;
	}
/*===========================	MOSTRAR ID DE ESTADO	=============================================*/
	static public function ctrCargarEstadoPago()
	{	$tabla = "tbl_estadopago";
		$respuesta = ModeloPagomes::mdlSelectIdEstadoPago($tabla);
		return $respuesta;
	}
/*===========================	MOSTRAR ID DE MATRICULA	=============================================*/
	static public function ctrCargarMatriculado()
	{	$tabla = "tbl_matricula";
		$respuesta = ModeloPagomes::mdlSelectIdMatriculado($tabla);
		return $respuesta;
	}
}
