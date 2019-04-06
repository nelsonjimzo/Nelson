<div class="content-wrapper">

  <section class="content-header">
    <h1>      PAGO DE MENSUALIDAD   </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Pagos de Mensualdiad</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">

      <div class="box-body">
       <table class="table table-bordered table-striped dt-responsive tablas">
        <thead>
         <tr>
           <th style="width:10px">#</th>
           <th style="width:10px">Id</th>
           <th style="width:10px">Primer Nombre</th>
           <th style="width:10px">Segundo Nombre</th>
           <th style="width:10px">Primer Apellido</th>
           <th style="width:10px">Segundo Apellido</th>
           <th>Acciones</th>
           </tr>
        </thead>
        <tbody>

        <?php
        $item = null;
        $valor = null;
        $alumnos = ControladorPagomes::ctrMostrarAlumnosPagomes($item, $valor);
       foreach ($alumnos as $key => $value)
       {
         echo ' <tr>
                 <td>'.($key+1).'</td>
                 <td>'.$value["Id_Alumno"].'</td>
                 <td>'.$value["PrimerNombre"].'</td>
                 <td>'.$value["SegundoNombre"].'</td>
                 <td>'.$value["PrimerApellido"].'</td>
                 <td>'.$value["SegundoApellido"].'</td>
                     ';
                 echo '  <td>
                    <div class="btn-group">
                    <button class= "btn btn-warning btnAgregarPagoMensual" idAlumno= "'.$value["Id_Alumno"].'" data-toggle=  "modal" data-target=  "#modalPagoMensual"><i class="fa fa-money"></i></button>
                    <button class=    "btn btn-danger btnEliminarAlumno" idAlumno= "'.$value["Id_Alumno"].'"><i class= "fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>';
        }
        ?>

        </tbody>
       </table>
      </div>

    </div>
  </section>
</div>



<?php
//include 'matricula1.php';
 ?>

<!--=====================================
MODAL EDITAR ALUMNO
======================================-->
<div id="modalPagoMensual" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        <div class="modal-header" style="background:#f39c12; color:white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Pago Mensual</h4>
        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          <div class="box-body">

<!-- (4-id Alumno) ENTRADA PARA EL ID ALUMNO -->
            <div class="form-group">
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-id-badge"></i></span>
                   <input type="text" class="form-control input-lg" id="editarAlumno" name="editarAlumno" readonly value="">
                </div>
             </div>

<!-- (2) ENTRADA PARA EL PRIMER NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="editarNombre1" id="editarNombre1" value=""  style="text-transform: uppercase" readonly value="">
              </div>
            </div>

<!-- (4) ENTRADA PARA EL PRIMER APELLIDO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="editarApellido1" id="editarApellido1" value="" style="text-transform: uppercase" readonly value="">
              </div>
            </div>


<!-- () ENTRADA PARA EL DESCUENTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-money"></i></span>

                <select class="form-control input-lg" name="nuevoDescuento">

                  <option value="">Seleccionar Tipo de descuento</option>

                  <?php

                  $descuento = ControladorAlumnos::ctrCargarSelectDescuento();
                  foreach ($descuento as $key => $value) {
                    echo "<option value='".$value['Id_Descuento']."'>".$value['Descuento']."</option>";
                  }
                  ?>

                </select>

              </div>

            </div>

<!-- ENTRADA PARA EL VALOR A COBRAR -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input  type="text"
                        class="form-control input-lg"
                        name="nuevoCobroMensual"
                        id="nuevoCobroMensual"
                        value=""
                        onChange="multiplicar();"
                        placeholder="800">

                </div>
            </div>

<!--(2 - MontoTotal) ENTRADA PARA EL VALOR A COBRAR -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-square"></i></span>
                <input  type="text"
                        class="form-control input-lg"
                        name="2nuevoCobroMensual"
                        id="2nuevoCobroMensual"
                        value="" >
                <script src="http://code.jquery.com/jquery-1.0.4.js"></script>
                <script>
                        function multiplicar()
                        {
                          m1 = document.getElementById("2nuevoDescuento").value;
                          m2 = document.getElementById("nuevoCobroMensual").value;
                          r = m2-(m2*m1);
                          document.getElementById("2nuevoCobroMensual").value = r;
                        }
                  </script>
              </div>
            </div>


