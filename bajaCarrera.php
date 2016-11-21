<?php include 'header.php'; ?>

<form class="altaAlumno" action="resumenAula.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">ELIMINAR CARRERA</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Clave Letra Edificio -->
            <div class="col-xs-4">
              <label for="carrera">Seleccione Carrera</label>
              <?php

                require('connMySQL.php');

                $result = mysqli_query($conn, "SELECT id, clve_car, nom_car FROM carrera");

                echo "<select class='form-control' id='carrera' name='carrera'>";
                echo "<option value='N/A'></option>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<option value=".$row['id'].">".$row['clve_car']." - ".$row['nom_car']."</option>";
                }
                echo "</select>";

                 ?>
            </div>
          </div>
        </span>
      </div>
    <a href="resumenCarrera.php">
      <button type="submit" class="btn btn-success">Vista Previa</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include 'footer.php'; ?>
