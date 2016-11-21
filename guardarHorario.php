<?php
  // Se inicia la session para recuperar las variables
  session_start();
  // Redirrecionamiento de pagina a los 5 segundos
  header("refresh:5;url=logistica.php")

 ?>

<?php include 'header.php'; ?>

<?php

  require 'connMySQL.php';

  $clveHora = $_SESSION['clveHora'];
  $horaIn = $_SESSION['horaIn'];
  $horaOut = $_SESSION['horaOut'];

  $sql = "INSERT INTO horario(clve_hora, hora_in, hora_out)
  VALUES('$clveHora', '$horaIn', '$horaOut')";

  // Verificar si el query fue exitoso
  if ($conn->query($sql) === TRUE){
    echo "Registrado Correctamente!";
    echo "<br>";
    echo "Redireccionando en 5 segundos.";
  }else{
    echo "Error: ".$sql."<br>".$conn->error;
  }
  // Remover las variables de la session
  session_unset();
  // Desruir la session
  session_destroy();

 ?>

<?php include 'footer.php'; ?>
