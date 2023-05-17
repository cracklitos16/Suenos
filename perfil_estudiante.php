<!DOCTYPE html>
<html lang="es">
    <head>
    
<?php
require_once 'header.php';
include '../../servidor.php';

?>

  <main id="main">
    
</head>

  <br><br>

  <!-- Configuracion de cuenta -->

  <body>
	<section class="py-5 my-5">
		<div class="container">
        <div class="section-title">
      <h2>Ajustes</h2>
      <p>Modifica tus datos</p>
    </div>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
                            <div>
							<img width="150px" height="150px" src="assets/img/Foto Usuario.jpg" alt="Image" class="shadow" >
</div>
						</div>
						<h4 class="text-center">Arturo Adrian</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Cuenta
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Contraseña
						</a>

					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Ajustes de Usuario</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nombre/s</label>
								  	<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Apellidos</label>
								  	<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Correo electronico</label>
								  	<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Numero telefonico</label>
								  	<input type="text" class="form-control" value="">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Actualizar</button>
							<button class="btn btn-light">Cancelar</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Ajustes de Contraseña</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Contraseña anterior</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nueva contraseña</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirmar contraseña</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" name="editar_perfil">Actualizar</button>
							<button class="btn btn-light">Cancelar</button>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	</section>

    <!--Mis cursos -->

  <section id="popular-courses" class="courses">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Tus cursos</h2>
      <p>Cursos en los que estas inscrito</p>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
          <a href="course-details.html">
          <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>Desarrollo Web</h4>

            </div>

            <h3>Diseño Web</h3>
            <p>Aprenderas a como desarrollar y diseñar tu propia pagina web para tu negocio.</p>
             </a>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <span>Antonio</span>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bx bx-user"></i>&nbsp;50
                &nbsp;&nbsp;
                <i class="bx bx-heart"></i>&nbsp;65
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End Course Item-->

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="course-item">
          <a href="course-details.html">
          <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>Marketing</h4>
            </div>

            <h3>Optimimizacion del motor de busqueda</h3>
            <p>Coloca tu marca en los recomendados de motores de busqueda lideres como google o bing.</p>
             </a>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <span>Lana</span>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bx bx-user"></i>&nbsp;35
                &nbsp;&nbsp;
                <i class="bx bx-heart"></i>&nbsp;42
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End Course Item-->

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="course-item">
          <a href="course-details.html">
          <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>Contenido</h4>
            </div>

            <h3>Copywriting</h3>
            <p>Aprende a crear textos y titulos llamativos para atraer la atencion de tu publico.</p>
            </a>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <span>Brandon</span>
              </div>
              <div class="trainer-rank d-flex align-items-center">
                <i class="bx bx-user"></i>&nbsp;20
                &nbsp;&nbsp;
                <i class="bx bx-heart"></i>&nbsp;85
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End Course Item-->

    </div>

  </div>
</section>

  
<?php
require_once 'footer.php';
?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Cosas del perfil -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>