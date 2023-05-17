<?php

$usuarioRow = null;
$dbconn = mysqli_connect('localhost','root','','sueños_esperanzas_y_risas') or die('Conexión fallida');


if ($_POST){
  $usuario_id = $_POST['usuario_id'];
  $selectQuery = "SELECT * FROM usuarios WHERE usuario_id = '$usuario_id'";
  $resultusuario = mysqli_query($dbconn, $selectQuery);

  if (mysqli_num_rows($resultusuario) == 1){
    $usuarioRow = mysqli_fetch_array($resultusuario);
  }
  
}

?>

<?php 

if ($usuarioRow){ ?>

<form action="editar_usuario.php" method="POST">
  <div class="row">
    <div class="col">
      <input type="text" value="<?php echo $usuarioRow['usuario_id'] ?>" name="usuario_id" hidden>

      <label for="">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="<?php echo $usuarioRow['nombre'] ?>">

      <label for="">Apellidos</label>
      <input type="text" name="apellidos" class="form-control" value="<?php echo $usuarioRow['apellidos'] ?>">

      <label for="">Correo electronico</label>
      <input type="text" name="correo_electronico" class="form-control" value="<?php echo $usuarioRow['correo_electronico'] ?>">

      <label for="">Telefono</label>
      <input type="text" name="telefono" class="form-control" value="<?php echo $usuarioRow['telefono'] ?>">

      <label for="">Tipo</label>
      <input type="text" name="tipo" class="form-control" value="<?php echo $usuarioRow['tipo'] ?>">

      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>


<?php 
}
?>
