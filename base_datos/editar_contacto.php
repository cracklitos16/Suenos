<?php

include '../servidor.php';

if (isset($_POST)){

    $contacto_id = $_POST['contacto_id'];
    $direccion = $_POST['direccion'];
    $correo    = $_POST['correo'];
    $telefono  = $_POST['telefono']; 
  
    $insertQuery = "UPDATE `contacto` 
    SET `direccion`='$direccion',`correo`='$correo',`telefono`='$telefono'
    WHERE `contacto_id`='$contacto_id'";
  

  $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');


  if(!$respuestaDelQuery){
    echo 'no se registro';
  }

  header('location:../index.php');

}

?>