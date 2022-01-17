<?php
$conexion1 = mysqli_connect("localhost", "root", "", "database_to_import");

if (!empty($_POST)) {

  $alert = '';
  if (empty($_POST['nombres']) || empty($_POST['apellido']) || empty($_POST['correo']) || empty($_POST['id'])) {
    //$alert='<p>Todos los campos son obligatorios.</p>';
    echo '<script language="javascript">alert("Todos los campos son obligatorios.");</script>';
  } else {
    $idoauth = $_POST['id'];
    $newnombre = $_POST['nombres'];
    $newapellido = $_POST['apellido'];
    //$newcontraseña=$_POST['contraseña'];
    $newemail = $_POST['correo'];
    $consulta2 = "SELECT*FROM users where email='$newemail'";
    $newquery = mysqli_query($conexion1, $consulta2);
    $newresult = mysqli_fetch_array($newquery);

    if ($newresult > 0) {
      //$alert='<p>El correo ya existe.</p>';
      echo '<script language="javascript">alert("El correo ya existe.");</script>';
    } else {

      $consulta3 = "UPDATE users 
                    SET first_name='$newnombre', email='$newemail', last_name='$newapellido'
                    WHERE oauth_id='$idoauth'";
      $sql_update = mysqli_query($conexion1, $consulta3);
    }
  }
}

if (empty($_GET['id'])) {
  header('Location: homeLogueado.php');
}
$iduser = $_GET['id'];

$consulta1 = "SELECT*FROM users where oauth_id='$iduser'";
$sql1 = mysqli_query($conexion1, $consulta1);
$result_sql = mysqli_num_rows($sql1);
if ($result_sql = 0) {
  header('Location:homeLogueado.php');
} else {

  while ($data = mysqli_fetch_array($sql1)) {
    $iduser = $data['oauth_id'];
    $idnombre = $data['first_name'];
    $idapellido = $data['last_name'];
    $idemail = $data['email'];
    $idpassword = $data['password'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="shortcut icon" href="assets/images/favicon.png">
  <title>Replay.com | Mi Cuenta</title>

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
          <li class='active'>Mi Cuenta</li>
        </ul>
      </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
  </div><!-- /.breadcrumb -->

  <div class="body-content">
    <div class="container">

      <div class="tamañoCuenta">
        <!-- Mis Datos -->
        <div class="cuadroActualizaDatos">

          <form class="" role="form" method="post">
            <div class="formActualizaDatos">
              <div class="">
                <div class="subtituloCuenta">Actualiza tus datos</div>
                <hr class="" width=100%>
                <p class="fontCuenta">Actualiza tus datos</p>
                <div class="form-group">
                  <input type="hidden" name="id" id="id" class="form-control unicase-form-control text-input" value="<?php echo ($iduser) ?>">
                  <label class="info-title" for="exampleInputEmail1">Nombre: <span>*</span></label>
                  <input type="text" name="nombres" id="nombres" class="form-control unicase-form-control text-input" value="<?php echo ($idnombre) ?>">
                </div>
                <div class="form-group">
                  <label class="info-title" for="exampleInputEmail1">Apellido: <span>*</span></label>
                  <input type="text" name="apellido" id="apellido" class="form-control unicase-form-control text-input" value="<?php echo ($idapellido) ?>">
                </div>
                <div class="form-group">
                  <label class="info-title" for="exampleInputPassword1">Correo: <span>*</span></label>
                  <input type="email" name="correo" id="correo" class="form-control unicase-form-control text-input" value="<?php echo ($idemail) ?>">
                </div>
              </div>
              <div class="posicionBoton">
                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Guardar</button>
              </div>
          </form>
        </div>

        <div class="cuadroCambioCuenta">
          <div>
            <form class="" role="form">
              <div class="contraseñaCambioCuenta">
                <div class="form-group">
                  <label class="info-title" for="exampleInputEmail1">Contraseña Actual: <span>*</span></label>
                  <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo ($idpassword) ?>">
                </div>
                <div class="form-group">
                  <label class="info-title" for="exampleInputPassword1">Contraseña Nueva : <span>*</span></label>
                  <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                </div>

              </div>
              <div class="botonchangeContraseña">
                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Cambiar contraseña</button>
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
  <?php include('footer.html'); ?>
  <script src="assets/js/pedido3.js"></script>
  <!-- ============================================================= FOOTER : END============================================================= -->

</body>

</html>