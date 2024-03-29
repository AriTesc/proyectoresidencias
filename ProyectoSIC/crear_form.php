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
                    <h5>Regresar: <a href="../ProyectoSIC/sesion_docente.php"><img class="mb-4" src="../ProyectoSIC/img/Logo TESCo.jpg" alt="" width="100" height="50"></a></h5>
                    </div>
                </div>
            </div>
            <!--Fin de barra lateral-->
            <div class="col-6">
                <!--Inicio de contenido-->
                <!--add quiz start-->
                <br><br>
                <h3 align="center"><b>Detalles del examen</b></h3>
                <form name="form" action="crear_form2.php" method="POST">
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="name"></label>
                        <div class="col-md-12">
                            <input name="name" placeholder="Ingrese el título del formulario" class="form-control input-md" type="text" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="total"></label>
                        <div class="col-md-12">
                            <input name="total" placeholder="Ingrese el número total de preguntas" class="form-control input-md" min="1" type="number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="right"></label>
                        <div class="col-md-12">
                            <input name="right" placeholder="Ingrese el número de intentos correctos" class="form-control input-md" min="1" type="number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="wrong"></label>
                        <div class="col-md-12">
                            <input name="wrong" placeholder="Ingrese el número de intentos incorrectos" class="form-control input-md" min="1" type="number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="time"></label>
                        <div class="col-md-12">
                            <input id="time" name="time" placeholder="Ingrese el límite de tiempo total para la prueba (en minutos)" class="form-control input-md" min="1" type="number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="tag"></label>
                        <div class="col-md-12">
                            <input id="tag" name="tag" placeholder="Ingrese una etiqueta" class="form-control input-md" type="text" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="desc"></label>
                        <div class="col-md-12">
                            <textarea rows="5" cols="5" name="desc" class="form-control" placeholder="Ingrese una descripción" required></textarea>  
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <label class="col-md-12 control-label" for=""></label>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="Enviar"/>
                        </div>
                    </div>
                </form>
            </div>
            <!--add quiz end-->
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