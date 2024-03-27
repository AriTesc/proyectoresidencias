<?php
session_start();

if (!isset($_SESSION["Usuario"])) {
  header("Location: login_alumnos.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumnos</title>
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
          <h5>Regresar: <a href="../ProyectoSIC/sesion_alumno.php"><img class="mb-4" src="../ProyectoSIC/img/Logo TESCo.jpg" alt="" width="100" height="50"></a></h5>
        </div>
      </div>
    </div>
    <div class="col-6">
      <!--Inicio de contenido-->
      <br><br>
      <?php
      include("conexion.php");
      $result = mysqli_query($conexion,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
      echo '
      <div class="panel">
      <div class="table-responsive">
      <table class="table table-striped">
      <tr>
      <td><b>ID</b></td>
      <td><b>Temática</b></td>
      <td><b>Total de Preguntas</b></td>
      <td><b>Marcas</b></td>
      <td><b>Tiempo Límite</b></td>
      <td></td></tr>';
      $c=1;
      while($row = mysqli_fetch_array($result)) {
        $email=$_SESSION['Usuario'];
        $title = $row['title'];
        $total = $row['total'];
        $sahi = $row['sahi'];
        $time = $row['time'];
        $eid = $row['eid'];
        $q12=mysqli_query($conexion,"SELECT score FROM history WHERE eid='$eid'" )or die('Error98');
        $rowcount=mysqli_num_rows($q12);	
        if($rowcount == 0){
            echo '
            <tr>
            <td>'.$c++.'</td>
            <td>'.$title.'</td>
            <td>'.$total.'</td>
            <td>'.$sahi*$total.'</td>
            <td>'.$time.'&nbsp;min</td>
            <td><b><a href="responder_form2.php?eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span><b>Examen</b></span></a></b></td>
            </tr>';
        }else{
            echo '<tr style="color:#99cc32">
            <td>'.$c++.'</td>
            <td>'.$title.'&nbsp;<span title="Este formulario ya está resuelto" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td>'.$total.'</td>
            <td>'.$sahi*$total.'</td>
            <td>'.$time.'&nbsp;min</td>
            </tr>';
        }
    }
    $c=0;
    echo '</table></div></div>';
    ?>
    <!--Fin de contenido-->
    </div>
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