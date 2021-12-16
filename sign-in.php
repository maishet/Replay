<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="MediaCenter, Template, eCommerce">
  <meta name="robots" content="all">
  <title>Marazzo premium HTML5 & CSS3 Template</title>

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
  <?php include('header.html'); ?>

  <!-- ============================================== HEADER : END ============================================== -->
  <div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="home.html">Home</a></li>
          <li class='active'>Login</li>
        </ul>
      </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
  </div><!-- /.breadcrumb -->

  <div class="body-content">
    <div class="container">
      <div class="sign-in-page">
        <div class="row">
          <!-- Sign-in -->
          <div class="col-md-6 col-sm-6 sign-in">
            <h4 class="">Loguin</h4>
            <p class="">Hola, Bienvenido a tu cuenta.</p>
            <div class="social-sign-in outer-top-xs">
              <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Inicia sesión con facebook</a>
              <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Inicia sesión con Twitter</a>
            </div>
            <form class="register-form outer-top-xs" role="form">
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Correo: <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputPassword1">Contraseña: <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
              </div>
              <div class="radio outer-xs">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Recordar!
                </label>
                <a href="#" class="forgot-password pull-right">¿Perdiste tu contraseña?</a>
              </div>
              <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Entrar</button>
            </form>
          </div>
          <!-- Sign-in -->

          <!-- create a new account -->
          <div class="col-md-6 col-sm-6 create-new-account">
            <h4 class="checkout-subtitle">Crear una nueva cuenta</h4>
            <p class="text title-tag-line">Crea una nueva cuenta.</p>
            <form class="register-form outer-top-xs" role="form">
              
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Apellido<span>*</span></label>
                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">DNI <span>*</span></label>
                <input type="number" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail2" >Correo <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Contraseña <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <input type="checkbox">	
                <label class="info-title" for="exampleInputEmail1">&nbsp;&nbsp;Acepto los terminos y condiciones <span>*</span></label>
              </div>
              
              
              <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Registrarse</button>
            </form>


          </div>
          <!-- create a new account -->
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

  <!-- ============================================== INFO BOXES ============================================== -->
  <div class="row our-features-box">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box">
            <div class="icon-truck"></div>
            <div class="content-blocks">We ship worldwide</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-support"></div>
            <div class="content-blocks">call
              +1 800 789 0000</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-money"></div>
            <div class="content-blocks">Money Back Guarantee</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-return"></div>
            <div class="content">30 days return</div>
          </div>
        </li>

      </ul>
    </div>
  </div>
  <!-- /.info-boxes -->
  <!-- ============================================== INFO BOXES : END ============================================== -->

  <!-- ============================================================= FOOTER ============================================================= -->
  <?php include('footer.html'); ?>
  <!-- ============================================================= FOOTER : END============================================================= -->

  <!-- For demo purposes – can be removed on production -->

  <!-- For demo purposes – can be removed on production : End -->

  <!-- JavaScripts placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/echo.min.js"></script>
  <script src="assets/js/jquery.easing-1.3.min.js"></script>
  <script src="assets/js/bootstrap-slider.min.js"></script>
  <script src="assets/js/jquery.rateit.min.js"></script>
  <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
  <script src="assets/js/bootstrap-select.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>