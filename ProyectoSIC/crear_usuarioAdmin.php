<?php
session_start();
include('conexion.php');
if (isset($_POST['Email']) && isset($_POST['Nombre_Completo']) && isset($_POST['Contrasenia'])) {
    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
	$Email = validar($_POST['Email']);
	$NombreCompleto = validar($_POST['Nombre_Completo']);
    $Contrasenia = validar($_POST['Contrasenia']);
	if (empty($Email)) {
        header('location: crear_usuario3.php?error=Se requiere usuario');
        exit();
    } elseif (empty($NombreCompleto)) {
        header('location: crear_usuario3.php?error=Se requiere nombre completo');
        exit();
	} elseif (empty($Contrasenia)) {
        header('location: crear_usuario3.php?error=Se requiere contraseña');
        exit();
    } else {
		$Contrasenia = md5($Contrasenia);
		$sql = "SELECT * FROM administradores WHERE Email = '$Email'";
		$query = $conexion->query($sql);
		if (mysqli_num_rows($query) > 0) {
			header('Location: crear_usuario3.php?error=El usuario ya existe');
			exit();
		}else{
			$sql2="INSERT INTO administradores(Email, Nombre_Completo, Contrasenia) VALUES ('$Email','$NombreCompleto','$Contrasenia')";
			$query2 = $conexion->query($sql2);
			if ($query2){
				header('Location: crear_usuario3.php?success=El usuario se registro con exito');
				exit();
			}else{
				header('Location: crear_usuario3.php?success=Ocurrio un error');
				exit();
			}
		}

	}
}else{
	header('Location: crear_usuario3.php');
	exit();
}