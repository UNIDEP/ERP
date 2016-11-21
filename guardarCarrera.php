<?php
  // Se inicia la session para recuperar las variables
  session_start();
  // Redirrecionamiento de pagina a los 5 segundos
  header("refresh:5;url=logistica.php")

 ?>

<?php include 'header.php'; ?>

<?php

  require 'connMySQL.php';

  $clveCar = $_SESSION['clveCar'];
  $nomCar = $_SESSION['nomCar'];
  $periodos = $_SESSION['periodos'];

  $sql = "INSERT INTO carrera(clve_car, nom_car, periodos)
  VALUES('$clveCar', '$nomCar', '$periodos')";
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
