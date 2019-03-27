<div class="content-wrapper">
  <section class="content-header">
    <h1>      Administrar Cobros de matrícula     </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Cobros</li>
    </ol>
  </section>

  <!-- FORMULARIO DE ALUMNOS PARA COBRO -->
  <section class="content" style="width:550px">
    <div class="box">

      <!-- BOTON AGREGAR MODALIDAD      -->
        <div class="box-header with-border">
             <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarModalidad">
               Mostrar el alumno para agregar cobro de matricula 
              </button>  -->

            </div>
              <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas">
                  <thead>
                   <tr>
                     <th style="width:10px">
                          #</th>
                     <th style="width:10px">
                          Id Alumno</th>
                     <th> Nombre del Alumno</th>
                     <th> Apellido del Alumno</th>
                     <th> Acciones</th>
                   </tr>
                  </thead>

                  <tbody>
                      
                      <?php
                      $item           = null;
                      $valor          = null;
                      $cobromatricula = ControladorCobroMatricula::ctrMostrarCobroMatricula($item, $valor);

                     foreach ($cobromatricula as $key => $value)
                     {
                        echo ' <tr>
                                <td>'.($key+1)                .'</td>
                                <td>'.$value["Id_Alumno"]     .'</td>
                                <td>'.$value["PrimerNombre"]  .'</td>
                                <td>'.$value["PrimerApellido"].'</td>
                                <td>
                                  <div class="btn-group">
                                    <button class       ="btn btn-warning btnCobroMatricula" 
                                            idAlumno    ="'.$value["Id_Alumno"].'" 
                                            data-toggle ="modal"
                                            data-target ="#modalEditarCobroMatricula">
                                            <i class="fa fa-pencil"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>';
                      }
                      ?>

                  </tbody>
                </table>
              </div>
              <!-- /.content -->
    </div>
    <!-- /.box -->
  </section>

<!--=====================================
MODAL AGREGAR MODALIDAD
======================================

<div id="modalAgregarModalidad" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">    -->

        <!--=====================================
        CABEZA DEL MODAL
        ======================================
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Modalidad</h4>
        </div>      -->

        <!--=====================================
        CUERPO DEL MODAL
        ======================================

        <div class="modal-body">
          <div class="box-body">      -->
            <!-- ENTRADA PARA EL NOMBRE DE LA MODALIDAD 
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoDescripModalidad" id="nuevoDescripModalidad" placeholder="Nombre de la Modalidad" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" style="text-transform: uppercase" maxlength="" required>
              </div>
            </div>
           </div>
         </div>   -->

        <!--=====================================
        PIE DEL MODAL
        ======================================
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Modalidad</button>
        </div>    -->

        <?php
          //$crearModalidad = new ControladorModalidades();
          //$crearModalidad -> ctrCrearModalidad();
        ?>


        <?php
          //$borrarModalidad = new ControladorModalidades();
          //$borrarModalidad -> ctrBorrarModalidad();
        ?>
<!--
      </form>
    </div>
  </div>
</div>
-->

<!--===================================== MODAL COBRO MATRICULA ======================================-->
<div id="modalEditarCobroMatricula" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!--=====================================       CABEZA DEL MODAL     ======================================-->
        <div class="modal-header" style="background:#f39c12; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cobro de matrícula</h4>
        </div>
        <!--=====================================   CUERPO DEL MODAL PARA MOSTRAR EL COBRO     ======================================-->
        <div class="modal-body">
          <div class="box-body">

            <!-- ID DE ALUMNO -->
             <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
                  <input  type=   "text" 
                          class=  "form-control input-lg" 
                          id=     "editarIdAlumno" 
                          name=   "editarIdAlumno" 
                          readonly value="">
                </div>
              </div>

               <!-- ENTRADA PARA EL PRIMER NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input  type=   "text" 
                        class=  "form-control input-lg" 
                        name=   "nuevoNombre1" 
                        id=     "nuevoNombre1" 
                        style=  "text-transform: uppercase" readonly value="">
              </div>
            </div>

            <!-- ENTRADA PARA EL COBRO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input  type=   "text" 
                        class=        "form-control input-lg" 
                        name=         "editarCobro" 
                        id=           "editarCobro" 
                        value=        "" 
                        placeholder=  "300"
                        pattern=      "|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" 
                        style=        "text-transform: uppercase" 
                        maxlength=    "40" required>
              </div>
            </div>
          </div>
        <!--===================================== PIE DEL MODAL    ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Agregar Cobro</button>
        </div>

        <?php
          //$editarModalidad = new ControladorModalidades();
          $editarCobroMatricula = new ControladorCobroMatricula();
          //$editarModalidad -> ctrEditarModalidad();
          $editarCobroMatricula -> ctrCrearCobroMatricula();
        ?>
