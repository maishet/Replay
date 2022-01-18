<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<title>Replay | Seguimiento</title>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script> -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

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
					<li><a href="home.php">Inicio</a></li>
					<li class='active'>Seguimiento de Compras</li>
				</ul>
			</div><!-- /.breadcrumb-inner -->
		</div><!-- /.container -->
	</div><!-- /.breadcrumb -->

	<div class="body-content">
		<div class="container ">
			<div class="track-order-page">
				<div class="row">
					<div id="buscarPedido" class="col-md-12">
						<div style="background-color: #3D5C98;padding:5%; margin: 0 0 3%;">
							<h2 style="color:#FFF; font-size: 44px;"> <b>SEGUIMIENTO DE COMPRA</b> </h2>
						</div>
						<form class="register-form outer-top-xs" role="form">
							<div class="form-group " style="margin:1% 25%;">
								<label class="info-title" for="exampleOrderId1"><b> Ingresa tu número de pedido </b></label>
								<input type="text" class="form-control unicase-form-control text-input" id="textbuscar" style="margin: 4% 0%;border-radius: 15px;border: 1px solid #666666; ">
								<label class="info-title" for="exampleOrderId1" style="font-size: 12px;">¿Dónde encuentro mi número de pedido? </label>
								<div style="text-align:center;margin: 4%;">
									<div class="g-recaptcha" data-sitekey="6Ld3Nx0eAAAAAPI4k_nlIrZ8aWEucq6U_HCuQ9BZ" style="display:flex; justify-content: space-around; "></div>
									<br />
									<div id="status"></div>
								</div>
							</div>
						</form>
						<div style="text-align: center; ;">
							<button type="submit" class="btn-upper btn btn-primary checkout-page-button" style="margin:1% 25%;background-color:#3D5C98;padding: 0.7% 9%" type="button" onclick="descargar()" value="BUSCAR">BUSCAR</button>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.sigin-in-->

			<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
		</div><!-- /.container -->
	</div><!-- /.body-content -->
	<!-- ============================================================= FOOTER ============================================================= -->

	<!-- ============================================================= FOOTER ============================================================= -->

	<?php include('footer.html'); ?>
	<script src="assets/js/pedido3.js"></script>
	<!-- <script src="assets/js/compra.js"></script> -->
	<script>
		function descargar() {
			var response = grecaptcha.getResponse();
			if (response.length == 0) {
				document.getElementById('status').innerHTML = '<p style="color:red;">Por favor verifica que no eres un robot</p>';
			}
		}
	</script>
	<script src="assets/js/pedidoSeguimiento.js"></script>
	<!-- ============================================================= FOOTER : END============================================================= -->
</body>

</html>