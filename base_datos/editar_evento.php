<?php

include '../servidor.php';


if (isset($_POST)){

  $titulo       = $_POST['titulo'];
  $descripcion  = $_POST['descripcion'];
  //$imagen_mentor  = $_POST['imagen_mentor']; 
  $nombre_mentor  = $_POST['nombre_mentor'];
  $horario         = $_POST['fecha'];
  $evento_id       = $_POST['evento_id'];

echo $nombre_mentor;

  $insertQuery = "UPDATE `eventos` SET `horario`='$horario',`usuario_id`='$nombre_mentor',`titulo`='$titulo',`descripcion`='$descripcion' WHERE `evento_id`='$evento_id'";
  

  $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');
  echo $respuestaDelQuery;

  if(!$respuestaDelQuery){
    echo 'no se registro';
  }

 // header('location:../panel_control/template/gestor_cursos/gestionar_eventos.php');

}

?>