<script src="../acead/vistas/js/cobromatricula.js"></script>
         </form>
        </div>
      </div>
     </div>
    </div>

  <!-- FORMULARIO DE CLASES 
  <section class="content" style="width:550px">
    <div class="box">   -->
      <!-- BOTON AGREGAR MODALIDAD 
        <div class="box-header with-border">
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarClases">
                Agregar Clases
              </button>
            </div>
              <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas">
                  <thead>
                   <tr>
                     <th style="width:10px">#</th>
                     <th style="width:10px">Id</th>
                     <th>Clase</th>
                     <th>Duración</th>
                     <th>Id Orientación</th>
                     <th>Acciones</th>
                   </tr>
                  </thead>
                  <tbody>-->

                      <?php
                      /*
                      $item = null;
                      $valor = null;
                      $clases = ControladorClases::ctrMostrarClases($item, $valor);

                     foreach ($clases as $key => $value){

                        echo ' <tr>
                                <td>'.($key+1).'</td>
                                <td>'.$value["Id_Clase"].'</td>
                                <td>'.$value["DescripClase"].'</td>
                                <td>'.$value["Duracion"].'</td>
                                <td>'.$value["Id_orientacion"].'</td>

                                <td>

                                  <div class="btn-group">

                                    <button class="btn btn-warning btnEditarClase" idClase="'.$value["Id_Clase"].'" data-toggle="modal" data-target="#modalEditarClase"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btnEliminarClase" idClase="'.$value["Id_Clase"].'"><i class="fa fa-times"></i></button>


                                  </div>

                                </td>

                              </tr>';
                      }


                      */?>


              <!--    </tbody>

                </table>

              </div>

               /.content -->
   <!-- </div>

     /.box 

  </section>-->



<!--=====================================
MODAL AGREGAR MODALIDAD
======================================

<div id="modalAgregarClases" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">-->

        <!--=====================================
        CABEZA DEL MODAL
        ======================================

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Clase</h4>

        </div> -->

        <!--=====================================
        CUERPO DEL MODAL
        ======================================

        <div class="modal-body">

          <div class="box-body">-->

            <!-- ENTRADA PARA EL NOMBRE DE LA CLASE 

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoDescripClase" id="nuevoDescripClase" placeholder="Nombre de la Clase" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" style="text-transform: uppercase" maxlength="20" required>

              </div>

            </div>-->

            <!-- ENTRADA PARA LA DURACIÓN DE LA CLASE 

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoDuracion" id="nuevoDuracion" placeholder="hh:mm:ss"  pattern="|^[a-zA-Z]*$|" maxlength="8" required>

              </div>

            </div>

           </div>

         </div>   -->


        <!--=====================================
        PIE DEL MODAL
        ======================================

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Clase</button>

        </div>-->

        <?php

          //$crearClase = new ControladorClases();
          //$crearClase -> ctrCrearClases();

        ?>

<!--
      </form>

    </div>

  </div>

</div>

=====================================
MODAL EDITAR MODALIDAD
======================================

<div id="modalEditarModalidad" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data"> -->

        <!--=====================================
        CABEZA DEL MODAL
        ======================================

        <div class="modal-header" style="background:#f39c12; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Modalidad</h4>

        </div>-->

        <!--=====================================
        CUERPO DEL MODAL
        ======================================

        <div class="modal-body">

          <div class="box-body">

-->
            <!-- ID DE MODALIDAD 

             <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>


                  <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" readonly value="">


                </div>

              </div>-->

            <!-- ENTRADA PARA EL NOMBRE 

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="editarNombre1" id="editarNombre1" value="" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" maxlength="15" required>

              </div>

            </div>-->


        <!--=====================================
        PIE DEL MODAL
        ======================================

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>-->

        <?php

          //$editarUsuario = new ControladorUsuarios();
          //$editarUsuario -> ctrEditarUsuario();

        ?>

     <!-- </form>
      </div>
    </div>
  </div>-->
