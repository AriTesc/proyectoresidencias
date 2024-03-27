<?php
session_start();
include('conexion.php');
if (isset($_POST['Usuario']) || isset($_POST['idDocente'])) {
    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	$idDocente = validar($_POST['idDocente']);
	$Usuario = validar($_POST['Usuario']);
	$NombreCompleto = validar($_POST['Nombre_Completo']);
    $Contrasenia = validar($_POST['Contrasenia']);
	$Contrasenia = md5($Contrasenia);
	if ($Usuario<>''||$Usuario<>null) {
		$updateN="UPDATE docentes SET Usuario='$Usuario' WHERE docentes.idDocente=$idDocente";
		$ejecutarN=mysqli_query($conexion, $updateN);
	}
	if ($NombreCompleto<>''||$NombreCompleto<>null) {
		$updateE="UPDATE docentes SET Nombre_Completo='$NombreCompleto' WHERE docentes.idDocente=$idDocente";
		$ejecutarE=mysqli_query($conexion, $updateE);
	}
	if ($Contrasenia<>''||$Contrasenia<>null) {
		$updateP="UPDATE docentes SET Contrasenia='$Contrasenia' WHERE docentes.idDocente=$idDocente";
		$ejecutarP=mysqli_query($conexion, $updateP);
	}
	header('Location: editar_usuario.php?success=El usuario se modificó correctamente');
}