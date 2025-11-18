<?php
 require_once 'conexion.php';

 $sql="SELECT * FROM conexion1 WHERE USUARIO=:usuario AND CONTRASENA=:contrasena";
 $resultado=$base->prepare($sql);
 $usuario=htmlentities(($_POST["usuario"]));
 $contrasena=htmlentities(($_POST["contrasena"]));

 $resultado->bindValue(":usuario",$usuario);
 $resultado->bindValue(":contrasena",$contrasena);
 $resultado->execute();

 $numero_registro=$resultado->rowCount();

 if($numero_registro !=0){
    header("Location: zona_registrados.php");
 } else {
    echo"Contrasena Incorreta";
 }
?>