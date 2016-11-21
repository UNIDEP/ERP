<?php include('header.php') ?>
<body>
	<div class="container">
		<!--Tag de Formulario del alumno, se dirige a resumenAlumnoAlta.php mediante POST, clase altaAlumno en estilo.css-->
		<form class="altaAlumno" action="resumenAlumno.php" method="post" enctype="multipart/form-data">
			<!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
			<div class="panel panel-primary" id="panelWrap">
				<!--Titlo en el formulario de bootstrap-->
				<div class="panel-heading">
					<h3 class="panel-title">INFORMACION DEL ALUMNO</h3>
				</div>
					<!--El contenido del formulario se separa por esta div de boostrap-->
					<div class="panelContent">
						<span class="panelItems">
							<!-- Fila 1 -->
							<div class="row">
								<!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
								<!-- Apellido Paterno -->
			  				<div class="col-xs-4">
									<label for="ap">Apellido Paterno</label>
									<!--Efecto mediante bootstrap.css de la clase form-control -->
			    				<input type="text" id="ap" class="form-control" name="aPaterno" required>
			  				</div>
								<!-- Apellido Materno -->
								<div class="col-xs-4">
									<label for="am">Apellido Materno</label>
				    			<input type="text" id="am" class="form-control" name="aMaterno" required>
				  			</div>
								<!-- Nombre -->
				  			<div class="col-xs-4">
									<label for="nombre">Nombre(s)</label>
				    			<input type="text" id="nombre" class="form-control" name="nombre" required>
				  			</div>
							</div>
							<!-- Fila 2 -->
							<div class="row">
								<!-- Fecha de nacimiento -->
			  				<div class="col-md-4">
									<label for="fNac">Fecha de Nacimeinto</label>
									<input type="text" class="form-control" placeholder="DD-MM-AAAA" id="fNac" name="fNac" required>
								</div>
									<!-- Edad -->
								<div class="col-md-1">
									<label for="edad">Edad</label>
									<input id="edad" type="text" name="edad" class="form-control" required>
								</div>
									<!-- Estado Civil -->
								<div class="col-md-3">
									<label for="edoCivil">Estado Civil</label>
									<select class="form-control" id="edoCivil" name="edoCivil">
										<option></option>
										<option value="u/l">Union Libre</option>
										<option value="casado">Casado</option>
										<option value="soltero">Soltero</option>
										<option value="viudo">Viudo</option>
									</select>
								</div>
									<!-- CURP -->
							  <div class="col-xs-4">
									<label for="curp">CURP</label>
				  				<input id="curp" type="text" class="form-control"name="curp">
				  			</div>
							</div>
							<!-- Fila 3 -->
							<div class="row">
								<!-- Telefono -->
								<div class="col-xs-4">
									<label for="tel">Telefono</label>
				    			<input id="tel" name="tel" type="text" class="form-control" placeholder="ej. 6621234444" required>
				  			</div>
								<!-- Celular -->
				  			<div class="col-xs-4">
									<label for="cel">Celular</label>
				  				<input id="cel" name="cel" type="text" class="form-control" placeholder="ej. 6621234444" required>
				  			</div>
								<!-- Correo -->
				  			<div class="col-xs-4">
									<label for="email">Correo</label>
				    			<input id="email" name="correo" type="email" class="form-control" placeholder="ej. abcd@gmail.com" required>
			  				</div>
							</div>
							<!-- Fila 4 -->
							<div class="row">
								<!-- Calle -->
								<div class="col-xs-4">
									<label for="calle">Calle</label>
									<input id="calle" name="calle" type="text" class="form-control">
								</div>
								<!-- Número exterior -->
								<div class="col-md-1">
									<label for="nExt">N.Ext</label>
									<input id="nExt" name="nExt" type="text" class="form-control">
								</div>
								<!-- Número Interior -->
								<div class="col-md-1">
									<label for="nInt">N.Int</label>
									<input id="nInt" type="text" name="nInt" class="form-control">
								</div>
								<!-- Colonia -->
								<div class="col-md-2">
									<label for="col">Colonia</label>
									<input id="col" type="text" name="col" class="form-control">
								</div>
								<!-- Ciudad -->
								<div class="col-md-4">
									<label for="cdad">Ciudad</label>
									<input id="cdad" type="text" name="cdad" class="form-control">
								</div>
							</div>
							<!-- Fila 5 -->
							<div class="row">
								<!-- Ciudad de nacimiento -->
								<div class="col-md-4">
									<label for="cdadNac">Ciudad de nacimiento</label>
									<input id="cdadNac" type="text" name="cdadNac" class="form-control">
								</div>
								<!-- Estado de nacimiento -->
								<div class="col-md-4">
									<label for="edoNac">Estado de nacimiento</label>
									<input id="edoNac" type="text" name="edoNac" class="form-control">
								</div>
								<!-- Pais de nacimiento -->
								<div class="col-md-4">
									<label for="paisNac">Pais de nacimiento</label>
									<input id="paisNac" type="text" name="paisNac" class="form-control">
								</div>
							</div>
							<!-- Fila 6 -->
							<div class="row">
								<!-- Escuela de procedencia -->
								<div class="col-md-4">
									<label for="escProc">Escuela de procedencia</label>
									<input id="escProc" type="text" name="escProc" class="form-control" required>
									</select>
								</div>
								<!-- Especialidad -->
								<div class="col-md-4">
									<label for="esp">Especialidad</label>
									<input id="esp" type="text" name="esp" class="form-control" required>
								</div>
								<!-- Fecha de egreso -->
								<div class="col-md-3">
									<label for="fEgreso">Fecha Egreso</label>
									<input id="fEgreso" type="text" name="fEgreso" class="form-control" placeholder="DD-MM-AAAA"required>
								</div>
								<!-- Espacio -->
								<div class="col-md-1">
								</div>
								<!-- Promedio -->
								<div class="col-md-1">
									<label for="prom">Prom.</label>
									<input id="prom" type="text" name="prom" class="form-control" required>
								</div>
							</div>
						</span>
					</div>
				<!-- Segunda sección de formulario -->
				<div class="panel-heading">
					<h3 class="panel-title">SOLICITUD DE ESTUDIOS</h3>
				</div>
					<div class="panelContent">
						<span class="panelItems">
							<!-- Fila 7 -->
							<div class="row">
								<!-- Campus -->
								<div class="col-md-4">
									<label for="campus">Campus</label>
									<select id="campus" class="form-control" name="campus">
										<option></option>
										<option value="Hermosillo">Hermosillo</option>
										<option value="Caborca">Caborca</option>
										<option value="Aguascalientes">Aguascalientes</option>
									</select>
								</div>
								<!-- Carrera -->
								<div class="col-md-4">
									<label for="carrera">Carrera</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_car, nom_car FROM carrera");

									  echo "<select class='form-control' id='carrera' name='carrera'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_car'].">".$row['clve_car']." - ".$row['nom_car']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>
								<!-- Beca -->
								<div class="col-md-1">
									<label for="beca">Beca</label>
									<input id="beca" type="text" name="beca" class="form-control">
								</div>
								<!-- Grado -->
								<div class="col-md-1">
									<label for="grado">Grado</label>
									<select id="grado" class="form-control" name="grado">
										<option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
									</select>
								</div>
								<!-- Asignaturas -->
								<div class="col-md-1">
									<label for="numMat">Asignaturas</label>
									<select id="numMat" class="form-control" name="numMat">
									  <option></option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select>
								</div>
							</div>
							<!-- Fila 8 -->
							<div class="row">
								<div class="col-md-8">
									<label>Seleccione las materias a cursar:</label>
								</div>
							</div>
							<!-- Fila 9 -->
							<div class="row">
								<div class="col-md-3">
									<label for="mat1">Clase 1</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_clase, nom_mat FROM clases");

									  echo "<select class='form-control' id='clase1' name='clase1'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_clase'].">".$row['nom_mat']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>

								<div class="col-md-3">
									<label for="mat2">Clase 2</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_clase, nom_mat FROM clases");

									  echo "<select class='form-control' id='clase2' name='clase2'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_clase'].">".$row['nom_mat']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>

								<div class="col-md-3">
									<label for="mat3">Clase 3</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_clase, nom_mat FROM clases");

									  echo "<select class='form-control' id='clase3' name='clase3'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_clase'].">".$row['nom_mat']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>

								<div class="col-md-3">
									<label for="mat4">Clase 4</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_clase, nom_mat FROM clases");

									  echo "<select class='form-control' id='clase4' name='clase4'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_clase'].">".$row['nom_mat']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>
							</div>
							<!-- Fila 14 -->
							<div class="row">
								<div class="col-md-3">
									<label for="mat5">Clase 5</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_clase, nom_mat FROM clases");

									  echo "<select class='form-control' id='clase5' name='clase5'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_clase'].">".$row['nom_mat']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>

								<div class="col-md-3">
									<label for="mat6">Clase 6</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_clase, nom_mat FROM clases");

									  echo "<select class='form-control' id='clase6' name='clase6'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_clase'].">".$row['nom_mat']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>

								<div class="col-md-3">
									<label for="mat7">Clase 7</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_clase, nom_mat FROM clases");

									  echo "<select class='form-control' id='clase7' name='clase7'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_clase'].">".$row['nom_mat']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>

								<div class="col-md-3">
									<label for="mat8">Clase 8</label>
									<?php

									  require('connMySQL.php');

									  $result = mysqli_query($conn, "SELECT clve_clase, nom_mat FROM clases");

									  echo "<select class='form-control' id='clase8' name='clase8'>";
									  echo "<option value='N/A'></option>";
									  while ($row = mysqli_fetch_array($result)) {
									    echo "<option value=".$row['clve_clase'].">".$row['nom_mat']."</option>";
									  }
									  echo "</select>";

									   ?>
								</div>
							</div>
							<!-- Fila 15 -->
							<div class="row">
								<div class="col-md-3">
									<!-- Mensualidad -->
									<label for="pago">Mensualidad</label>
									<input id="pago" type="text" name="pago" class="form-control" placeholder="$" required>
								</div>
							</div>
						</span>
					</div>

					<div class="panel-heading">
						<h3 class="panel-title">INFORMACION ADICIONAL</h3>
					</div>
						<div class="panelContent">
							<span class="panelItems">
								<!-- Fila 16 -->
								<div class="row">
									<div class="col-md-4">
										<label for="cntoEm">Contacto de emergencia</label>
										<input id="cntoEm" type="text" name="cntoEm" class="form-control" required>
									</div>

									<div class="col-md-4">
										<label for="prstcoEm">Parentesco</label>
										<input id="prstcoEm" type="text" name="prstcoEm" class="form-control" required>
									</div>

									<div class="col-md-4">
										<label for="telEm">Telefono de emergencia</label>
										<input id="telEm" type="text" name="telEm" class="form-control" placeholder="ej. 6623456789" required>
									</div>
								</div>
								<!-- Fila 17 -->
								<div class="row">
									<div class="col-md-4">
										<label for="seg">Seguro</label>
										<input id="seg" type="text" name="seg" class="form-control">
									</div>
								</div>
								<!-- Fila 18 -->
								<div class="row">
									<div class="col-md-6">
										<label for="enfs">Alergias/Enfermedades</label>
										<textarea id="enfs" name="alrgEnf" class="form-control" rows="10"></textarea>
									</div>

									<div class="col-md-6">
										<label for="obs">Observaciones</label>
										<textarea id="obs" name="obs" class="form-control" rows="10"></textarea>
									</div>
								</div>
							</span>
						</div>
						<a href="resumenAlumno.php">
							<button type="submit" class="btn btn-success">Vista Previa</button>
						</a>
						<button type="button" class="btn btn-danger">Cancelar</button>
			</div>
		</form>
	</div>


	<?php include('footer.php') ?>
