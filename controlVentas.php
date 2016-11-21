<?php include('header.php') ?>
<section class="container">
	<section class="main">
			<div class="panel panel-primary" id="panelWrap">
				<div class="panel-heading">
						<h1><center>CONTROL DE VENTAS</center></h1>
				</div>
				<div class="panelContent">
					<span class="panelItems">
              <?php
              $servername ="localhost";
              $username   ="root";
              $pass       ="";
              $bdname     ="bd_unidep";

              $conn = new mysqli($servername,$username,$pass,$bdname);
              //chek
              if($conn->connect_error){
                die("Connection failed: " - $conn->connect_error);
              }
              $sql = "SELECT kardex,horario,carta,boleta FROM ventas";
              $result = $conn->query($sql);
               $conn->close();
              if ($result->num_rows > 0)
                  while($row = $result->fetch_assoc()) {
                      $kardex = $row["kardex"];
                      $horario = $row["horario"];
                      $carta = $row["carta"];
										  $boleta =$row["boleta"];
              }
							ECHO "PRECIO KARDEX <br>
							<input disabled type='text' id='kardex' value=".$kardex." ><br>
							<button class='btn btn-main' id='eKardex'>EDITAR</button><br>";
							ECHO "PRECIO HORARIO<br>
							<input disabled type='text' value=".$horario."><br>
							<input type='button' class='btn btn-main' id='eHorario' value='EDITAR'><br>";
							ECHO "PRECIO CARTA ESTUDIANTE<br>
							<input disabled type='text' value=".$carta."><br>
							<input type='button' class='btn btn-main' id='eCarta' value='EDITAR'><br>";
							ECHO "PRECIO BOLETA<br>
							<input disabled  type='text' value=".$boleta."><br>
							<input type='button' class='btn btn-main' id='eBolata' value='EDITAR'><br>";

              ?>

<!-- Código Para habilitar el boton editar (Nunca funciono)
		<script>
		$().ready(function() {


		    $('#eKardex').click(function() {
		        $('kardex').each(function() {
		            if ($(kardex).attr('disabled')) {
		                $(kardex).removeAttr('disabled');
		            }
		            else {
		                $(kardex).attr({
		                    'disabled': 'disabled'
		                });
		            }
		        });
		    });
		});
-->
		</script>
					</span>
        </div>
      </div>
		</section>
	</section>
<?php include('footer.php') ?>
