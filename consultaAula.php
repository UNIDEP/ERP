<?php include 'header.php'; ?>

<div class="panel panel-primary" id="panelWrap">
  <div class="panel-heading">
    <h3 class="panel-title">Aulas</h3>
  </div>
  <div class="panelContent">

    <div class="col-md-4">
      <label for="search">Busqueda</label>
      <input type="text" name="search" id="search" class="form-control">
    </div>
    
    <?php

      require 'connMySQL.php';

      $result = mysqli_query($conn, "SELECT clve_aula, letra, numero FROM aula");

            echo "<table class='table table-striped'>";

              echo "<thead>";
                echo "<th>";
                  echo "Clave de Aula";
                echo "</th>";
                echo "<th>";
                  echo "Edificio";
                echo "</th>";
                echo "<th>";
                  echo "Numero de salón";
                echo "</th>";
              echo "</thead>";

              echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$row['clve_aula']."</td>";
                  echo "<td>".$row['letra']."</td>";
                  echo "<td>".$row['numero']."</td>";
                  echo "</tr>";
                }
              echo "</tbody>";

            echo "</table>";

       ?>
  </div>
</div>

<?php include 'footer.php'; ?>
