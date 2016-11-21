<?php include 'header.php'; ?>

<div class="panel panel-primary" id="panelWrap">
  <div class="panel-heading">
    <h3 class="panel-title">Horarios</h3>
  </div>
  <div class="panelContent">
    <?php

      require 'connMySQL.php';

      $result = mysqli_query($conn, "SELECT clve_hora, hora_in, hora_out FROM horario");

            echo "<table class='table table-striped'>";

              echo "<thead>";
                echo "<th>";
                  echo "Clave de Horario";
                echo "</th>";
                echo "<th>";
                  echo "Hora de Entrada";
                echo "</th>";
                echo "<th>";
                  echo "Hora de Salida";
                echo "</th>";
              echo "</thead>";

              echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$row['clve_hora']."</td>";
                  echo "<td>".$row['hora_in']."</td>";
                  echo "<td>".$row['hora_out']."</td>";
                  echo "</tr>";
                }
              echo "</tbody>";

            echo "</table>";

       ?>
  </div>
</div>

<?php include 'footer.php'; ?>
