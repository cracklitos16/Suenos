<?php

include '../servidor.php';
require_once ("../servidor.php");

if (isset($_POST)){

  $titulo       = $_POST['titulo'];
  $descripcion  = $_POST['descripcion'];

  global $conn;
  extract($_POST);


      //variables donde se almacenan los valores de nuestra imagen
              $tamanoArchvio=$_FILES['imagen']['size'];
  
      //se realiza la lectura de la imagen
              $imagenSubida=fopen($_FILES['imagen']['tmp_name'], 'r');
              $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
      //se realiza la consulta correspondiente para guardar los datos
      
      $imagenFin =mysqli_escape_string($conn,$binariosImagen);

  //$imagen_mentor  = $_POST['imagen_mentor']; 
  $nombre_mentor  = $_POST['nombre_mentor'];
  $descripcion         = $_POST['descripcion'];
  $fecha           = $_POST['fecha'];
         
  $insertQuery = "INSERT INTO `noticias`(`titulo`, `descripcion`, `categoria`, `fecha`, `imagen`, `nombre_mentor`) 
                   VALUES ('$titulo','$descripcion','$categoria','$fecha','$imagenFin','$nombre_mentor')";
  

  $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');


  if(!$respuestaDelQuery){
    echo 'no se registro';
  }

  header('location:../panel_control/template/gestor_cursos/gestionar_noticias.php');
 
    $url = '../index.php #popular-courses';
    echo "<script>window.open('$url', '_blank');</script>";

}

?>