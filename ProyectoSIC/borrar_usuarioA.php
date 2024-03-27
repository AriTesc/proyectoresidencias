<?php
session_start();
include('conexion.php');
if (isset($_POST['idAlumno']) || isset($_POST['Usuario'])) {
    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	$idAlumno = validar($_POST['idAlumno']);
	$Usuario = validar($_POST['Usuario']);
	$sql = "DELETE FROM alumnos WHERE Usuario = '$Usuario' || idAlumno = '$idAlumno'";
	$query = $conexion->query($sql);
	if ($query === TRUE	) {
		header('Location: borrar_usuario2.php?success=El usuario se eliminó con éxito');
		exit();
	}else{
		header('Location: borrar_usuario2.php?error=Ocurrió un error');
		exit();
	}
}
