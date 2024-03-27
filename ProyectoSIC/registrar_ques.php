<?php
session_start();

if (!isset($_SESSION["Usuario"])) {
  header("Location: login_docentes.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="../ProyectoSIC/css/sidebars.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-grid.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-grid.rtl.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-grid.rtl.min.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-reboot.rtl.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-reboot.rtl.min.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-utilities.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-utilities.min.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-utilities.rtl.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-utilities.rtl.min.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap.min.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap.rtl.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-grid.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-grid.rtl.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-grid.rtl.min.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-reboot.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-reboot.min.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-reboot.rtl.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-reboot.rtl.min.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-utilities.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-utilities.min.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-utilities.rtl.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap-utilities.rtl.min.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap.min.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap.rtl.css.map">
  <link rel="stylesheet" href="../ProyectoSIC/css/bootstrap.rtl.min.css.map">
</head>

<body>
  <div class="container"> 
    <div class="row">
      <div class="col-4">
        <!--Inicio de barra lateral-->
        <div class="position-absolute top-0 start-0">
          <div class="flex-shrink-0 p-3" style="width: 280px;">
          <h5>Para regresar es necesario completar el registro de preguntas</h5>
        </div>
      </div>
    </div>
    <div class="col-6">
      <!--Inicio de contenido-->
      <!--add quiz step2 start-->
      <div class="row">
        <center>
          <br><br>
          <h3><b>Ingrese los detalles de las pregunta</b></h3>
          <?php
          echo'
          <div class="col-md-6">
            <form class="form-horizontal" action="registrar_ques2.php?n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4" method="POST">
              <fieldset>';
              for($i=1;$i<=@$_GET['n'];$i++) {
                echo '<b>Pregunta número &nbsp;'.$i.'&nbsp;:</b>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="qns'.$i.'"></label>
                  <div class="col-md-12">
                    <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Ingrese la pregunta número '.$i.' aquí"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="'.$i.'1"></label>
                  <div class="col-md-12">
                    <input id="'.$i.'1" name="'.$i.'1" placeholder="Ingresa la opción a" class="form-control input-md" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="'.$i.'2"></label>
                  <div class="col-md-12">
                    <input id="'.$i.'2" name="'.$i.'2" placeholder="Ingresa la opción b" class="form-control input-md" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="'.$i.'3"></label>
                  <div class="col-md-12">
                    <input id="'.$i.'3" name="'.$i.'3" placeholder="Ingresa la opción c" class="form-control input-md" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12 control-label" for="'.$i.'4"></label>
                  <div class="col-md-12">
                    <input id="'.$i.'4" name="'.$i.'4" placeholder="Ingresa la opción d" class="form-control input-md" type="text">
                  </div>
                </div>
                <br>
                <b>Elige la respuesta correcta</b>:
                <br> <br>
                <select id="ans'.$i.'" name="ans'.$i.'" placeholder="Elige la respuesta correcta" class="form-control input-md">
                  <option value="a">opcion a</option>
                  <option value="b">opcion b</option>
                  <option value="c">opcion c</option>
                  <option value="d">opcion d</option>
                </select><br>';
              }echo '
              <div class="form-group" align="center">
                <label class="col-md-12 control-label" for=""></label>
                <div class="col-md-12"> 
                  <input type="submit" class="btn btn-primary" value="Enviar"/>
                </div>
              </div>';
              ?>
              </fieldset>
            </form>
          </div>
        </center>
      </div>
      <!--add quiz step 2 end-->
      <!--Fin de contenido-->
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="../ProyectoSIC/js/bootstrap.bundle.js"></script>
<script src="../ProyectoSIC/js/bootstrap.bundle.min.js"></script>
<script src="../ProyectoSIC/js/bootstrap.esm.js"></script>
<script src="../ProyectoSIC/js/bootstrap.esm.min.js"></script>
<script src="../ProyectoSIC/js/bootstrap.js"></script>
<script src="../ProyectoSIC/js/bootstrap.min.js"></script>
<script src="../ProyectoSIC/js/bootstrap.bundle.js.map"></script>
<script src="../ProyectoSIC/js/bootstrap.bundle.min.js.map"></script>
<script src="../ProyectoSIC/js/bootstrap.esm.js.map"></script>
<script src="../ProyectoSIC/js/bootstrap.esm.min.js.map"></script>
<script src="../ProyectoSIC/js/bootstrap.js.map"></script>
<script src="../ProyectoSIC/js/bootstrap.min.js.map"></script>

</html>