<?php

include '../servidor.php';

if (isset($_POST)){

  $titulo       = $_POST['titulo'];
  $descripcion  = $_POST['descripcion'];
  $imagen_mentor  = $_POST['imagen_mentor']; 
  $nombre_mentor  = $_POST['nombre_mentor'];
  $categoria         = $_POST['categoria'];
  $fecha           = $_POST['fecha'];
  $noticia_id       = $_POST['noticia_id'];


  $insertQuery = "UPDATE `noticias` 
    SET `titulo`='$titulo',`descripcion`='$descripcion', `categoria`='$categoria', `fecha`='$fecha', 
    `imagen_mentor`='$imagen_mentor',`nombre_mentor`='$nombre_mentor',
     WHERE `noticia_id`='$noticia_id'";
  
  

  $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');


  if(!$respuestaDelQuery){
    echo 'no se registro';
  }

  header('location:../index.php');

}

?>