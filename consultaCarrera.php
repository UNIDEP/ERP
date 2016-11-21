<?php include 'header.php'; ?>

<div class="panel panel-primary" id="panelWrap">
  <div class="panel-heading">
    <h3 class="panel-title">Carreras</h3>
  </div>
  <div class="panelContent">

    <div class="col-md-4">
      <label for="search">Busqueda</label>
      <input type="text" name="search" id="search" class="form-control">
    </div>
    
    <?php

      require 'connMySQL.php';

      $result = mysqli_query($conn, "SELECT clve_car, nom_car, periodos FROM carrera");

            echo "<table class='table table-striped'>";

              echo "<thead>";
                echo "<th>";
                  echo "Clave de Carrera";
                echo "</th>";
                echo "<th>";
                  echo "Nombre de Carrera";
                echo "</th>";
                echo "<th>";
                  echo "Periodos";
                echo "</th>";
              echo "</thead>";

              echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$row['clve_car']."</td>";
                  echo "<td>".$row['nom_car']."</td>";
                  echo "<td>".$row['periodos']."</td>";
                  echo "</tr>";
                }
              echo "</tbody>";

            echo "</table>";

       ?>
  </div>
</div>

<?php include 'footer.php'; ?>
