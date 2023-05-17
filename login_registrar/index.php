<?php

include '../servidor.php';
session_start();

if(isset($_POST['submit'])){

   $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
   $contrasena = mysqli_real_escape_string($conn, ($_POST['contrasena']));

   $select = mysqli_query($conn, "SELECT * FROM `usuario` WHERE usuario = '$usuario' AND contrasena = '$contrasena'") or die('query failed');

   //REVISAAR
   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:../index.php');
   }else{
      $message[] = 'Correo y/o constraseña incorrectos!';
   }

}

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link href="../assets/img/logo/IVEL_favicon-removebg-preview.png" rel="icon">

    <meta name="google-signin-client_id" content="470256861175-c58b9929otuut3qkoritabm3uovo4nmq.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="style.css" />
    <title>Iniciar sesión</title>
  </head>

  <body>
  
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

  <!-- FORMULARIO PARA INICIAR SESION-->
          <form action="login.php" class="sign-in-form" method="post" enctype="multipart/form-data">
            <h2 class="title">Iniciar sesión</h2>
            <?php
            if(isset($message)){
             foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Correo" name="email" required/>
              <!-- <input type="text" placeholder="Usuario" name="usuario" required/> -->
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="password" required/>
            </div>

            <input type="submit" name="submit" value="Iniciar Sesión" class="btn">
            

            <p class="social-text">Inicia con Google</p>
            <center><div class="g-signin2" data-onsuccess="onSignIn"></div></center>
            </form>
          
            
  <!-- FORMULARIO PARA REGISTRARSE-->

          <form action="registro.php" class="sign-up-form" method="post" enctype="multipart/form-data">
            <h2 class="title">Registrate</h2>
            <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nombre" placeholder="Nombre" required>
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Correo electronico" required>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Contraseña" required>
            </div>
      
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="contrasena" placeholder="Confirmar contraseña" required>
            </div>

            <!--BOTON PARA REGISTRAR-->
            <button type="submit" class="btn" name="registrar_usuario">Registrar</button>

            <p class="social-text">Registrate con Google</p>
            <div class="social-media">
            <center>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
            </center>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Eres nuevo?</h3>
            <p>
              ¡Da a conocer tus creaciones o interacciona con otros artistas!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrate
            </button>
          </div>
          <br>

          <img src="../assets/img/logo/ICONO SIN FONDO.PNG" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya eres uno de los nuestros?</h3>
            <p>
              Ven a compartir tus creaciones o ver que tienen de nuevo tus artistas favoritos
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar sesión
            </button>
          </div>
          <br>
          <img src="../assets/img/logo/ICONO SIN FONDO.PNG" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>