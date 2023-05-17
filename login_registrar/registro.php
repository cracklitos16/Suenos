<?php
$conn = mysqli_connect("localhost", "root", "", "sueños_esperanzas_y_risas");

//REGISTRAR USUARIOS

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hashear la contraseña utilizando bcrypt
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar los datos del usuario en la base de datos
    $query = "INSERT INTO usuarios (nombre, correo_electronico, contrasena, tipo) VALUES ('$nombre', '$email', '$hashed_password', 'Alumno')";
    mysqli_query($conn, $query);

    // Redirigir al usuario a la página de inicio de sesión
    header('Location: index.php');
}
?>
