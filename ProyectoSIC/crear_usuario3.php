<?php
session_start();

if (!isset($_SESSION["Email"])) {
  header("Location: login_admins.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

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
            <a href="../ProyectoSIC/sesion_admin.php"><img class="mb-4" src="../ProyectoSIC/img/Logo TESCo.jpg" alt="" width="100" height="50"></a>
            <h4>Para regresar al inicio, dar clic en la imagen</h4>
          </div>
        </div>
        <!--Fin de barra lateral-->
      </div>
      <div class="col-6">
        <!--Inicio de formulario-->
        <main class="form-signin w-100 m-auto">
          <form action="crear_usuarioAdmin.php" method="POST">
            <center>
              <h1 class="h3 mb-3 fw-normal">Registro de administradores</h1>
              <?php if (isset($_GET['error'])) { ?>
                <br> <p class="error"> <?php echo $_GET['error']; ?> </p> <br>
              <?php } ?>
              <?php if (isset($_GET['success'])) { ?>
                <br> <p class="success"> <?php echo $_GET['success']; ?> </p> <br>
              <?php } ?>
            </center>
            <div class="form-floating">
              <input type="text" name="Email" class="form-control" id="floatingInput" placeholder="Usuario">
              <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
              <input type="text" name="Nombre_Completo" class="form-control" id="floatingInput" placeholder="Apellidos Nombre(s)">
              <label for="floatingInput">Nombre Completo</label>
            </div>
            <div class="form-floating">
              <input type="password" name="Contrasenia" class="form-control" id="floatingPassword" placeholder="Contra">
              <label for="floatingPassword">Contraseña</label>
            </div>
            <button class="btn btn-success w-100 py-2" type="submit">Registrar</button>
          </form>
          <!--Fin de formulario-->
          <br>
          <br>
          <!--Inicio tabla-->
          <table class="table table-striped table-hover">
          <tr>
            <th>Usuario</th>
            <th>Nombre completo</th>
          </tr>
          <?php
          include('conexion.php');
          $consulta="SELECT * FROM administrador";
          $registro=mysqli_query($conexion,$consulta);
          while ($fila = mysqli_fetch_array($registro)) {
            echo '<tr>
            <td>' . $fila['Email'] . '</td>
            <td>' . $fila['Nombre_Completo'] . '</td>
            </tr>';
          }
          mysqli_close($conexion);
          ?>
          </table>
          <!--Fin tabla-->
        </main>
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