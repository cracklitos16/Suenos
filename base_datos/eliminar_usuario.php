<?php

include '../servidor.php';
$contacto_id = $_POST['usuario_id'];

$query = "DELETE FROM usuarios WHERE usuario_id = '$usuario_id'";
$respuestaQuery = mysqli_query($conn, $query);

header('location:../panel_control/template/gestor_cursos/gestionar_usuarios.php');
?>