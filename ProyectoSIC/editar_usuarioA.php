<?php
session_start();
include('conexion.php');
if (isset($_POST['Usuario']) || isset($_POST['idAlumno'])) {
    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	$idAlumno = validar($_POST['idAlumno']);
	$Email = validar($_POST['Usuario']);
	$NombreCompleto = validar($_POST['Nombre_Completo']);
    $Contrasenia = validar($_POST['Contrasenia']);
	$Contrasenia = md5($Contrasenia);
	if ($Email<>''||$Email<>null) {
		$updateN="UPDATE alumnos SET Usuario='$Email' WHERE alumnos.idAlumno=$idAlumno";
		$ejecutarN=mysqli_query($conexion, $updateN);
	}
	if ($NombreCompleto<>''||$NombreCompleto<>null) {
		$updateE="UPDATE alumnos SET Nombre_Completo='$NombreCompleto' WHERE alumnos.idAlumno=$idAlumno";
		$ejecutarE=mysqli_query($conexion, $updateE);
	}
	if ($Contrasenia<>''||$Contrasenia<>null) {
		$updateP="UPDATE alumnos SET Contrasenia='$Contrasenia' WHERE alumnos.idAlumno=$idAlumno";
		$ejecutarP=mysqli_query($conexion, $updateP);
	}
	header('Location: editar_usuario2.php?success=El usuario se modificó correctamente');
}