<?php include('header.php') ?>

<form class="altaAlumno" action="resumenClases.php" method="post">
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
              <input type="text" id="clveClase" class="form-control" name="clveClase" required>
            </div>
            <!-- Clave Carrera -->
            <div class="col-xs-4">
              <label for="clveCar">Carrera</label>
              <?php

                require('connMySQL.php');

                $result = mysqli_query($conn, "SELECT clve_car, nom_car FROM carrera");

                echo "<select class='form-control' id='clveCar' name='clveCar'>";
                echo "<option value='N/A'></option>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<option value=".$row['clve_car'].">".$row['nom_car']."</option>";
                }
                echo "</select>";

                 ?>
            </div>
            <!-- Creditos -->
            <div class="col-xs-4">
              <label for="nomMat">Materia</label>
              <?php

                require('connMySQL.php');

                $result = mysqli_query($conn, "SELECT clve_mat, nom_mat FROM materia");

                echo "<select class='form-control' id='nomMat' name='nomMat'>";
                echo "<option value='N/A'></option>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<option>".$row['nom_mat']."</option>";
                }
                echo "</select>";

                 ?>
            </div>
          </div>

          <div class="row">
            <!-- Grado -->
            <div class="col-xs-1">
              <label for="grado">Grado</label>
              <select id="grado" class="form-control" name="grado">
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
              </select>
            </div>
            <!-- Hora -->
            <div class="col-xs-3">
              <label for="clveHora">Hora</label>
              <?php

                require('connMySQL.php');

                $result = mysqli_query($conn, "SELECT clve_hora, hora_in, hora_out FROM horario");

                echo "<select class='form-control' id='clveHora' name='clveHora'>";
                echo "<option value='N/A'></option>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<option value=".$row['clve_hora'].">".$row['clve_hora']." - ".$row['hora_in']." - ".$row['hora_out']."</option>";
                }
                echo "</select>";

                 ?>
            </div>
            <!-- Aula -->
            <div class="col-xs-2">
              <label for="clveAula">Aula</label>
              <?php

                require('connMySQL.php');

                $result = mysqli_query($conn, "SELECT clve_aula FROM aula");

                echo "<select class='form-control' id='clveAula' name='clveAula'>";
                echo "<option value='N/A'></option>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<option value=".$row['clve_aula'].">".$row['clve_aula']."</option>";
                }
                echo "</select>";

                 ?>
            </div>
            <!-- Maestro -->
            <div class="col-xs-4">
              <label for="maestro">Maestro</label>
              <input type="text" name="maestro" id="maestro" class="form-control" required>
            </div>
          </div>
        </span>
      </div>
    <a href="resumenClases.php">
      <button type="submit" class="btn btn-success">Vista Previa</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include('footer.php') ?>
