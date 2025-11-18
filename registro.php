<?php
require_once 'conexion.php';

if (isset($base) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];

    $stmt = $base->prepare("INSERT INTO conexion1 (usuario, contrasena, correo, edad) VALUES (?,?,?,?)");

    if ($stmt->execute([$usuario, $contrasena, $correo, $edad])) {

        header("Location: zona_registrados.php");

    } else {
        echo"error al registrar usuario";
    }
}
?>