<?php

include '../servidor.php';

if (isset($_POST)){

  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $password = "vivel123";

// Hashear la contraseña utilizando bcrypt
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $insertQuery = "INSERT INTO usuarios (nombre, correo_electronico, contrasena, tipo) 
                  VALUES ('$nombre', '$email', '$hashed_password', 'Profesor')";
  

  $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');


  if(!$respuestaDelQuery){
    echo 'no se registro';
  }

  header('location:../panel_control/template/gestor_cursos/gestionar_cursos.php');
  
}

?>