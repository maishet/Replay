<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<title>Replay.com | Mi Lista de Deseos</title>

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
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script> -->


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
					<li><a href="home.html">Inicio</a></li>
					<li class='active'>Lista de Deseos</li>
				</ul>
			</div><!-- /.breadcrumb-inner -->
		</div><!-- /.container -->
	</div><!-- /.breadcrumb -->

	<div class="body-content">
		<div class="container">
			<div id="divlista_deseos" class="my-wishlist-page">
				<!-- el contenedor para colocar  -->
				<div class="row">
					<div class="col-md-12 my-wishlist">
						<div class="table-responsive">
							<table id="lista_deseos" class="table">
								<!-- la tabla para colocar los productos -->
								<thead>
									<tr>
										<th colspan="4" class="heading-title">Mi Lista de Deseos</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
							</table>
							<tfoot></tfoot>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.sigin-in-->
			<!-- ============================================== BRANDS CAROUSEL ============================================== -->
			<div id="brands-carousel" class="logo-slider wow fadeInUp">

				<div class="logo-slider-inner">
					<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
						<div class="item m-t-15">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item m-t-10">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->

						<div class="item">
							<a href="#" class="image">
								<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
							</a>
						</div>
						<!--/.item-->
					</div><!-- /.owl-carousel #logo-slider -->
				</div><!-- /.logo-slider-inner -->

			</div><!-- /.logo-slider -->
			<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
		</div><!-- /.container -->
	</div><!-- /.body-content -->
	<!-- ============================================================= FOOTER ============================================================= -->
	<?php include('footer.html'); ?>
	<script src="assets/js/pedido3.js"></script>
	<!-- <script src="assets/js/compra.js"></script> -->
	<script src="assets/js/procesardeseo.js"></script>
	<!-- ============================================================= FOOTER : END============================================================= -->
</body>

</html>