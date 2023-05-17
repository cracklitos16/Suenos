<?php

include '../servidor.php';

if (isset($_POST)){
    $nombre         =$_POST['nombre'];
    $apellidos      =$_POST['apellidos'];
    $correo_electronico=$_POST['correo_electronico'];
    $telefono       =$_POST['telefono'];
    $contrasena     =$_POST['contrasena'];
    $usuario_id     =$_POST['usuario_id'];

    $insertQuery = "UPDATE `usuarios`
    SET `nombre`='$nombre',`apellidos`='$apellidos',
    `correo_electronico`='$correo_electronico',
    `telefono`='$telefono',`contrasena`='$contrasena',
     `usuario_id`='$usuario_id'";

$respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');

if(!$respuestaDelQuery){
    echo 'no se pudieron hacer cambios';
  }

  header('location:../perfil_estudiante.php');

}

?>