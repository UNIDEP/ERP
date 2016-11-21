<?php

  function generarMatricula($clveCar)
  {
    require 'connMySQL.php';

    // Obtenemos el año que seran los primeros cuatro digitos de la matricula
    $year = date("Y");

    // Se obtiene el id del ultimo alumno registrado en X carrera
    $countAlumno = mysqli_query($conn,"SELECT COUNT(*) FROM estudiante WHERE clve_car=$clveCar");
    // De ser menor a 10 se agrega un cero antes del valor
    $countMe = $countAlumno + 1;
    if ($countMe < 10) {
      $countMe = "0".$countMe;
    }

    // Se obtiene el numero de registros de la tabla carrera
    // se usaran para formar parte de la matricula
    $idCar = mysqli_query($conn,"SELECT id FROM carrera WHERE clve_car=$clveCar");
    // De ser menor a 10 se agrega un cero antes del valor
    if ($idCar < 10) {
     $idCar = "0".$idCar;
   }

    // Concatenar todos los resultados en matricula
    $matricula = $year.$idCar.$countMe;

    return $matricula;
  }

 ?>
