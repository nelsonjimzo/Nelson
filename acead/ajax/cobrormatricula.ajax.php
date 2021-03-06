<?php
require_once "../controladores/cobromatricula.controlador.php";
require_once "../modelos/cobromatricula.modelo.php";
//require_once "../controladores/alumnos.controlador.php";
//require_once "../modelos/alumnos.modelo.php";
/* =============================================
  MOSTRAR ALUMNO
  ============================================= */
if (isset($_POST["idAlumno"])) 
{
    $editar           = new AjaxCobroMatricula();
    $editar->idAlumno = $_POST["idAlumno"];
    $editar->ajaxEditarCobroMatricula();
}

class AjaxCobroMatricula
{
    /* =============================================
      INGRESAR COBRO MATRICULA
      ============================================= */

    public $idAlumno;
    public function ajaxEditarCobroMatricula() 
    {
        $item       = "Id_Alumno";
        $valor      =  $this->idAlumno;
        //$respuesta  =  ControladorCobroMatricula::ctrMostrarCobroMatricula($item, $valor);
        //probando cambiar al controlador que edita
        $respuesta  =  ControladorCobroMatricula::ctrMostrarCobroMatricula($item, $valor);
        echo json_encode($respuesta);
    }
}

/*=============================================
VALIDAR NO REPETIR ALUMNO
=============================================

public $validarAlumno;
public function ajaxValidarAlumno()
{
  $item       = "alumno";
  $valor      = $this->validarAlumno;
  $respuesta  = ControladorAlumnos::ctrMostrarAlumnos($item, $valor);
  echo json_encode($respuesta);

}