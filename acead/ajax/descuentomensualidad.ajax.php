<?php
require_once "../controladores/descuentomensualidad.controlador.php";
require_once "../modelos/descuentomensualidad.modelo.php";

/* =============================================  EDITAR ALUMNO  ============================================= 
if (isset($_POST["idDesto"])) 
{
    $editar = new AjaxDesto();
    $editar->idDesto = $_POST["idDesto"];
    $editar->ajaxEditarDesto();
}

class AjaxDesto 
{
  /* =============================================      EDITAR ALUMNOS      ============================================= 

    public $idDesto;
    public function ajaxEditarDesto() 
    {
        //echo "<script type='text/javascript'>alert('ajax')</script>";
        $item = "Id_Descuento";
        $valor = $this->idDesto;
        //$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
        $respuesta = ControladorDescuento::ctrCargarSelectTipoDesc($item, $valor);
        echo json_encode($respuesta);
    }

}
?>