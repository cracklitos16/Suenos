<?php
  include 'servidor.php';
  include 'base_datos/listar_evento.php';
  include 'base_datos/listar_noticia.php';
  include 'base_datos/buscar_noticia.php';
?>


  <!-- =======================================================
    * Paleta de colores
    #FFB40B | Amarillo Fuerte
    #FAD02C | Amarillo Claro
    #293D7A | Azul Fuerte
    #30498B | Azul Claro
    #000000 | Negro
    #151515 | Negro claro (Utilizado en titulos)
    #3b3b3b | Gris (Utilizado en sub titulos)
    #333    | Gris Claro
    #FDFDFD | Blanco
  ======================================================== -->

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sueños, Esperanzas, y Risas. A.C. / Index </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/Logo3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@200;500&family=IBM+Plex+Sans:ital,wght@0,300;0,500;0,700;1,300;1,700&display=swap" rel="stylesheet">

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
<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/utilesninos.jpg');">
                    <div class="img-bg-inner">
                      <h2>Entrega de útiles escolares para los niños</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/arbolitos1.jpg');">
                    <div class="img-bg-inner">
                      <h2>Sembrando Oxígeno</h2>
                      
                     </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/ninospaseo.jpg');">
                    <div class="img-bg-inner">
                      <h2>Un paseo con los niños del Orfanato "Ciudad de los niños Morelia" </h2>
                      </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/estatal.jpg');">
                    <div class="img-bg-inner">
                       </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Popular Courses Section ======= -->
  
  <section id="popular-courses" class="courses">
   <div class="container" data-aos="fade-up">

  
    <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2>Más Recientes</h2>
          <div class="more"></div>
        </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <?php
        while($row2 = mysqli_fetch_array($result_noticias)){ ?>
        
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch"> 
            <div class="course-item">
              <a href="noticia_detalle.php?id=<?php echo $row2['noticia_id'] ?>">
              <img src="data:image;base64,<?php echo base64_encode($row2['imagen']);  ?>" class="img-fluid" >                    
              <div class="course-content">
                <br>
                <div class="post-meta"><span class="date"><?php echo $row2['categoria'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row2['fecha'] ?></span></div>
                <h3><?php echo $row2['titulo'] ?></h3>
                <p><?php echo $row2['descripcion'] ?></p>
                </a>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center author">
                      <div class="photo"><img src="data:image;base64,<?php echo base64_encode($row2['imagen_mentor']);  ?>" style= "border-radius: 50%; width: 100px; height: auto;"></div>                    
                      <div class="name"><span><?php echo $row2['nombre_mentor'] ?></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->         
          <?php } ?> 
      </div>
    </div>
  </section><!-- End Popular Courses Section -->    

<!-- ======= Servicio Social Category Section ======= -->
<section id="popular-courses" class="courses">
   <div class="container" data-aos="fade-up">
      <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Servicio Social</h2>
            <div class="more"></div>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <?php
        while($row2 = mysqli_fetch_array($result_noticias)){ ?>
        
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch"> 
            <div class="course-item">
              <a href="noticia_detalle.php?id=<?php echo $row2['noticia_id'] ?>">
              <img src="data:image;base64,<?php echo base64_encode($row2['imagen']);  ?>" class="img-fluid" >                    
              <div class="course-content">
                <br>
                <div class="post-meta"><span class="date"><?php echo $row2['categoria'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row2['fecha'] ?></span></div>
                <h3><?php echo $row2['titulo'] ?></h3>
                <p><?php echo $row2['descripcion'] ?></p>
                </a>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <img src="data:image;base64,<?php echo base64_encode($row2['imagen_mentor']);  ?>" style= "border-radius: 50%; width: 100px; height: auto;">                    
                  <span><?php echo $row2['nombre_mentor'] ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->         
          <?php } ?> 
      </div>
    </div>
  </section> <!-- End Servicio Social Category Section -->

          </main><!-- End #main -->
        </div>
      </div>
    </section><!-- End Contact Section -->

    <!-- chatbot -->

    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      * {box-sizing: border-box;}

        /* Button used to open the chat form - fixed at the bottom of the page */
        /* .open-button {
          background-color: #FFB40B;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          opacity: 0.8;
          position: fixed;
          bottom: 23px;
          right: 28px;
          width: 280px;
        }

        /* The popup chat - hidden by default 
        .chat-popup {
          display: none;
          position: fixed;
          bottom: 0;
          right: 15px;
          border: 3px solid #f1f1f1;
          z-index: 9;
        } */

        /* Add styles to the form container */
        .form-container {
          max-width: 300px;
          padding: 10px;
          background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
          resize: none;
          min-height: 200px;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
          background-color: #ddd;
          outline: none;
        }

        /* Set a style for the submit/send button */
        .form-container .btn {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
          opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
          background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
    </style>
      <!-- </head> -->
      <!-- <body> -->

    <!-- <button class="open-button" onclick="openForm()">Chat</button>

    <div class="chat-popup" id="myForm">
      <form action="/action_page.php" class="form-container">
        <h1>Chat</h1>

        <label for="msg"><b>Message</b></label>
        <textarea placeholder="Type message.." name="msg" required></textarea>

        <button type="submit" class="btn">Send</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>
    </div> -->

    <?php
      require_once 'footer.php';
    ?>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

          <!-- Vendor JS Files -->
          <!-- <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script> -->

    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>