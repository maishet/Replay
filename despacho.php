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
                <span class="fbra_text fbra_text fbra_checkoutDeliverySteps__yourBasketStepText" title="">Carrito de Compras</span>
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
<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div id="procesar-pago"class="shopping-cart">
				<div class="shopping-cart-table ">
                    
</div><!-- /.shopping-cart-table -->
<!-- ============================================== CONTENT BOLSA  ============================================== -->


<div class="col-md-4 col-sm-12 cart-shopping-total">		<!-- cupon de descuento -->
	<table class="table">
		<thead>
			<tr>
				<th>
					<div class="cart-sub-total">
						Subtotal<span id="subtotal" class="inner-left-md"></span>
					</div>
					<div class="cart-descuento">
						<!-- Descuento<span id="cupondescuento" class="inner-left-md">S/. 0</span> -->
					</div>
					<div class="cart-grand-total">
						Total<span id="total" class="inner-left-md"></span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="cart-checkout-btn pull-right">
							<button type="submit" class="btn btn-primary checkout-btn">CONTINUAR</button>
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================== CONTENT BOLSA : END ============================================== -->

<span class="footer-more-product"><a href="home.php">Ver más productos</a></span>

<!-- ============================================================= FOOTER ============================================================= -->

<?php include 'footer.html'; ?>
<!-- <script src="assets/js/pedido.js"></script> -->
<script src="assets/js/compra.js"></script>
<!-- ============================================================= FOOTER : END============================================================= --> 
</body>

</html>