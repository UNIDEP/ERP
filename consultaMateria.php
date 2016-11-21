<?php include 'header.php'; ?>

<div class="panel panel-primary" id="panelWrap">
  <div class="panel-heading">
    <h3 class="panel-title">Materias</h3>
  </div>
  <div class="panelContent">

    <div class="col-md-4">
      <label for="search">Busqueda</label>
      <input type="text" name="search" id="search" class="form-control">
    </div>
    
    <?php

      require 'connMySQL.php';

      $result = mysqli_query($conn, "SELECT clve_mat, nom_mat, creditos, grado, serie, req FROM materia");

            echo "<table class='table table-striped'>";

              echo "<thead>";
                echo "<th>";
                  echo "Clave de Materia";
                echo "</th>";
                echo "<th>";
                  echo "Nombre de Materia";
                echo "</th>";
                echo "<th>";
                  echo "Credtios";
                echo "</th>";
                echo "<th>";
                  echo "Grado";
                echo "</th>";
                echo "<th>";
                  echo "Serie";
                echo "</th>";
                echo "<th>";
                  echo "Requisito";
                echo "</th>";
              echo "</thead>";

              echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$row['clve_mat']."</td>";
                  echo "<td>".$row['nom_mat']."</td>";
                  echo "<td>".$row['creditos']."</td>";
                  echo "<td>".$row['grado']."</td>";
                  echo "<td>".$row['serie']."</td>";
                  echo "<td>".$row['req']."</td>";
                  echo "</tr>";
                }
              echo "</tbody>";

            echo "</table>";

       ?>
  </div>
</div>

<?php include 'footer.php'; ?>
