<?php
  include 'servidor.php';
  include 'base_datos/listar_evento.php';
  include 'base_datos/listar_noticia.php';
  include 'base_datos/buscar_noticia.php';
?>
<!DOCTYPE html>
<html lang="es">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@200;500&family=IBM+Plex+Sans:ital,wght@0,300;0,500;0,700;1,300;1,700&display=swap" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sueños, Esperanzas, y Risas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/Logo3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

<?php
  require_once 'header.php';
?>

  <main id="main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-15" data-aos="fade-up">
            <h3 class="category-title">Categoría: Servicio Social</h3>
              <div class="d-md-flex post-entry-2 half">
                <a href="" class="me-4 thumbnail">
                  <img src="assets/img/plantar.jpg" alt="" class="img-fluid">
                </a>
                    <div>
                        <div class="post-meta"><span class="date">Sembrando Oxígeno</span> <span class="mx-1">&bullet;</span> <span>Abril 30 '23</span></div>
                        <h3>Únete al cambio</h3>
                        <p>Ven a plantar un árbol, Comprometidos con la lucha contra el cambio climático, ayúdanos a sembrar oxígeno. Ven este 30 de Abril 2023 al parque “ecológico” de Morelia. </p>
                        <div class="d-flex align-items-center author">
                        <div class="photo"><img src="assets/img/Luis Aleman Cara.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Luis Alemán</h3>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="d-md-flex post-entry-2 half">
                    <a href="" class="me-4 thumbnail">
                        <img src="assets/img/tapitas.jpg" alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Recolectando Tapitas</span> <span class="mx-1">&bullet;</span> <span>Ven a depositarla a nuestras Oficinas</span></div>
                        <h3>Ayuda a reunir Tapitas.</h3>
                        <p>Se parte de las personas que reúnen Tapitas de plástico, básicamente esto se trata de recolectar, almacenar y reciclar todo tipo de tapas de plástico con la finalidad de generar recursos económicos para apoyar diferentes programas de atención a menores de 21 años con diagnóstico de cáncer.</p>                        <div class="d-flex align-items-center author">
                        <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Administrador</h3>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="d-md-flex post-entry-2 half">
                    <a href="" class="me-4 thumbnail">
                        <img src="assets/img/basura.jpg" alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Recolectando basura</span> <span class="mx-1">&bullet;</span> <span>Mayo 18 '23</span></div>
                        <h3>Rescatando al Ambiente.</h3>
                        <p>Se parte del grupo de voluntarios este 18 de Mayo en Morelia Michoacán, para recolectar basura de nuestros espacios y áreas verdes, asi como de ríos y arrollos.</p>
                        <div class="d-flex align-items-center author">
                        <div class="photo"><img src="assets/img/miguel.png" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Miguel</h3>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="d-md-flex post-entry-2 half">
                    <a href="" class="me-4 thumbnail">
                        <img src="assets/img/comidahospital.jpg" alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">LLeva comida al Hospital</span> <span class="mx-1">&bullet;</span> <span>Abril 25 '23</span></div>
                        <h3>En pro de los Enfermos.</h3>
                        <p>Súmate a la comunidad que llevara comida al Hospital Civil de Morelia Michoacán este 25 de abril, por que ayudar es bueno, y por buenos somos más.</p>                        <div class="d-flex align-items-center author">
                        <div class="photo"><img src="assets/img/juan.png" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Juan</h3>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="d-md-flex post-entry-2 half">
                    <a href="" class="me-4 thumbnail">
                        <img src="assets/img/5.jpg" alt="" class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Sin frio.</span> <span class="mx-1">&bullet;</span> <span>Diciembre 1 '23</span></div>
                        <h3>Campaña contra el frio.</h3>
                        <p>Estamos reuniendo cobijas para los que menos tienen, porque no tiene las oportunidades de comprar una cobija. Por eso ayúdanos, y se parte del cambio, para que no pasen frio en esta temporada Invernal. </p>                        <div class="d-flex align-items-center author">
                        <div class="photo"><img src="assets/img/Giobanna.png" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Giovanna</h3>
                </div>
              </div>
            </div>
          </div>
        </div>          
      </div>
    </section>
  </main><!-- End #main -->

  <?php
    require_once 'footer.php';
  ?>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>