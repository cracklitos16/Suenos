<?php

include '../servidor.php';

if (isset($_POST)){

  $nombre = $_POST['nombre'];
  $apellidos    = $_POST['apellidos'];
  $correo_electronico  = $_POST['correo_electronico']; 
  $telefono = $_POST['telefono'];
  $contrasena    = $_POST['contrasena'];
  $tipo  = $_POST['tipo'];

  $insertQuery = "INSERT INTO `usuarios`(`nombre`, `apellidos`, `correo_electronico`, `telefono`, `contrasena`, `tipo`) 
                   VALUES ('$nombre','$apellidos','$correo_electronico','$telefono','$contrasena','$tipo')";


  $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');


  if(!$respuestaDelQuery){
    echo 'no se registro';
  }

  header('location:../panel_control/template/gestor_cursos/gestionar_usuarios.php');
 
    $url = '../index.php #contact';
    echo "<script>window.open('$url', '_blank');</script>";

}

?>