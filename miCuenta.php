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
  <?php session_start();?>
    <?php 

      if(!isset($_SESSION['user_is_login']) || @$_SESSION['user_is_login']==false){

      include('header.html'); 
    }
    else{
      include('headerLogueado.html'); 
    }
    ?>
    
 

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

      <div class="tamañoCuenta">
        <!-- Mis Datos -->
        <div class="cuadroActualizaDatos">
          <form class="" role="form"> 
            
            <div class="formActualizaDatos">
              <div class="subtituloCuenta">Actualiza tus datos</div>
                <hr class="" width=100%>
              <p class="fontCuenta">Actualiza tus datos</p>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Nombre: <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Apellido: <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputPassword1">Correo: <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
              </div>
            </div>
            <div class="posicionBoton">
              <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Guardar</button>
            </div>
          </form>

          <div class="cuadroCambioCuenta">
            <div >
              <form class="" role="form"> 
                <div class="contraseñaCambioCuenta">
                  <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">Contraseña Actual: <span>*</span></label>
                    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label class="info-title" for="exampleInputPassword1">Contraseña Nueva  : <span>*</span></label>
                    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                  </div>
                  
                </div>
                <div class="botonchangeContraseña">
                  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Entrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Sign-in -->
        <div class="misComprasCuenta">
          <table>
            <tr>
              <th>&nbsp;&nbsp; Nombre del producto</th>
              <th>&nbsp;&nbsp;Valor</th>
              <th>&nbsp;&nbsp;Fecha de compra</th>
            </tr>
            <tr>
              <td>&nbsp;&nbsp;Peter</td>
              <td>&nbsp;&nbsp;Griffin</td>
              <td>&nbsp;&nbsp;Griffin</td>
            </tr>
            <tr>
              <td>&nbsp;&nbsp;Lois</td>
              <td>&nbsp;&nbsp;Griffin</td>
              <td>&nbsp;&nbsp;Griffin</td>
            </tr>
            <tr>
              <td>&nbsp;&nbsp;Lois</td>
              <td>&nbsp;&nbsp;Griffin</td>
              <td>&nbsp;&nbsp;Griffin</td>
            </tr>
          </table>
        </div>
        <!-- create a new account -->
        
      </div>
      
        
        <!-- create a new account -->
      <!-- /.row -->

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
  <footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="address-block">

              <!-- /.module-heading -->

              <div class="module-body">
                <ul class="toggle-footer" style="">
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                          class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                      <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                          class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                      <p>+(888) 123-4567<br>
                        +(888) 456-7890</p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i
                          class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body"> <span><a href="#">marazzo@themesground.com</a></span> </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Customer Service</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Corporation</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
          <!-- /.col -->

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
              <h4 class="module-title">Why Choose Us</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
              <ul class='list-unstyled'>
                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
              </ul>
            </div>
            <!-- /.module-body -->
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-bar">
      <div class="container">
        <div class="col-xs-12 col-sm-4 no-padding social">
          <ul class="link">
            <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
            <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
            <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
            <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
            <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
            <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
            <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 no-padding copyright"><a target="_blank"
            href="https://www.templateshub.net">Templates Hub</a> </div>
        <div class="col-xs-12 col-sm-4 no-padding">
          <div class="clearfix payment-methods">
            <ul>
              <li><img src="assets/images/payments/1.png" alt=""></li>
              <li><img src="assets/images/payments/2.png" alt=""></li>
              <li><img src="assets/images/payments/3.png" alt=""></li>
              <li><img src="assets/images/payments/4.png" alt=""></li>
              <li><img src="assets/images/payments/5.png" alt=""></li>
            </ul>
          </div>
          <!-- /.payment-methods -->
        </div>
      </div>
    </div>
  </footer>
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