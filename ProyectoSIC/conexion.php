<?php
$host = "localhost";
$usuario = "root";
$contra = "";
$basedatos = "proyectosic";
$conexion = mysqli_connect($host, $usuario, $contra, $basedatos);
if (!$conexion) {
    echo "No se encontró la base de datos solicitada";
}
