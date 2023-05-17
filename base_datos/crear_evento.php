<?php

include '../servidor.php';

if (isset($_POST)){

  $titulo         = $_POST['titulo'];
  $descripcion    = $_POST['descripcion'];
  /*$horario        = DateTime::createFromFormat('Y-m-d\TH:i', $_POST['fecha']); */
  $horario        = $_POST['fecha']; 
  $mentor_id       = $_POST['nombre_mentor'];


  $insertQuery = "INSERT INTO `eventos`( `horario`, `usuario_id`, `titulo`, `descripcion`) 
                    VALUES ('$horario','$mentor_id','$titulo','$descripcion')";
 


    $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');


    if(!$respuestaDelQuery){
        echo 'No se agrego';
    }

    header('location:../panel_control/template/gestor_cursos/gestionar_eventos.php');

    $url = '../index.php #popular-courses';

    }
?>