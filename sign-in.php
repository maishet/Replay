
 

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
  <meta name="google-signin-client_id" content="89839726237-qjm73i6o825m11gp0h94u2m931r86ktv.apps.googleusercontent.com">
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
  <?php include('config.php'); ?>
  <?php include('oauth-user.php'); ?>
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
            
            <?php
                      //If no $accessToken is set then user should log in first
              if(isset($accessToken)) {
                if(isset($_SESSION['facebook_access_token'])){
                  $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
                } else {
                  // Put short-lived access token in session
                  $_SESSION['facebook_access_token'] = (string) $accessToken;
                  
                  // The OAuth 2.0 client handler helps us manage access tokens
                  $oAuth2Client = $fb->getOAuth2Client();
                  
                  if(!$accessToken->isLongLived()) {
                    //Exchanges a short-lived access token for a long-lived one
                    try {
                      $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
                      $_SESSION['facebook_access_token'] = (string) $accessToken;
                    } catch (Facebook\Exceptions\FacebookSDKException $e) {
                      echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                      exit;
                    }
                  }			
                }
                
                // Redirect the user back to the same page if url has "code" parameter in query string
                if(isset($_GET['code'])){
                  header('Location: ./');
                }
                
                
                // Getting user facebook profile info
                try {
                  $profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
                  $fbUserData = $profileRequest->getGraphNode()->asArray();
                  
                  //Ceate an instance of the OauthUser class
                  $oauth_user_obj = new OauthUser();
                  $userData = $oauth_user_obj->verifyUser($fbUserData);
                } catch(FacebookResponseException $e) {
                  echo 'Graph returned an error: ' . $e->getMessage();
                  session_destroy();
                  // Redirect user back to app login page
                  header("Location: ./");
                  exit;
                } catch(FacebookSDKException $e) {
                  echo 'Facebook SDK returned an error: ' . $e->getMessage();
                  session_destroy();
                  // Redirect user back to app login page
                  header("Location: ./");
                  exit;
                }
              
              
                // Get logout url
                //$logoutURL = $helper->getLogoutUrl($accessToken, 'http://localhost/mit-demos/facebook-login/logout.php');
                
              
                
              } else {
                // Get login url
                $loginUrl = $helper->getLoginUrl($redirectUrl);
                echo '<a class="facebook-sign-in" href="'.htmlspecialchars($loginUrl).'"><i class="fa fa-facebook"></i> Inicia sesión con facebook</a>';
              }
        ?>
              <a href="?login=Twitter" class="twitter-sign-in"><i class="fa fa-twitter"></i> Inicia sesión con Twitter</a>
            </div>
            <form action="validar.php" method="post" class="register-form outer-top-xs" role="form">
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Correo: <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="correo">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputPassword1">Contraseña: <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="contraseña">
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
            <form action="registrarse.php" method="post" class="register-form outer-top-xs" role="form">
              
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="nombre">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Apellido<span>*</span></label>
                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="apellido">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">DNI <span>*</span></label>
                <input type="number" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="DNI">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail2" >Correo <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="correo">
              </div>
              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Contraseña <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="contraseña">
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
  <script src="https://apis.google.com/js/platform.js" async defer></script><!-- PAra loguinb con google -->
  <script src="assets/js/signin.js"></script><!-- PAra loguinb con google -->
</body>

</html>