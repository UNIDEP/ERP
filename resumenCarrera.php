<?php session_start(); ?>


<?php include('header.php') ?>

<?php

  require('connMySQL.php');

  $_SESSION['clveCar'] = $_POST['clveCar'];
  $_SESSION['nomCar'] = $_POST['nomCar'];
  $_SESSION['periodos'] = $_POST['periodos'];

?>

<h2 style="text-align:center">Resumen de Información</h2>
<p style="text-align:center">
  Favor de verificar que la información sea la correcta antes de guardar.
</p>

<form class="altaAlumno" action="guardarCarrera.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACIÓN DE CARRERA</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Clave Carrera -->
            <div class="col-xs-4">
              <label for="clveCar">Clave</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <p>
                <?php echo $_SESSION['clveCar']; ?>
              </p>
            </div>
            <!-- Nombre Carrera -->
            <div class="col-xs-4">
              <label for="nomCar">Nombre</label>
              <p>
                <?php echo $_SESSION['nomCar']; ?>
              </p>
            </div>
            <!-- Periodos -->
            <div class="col-xs-3">
              <label for="periodos">Periodos</label>
              <p>
                <?php echo $_SESSION['periodos']; ?>
              </p>
            </div>
          </div>
        </span>
      </div>
    <a href="guardarCarrera.php">
      <button type="submit" class="btn btn-success">Guardar</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include('footer.php') ?>
