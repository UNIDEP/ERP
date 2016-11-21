<?php
  // Se inicia la session para recuperar las variables
  session_start();
  // Redirrecionamiento de pagina a los 5 segundos
  header("refresh:5;url=logistica.php")

 ?>

<?php include 'header.php'; ?>

<?php

  require('connMySQL.php');

  $ap = $_SESSION['ap'];
  $am = $_SESSION['am'];
  $nombre = $_SESSION['nombre'];
  $fNac = $_SESSION['fNac'];
  $edad = $_SESSION['edad'];
  $edoCivil = $_SESSION['edoCivil'];
  $curp = $_SESSION['curp'];
  $tel = $_SESSION['tel'];
  $cel = $_SESSION['cel'];
  $mail = $_SESSION['correo'];
  $calle = $_SESSION['calle'];
  $nExt = $_SESSION['nExt'];
  $nInt = $_SESSION['nInt'];
  $col = $_SESSION['col'];
  $cdad = $_SESSION['cdad'];
  $cdadNac = $_SESSION['cdadNac'];
  $edoNac = $_SESSION['edoNac'];
  $paisNac = $_SESSION['paisNac'];
  $escProc = $_SESSION['escProc'];
  $esp = $_SESSION['esp'];
  $prom = $_SESSION['prom'];
  $fEgreso = $_SESSION['fEgreso'];
  $campus = $_SESSION['campus'];
  $carrera = $_SESSION['carrera'];
  $beca = $_SESSION['beca'];
  $grado = $_SESSION['grado'];
  $numMat = $_SESSION['numMat'];
  $clase1 = $_SESSION['clase1'];
  $clase2 = $_SESSION['clase2'];
  $clase3 = $_SESSION['clase3'];
  $clase4 = $_SESSION['clase4'];
  $clase5 = $_SESSION['clase5'];
  $clase6 = $_SESSION['clase6'];
  $clase7 = $_SESSION['clase7'];
  $clase8 = $_SESSION['clase8'];
  $mens = $_SESSION['pago'];
  $cntoEm = $_SESSION['cntoEm'];
  $prstcoEm = $_SESSION['prstcoEm'];
  $telEm = $_SESSION['telEm'];
  $seg = $_SESSION['seg'];
  $alrgEnf = $_SESSION['alrgEnf'];
  $obs = $_SESSION['obs'];


  $sql="INSERT INTO estudiante(ap, am, nombre, f_nac, edad, edo_civil, curp, tel, cel, correo, calle, num_ext, num_int, col, cdad, cdad_nac, edo_nac, pais_nac, esc_proc, esp, prom_ant, f_egr,  campus, carrera, beca, grado, asignaturas, clase1, clase2, clase3, clase4, clase5, clase6, clase7, clase8, mensual, ctco_em, par_em, tel_em, seguro, ale_enf, obs)
  VALUES ('$ap', '$am', '$nombre',
  '$fNac', '$edad', '$edoCivil', '$curp',
  '$tel', '$cel', '$mail', '$calle', '$nInt',
  '$nExt', '$col', '$cdad', '$cdadNac', '$edoNac',
  '$paisNac', '$escProc', '$esp', '$prom',
  '$fEgreso', '$campus', '$carrera', '$beca',
  '$grado', '$numMat', '$clase1', '$clase2', '$clase3',
  '$clase4', '$clase5', '$clase6', '$clase7', '$clase8',
  '$mens', '$cntoEm', '$prstcoEm', '$telEm',
  '$seg', '$alrgEnf', '$obs')";

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
