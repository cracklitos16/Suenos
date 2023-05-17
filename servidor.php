<?php
$conn = mysqli_connect('localhost','root','','sueños_esperanzas_y_risas') or die('Conexión fallida');

// Inicializar Variables
$usuario= "";
$correo= "";
$errores= array(); 
$tipo ="";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sueños_esperanzas_y_risas');



// Registrar usuario
if (isset($_POST['registrar_usuario'])) {
  // Recibe valores del formulario de usuario
  $usuario      = mysqli_real_escape_string($db, $_POST['usuario']);
  $correo       = mysqli_real_escape_string($db, $_POST['correo']);
  $contrasena   = mysqli_real_escape_string($db, $_POST['contrasena']);
  $ccontrasena  = mysqli_real_escape_string($db, $_POST['ccontrasena']);
  $tipo         = mysqli_real_escape_string($db, $_POST['tipo']);
 

   $select = mysqli_query($db, "SELECT * FROM `usuario` WHERE correo = '$correo' AND contrasena = '$contrasena'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'El usuario ya existe'; 
   }
      else{
         $insert = mysqli_query($db, "INSERT INTO `usuario`(usuario, correo, contrasena, tipo) VALUES('$usuario', '$correo', '$contrasena', '$tipo')") or die('query failed');

         if($insert){
            
            $message[] = 'Registrado exitosamente!';
            header('location: login_registrar/index.php');
         }else{
            $message[] = 'Registro fallido!';
         }
      }
   

  // Validacion de Formulario: Asegurarse que todos los campos se llenaron ...
  // Añadiendo (array_push()) al arreglo de errores $errores array
  if (empty($usuario)) { array_push($errores, "Se requiere un usuario"); }
  if (empty($correo)) { array_push($errores, "Se requiere un correo"); }
  if (empty($contrasena)) { array_push($errores, "Se requiere una contrasena"); }
  if ($contrasena != $ccontrasena) {
	array_push($errores, "Las contrasenas no coinciden");
  }

  // Primero checa que la base de datos
  // que un usuario ya existente no tiene el mismo nombre / correo
  $user_check_query = "SELECT * FROM usuario WHERE usuario='$usuario' OR correo='$correo' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // Si el usuario existe
    if ($user['usuario'] === $usuario) {
      array_push($errores, "Este nombre de usuario no esta disponible");
    }

    if ($user['correo'] === $correo) {
      array_push($errores, "Este correo ya fue registrado");
    }
  }

  // Finalmente registra usuario si no hay errores en el formulario de usuario
  if (count($errores) == 0) {
  	$contrasena_encrypted = md5($contrasena);//encripta la contrasena en la base de datos

  	$query = "INSERT INTO usuario (usuario, correo, contrasena, image) 
  			  VALUES('$usuario', '$correo', '$contrasena_encrypted', '$imgContenido')";
  	mysqli_query($db, $query);
  	$_SESSION['usuario'] = $usuario;
  	$_SESSION['success'] = "Haz iniciado session";
  	header('location: login-registrar/index.php');
  }

}


?>