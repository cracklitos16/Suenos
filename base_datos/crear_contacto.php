<?php

include '../servidor.php';

if (isset($_POST)){

  $direccion = $_POST['direccion'];
  $correo    = $_POST['correo'];
  $telefono  = $_POST['telefono']; 

  $insertQuery = "INSERT INTO `contacto`(`direccion`, `correo`, `telefono`) 
                   VALUES ('$direccion','$correo','$telefono')";
  

  $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');


  if(!$respuestaDelQuery){
    echo 'no se registro';
  }

  header('location:../panel_control/template/gestor_cursos/gestionar_contacto.php');
 
    $url = '../index.php #contact';
    echo "<script>window.open('$url', '_blank');</script>";

}

?>