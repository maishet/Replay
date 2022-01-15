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
	<link rel="stylesheet" href="assets/css/estilocopia.css">

	<!-- Icons/Glyphs -->
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script> load all styles -->

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
			<div class="fbra_tabSet fbra_payment_redesign fbra_checkoutDeliverySteps step__2 fbra_test_checkoutDeliverySteps">
				<div class="fbra_tab fbra_checkoutDeliverySteps__yourBasketStep fbra_test_checkoutDeliverySteps__yourBasketStep fbra_tab--completed fbra_tab--enabled fbra_tab--active">
					<span class="fbra_text fbra_text fbra_checkoutDeliverySteps__yourBasketStepText" title="">Carrito de
						Compras</span>
				</div>
				<div class="fbra_tab fbra_checkoutDeliverySteps__easyDeliveryStep fbra_test_checkoutDeliverySteps__easyDeliveryStep fbra_tab--inProgress fbra_tab--enabled fbra_tab--active">
					<span class="fbra_text fbra_text fbra_checkoutDeliverySteps__easyDeliveryStepText fbra_selected" title="">Despacho</span>
				</div>
				<div class="fbra_tab fbra_checkoutDeliverySteps__securePaymentStep fbra_test_checkoutDeliverySteps__securePaymentStep fbra_tab--disabled fbra_tab--inactive">
					<span class="fbra_text fbra_text fbra_checkoutDeliverySteps__securePaymentStepText" title="">Pago</span>
				</div>
				<div class="fbra_tab fbra_checkoutDeliverySteps_confirmDeliveryStep fbra_test_checkoutDeliverySteps_confirmDeliveryStep fbra_tab--disabled fbra_tab--disabled fbra_tab--inactive">
					<span class="fbra_text fbra_text fbra_checkoutDeliverySteps__confirmDeliveryStepText" title="">Confirmación</span>
				</div>
			</div>
		</div>
	</div>

	<!-- ============================================== CONTENT BOLSA  ============================================== -->
	<div class="fbra_container fbra_mainContainer">
		<!-- Main content -->
		<div class="fbra_mainContent">

			<div id="fbra_checkoutRegionAndComuna">

				<div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutRegionAndComuna">
					<div class="fbra_deliveryOptionsTitle">
						<h2 class="movil">Elige tus opciones de despacho</h2>
					</div>
					<section class="fbra_appContainer fbra_test_appContainer">

						<section id="aplicardireccion" class="fbra_appContainer__formContainer fbra_test_appContainer__formContainer">

							<p class="fbra_paragraph fbra_unrecognizedUser__useOrEditText">Selecciona el Departamento, Provincia y Distrito donde quieres despachar o retirar tus productos</p>
							<div class="contieneNumberAndAcompaña">
								<div class="numberCircle">1</div>
								<div class="acompañaCircle">Ingrese tu dirección</div>
							</div>
							<form class="fbra_appContainer__form fbra_test_appContainer__form">
								<div class="fbra_loadingWrapper">
									<div class="fbra_appContainer__selectField fbra_test_appContainer__selectField">
										<div class="fbra_formItem fbra_formItem--Select fbra_input--region">
											<div class="fbra_test_selectItem fbra_selectItem fbra_formItem__region"><label for="region" class="fbra_label fbra_selectItem__label fbra_inputTooltip fbra_test_selectItem__label">Departamento<p class="fbra_label_title"></p></label>
												<select id="region" class="fbra_select fbra_formItem__region class-depa">
													<option class="fbra_selectOption" value="">Por favor selecciona un departamento</option>
													<option class="fbra_selectOption" value="ANCASH">ANCASH</option>
													<option class="fbra_selectOption" value="APURIMAC">APURIMAC</option>
													<option class="fbra_selectOption" value="AREQUIPA">AREQUIPA</option>
													<option class="fbra_selectOption" value="AYACUCHO">AYACUCHO</option>
													<option class="fbra_selectOption" value="CAJAMARCA">CAJAMARCA</option>
													<option class="fbra_selectOption" value="CUZCO">CUZCO</option>
													<option class="fbra_selectOption" value="HUANCAVELICA">HUANCAVELICA</option>
													<option class="fbra_selectOption" value="HUANUCO">HUANUCO</option>
													<option class="fbra_selectOption" value="ICA">ICA</option>
													<option class="fbra_selectOption" value="JUNIN">JUNIN</option>
													<option class="fbra_selectOption" value="LA LIBERTAD">LA LIBERTAD</option>
													<option class="fbra_selectOption" value="LAMBAYEQUE">LAMBAYEQUE</option>
													<option class="fbra_selectOption" value="LIMA">LIMA</option>
													<option class="fbra_selectOption" value="LORETO">LORETO</option>
													<option class="fbra_selectOption" value="MOQUEGUA">MOQUEGUA</option>
													<option class="fbra_selectOption" value="PASCO">PASCO</option>
													<option class="fbra_selectOption" value="PIURA">PIURA</option>
													<option class="fbra_selectOption" value="PUNO">PUNO</option>
													<option class="fbra_selectOption" value="SAN MARTIN">SAN MARTIN</option>
													<option class="fbra_selectOption" value="TACNA">TACNA</option>
													<option class="fbra_selectOption" value="TUMBES">TUMBES</option>
													<option class="fbra_selectOption" value="UCAYALI">UCAYALI</option>
												</select>
											</div>
										</div>
									</div>
									<div class="fbra_appContainer__selectField fbra_test_appContainer__selectField">
										<div class="fbra_formItem fbra_formItem--Select fbra_input--ciudad">
											<div class="fbra_test_selectItem fbra_selectItem fbra_formItem__ciudad"><label for="ciudad" class="fbra_label fbra_selectItem__label fbra_inputTooltip fbra_test_selectItem__label">Provincia<p class="fbra_label_title"></p></label>
												<select id="ciudad" class="fbra_select fbra_formItem__ciudad class-prov">
													<option class="fbra_selectOption" value="">Selecciona una provincia</option>
													<option class="fbra_selectOption" value="BARRANCA">BARRANCA</option>
													<option class="fbra_selectOption" value="CAJATAMBO">CAJATAMBO</option>
													<option class="fbra_selectOption" value="CANTA">CANTA</option>
													<option class="fbra_selectOption" value="CAÑETE">CAÑETE</option>
													<option class="fbra_selectOption" value="HUAROCHIRÍ">HUAROCHIRÍ</option>
													<option class="fbra_selectOption" value="HUAURA">HUAURA</option>
													<option class="fbra_selectOption" value="LIMA">LIMA</option>
													<option class="fbra_selectOption" value="OYON">OYON</option>
													<option class="fbra_selectOption" value="YAUYOS">YAUYOS</option>
												</select>
											</div>
										</div>
									</div>
									<div class="fbra_appContainer__selectField fbra_test_appContainer__selectField">
										<div class="fbra_formItem fbra_formItem--Select fbra_input--comuna">
											<div class="fbra_test_selectItem fbra_selectItem fbra_formItem__comuna"><label for="comuna" class="fbra_label fbra_selectItem__label fbra_inputTooltip fbra_test_selectItem__label">Distrito<p class="fbra_label_title"></p></label>
												<select id="comuna" class="fbra_select fbra_formItem__comuna class-dist">
													<option class="fbra_selectOption" value="">Selecciona un distrito</option>
													<option class="fbra_selectOption" value="ANCÓN">ANCÓN</option>
													<option class="fbra_selectOption" value="ATE">ATE</option>
													<option class="fbra_selectOption" value="BARRANCO">BARRANCO</option>
													<option class="fbra_selectOption" value="BREÑA">BREÑA</option>
													<option class="fbra_selectOption" value="CARABAYLLO">CARABAYLLO</option>
													<option class="fbra_selectOption" value="CHACLACAYO">CHACLACAYO</option>
													<option class="fbra_selectOption" value="CHORRILLOS">CHORRILLOS</option>
													<option class="fbra_selectOption" value="CIENEGUILLA">CIENEGUILLA</option>
													<option class="fbra_selectOption" value="EL AGUSTINO">EL AGUSTINO</option>
													<option class="fbra_selectOption" value="INDEPENDENCIA">INDEPENDENCIA</option>
													<option class="fbra_selectOption" value="JESÚS MARÍA">JESÚS MARÍA</option>
													<option class="fbra_selectOption" value="LA MOLINA">LA MOLINA</option>
													<option class="fbra_selectOption" value="LA VICTORIA">LA VICTORIA</option>
													<option class="fbra_selectOption" value="LIMA">LIMA</option>
													<option class="fbra_selectOption" value="LINCE">LINCE</option>
													<option class="fbra_selectOption" value="LOS OLIVOS">LOS OLIVOS</option>
													<option class="fbra_selectOption" value="LURIGANCHO-CHOSICA">LURIGANCHO-CHOSICA</option>
													<option class="fbra_selectOption" value="LURÍN">LURÍN</option>
													<option class="fbra_selectOption" value="MAGDALENA DEL MAR">MAGDALENA DEL MAR</option>
													<option class="fbra_selectOption" value="MIRAFLORES">MIRAFLORES</option>
													<option class="fbra_selectOption" value="PACHACÁMAC">PACHACÁMAC</option>
													<option class="fbra_selectOption" value="PUCUSANA">PUCUSANA</option>
													<option class="fbra_selectOption" value="PUEBLO LIBRE">PUEBLO LIBRE</option>
												</select>
											</div>
										</div>
									</div>

								</div>
							</form>
							<div>
								<div class="cuadroBotonRegresar">
									<a href="shopping-cart.php"><button type="" class="botonRegresar">Regresar</button></a>
								</div>
								<div class="cuadroBotonContinuar">
									<a href="subdespacho.php"><button type="submit" class="botonContinuar">Continuar</button></a>
								</div>
							</div>
						</section>
					</section>
				</div>

			</div>

			<div id="fbra_checkoutDeliverAndCollect">
				<div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutDeliverAndCollect"></div>
			</div>

			<div id="fbra_checkoutDeliveryActions"></div>

			<div id="fbra_checkoutSignIn">
				<section class="fbra_falabellaComponent fbra_falabellaComponentCheckoutSignIn">
					<div class="props context refs updater state _reactInternalFiber"></div>
				</section>
			</div>

			<div id="fbra_checkoutTemporaryPassword">
				<div class="props context refs updater state _reactInternalFiber"></div>
			</div>


		</div>
		<!-- Main content ends -->

		<!-- Sidebar -->
		<div class="fbra_sidebar">
			<h2 class="fbra_heading fbra_test_orderSummary__orderSummaryHeading fbra_orderSummary__orderSummaryHeading arregloo">
				<center>Resumen de tu orden</center>
			</h2>
			<div id="fbra_checkoutOrderSummary" class="contorno">

				<div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutOrderSummary payment-redesign">
					<section class="fbra_section fbra_orderSummary" title="">
						<div class="fbra_loadingWrapper">
							<div class="sss"><span class="fbra_text fbra_test_orderSummary__numberOfItems fbra_orderSummary__numberOfItems" title="">Productos </span><span class="fbra_text fbra_test_orderSummary__itemsTotalPrice fbra_orderSummary__itemsTotalPrice" title=""></span></div>
							<div class="fbra_test_orderSummary__itemsContainer fbra_orderSummary__itemsContainer">
								<!-- wea de productos-->
								<ol id="prodresumen" class="fbra_test_orderSummary__items fbra_orderSummary__items">
									<!-- wea de productos-->
								</ol>
							</div><a class="fbra_anchor fbra_test_orderSummary__editItems fbra_orderSummary__editItems fbra_OrderSummary__edit" href="shopping-cart.php" target="" title="" defaultclassname="fbra_anchor" classnames="">Volver a la Bolsa</a>
							<!-- wea de precios-->
							<ul id="weaderesumen" class="fbra_test_orderSummary__totalCosts fbra_orderSummary__totalCosts">
								<!-- wea de precios-->
							</ul>
						</div>
					</section>
				</div>
			</div>
		</div>
		<!-- Sidebar ends -->

		<!-- MainFooter -->
		<div class="fbra_mainContentFooter">
		</div>
		<!-- Sidebar ends -->
	</div>
	<!-- ============================================== CONTENT BOLSA : END ============================================== -->

	<span class="footer-more-product"><a href="home.php">Ver más productos</a></span>

	<!-- ============================================================= FOOTER ============================================================= -->

	<?php include 'footer.html'; ?>
	<!-- <script src="assets/js/pedido.js"></script> -->
	<script src="assets/js/despachocompra.js"></script>
	<script src="assets/js/direccion-despacho.js"></script>
	<!-- ============================================================= FOOTER : END============================================================= -->
</body>

</html>