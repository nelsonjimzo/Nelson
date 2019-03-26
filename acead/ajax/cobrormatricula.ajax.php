<?php
require_once "../controladores/cobromatricula.controlador.php";
require_once "../modelos/cobromatricula.modelo.php";

/* =============================================
  EDITAR ALUMNO
  ============================================= */
if (isset($_POST["idAlumno"])) 
{
    $editar = new AjaxCobroMatricula();
    $editar->idModalidad = $_POST["idAlumno"];
    $editar->ajaxEditarModalidad();
}

class AjaxCobroMatricula
{
    /* =============================================
      EDITAR MODALIDAD
      ============================================= */

    public $idCobro;
    public function ajaxEditarCobroMatricula() 
    {
        $item = "Id_Cobro";
        $valor = $this->idCobro;
        $respuesta = ControladorCobroMatricula::ctrMostrarCobroMatricula($item, $valor);
        echo json_encode($respuesta);
    }
}
