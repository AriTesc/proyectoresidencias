<?php
session_start();
include('conexion.php');
if (isset($_POST['d_Usuario']) && isset($_POST['d_Contrasenia'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user = validar($_POST['d_Usuario']);
    $pass = validar($_POST['d_Contrasenia']);
    $pass = md5($pass);
    if (empty($user)) {
        header('location: login_docentes.php?error=Se requiere correo');
        exit();
    } elseif (empty($pass)) {
        header('location: login_docentes.php?error=Se requiere contraseña');
        exit();
    } else {
        $sql = "SELECT * FROM docentes WHERE Usuario = '$user' AND Contrasenia = '$pass'";
        $query = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($query) === 1) {
            $columna = mysqli_fetch_assoc($query);
            if ($columna['Usuario'] === $user && $columna['Contrasenia'] === $pass) {
                $_SESSION['idDocente'] = $columna['idDocente'];
                $_SESSION['Usuario'] = $columna['Usuario'];
                $_SESSION['Nombre_Completo'] = $columna['Nombre_Completo'];
                header('location: sesion_docente.php');
                exit();
            } else {
                header('location: login_docentes.php?error=Datos incorrectos');
                exit();
            }
        } else {
            header('location: login_docentes.php?error=Datos incorrectos');
            exit();
        }
    }
} else {
    header('location: sesion_docente.php');
    exit();
}
