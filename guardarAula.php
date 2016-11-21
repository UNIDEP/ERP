<?php

  session_start();
  header("refresh:5;url=logistica.php")

 ?>

<?php include 'header.php'; ?>

<?php

  require 'connMySQL.php';

  $clveAula = $_SESSION['clveAula'];
  $letra = $_SESSION['letra'];
  $numero = $_SESSION['numero'];

  $sql = "INSERT INTO aula(clve_aula, letra, numero)
  VALUES('$clveAula', '$letra', '$numero')";

  // Verificar si el query fue exitoso
  if ($conn->query($sql) === TRUE) {
    echo "Registrado Correctamente!";
    echo "<br>";
    echo "Redireccionando en 5 segundos.";
  } else {
    echo "Error: ".$sql."<br>".$conn->error;
  }

  // Remover las variables de la session
  session_unset();
  // Desruir la session
  session_destroy();

 ?>

<?php include 'footer.php'; ?>
