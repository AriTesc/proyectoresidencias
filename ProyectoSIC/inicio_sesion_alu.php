<?php
session_start();
include('conexion.php');
if (isset($_POST['a_Usuario']) && isset($_POST['a_Contrasenia'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user = validar($_POST['a_Usuario']);
    $pass = validar($_POST['a_Contrasenia']);
    $pass = md5($pass);
    if (empty($user)) {
        header('location: login_alumnos.php?error=Se requiere correo');
        exit();
    } elseif (empty($pass)) {
        header('location: login_alumnos.php?error=Se requiere contraseña');
        exit();
    } else {
        $sql = "SELECT * FROM alumnos WHERE Usuario = '$user' AND Contrasenia = '$pass'";
        $query = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($query) === 1) {
            $columna = mysqli_fetch_assoc($query);
            if ($columna['Usuario'] === $user && $columna['Contrasenia'] === $pass) {
                $_SESSION['idAlumno'] = $columna['idAlumno'];
                $_SESSION['Usuario'] = $columna['Usuario'];
                $_SESSION['Nombre_Completo'] = $columna['Nombre_Completo'];
                header('location: sesion_alumno.php');
                exit();
            } else {
                header('location: login_alumnos.php?error=Datos incorrectos');
                exit();
            }
        } else {
            header('location: login_alumnos.php?error=Datos incorrectos');
            exit();
        }
    }
} else {
    header('location: sesion_alumno.php');
    exit();
}
