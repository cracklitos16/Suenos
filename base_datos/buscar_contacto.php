<?php

$contactoRow = null;
$dbconn = mysqli_connect('localhost','root','','sueños_esperanzas_y_risas') or die('Conexión fallida');


if ($_POST){
  $contacto_id = $_POST['contacto_id'];
  $selectQuery = "SELECT * FROM contacto WHERE contacto_id = '$contacto_id'";
  $resultContacto = mysqli_query($dbconn, $selectQuery);

  if (mysqli_num_rows($resultContacto) == 1){
    $contactoRow = mysqli_fetch_array($resultContacto);
  }
  
}

?>

<?php 

if ($contactoRow){ ?>

<form action="editar_contacto.php" method="POST">
  <div class="row">
    <div class="col">
      <input type="text" value="<?php echo $contactoRow['contacto_id'] ?>" name="contacto_id" hidden>

      <label for="">Direccion</label>
      <input type="text" name="direccion" class="form-control" value="<?php echo $contactoRow['direccion'] ?>">

      <label for="">Correo</label>
      <input type="text" name="correo" class="form-control" value="<?php echo $contactoRow['correo'] ?>">

      <label for="">telefono</label>
      <input type="text" name="telefono" class="form-control" value="<?php echo $contactoRow['telefono'] ?>">

      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>


<?php 
}
?>
