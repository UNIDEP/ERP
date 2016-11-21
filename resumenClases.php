<?php session_start(); ?>

<?php include 'header.php'; ?>

<?php

  require('connMySQL.php');

  $_SESSION['clveClase'] = $_POST['clveClase'];
  $_SESSION['clveCar'] = $_POST['clveCar'];
  $_SESSION['nomMat'] = $_POST['nomMat'];
  $_SESSION['grado'] = $_POST['grado'];
  $_SESSION['clveHora'] = $_POST['clveHora'];
  $_SESSION['clveAula'] = $_POST['clveAula'];
  $_SESSION['maestro'] = $_POST['maestro'];

 ?>

<h2 style="text-align:center">Resumen de Información</h2>
<p style="text-align:center">
   Favor de verificar que la información sea la correcta antes de guardar.
</p>

<form class="altaAlumno" action="guardarClases.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACIÓN DE CLASE</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Clave Clase -->
            <div class="col-xs-4">
              <label for="clveClase">Clave</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <p>
                <?php echo $_SESSION['clveClase']; ?>
              </p>
            </div>
            <!-- Clave Carrera -->
            <div class="col-xs-4">
              <label for="clveCar">Carrera</label>
              <p>
                <?php echo $_SESSION['clveCar']; ?>
              </p>
            </div>
            <!-- Creditos -->
            <div class="col-xs-4">
              <label for="nomMat">Materia</label>
              <p>
                <?php echo $_SESSION['nomMat']; ?>
              </p>
            </div>
          </div>

          <div class="row">
            <!-- Grado -->
            <div class="col-xs-1">
              <label for="grado">Grado</label>
              <p>
                <?php echo $_SESSION['grado']; ?>
              </p>
            </div>
            <!-- Hora -->
            <div class="col-xs-3">
              <label for="clveHora">Hora</label>
              <p>
                <?php echo $_SESSION['clveHora']; ?>
              </p>
            </div>
            <!-- Aula -->
            <div class="col-xs-2">
              <label for="clveAula">Aula</label>
              <p>
                <?php echo $_SESSION['clveAula']; ?>
              </p>
            </div>
            <!-- Maestro -->
            <div class="col-xs-4">
              <label for="maestro">Maestro</label>
              <p>
                <?php echo $_SESSION['maestro']; ?>
              </p>
            </div>
          </div>
        </span>
      </div>
    <a href="guardarClases.php">
      <button type="submit" class="btn btn-success">Guardar</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include 'footer.php'; ?>
