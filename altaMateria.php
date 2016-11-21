<?php include('header.php') ?>

<form class="altaAlumno" action="resumenMateria.php" method="post">
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
              <input type="text" id="clveMat" class="form-control" name="clveMat" required>
            </div>
            <!-- Nombre Materia -->
            <div class="col-xs-4">
              <label for="nomMat">Nombre</label>
              <input type="text" id="nomMat" class="form-control" name="nomMat" required>
            </div>
            <!-- Creditos -->
            <div class="col-xs-1">
              <label for="cred">Creditos</label>
              <input type="text" id="cred" class="form-control" name="cred" required>
            </div>
            <!-- Grado -->
            <div class="col-xs-1">
              <label for="grado">Grado</label>
              <input type="text" id="grado" name="grado" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <!-- Seriada -->
            <div class="col-xs-2">
              <label for="serie">Seriada</label>
              <select class="form-control" id="serie" name="serie">
                <option value="NO">No</option>
                <option value="SI">Si</option>
              </select>
            </div>
            <!-- Requisito -->
            <div class="col-xs-4">
              <label for="req">Requisito</label>
              <?php

                require('connMySQL.php');

                $result = mysqli_query($conn, "SELECT clve_mat, nom_mat FROM materia");

                echo "<select class='form-control' id='req' name='req'>";
                echo "<option value='N/A'></option>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<option value=".$row['clve_mat'].">".$row['nom_mat']."</option>";
                }
                echo "</select>";

                 ?>
            </div>
          </div>
        </span>
      </div>
    <a href="resumenMateria.php">
      <button type="submit" class="btn btn-success">Vista Previa</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include('footer.php') ?>
