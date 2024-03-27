<?php
$host = "localhost";
$usuario = "id21917854_root";
$contra = "d4taba5eO1*l";
$basedatos = "id21917854_proyectosic";
$conexion = mysqli_connect($host, $usuario, $contra, $basedatos);
if (!$conexion) {
    echo "No se encontró la base de datos solicitada";
}
