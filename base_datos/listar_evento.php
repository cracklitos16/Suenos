<?php


//$selectQuery = "SELECT eventos.*, usuarios.nombre, usuarios.usuario_id FROM eventos INNER JOIN usuarios ON eventos.evento_id = usuarios.usuario_id";
$selectQuery = "SELECT * FROM eventos";

$result_eventos = mysqli_query($conn, $selectQuery);

?>