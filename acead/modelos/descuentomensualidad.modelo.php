<?php 	require_once "conexion.php";
/*
class ModeloDescuento
{
/*=============================================		MOSTRAR ALUMNOS		=============================================
	static public function MdlCargarSelectTipoDesc($tabla, $item, $valor)
	{
		if($item != null)
		{
			$stmt = ConexionBD::Abrir_Conexion()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}else
			{
			$stmt = ConexionBD::Abrir_Conexion()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
			}
		$stmt -> Cerrar_Conexion();
		$stmt = null;
	}
}

	/*=============================================
	 CARGAR SELECT PARA SELECCIONAR TIPO DE DESCUENTO
	 =============================================
	 static public function MdlCargarSelectTipoDesc($tabla)
	 {
	   $stmt = ConexionBD::Abrir_Conexion()->prepare("SELECT * FROM $tabla");
	 	$stmt -> execute();
	 	return $stmt -> fetchall();
	   }

*/
?>

