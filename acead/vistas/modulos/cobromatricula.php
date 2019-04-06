<div class="content-wrapper">
  <section class="content-header">
    <h1>      Administrar Pagos de Matricula   </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Pagos de Matricula</li>
    </ol>
  </section>
  <section class="content">
    <div class="box">
<!-- BOTON AGREGAR ALUMNOS
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarAlumno">
          Agregar Alumno
        </button>-->
      </div>

      <div class="box-body">
       <table class="table table-bordered table-striped dt-responsive tablas">
        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th style="width:10px">Id</th>
           <th>Primer Nombre</th>
           <th>Primer Apellido</th>
           <th>Acciones</th>
         </tr>
        </thead>

        <tbody>
        <?php
        $item = null;
        $valor = null;
        // la que estoy usando: $alumnos = ControladorCobroMensual::ctrMostrarCobroMensual($item, $valor);
       //prueba:
//        $alumnos = ModeloCobroMatricula::ctrMostrarCobroMatricula($item, $valor);//si funiona
       $alumnos = ControladorAlumnos::ctrMostrarAlumnos($item, $valor);
       foreach ($alumnos as $key => $value){

         echo ' <tr>
                 <td>'.($key+1).'</td>
                 <td>'.$value["Id_Alumno"].'</td>
                 <td>'.$value["PrimerNombre"].'</td>
                 <td>'.$value["PrimerApellido"].'</td>
                  ';


                 echo '  <td>

                    <div class="btn-group">
                    <button class="btn btn-warning btnCobroMatricula"
                            idAlumno="'.$value["Id_Alumno"].'"
                            data-toggle="modal"
                            data-target="#modalEditarCobroMatricula">
                            <i class="fa fa-pencil"></i></button>
                    </div>

                  </td>

                </tr>';
        }
        /*<button class="btn btn-success btnMatriculaAlumno" idAlumno="'.$value["Id_Alumno"].'" data-toggle="modal" data-target="#modalMatriculaAlumno"><i class="fa fa-building"></i></button>
        <button class="btn btn-danger btnEliminarAlumno" idAlumno="'.$value["Id_Alumno"].'"><i class="fa fa-times"></i></button>*/

        ?>


        </tbody>
       </table>
      </div>
    </div>
  </section>
</div>


<!--=====================================
MODAL EDITAR ALUMNO
======================================-->

<div id="modalEditarCobroMatricula" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#f39c12; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Alumno</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          <div class="box-body">

            <!-- ENTRADA PARA EL ID ALUMNO -->
            <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
                   <input type="text" class="form-control input-lg" id="editarAlumno" name="editarAlumno" readonly value="">
               </div>
             </div>

            <!-- ENTRADA PARA EL PRIMER NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="editarNombre1" id="editarNombre1" value="" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" readonly value="">
              </div>
            </div>


            <!-- ENTRADA PARA EL PRIMER APELLIDO -->

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="editarApellido1" id="editarApellido1" value="" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" readonly value="">
              </div>
            </div>

          <!-- ENTRADA PARA EL VALOR A COBRAR -->

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoTotalMatricula" id="nuevoTotalMatricula"  placeholder="300">
              </div>
            </div>

          </div>
        </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
          <button type="button"
                  class="btn btn-default pull-left"
                  data-dismiss="modal">     Salir           </button>
          <button type="submit"
                  class="btn btn-primary">  Cobro Realizado  </button>
        </div>

        <?php
          //Los habilito despues de usar el controlador
         $editarCobroMensual = new ControladorCobroMatricula();
         $editarCobroMensual -> ctrCrearCobroMatricula();

        ?>

      </form>
    </div>
  </div>
</div>


<?php

  //$borrarAlumno = new ControladorAlumnos();
  //$borrarAlumno -> ctrBorrarAlumno();

?>
