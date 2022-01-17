<!DOCTYPE html>
<html lang="es">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<link rel="shortcut icon" href="assets/images/favicon.png">
<title>Replay.com | Preguntas Frecuentes</title>

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
          <li><a href="home.html">Home</a></li>
          <li class='active'>Preguntas Frecuentes</li>
        </ul>
      </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
  </div><!-- /.breadcrumb -->

  <div class="body-content">
    <div class="container">
      <div class="checkout-box faq-page">
        <div class="row margen">
          <div class="col-md-12">
            <h2 class="heading-title">Preguntas Frecuentes </h2>
            <div class="contenedorAtencion">
              <div class="part1">Replay</div>
              <div class="part2">+(51) 954 433 442</div>
              <div class="part3">Contáctate con nuestro Servicio al Cliente vía telefónica o whatsapp</div>
            </div>
            <div class="panel-group checkout-steps" id="accordion">
              <!-- checkout-step-01  -->
              <div class="panel panel-default checkout-step-01">

                <!-- panel-heading -->
                <div class="panel-heading">
                  <h4 class="unicase-checkout-title">
                    <a data-toggle="collapse" class=" " data-parent="#accordion" href="#collapseOne">
                      <span>1</span>¿Cuáles son las formas de pago?
                    </a>
                  </h4>
                </div>
                <!-- panel-heading -->

                <div id="collapseOne" class="panel-collapse collapse in">

                  <!-- panel-body  -->
                  <div class="panel-body">
                    Cualquier compra de nuestra tienda online se puede pagar por tarjeta de crédito/débito, por
                    transferencia bancaria o por Paypal

                  </div>
                  <!-- panel-body  -->

                </div><!-- row -->
              </div>
              <!-- checkout-step-01  -->
              <!-- checkout-step-02  -->
              <div class="panel panel-default checkout-step-02">
                <div class="panel-heading">
                  <h4 class="unicase-checkout-title">
                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                      <span>2</span>Mi tarjeta me da un error y no puedo finalizar el pago a pesar de que tengo saldo de
                      sobra
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    La mayoría de transacciones denegadas son causadas por los límites de las tarjetas. Consulta con tu
                    entidad bancaria para poder subir el límite diario, semanal o mensual. El segundo fallo más común es
                    intentar hacer el pago con un navegador muy antiguo o desactualizado. Las pasarelas de pago
                    bancarias requieren un navegador actualizado para mantener tus datos seguros en todo momento.
                    Intenta hacer la compra desde otro navegador actualizado.

                  </div>
                </div>
              </div>
              <!-- checkout-step-02  -->

              <!-- checkout-step-03  -->
              <div class="panel panel-default checkout-step-03">
                <div class="panel-heading">
                  <h4 class="unicase-checkout-title">
                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                      <span>3</span>¿Me puedo fiar de darles los datos de mi tarjeta?
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    Desde Replay no tenemos acceso a tus datos bancarios en ningún momento. Al entrar en el proceso de
                    pago, se te redirecciona a la pasarela de pago segura del banco y así tus datos son totalmente
                    invisibles para nosotros. Una vez realizado el pago, es el banco el que nos da la confirmación
                    instantánea de que el pago se ha tramitado correctamente.

                  </div>
                </div>
              </div>
              <!-- checkout-step-03  -->

              <!-- checkout-step-04  -->
              <div class="panel panel-default checkout-step-04">
                <div class="panel-heading">
                  <h4 class="unicase-checkout-title">
                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour">
                      <span>4</span>Si pago por transferencia, ¿tardaré más en recibir mi compra?
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                    Al pagar por transferencia, el pago puede demorarse hasta 48 horas en días laborables. El envío se
                    realizará en el momento en el que el dinero sea recibido en nuestra cuenta. </div>
                </div>
              </div>
              <!-- checkout-step-04  -->

            </div><!-- /.checkout-steps -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.checkout-box -->
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
  <!-- ============================================================= FOOTER : END============================================================= -->
</body>

</html>