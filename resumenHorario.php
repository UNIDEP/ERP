<?php session_start(); ?>

<?php include 'header.php'; ?>

<?php

  require 'connMySQL.php';

  $_SESSION['clveHora'] = $_POST['clveHora'];
  $_SESSION['horaIn'] = $_POST['horaIn'];
  $_SESSION['horaOut'] = $_POST['horaOut'];

 ?>

 <h2 style="text-align:center">Resumen de Información</h2>
 <p style="text-align:center">
   Favor de verificar que la información sea la correcta antes de guardar.
 </p>

<form class="altaAlumno" action="guardarHorario.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACIÓN DE HORARIOS</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Clave Hora -->
            <div class="col-xs-4">
              <label for="clveHora">Clave</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <p>
                <?php echo $_SESSION['clveHora']; ?>
              </p>
            </div>
            <!-- Hora Entrada -->
            <div class="col-xs-4">
              <label for="horaIn">Hora de Entrada</label>
              <p>
                <?php echo $_SESSION['horaIn']; ?>
              </p>
            </div>
            <!-- Hora Salida -->
            <div class="col-xs-4">
              <label for="horaOut">Hora de Salida</label>
              <p>
                <?php echo $_SESSION['horaOut']; ?>
              </p>
            </div>
          </div>
        </span>
      </div>
    <a href="guardarHorario.php">
      <button type="submit" class="btn btn-success">Guardar</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include 'footer.php'; ?>
