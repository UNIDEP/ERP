<?php include 'header.php'; ?>

<form class="altaAlumno" action="resumenHorario.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACIÓN DE HORARIOS</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Clave Hora -->
            <div class="col-xs-4">
              <label for="clveHora">Clave</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <input type="text" id="clveCar" class="form-control" name="clveHora" required>
            </div>
            <!-- Hora de Entrada -->
            <div class="col-xs-3">
              <label for="horaIn">Hora de entrada</label>
              <input type="text" id="horaIn" class="form-control" name="horaIn" required placeholder="8:00">
            </div>
            <!-- Hora de Salida -->
            <div class="col-xs-3">
              <label for="horaOut">Hora de Salida</label>
              <input type="text" id="horaOut" class="form-control" name="horaOut" placeholder="12:00" required>
            </div>
          </div>
        </span>
      </div>
    <a href="resumenHorario.php">
      <button type="submit" class="btn btn-success">Vista Previa</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include 'footer.php'; ?>
