<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<title>Replay | Estado Pedido</title>

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

<!-- <div class="body-content outer-top-bd"> -->
<div class="body-content">
  <h1 class="titulo">Estado de mi pedido</h1>	
	<div class="container">
				<div class="col-md-12 texto">
          <div class="div1">
            <div class="espaciado"> <span>Número de Pedido: </span><label id="numpedido" for=""></label> </div>
            <div class="espaciado"> <span>Fecha de Compra: </span><label id="fechapedido" for=""></label></div>
            <div  class="espaciado"> <span>Total de la compra: </span><label id="totalpedido" for=""></label></div>  
          </div>
          <hr class="linea-horizontal">
            <div class="div3">
               <h2>Seguimiento de mi pedido</h2>
              <div id="seguimientoPedidoPasos">
                <div class="pedidoPasos">
                  <div class="pasos activo">
                    <i class='bx bx-box'></i>       
                    <p>Creación Orden de Compra: </p><label id="creacionpedido" for=""></label>
                  </div>
                  <hr class="linea-PedidoPasos linea-inactivo">
                  <div class="pasos inactivo">
                    <i class='bx bx-car'></i>
                    <p >Envío a tránsito:</p><label for="">03/08/2020 16:55</label>
                  </div>
                  <hr class="linea-PedidoPasos linea-inactivo">
                  <div class="pasos inactivo">
                    <i class='bx bx-check'></i>
                    <p >Entregado a Domicilio:</p><label for="">03/08/2020 16:55</label>
                  </div>
                </div>
              </div>
            </div>
            <hr class="linea-horizontal ">
            <div class="div4">
              <div >
                <i class='bx bx-calendar'></i>
                <span>Despacho Estimado: </span><label id="despachopedido" for=""></label>
              </div>
              <div >
                <i class='bx bxs-truck'></i>
                <span>Dirección de entrega: </span><label id="direccionpedido" for=""></label>
              </div>
            </div>
        </div>     
	</div>
        
	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->
<?php include('footer.html'); ?>
<script src="assets/js/pedido3.js"></script>
<!-- <script src="assets/js/compra.js"></script> -->
<script>
	const leapedido = new Carrito();
	cargarEventos();
	function cargarEventos() {
		document.addEventListener('DOMContentLoaded', leapedido.leerEstadoPedido());
	}
</script>

<!-- ============================================================= FOOTER : END============================================================= --> 

</body>

</html>