<!--(3 - Mes Pago) ENTRADA PARA EL MES A COBRAR -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                 <select class="form-control input-lg" name="mesesapagar" id="mesesapagar"">
                  <option value="Enero"       > Enero    </option>
                  <option value="Febrero"     > Febrero   </option>
                  <option value="Marzo"       > Marzo     </option>
                  <option value="Abril"       > Abril     </option>
                  <option value="Mayo"        > Mayo      </option>
                  <option value="Junio"       > Junio     </option>
                  <option value="Julio"       > Julio     </option>
                  <option value="Agosto"      > Agosto    </option>
                  <option value="Septiembre"  > Septiembre</option>
                  <option value="Octubre"     > Octubre   </option>
                  <option value="Noviembre"   > Noviembre </option>
                  <option value="Diciembre"   > Diciembre </option>
                </select>
              </div>
            </div>

<!--(5 - Id_cobro matricula) ENTRADA PARA ID COBRO -->
            <div class="form-group">
              <div class="input-group">
                <?php

                $i = null;
                $v = null;
                $a = ControladorPagomes::ctrCargarMatricula($i, $v);
                  foreach ($a as $key => $val)
               {        $a = $val["Id_cobro"];            }
                var_dump($a);
                ?>
                <input type="text" class="form-control input-lg" name="idcobromatri" id="idcobromatri"
                value="<?php echo $a; ?>"  placeholder="intro id cobro">
              </div>
            </div>
<!--(6 - Id_precio) ENTRADA PARA EL ID PRECIO -->
            <div class="form-group">
              <div class="input-group">
                 <?php
                $ip = null;
                $vp = null;
                $ap = ControladorPagomes::ctrCargarPrecio($ip, $vp);
                  foreach ($ap as $key => $valp)
                 {        $ap = $valp[0];            }
                ?>
                <input type="text" class="form-control input-lg" name="regidprecio" id="regidprecio" value="<?php echo $ap; ?>"  placeholder="intro id precio">
              </div>
            </div>

<!--(7 - Id_Estado) ENTRADA PARA EL ESTADO DEL PAGO-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <select
                  class=  "form-control input-lg"
                  name=   "regidestado"  >
                  <option value="">Seleccionar nuevo estado</option>
                    <?php
                    $ie = null;
                    $ve = null;
                    $ae = ControladorPagomes::ctrCargarEstadoPago($ie, $ve);
                      foreach ($ae as $key => $vale)
                     {  echo
                        "<option  id=     'regidestado'
                                  name=   'regidestado'
                                  value=  '".$vale['Id_Estado']."' >".$vale['Descripcion']. "</option>";
                      }
                  ?>
                </select>
              </div>
            </div>

<!--(8 - Id_Matricula) ENTRADA PARA EL ID_Matricula -->
            <div class="form-group">
              <div class="input-group">
                <?php
                $im = null;
                $vm = null;
                $am = ControladorPagomes::ctrCargarMatriculado($im, $vm);
                  foreach ($am as $key => $valm)
                 {        $am = $valm['Id_Matricula'];            }
                ?>
                <input type="text" class="form-control input-lg" name="regidmatri" id="regidmatri" value="<?php echo $am; ?>"  placeholder="intro id matricula">
              </div>
            </div>

<!-- (1 - Id_descuento) ENTRADA PARA EL DESCUENTO -->
             <div class="form-group">
              <div class="input-group">
                <?php
                $id = null;
                $vd = null;
                $ad = ControladorPagomes::ctrCargarSelectDescuento($id, $vd);
                  foreach ($ad as $key => $vald)
                 {        $ad = $vald['Id_Descuento'];            }
                ?>
                <input type="text" class="form-control input-lg" name="regiddesc" id="regiddesc" value="<?php echo $ad; ?>"  placeholder="intro id descuento">
              </div>
            </div>


 </div>
</div>

<!--=====================================        PIE DEL MODAL       ======================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Agregar pago (Modificar Alumno)</button>
        </div>
        <?php
          //$editarAlumno = new ControladorPagomes();
          //$editarAlumno -> ctrEditarPagomes();
          $editarAlumno = new ControladorPagomes();
          $editarAlumno -> ctrIngresoPagomes();

        ?>

      </form>
    </div>
  </div>
</div>


<?php
//  $borrarAlumno = new ControladorAlumnos();
//  $borrarAlumno -> ctrBorrarAlumno();
?>
