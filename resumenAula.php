<?php session_start(); ?>

<?php include'header.php'; ?>

<?php

  require 'connMySQL.php';

  $_SESSION['clveAula'] = $_POST['letra'].$_POST['numero'];
  $_SESSION['letra'] = $_POST['letra'];
  $_SESSION['numero'] = $_POST['numero'];

 ?>

<form class="altaAlumno" action="guardarAula.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACIÓN DE AULA</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <div class="col-xs-4">
              <label for="clveAula">Clave de Aula</label>
              <p>
                <?php echo $_SESSION['clveAula']; ?>
              </p>
            </div>
            <!-- Clave Letra Edificio -->
            <div class="col-xs-4">
              <label for="letra">Edificio</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <p>
                <?php echo $_SESSION['letra']; ?>
              </p>
            </div>
            <!-- Numero de salon -->
            <div class="col-xs-4">
              <label for="numero">Numero de Aula</label>
              <p>
                <?php echo $_SESSION['numero']; ?>
              </p>
            </div>
          </div>
        </span>
      </div>
    <a href="guardarAula.php">
      <button type="submit" class="btn btn-success">Guardar</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include 'footer.php'; ?>
