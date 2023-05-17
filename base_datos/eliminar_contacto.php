<?php

include '../servidor.php';
$contacto_id = $_POST['contacto_id'];

$query = "DELETE FROM contacto WHERE contacto_id = '$contacto_id'";
$respuestaQuery = mysqli_query($conn, $query);

header('location:../panel_control/template/gestor_cursos/gestionar_contacto.php');
?>