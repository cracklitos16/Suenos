<?php
// Conectar a la base de datos

$conn = mysqli_connect("localhost", "root", "", "pruebas");

// Verificar si el formulario de inicio de sesión ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tipo = $_POST['tipo'];


/******************* */
  // Buscar al usuario en la base de datos por correo electrónico
  $query = "SELECT * FROM usuarios WHERE correo_electronico = '$email'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);

  // Verificar la contraseña
  if (password_verify($password, $row['contrasena'])) {
      // Iniciar sesión y redirigir al usuario a la página correspondiente
      session_start();
      $_SESSION['usuario'] = $row['nombre'];
      $_SESSION['tipo'] = $tipo;
      if ( $_SESSION['tipo'] == 'Alumno') {
          header('Location: pagina_tipo1.php');
      } elseif ($row['tipo'] == 'Profesor') {
          header('Location: pagina_tipo2.php');
      } elseif ($row['tipo'] == 'Administrador') {
          header('Location: pagina_tipo3.php');
      }
  } else {
      // Mostrar un mensaje de error si la contraseña es incorrecta
      $error = "Correo electrónico o contraseña incorrecta";
  }
}

/****************** 
    // Si se encontró un usuario con las credenciales especificadas, redirigirlo a la página correspondiente según su tipo
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $user_type = $tipo;
        switch ($user_type) {
            case 'Alumno':
                header('Location: pagina_tipo1.php');
                break;
            case 'Profesor':
                header('Location: pagina_tipo2.php');
                break;
            case 'Administrador':
                header('Location: pagina_tipo3.php');
                break;
        }
    } else {
        // Si las credenciales son incorrectas, mostrar un mensaje de error
        echo "Correo electrónico o contraseña incorrectos";
    }
*/


//REGISTRAR USUARIOS
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['tipo'];

    // Hashear la contraseña utilizando bcrypt
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar los datos del usuario en la base de datos
    $query = "INSERT INTO usuarios (nombre, correo_electronico, contrasena, tipo) VALUES ('$nombre', '$email', '$hashed_password', '$user_type')";
    mysqli_query($conn, $query);

    // Redirigir al usuario a la página de inicio de sesión
    header('Location: inicio_sesion.html');
}*/
?>
