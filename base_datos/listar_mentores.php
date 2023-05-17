<?php

$dbconn = mysqli_connect('localhost','root','','sueños_esperanzas_y_risas') or die('Conexión fallida');

$selectQuery = "SELECT * FROM usuarios";

$result_mentores = mysqli_query($dbconn, $selectQuery);

?>