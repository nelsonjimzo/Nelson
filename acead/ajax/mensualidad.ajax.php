<?php
require_once "../controladores/mensualidad.controlador.php";
require_once "../modelos/mensualidad.modelo.php";
//require_once "../controladores/alumnos.controlador.php";
//require_once "../modelos/alumnos.modelo.php";
/* =============================================
  MOSTRAR ALUMNO
  ============================================= */
if (isset($_POST["idAlumno"])) 
{
    $editar           = new AjaxCobroMensualidad();
    $editar->idAlumno = $_POST["idAlumno"];
    $editar->ajaxEditarCobroMensualidad();
}

class AjaxCobroMensualidad
{
    /* =============================================      INGRESAR COBRO MATRICULA      ============================================= */
    public $idAlumno;
    public function ajaxEditarCobroMensualidad() 
    {
        $item       = "Id_Alumno";
        $valor      =  $this->idAlumno;
        //$respuesta  =  ControladorCobroMatricula::ctrMostrarCobroMatricula($item, $valor);
        //probando cambiar al controlador que edita
        $respuesta = ControladorAlumnos::ctrMostrarAlumnos($item, $valor);

       // $respuesta  =  ControladorCobroMensualidad::ctrMostrarAlumnosMensualidad($item, $valor);
        echo json_encode($respuesta);
    }
}
