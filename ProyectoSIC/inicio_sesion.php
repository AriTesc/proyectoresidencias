<?php
session_start();
include('conexion.php');
if (isset($_POST['Email']) && isset($_POST['Contrasenia'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user = validar($_POST['Email']);
    $pass = validar($_POST['Contrasenia']);
    $pass = md5($pass);
    if (empty($user)) {
        header('location: login_admins.php?error=Se requiere correo');
        exit();
    } elseif (empty($pass)) {
        header('location: login_admins.php?error=Se requiere contraseña');
        exit();
    } else {
        $sql = "SELECT * FROM administrador WHERE Email = '$user' AND Contrasenia = '$pass'";
        $query = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($query) === 1) {
            $columna = mysqli_fetch_assoc($query);
            if ($columna['Email'] === $user && $columna['Contrasenia'] === $pass) {
                $_SESSION['idAdministrador'] = $columna['idAdministrador'];
                $_SESSION['Email'] = $columna['Email'];
                $_SESSION['Nombre_Completo'] = $columna['Nombre_Completo'];
                header('location: sesion_admin.php');
                exit();
            } else {
                header('location: login_admins.php?error=Datos incorrectos');
                exit();
            }
        } else {
            header('location: login_admins.php?error=Datos incorrectos');
            exit();
        }
    }
} else {
    header('location: sesion_admin.php');
    exit();
}
