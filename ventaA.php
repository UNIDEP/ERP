
<?php include('header.php') ?>
  <script>$('.dropdown-toggle').dropdown() </script>
<body>
	<div class="container">
		<div class="main">
		  <div class="content">
				<center><h3>VENTAS</h3> </center>
					<p>
            <form method="POST" action="ventaA.php" name="registro">
              <center>
                Ingresar Matricula Alumno<br>
                <input type="text" name="clave" maxlength="8">
                <button class="btn btn-primary" action="ventaA.php">ACEPTAR</button>
              </center>
            </form>
          </p>
<?php

          $servername ="localhost";
          $username = "root";
          $password ="";
          $dbname = "bd_unidep";
          //conection
          $conn = new mysqli($servername,$username,$password,$dbname);
          //chek
          if($conn->connect_error){
            die("Connection failed: " - $conn->connect_error);
          }
          $clave = $_POST['clave'];

          $sql = "SELECT ap,am,nombre,carrera FROM estudiante WHERE matricula='$clave'";
          $result = $conn->query($sql);
          $conn->close();
          if($result->num_rows > 0){
          while($row = $result->fetch_assoc()) {
          $ap = $row["ap"];
          $am = $row["am"];
          $nombre = $row["nombre"];
          $carrera = $row["carrera"];
            }
          }
          echo "<CENTER><label>";
        echo "ALUMNO: ".$ap." ".$am." ".$nombre."<br>";
        echo "CARRERA: ".$carrera."<br>";
        echo "MATRICULA: ".$clave;
        echo "</label></center>";
?>
<br>
<p><center><table border="1" widith="45%" class="w3-table w3-border w3-blue"><tr>
  <td><label class="w3-validate">Carta Estudiante  $50 </label>
  <select class="w3-select" name="option">
    <option value="" disabled selected>CANITDAD</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="10">10</option>
  </select></td></tr><tr>
  <td><label class="w3-validate">Boleta Estudiantil $30 </label><select class="w3-select" name="option">
    <option value="" disabled selected>CANITDAD</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="10">10</option></td></tr><tr>
  <td><label class="w3-validate">Kardex Estudiantil $100</label><select class="w3-select" name="option">
    <option value="" disabled selected>CANITDAD</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="10">10</option></td></tr><tr>
  <td><label class="w3-validate">Horario $5</label> <select class="w3-select" name="option">
    <option value="" disabled selected>CANITDAD</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="10">10</option></td></tr></table></ceter>
</p>




<p>
  <left>
    <button onclick="document.getElementById('id01').style.display='block'"
    class="btn-primary">TERMINAR</button>
    <div id="id01" class="w3-modal w3-animate-zoom">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h2>LA VENTA INCLUYE</h2>
    </header>
    <div class="w3-container">
      <p>1 Boleta</p>
      <p>1 Kardex</p>
      <p>1 Horario</p>
      <P>CANTIDAD TOTAL: $155</p>
      <p><select width="200" class="w3-select" name="option">
        <option value="" disabled selected>FORMA DE PAGO </option>
        <option value="1">Tarjeta</option>
        <option value="2">Efectivo</option>
      </select>
      </p>
    </div>
    <footer class="w3-container w3-teal">
      <p><button onclick="document.getElementById('id02').style.display='block'"
      class="btn-danger">PAGAR</button>
      <div id="id02" class="w3-modal w3-animate-zoom">
      <div class="w3-modal-content">
      <header class="w3-container w3-teal w3-red">
        <span onclick="document.getElementById('id02').style.display='none'"
        class="w3-closebtn">&times;</span>
        <h2>PAGRO REALIZADO</h2>
      </header>
      <div class="w3-container">
      <label class="w3-black">PAGO REALIZADO CON EXITO</label>
      </div>
      <footer class="w3-container w3-teal">
        <p>GRACIAS </p>
      </footer>
      </div>
      </div> </p>
    </footer>
  </div>
</div></left>




			</div>
		</div>
	</div>
<?php include('footer.php')  ?>
