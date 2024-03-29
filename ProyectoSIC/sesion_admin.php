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
            <img class="mb-4" src="../ProyectoSIC/img/Logo TESCo.jpg" alt="" width="100" height="50">
            <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                  data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false"> Docentes </button>
                <div class="collapse" id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="crear_usuario.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Registrar docente</a></li>
                    <li><a href="editar_usuario.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Modificar datos</a></li>
                    <li><a href="borrar_usuario.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Eliminar datos</a></li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                  Alumnos
                </button>
                <div class="collapse" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="crear_usuario2.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Registrar alumno</a></li>
                    <li><a href="editar_usuario2.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Modificar datos</a></li>
                    <li><a href="borrar_usuario2.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Eliminar datos</a></li>
                  </ul>
                </div>
              </li>
              <li class="border-top my-3"></li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false"> Más... </button>
                <div class="collapse" id="account-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="crear_usuario3.php"class="link-body-emphasis d-inline-flex text-decoration-none rounded">Registrar Admin</a></li>
                    <li><a href="cierre_sesion.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Cerrar sesión</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!--Fin de barra lateral-->
      </div>
      <div class="col-6">
        <!--Inicio de contenido-->
        <p class="top-0 start-50 translate-middle-x">Inició sesión de: <?php echo $_SESSION['Nombre_Completo']; ?> </p>
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