<?php
// Conectar a la base de datos academia

$conn = mysqli_connect("localhost", "root", "", "sueños_esperanzas_y_risas");


// Verificar si el formulario de inicio de sesión ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
// Obtiene el tipo de usuario
    $tipo_query = "SELECT tipo FROM usuarios WHERE correo_electronico = '$email'";
    $tipo_result = mysqli_query($conn, $tipo_query);
    $tipo_row = mysqli_fetch_assoc($tipo_result);

// la variable $tipo contiene el tipo de usuario
    $tipo = $tipo_row['tipo'];


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
          header('Location: ../perfil_estudiante.php');
      } elseif ($row['tipo'] == 'Profesor') {
          header('Location: ../perfil_estudiante.php');
      } elseif ($row['tipo'] == 'Administrador') {
          header('Location: ../panel_control/template/index.php');
      }
  } else {
      // Mostrar un mensaje de error si la contraseña es incorrecta
      $error = "Correo electrónico o contraseña incorrecta";
  }
}

?>
