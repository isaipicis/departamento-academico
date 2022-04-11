<?php

ob_start();
session_start();
//Evaluamos si el usuario ha iniciado sesión si no está vacia la variables de sesión
//nombre indica que el usuario ha iniciado sesión
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../index.php");
}

else
{
require 'header.php';

?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Director de escuela <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Codigo</th>
                            <th>DNI</th>
                            <th>Docente</th>
                            <th>Curso</th>
                            <th>Ciclo</th>
                            <th>Seccion</th>
                            <th>Creditos</th>
                            <th>Condición</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Codigo:</label>
                            <input type="hidden" name="idestudiante" id="idestudiante">
                            <input type="text" class="form-control" name="codigo" id="codigo" maxlength="20" placeholder="Codigo" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>DNI:</label>
                            <input type="text" class="form-control" name="dni" id="dni" maxlength="8" placeholder="DNI" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Docente:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Docente" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Curso:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Curso" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Ciclo:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" maxlength="50" placeholder="Ciclo" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Seccion:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" maxlength="15" placeholder="Seccion" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Creditos:</label>
                            <input type="email" class="form-control" name="email" id="email" maxlength="50" placeholder="Creditos">
                          </div>
                             <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php

require 'footer.php';
?>
<script type="text/javascript" src="scripts/estudiante.js"></script>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siEstudiantes').addClass("active");
</script>




