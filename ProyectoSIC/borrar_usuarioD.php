<?php
session_start();
include('conexion.php');
if (isset($_POST['idDocente']) || isset($_POST['Usuario'])) {
    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	$idDocente = validar($_POST['idDocente']);
	$Email = validar($_POST['Usuario']);
	$sql = "DELETE FROM docentes WHERE Usuario = '$Email' || idDocente = '$idDocente'";
	$query = $conexion->query($sql);
	if ($query === TRUE	) {
		header('Location: borrar_usuario.php?success=El usuario se eliminó con éxito');
		exit();
	}else{
		header('Location: borrar_usuario.php?error=Ocurrió un error');
		exit();
	}
}
