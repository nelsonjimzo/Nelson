<?php   require_once "conexion.php";

class ModeloCobroMensualidad
{
	/*=============================================	MOSTRAR IDCOBRO MATRICULA=============================================*/
	static public function MdlMostrarIdcobro($tabla, $item, $valor)
	{
		if($item != null)
		{
			$stmt = ConexionBD::Abrir_Conexion()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}
		else
		{
			$stmt = ConexionBD::Abrir_Conexion()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}
		$stmt -> Cerrar_Conexion();
		$stmt = null;
	}
  /*=============================================     REGISTRO COBRO DE MATRICULA       =============================================*/

  static public function mdlIngresarMensualidadCobrada($tabla, $datos)
  {
    $stmt = ConexionBD::Abrir_Conexion()->prepare("INSERT INTO  $tabla 
                                                              (	  Id_Cuenta,
	                                                              MontoTotal,
	                                                              Mespago,
	                                                              Id_Alumno,
	                                                              Id_cobro,
	                                                              Id_precio,
	                                                              Id_Estado,
	                                                              Id_Matricula,
	                                                              Id_Descuento	)
                                                       VALUES ( :IdCuenta,
                                                       			:2nuevoCobroMensual,
                                                                :mesesapagar,
                                                                :editarAlumno,
                                                                :idcobromatri,
                                                                :regidprecio,
                                                                :reidestado,
                                                                :regidmatri,
                                                                :porcentDesto
                                                            	)");
    $stmt->bindParam(":IdCuenta",   		$datos["Id_Cuenta"],    PDO::PARAM_STR);
    $stmt->bindParam(":2nuevoCobroMensual", $datos["MontoTotal"],   PDO::PARAM_STR);
    $stmt->bindParam(":mesesapagar",  		$datos["Mespago"], 		PDO::PARAM_STR);
    $stmt->bindParam(":editarAlumno",		$datos["Id_Alumno"], 	PDO::PARAM_STR);
    $stmt->bindParam(":idcobromatri",  		$datos["Id_cobro"], 	PDO::PARAM_STR);
    $stmt->bindParam(":regidprecio",  		$datos["Id_Precio"], 	PDO::PARAM_STR);
    $stmt->bindParam(":reidestado",  		$datos["Id_Estado"], 	PDO::PARAM_STR);
    $stmt->bindParam(":regidmatri",			$datos["Id_Matricula"], PDO::PARAM_STR);
    $stmt->bindParam(":porcentDesto",		$datos["Id_Descuento"], PDO::PARAM_STR);
   
    if($stmt->execute())
    {
      return "ok";
    }
    else
    {
      return "error";
      echo "<script type='text/javascript'>alert('neles')</script>";
    }
    	$stmt->close();
    	$stmt = null;
 }
  /*=============================================
  CARGAR SELECT
  =============================================*/
  static public function mdlCargarSelectDescuento($tabla)
  {
    $stmt = ConexionBD::Abrir_Conexion()->prepare("SELECT * FROM $tabla");
  	$stmt -> execute();
  	return $stmt -> fetchall();

  }
}
/*
 * Selector de funciones para cargar los Selects en cascada
 *
 
function metodo_cargaorientacion()
{
    $idmodalidad = filter_input(INPUT_POST, 'idmodalidad');
    $stmt = ConexionBD::Abrir_Conexion()->prepare("SELECT TOR.id_orientacion AS ID, TOR.nombre AS nombre FROM tbl_Orientacion TOR WHERE TOR.Id_modalidad = ".$idmodalidad.";");
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_BOTH);
    echo json_encode($resultado);

}*/
