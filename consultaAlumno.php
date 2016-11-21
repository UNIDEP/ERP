<?php include 'header.php'; ?>

<div class="panel panel-primary" id="panelWrap">
  <div class="panel-heading">
    <h3 class="panel-title">Alumnos</h3>
  </div>
  <div class="panelContent">

    <div class="col-md-4">
      <label for="search">Busqueda</label>
      <input type="text" name="search" id="search" class="form-control">
    </div>

    <?php

      require 'connMySQL.php';

      $result = mysqli_query($conn, "SELECT matricula, ap, am, nombre, tel, cel, correo, carrera, ctco_em, tel_em FROM estudiante");

            echo "<table class='table table-striped' id='consulta'>";

              echo "<thead>";
                echo "<th>";
                  echo "Matricula";
                echo "</th>";
                echo "<th>";
                  echo "Nombre";
                echo "</th>";
                echo "<th>";
                  echo "Celular";
                echo "</th>";
                echo "<th>";
                  echo "Correo";
                echo "</th>";
                echo "<th>";
                  echo "Carrera";
                echo "</th>";
                echo "<th>";
                  echo "Contacto Emergencia";
                echo "</th>";
                echo "<th>";
                  echo "Tel. Emergencia";
                echo "</th>";
              echo "</thead>";

              echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$row['matricula']."</br>";
                  echo "<td>".$row['ap']." ".$row['am']." ".$row['nombre']."</td>";
                  echo "<td>".$row['cel']."</td>";
                  echo "<td>".$row['correo']."</td>";
                  echo "<td>".$row['carrera']."</td>";
                  echo "<td>".$row['ctco_em']."</td>";
                  echo "<td>".$row['tel_em']."</td>";
                  echo "</tr>";
                }
              echo "</tbody>";

            echo "</table>";

       ?>
  </div>
</div>

<script src="js/search.js" type="text/javascript"></script>

<?php include 'footer.php'; ?>
