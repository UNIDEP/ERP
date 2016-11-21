<?php
  // Se inicia la session para recuperar las variables
  session_start();
  // Redirrecionamiento de pagina a los 5 segundos
  header("refresh:5;url=logistica.php")

 ?>

<?php include 'header.php'; ?>

<?php

  require 'connMySQL.php';

  $clveClase = $_SESSION['clveClase'];
  $clveCar = $_SESSION['clveCar'];
  $nomMat = $_SESSION['nomMat'];
  $grado = $_SESSION['grado'];
  $clveHora = $_SESSION['clveHora'];
  $clveAula = $_SESSION['clveAula'];
  $maestro = $_SESSION['maestro'];

  $sql = "INSERT INTO clases(clve_clase, clve_car, grado, nom_mat, clve_hora, clve_aula, maestro)
  VALUES('$clveClase', '$clveCar', '$grado', '$nomMat',
  '$clveHora', '$clveAula', '$maestro')";
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
