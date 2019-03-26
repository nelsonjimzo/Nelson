<?php   require_once "conexion.php";

class ModeloCobroMatricula
{
/*=============================================
  MOSTRAR ALUMNOS
=============================================*/
  static public function MdlMostrarCobroMatricula($tabla, $item, $valor)
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

  /*=============================================
  REGISTRO COBRO DE MATRICULA
  =============================================*/

  static public function mdlIngresarMatriculaCobrada($tabla, $datos)
  {
    $stmt = ConexionBD::Abrir_Conexion()->prepare("INSERT INTO  $tabla 
                                                                (TotalMatricula)
                                                        VALUES  (:totalmatricula1)");

    $stmt->bindParam(":totalmatricula1", $datos["TotalMatricula"], PDO::PARAM_STR);

    if($stmt->execute())
    {
      return "ok";
    }
    else
    {
      return "error";
    }
    $stmt->close();
    $stmt = null;
  }

  /*=============================================
  EDITAR MODALIDAD
  =============================================
  static public function mdlEditarModalidad($tabla, $datos)
  {
    $stmt = ConexionBD::Abrir_Conexion()->prepare("UPDATE $tabla SET DescripModalidad =:descripmodalidad
                                                    WHERE Id_Modalidad = :id");
    $stmt->bindParam(":id", $datos["Id_Modalidad"], PDO::PARAM_STR);
    $stmt->bindParam(":descripmodalidad", $datos["DescripModalidad"], PDO::PARAM_STR);

    if($stmt->execute()){

      return "ok";

    }else{

      return "error";
      echo "<script type='text/javascript'>alert('neles')</script>";
    }

    $stmt->close();

    $stmt = null;

  }
  */

  /*=============================================
  ACTUALIZAR MODALIDAD
  =============================================

  static public function mdlActualizarModalidad($tabla, $item1, $valor1, $item2, $valor2){

    $stmt = ConexionBD::Abrir_Conexion()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

    $stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
    $stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

    if($stmt -> execute()){

      return "ok";

    }else{

      return "error";
      echo "<script type='text/javascript'>alert('neles')</script>";

    }

    $stmt -> close();

    $stmt = null;

  }
  */
  /*=============================================
  BORRAR MODALIDAD
  =============================================

  static public function mdlBorrarModalidad($tabla, $datos){

    $stmt = ConexionBD::Abrir_Conexion()->prepare("DELETE FROM tbl_modalidades WHERE Id_Modalidad = :id");

    $stmt -> bindParam(":id", $datos, PDO::PARAM_INT);


    if($stmt -> execute() ){

      return "ok";



    }else{

      return "error";

    }

    $stmt -> close();

    $stmt = null;


  }
  */

 /*=============================================
  CARGAR SELECT
  =============================================
  static public function mdlCargarSelect($tabla){

    $stmt = ConexionBD::Abrir_Conexion()->prepare("SELECT * FROM $tabla");
    $stmt -> execute();

    return $stmt -> fetchall();

    }
    */

}
