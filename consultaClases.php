<?php include 'header.php'; ?>

<div class="panel panel-primary" id="panelWrap">
  <div class="panel-heading">
    <h3 class="panel-title">Clases</h3>
  </div>
  <div class="panelContent">

    <div class="col-md-4">
      <label for="search">Busqueda</label>
      <input type="text" name="search" id="search" class="form-control">
    </div>

    <?php

      require 'connMySQL.php';

      $result = mysqli_query($conn, "SELECT clve_clase, clve_car, grado, nom_mat, clve_hora, clve_aula, maestro FROM clases");

            echo "<table class='table table-striped'>";

              echo "<thead>";
                echo "<th>";
                  echo "Clave de Clase";
                echo "</th>";
                echo "<th>";
                  echo "Clave de Carrera";
                echo "</th>";
                echo "<th>";
                  echo "Grado";
                echo "</th>";
                echo "<th>";
                  echo "Materia";
                echo "</th>";
                echo "<th>";
                  echo "Horario";
                echo "</th>";
                echo "<th>";
                  echo "Aula";
                echo "</th>";
                echo "<th>";
                  echo "Maestro(a)";
                echo "</th>";
              echo "</thead>";

              echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$row['clve_clase']."</td>";
                  echo "<td>".$row['clve_car']."</td>";
                  echo "<td>".$row['grado']."</td>";
                  echo "<td>".$row['nom_mat']."</td>";
                  echo "<td>".$row['clve_hora']."</td>";
                  echo "<td>".$row['clve_aula']."</td>";
                  echo "<td>".$row['maestro']."</td>";
                  echo "</tr>";
                }
              echo "</tbody>";

            echo "</table>";

       ?>
  </div>
</div>

<?php include 'footer.php'; ?>
