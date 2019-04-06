  <?php   require_once "conexion.php";

class ModeloCobroMatricula
{
  /*=============================================     REGISTRO COBRO DE MATRICULA       =============================================*/

  static public function mdlIngresarMatriculaCobrada($tabla, $datos)
  {
    $stmt = ConexionBD::Abrir_Conexion()->prepare("INSERT INTO  $tabla
                                                                ( Id_Cobro,
                                                                  Id_Alumno,
                                                                  TotalMatricula    )
                                                        VALUES  ( :IdCobro,
                                                                  :IdAlumno,
                                                                  :totalmatricula1  )");
    $stmt->bindParam(":IdCobro",          $datos["Id_cobro"],       PDO::PARAM_STR);
    $stmt->bindParam(":IdAlumno",         $datos["Id_Alumno"],      PDO::PARAM_STR);
    $stmt->bindParam(":totalmatricula1",  $datos["TotalMatricula"], PDO::PARAM_STR);

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
}
/*=============================================     MOSTRAR ALUMNOS     =============================================
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
  }*/
