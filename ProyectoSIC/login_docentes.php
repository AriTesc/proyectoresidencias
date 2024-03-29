<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio</title>
    <link rel="stylesheet" href="../ProyectoSIC/css/sign-in.css">
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
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <!--Inicio de formulario-->
    <main class="form-signin w-100 m-auto">
      <form action="inicio_sesion_doc.php" method="POST">
        <center>
          <a href="../ProyectoSIC/index.html"> <img class="mb-4" src="../ProyectoSIC/img/Logo TESCo.jpg" alt="" width="120" height="60"> </a>
          <h1 class="h3 mb-3 fw-normal">Sesión Docentes</h1>
          <?php
            if (isset($_GET['error'])){
          ?>
          <p class="error">
            <?php
            echo $_GET['error'];
            ?>
          </p>
          <?php
            }
          ?>
        </center>
        <div class="form-floating">
          <input type="text" name="d_Usuario" class="form-control" id="floatingInput" placeholder="usuario">
          <label for="floatingInput">Usuario</label>
        </div>
        <div class="form-floating">
          <input type="password" name="d_Contrasenia" class="form-control" id="floatingPassword" placeholder="contra">
          <label for="floatingPassword">Contraseña</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Ingresar</button>
      </form>
    </main>
    <!--Fin de formulario-->
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