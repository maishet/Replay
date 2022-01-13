<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<title>Replay.com | Despacho</title>

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
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script> load all styles -->

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800"
		rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
		rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
	<!-- ============================================== HEADER ============================================== -->


	<!-- ?php include('header.html'); ?-->

	<!-- ============================================== HEADER : END ============================================== -->
	<div class="breadcrumb">
		<div class="container">
			<div class="breadcrumb-inner">
				<ul class="list-inline list-unstyled">
					<li><a href="home.php">Inicio</a></li>
					<li class='active'>Despacho de Compras</li>
				</ul>
			</div><!-- /.breadcrumb-inner -->
		</div><!-- /.container -->
	</div><!-- /.breadcrumb -->

	<!--copia falabella -->

	<div id="fbra_checkoutDeliverySteps">
		<div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutDeliverySteps">
			<div
				class="fbra_tabSet fbra_payment_redesign fbra_checkoutDeliverySteps step__2 fbra_test_checkoutDeliverySteps">
				<div
					class="fbra_tab fbra_checkoutDeliverySteps__yourBasketStep fbra_test_checkoutDeliverySteps__yourBasketStep fbra_tab--completed fbra_tab--enabled fbra_tab--active">
					<span class="fbra_text fbra_text fbra_checkoutDeliverySteps__yourBasketStepText" title="">Carrito de
						Compras</span>
				</div>
				<div
					class="fbra_tab fbra_checkoutDeliverySteps__easyDeliveryStep fbra_test_checkoutDeliverySteps__easyDeliveryStep fbra_tab--completed fbra_tab--enabled fbra_tab--active">
					<span class="fbra_text fbra_text fbra_checkoutDeliverySteps__easyDeliveryStepText"
						title="">Despacho</span>
				</div>
				<div
					class="fbra_tab fbra_checkoutDeliverySteps__securePaymentStep fbra_test_checkoutDeliverySteps__securePaymentStep fbra_tab--inProgress fbra_tab--active">
					<span class="fbra_text fbra_text fbra_checkoutDeliverySteps__securePaymentStepText fbra_selected"
						title="">Pago</span>
				</div>
				<div
					class="fbra_tab fbra_checkoutDeliverySteps_confirmDeliveryStep fbra_test_checkoutDeliverySteps_confirmDeliveryStep fbra_tab--disabled fbra_tab--disabled fbra_tab--inactive">
					<span class="fbra_text fbra_text fbra_checkoutDeliverySteps__confirmDeliveryStepText"
						title="">Confirmación</span>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ============================================== CONTENT BOLSA  ============================================== -->
	<div class="body-content outer-top-xs">
		


		<div class="container">
			<div class="row ">
				<div id="procesar-pago" class="shopping-cart opcionFase1">
					<div class="shopping-cart-table ">
						

					</div><!-- /.shopping-cart-table -->
					<!-- ============================================== CONTENT BOLSA  ============================================== -->
					<div class="opcionesDespachoIzqPago">
						<ul class="acorh">
							<li id="opcion1"><a href="#opcion1" >Tarjetas de Crédito y Débito (Visa, Mastercard, Amex, Diners)</a>
								<ul>
								<li>
									<form class="formPago" role="form" method="post"> 
										<div>
											<div>
												<label class="info-title"  for="exampleInputEmail1" class="contenedorTexto">Numero de Tarjeta</label>
                  								<input type="text" name="" id="" class="inputText">
											</div>	
											<div class="contenedorGral">
												<div class="contenedorExpiracion">
													<label class="info-title"  for="exampleInputEmail1" class="contenedorTextoNro">Numero de Expiración</label>
													<input type="text" name="" id="" class="inputTextNro">
												</div>
												<div class="espaciador">

												</div>
												<div class="contenedorCVV">
													<label class="info-title"  for="exampleInputEmail1" class="contenedorTextoNro">Código CVV</label>
													<input type="text" name="" id="" class="inputTextNro">
												</div>
											</div>
											<div class="posicionBoton">
												<button type="submit" class="botonTarjeta">Usar Tarjeta</button>
											</div>

										</div>
									</form>
								</li>
								
								</ul>
							</li>
							<li id="opcion2" ><a href="#opcion2" >Pago con código QR (Yape, Lukita, Tunki) </a>
								<ul>
								<center>
								<img src="image/gif/qr.gif" class="gif">
								</center>
								</ul>
							</li>
							<li id="opcion3"><a href="#opcion3">Pago por banca móvil o banca por internet</a>
								<ul>
								<li><a href="URL31">Opción 3.1</a></li>
								<li><a href="URL32">Opción 3.2</a></li>
								</ul>
							</li>
							<li id="opcion4"><a href="#opcion4">Transferencia bancaria</a>
								<ul>
								<li><a href="URL21">Opción 2.1</a></li>
								<li><a href="URL22">Opción 2.2</a></li>
								<li><a href="URL23">Opción 2.3</a></li>
								</ul>
							</li>
						</ul>
						
					</div>

					<div class="opcionesPagoDer">
						<!-- cupon de descuento -->
						<table class="">
							<thead>
								<tr>
										<div class="tituloResumenCompra">
											Resumen de tu compra<span id="subtotal" class=""></span>
										</div>
								</tr>
							</thead><!-- /thead -->
							<thead class="cuadroColor">
								<div>
								<tr>
									<th>
										<div class="productosResumenCompra">
											Productos<span id="subtotal" class=""></span>
										</div>
										<div class="totalResumenCompra">
											Total<span id="total" class=""></span>
										</div>
									</th>
								</tr>
								</div>
							</thead><!-- /thead -->

							<thead id="prodresumen" class="cuadroColor">
								

								<!--=== code js ====-->

							</thead>
							<div class="iconoYVolverBolsa">
									<img src="image/icon/bolsa.png" width="35" height="35">
									<a href="#" class="enlaceVolverBolsa"> <u>Volver a la bolsa</u></a>
								</div>
							
							<thead id="weaderesumen" class="cuadroColor">

								<!--=== code js ====-->

							</thead>
							
						</table><!-- /table -->
					</div><!-- /.cart-shopping-total -->
				</div><!-- /.shopping-cart -->
			</div> <!-- /.row -->
			<!-- ============================================== BRANDS CAROUSEL ============================================== -->
			<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
		</div><!-- /.container -->
	</div><!-- /.body-content -->
	<!-- ============================================== CONTENT BOLSA : END ============================================== -->

	<span class="footer-more-product"><a href="home.php">Ver más productos</a></span>

	<!-- ============================================================= FOOTER ============================================================= -->

	<?php include 'footer.html'; ?>
	<!-- <script src="assets/js/pedido.js"></script> -->
	<script src="assets/js/despachocompra.js"></script>
	<!-- ============================================================= FOOTER : END============================================================= -->
</body>

</html>