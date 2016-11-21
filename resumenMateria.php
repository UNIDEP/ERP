<?php session_start(); ?>

<?php include 'header.php'; ?>

<?php

  require('connMySQL.php');

  $_SESSION['clveMat'] = $_POST['clveMat'];
  $_SESSION['nomMat'] = $_POST['nomMat'];
  $_SESSION['cred'] = $_POST['cred'];
  $_SESSION['grado'] = $_POST['grado'];
  $_SESSION['serie'] = $_POST['serie'];
  $_SESSION['req'] = $_POST['req'];

?>

<h2 style="text-align:center">Resumen de Información</h2>
<p style="text-align:center">
  Favor de verificar que la información sea la correcta antes de guardar.
</p>

<form class="altaAlumno" action="guardarMateria.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACIÓN DE MATERIA</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Clave Materia -->
            <div class="col-xs-4">
              <label for="clveMat">Clave</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <p>
                <?php echo $_SESSION['clveMat']; ?>
              </p>
            </div>
            <!-- Nombre Materia -->
            <div class="col-xs-4">
              <label for="nomMat">Nombre</label>
              <p>
                <?php echo $_SESSION['nomMat']; ?>
              </p>
            </div>
            <!-- Creditos -->
            <div class="col-xs-1">
              <label for="cred">Creditos</label>
              <p>
                <?php echo $_SESSION['cred']; ?>
              </p>
            </div>
            <!-- Grado -->
            <div class="col-xs-1">
              <label for="grado">Grado</label>
              <p>
                <?php echo $_SESSION['grado'];; ?>
              </p>
            </div>
          </div>
          <div class="row">
            <!-- Seriada -->
            <div class="col-xs-2">
              <label for="serie">Seriada</label>
              <p>
                <?php echo $_SESSION['serie']; ?>
              </p>
            </div>
            <!-- Requisito -->
            <div class="col-xs-2">
              <label for="serie">Requisito</label>
              <p>
                <?php echo $_SESSION['req']; ?>
              </p>
            </div>
          </div>
        </span>
      </div>
    <a href="guardarMateria.php">
      <button type="submit" class="btn btn-success">Guardar</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include 'footer.php'; ?>
