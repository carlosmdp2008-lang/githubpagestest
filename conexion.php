<?php
$dsn = "mysql:host=localhost;dbname=conexion1";
$usuario = "root";
$contrasena = "";

try {
    $base = new PDO($dsn, username: $usuario, password: $contrasena);
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo"Error de conexion: " .$e->getMessage();
}
?>