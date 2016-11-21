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
