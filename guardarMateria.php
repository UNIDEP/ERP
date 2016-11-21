<?php
  // Se inicia la session para recuperar las variables
  session_start();
  // Redirrecionamiento de pagina a los 5 segundos
  header("refresh:5;url=logistica.php")

 ?>

 <?php include 'header.php'; ?>

<?php

  require('connMySQL.php');

  $clveMat = $_SESSION['clveMat'];
  $nomMat = $_SESSION['nomMat'];
  $cred = $_SESSION['cred'];
  $grado = $_SESSION['grado'];
  $serie = $_SESSION['serie'];
  $req = $_SESSION['req'];

  $sql = "INSERT INTO materia(clve_mat, nom_mat, creditos, grado, serie, req)
  VALUES('$clveMat', '$nomMat', '$cred', '$grado', '$serie', '$req')";

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
