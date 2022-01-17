<!DOCTYPE html>
<html lang="es">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<link rel="shortcut icon" href="assets/images/favicon.png">
<title>Replay.com | Contáctenos</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blue.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/rateit.css">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets/css/font-awesome.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script> <!--load all styles -->


<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];
	if ($varsesion == null || $varsesion = '') {
		if (!isset($_SESSION['user_is_login']) || @$_SESSION['user_is_login'] == false) {

			include('header.html');
		}
	} else {
		include('headerLogueado.php');
	}
	?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Contáctenos</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
    <div class="contact-page">
		<div class="row">
			
				<div class="col-md-12 contact-map outer-bottom-vs">
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.0080692193424!2d80.29172299999996!3d13.098675000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f446a1c3187%3A0x298011b0b0d14d47!2sTransvelo!5e0!3m2!1sen!2sin!4v1412844527190" width="600" height="450"  style="border:0"></iframe> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1160.0279784354148!2d-77.08546199997383!3d-12.053600887295445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c948b35b5215%3A0x61fa9ffc92559366!2sCafeter%C3%ADa%20de%20la%20FISI!5e0!3m2!1ses!2spe!4v1641770406781!5m2!1ses!2spe" width="600" height="450" style="border:0;"></iframe>
				</div>
				<div class="col-md-8 contact-form">
	<div class="col-md-12 contact-title">
		<h4>Contáctenos</h4>
	</div>
	<div class="col-md-4 ">
		<form class="register-form" role="form">
			<div class="form-group">
		    <label class="info-title" for="exampleInputName">Nombre <span>*</span></label>
		    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="" required>
		  </div>
		</form>
	</div>
	<div class="col-md-4">
		<form class="register-form" role="form">
			<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Correo <span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" required>
		  </div>
		</form>
	</div>
	<div class="col-md-4">
		<form class="register-form" role="form">
			<div class="form-group">
		    <label class="info-title" for="exampleInputTitle">Titulo <span>*</span></label>
		    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="" required>
		  </div>
		</form>
	</div>
	<div class="col-md-12">
		<form class="register-form" role="form">
			<div class="form-group">
		    <label class="info-title" for="exampleInputComments">Mensaje <span>*</span></label>
		    <textarea class="form-control unicase-form-control" id="exampleInputComments"></textarea required>
		  </div>
		</form>
	</div>
	<div class="col-md-12 outer-bottom-small m-t-20">
		<button id="send-formulario" type="submit" class="btn-upper btn btn-primary checkout-page-button">Enviar Mensaje</button>
	</div>
</div>
<div class="col-md-4 contact-info">
	<div class="contact-title">
		<h4>información</h4>
	</div>
	<div class="clearfix address">
		<span class="contact-i"><i class="fa fa-map-marker"></i></span>
		<span class="contact-span">Jirón de la Unión 704, Cercado de Lima 15001</span>
	</div>
	<div class="clearfix phone-no">
		<span class="contact-i"><i class="fa fa-mobile"></i></span>
		<span class="contact-span">+(51) 954 433 442 <br>+(51) 756-7890</span>
	</div>
	<div class="clearfix email">
		<span class="contact-i"><i class="fa fa-envelope"></i></span>
		<span class="contact-span"><a href="#">soporte-online@replay.pe</a></span>
	</div>
</div>			</div><!-- /.contact-page -->
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->
  <?php include('footer.html'); ?>
  <script src="assets/js/pedido3.js"></script>
<!-- ============================================================= FOOTER : END============================================================= --> 

</body>

</html>