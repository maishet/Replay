<?php
$conexion1 = mysqli_connect("localhost", "root", "1234", "database_to_import");

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
  <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
  <!-- ============================================== HEADER ============================================== -->
  <?php session_start(); ?>
  <header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
      <div class="container">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">

              <li class="myaccount"><a href="miCuenta.php"><span>Mi cuenta</span></a></li>
              <li class="wishlist"><a href="#"><span>Lista de Deseos</span></a></li>
              <li class="Seguimiento"><a href="Seguimiento-Compras.php"><span>Seguimiento de Compras</span></a></li>
              <li class="login"><a href="logout.php"><span>Cerrar Sesión</span></a></li>
            </ul>
          </div>
          <!-- /.cnt-cart -->
          <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGOOOOOOOOOOOO ============================================================= -->
            <div class="logo"> <a href="home.php"> <img src="assets/images/david logo21.png" alt="logo"> </a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
              <form>
                <div class="control-group">
                  <ul class="categories-filter animate-dropdown">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categorias<b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="CategoryTecnologia.php"> Tecnología</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> ElectroHogar</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Muebles</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Deportes</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Calzado</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Salud y Belleza</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Moda Hombre</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Moda Mujer</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Moda Infantil</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Juguetería y Bebés</a></li>
                      </ul>
                    </li>
                  </ul>
                  <input class="search-field" placeholder="Buscar aquí..." />
                  <a class="search-button" href="#"></a>
                </div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>
          <!-- /.top-search-holder -->

          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">

            <!-- ============================================================= SEGUIMIENTO ============================================================= -->
            <!-- <a href="Seguimiento-Compras.php" class="bx bxs-truck bx-tada-hover"></a>       -->
            <!-- ============================================================= SEGUIMIENTO : END =============================================================-->

            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
            <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                  <div class="basket">
                    <div class="basket-item-count"><span id="cantCarrito" class="count"></span></div>
                    <div class="total-price-basket"> <span class="lbl">Carrito</span> <span id="precioCarrito" class="value"></span> </div>
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div id="carrito" class="cart-item product-summary">
                    <div class="row">
                      <!--                      <div class="col-xs-4">
                          <div class="image"> <a href="detail.html"><img src="assets/images/products/p4.jpg" alt=""></a> </div>
                        </div>
                        <div class="col-xs-7">
                          <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                          <div class="price">$600.00</div>
                        </div> -->
                      <table id="lista-carrito" class="table">
                        <tbody>

                        </tbody>
                      </table>
                      <!-- <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div> -->
                    </div>
                    <!-- /.cart-item -->
                    <div class="clearfix"></div>
                    <!-- <hr> -->
                    <div class="clearfix cart-total">
                      <div class="pull-right"> <span class="text">Sub Total :</span><span id="precioCarritoS" class='price'></span> </div>
                      <div class="clearfix"></div>
                      <a href="#" id="procesar-compra" class="btn btn-upper btn-primary btn-block m-t-20">Ir al carrito</a>
                    </div>
                    <!-- /.cart-total-->
                  </div>


                </li>
              </ul>
              <!-- /.dropdown-menu-->
            </div>
            <!-- /.dropdown-cart ENDDDDD-->
            <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
          </div>
          <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
      <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
              <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <li class="active dropdown"> <a href="home.php">Inicio</a> </li>
                  <li class="dropdown yamm mega-menu">
                    <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Ropa</a>
                    <ul class="dropdown-menu container">
                      <li>
                        <div class="yamm-content ">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">Hombre</h2>
                              <ul class="links">
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Shoes </a></li>
                                <li><a href="#">Jackets</a></li>
                                <li><a href="#">Sunglasses</a></li>
                                <li><a href="#">Sport Wear</a></li>
                                <li><a href="#">Blazers</a></li>
                                <li><a href="#">Shirts</a></li>
                              </ul>
                            </div>
                            <!-- /.col -->

                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">Mujer</h2>
                              <ul class="links">
                                <li><a href="#">Handbags</a></li>
                                <li><a href="#">Jwellery</a></li>
                                <li><a href="#">Swimwear </a></li>
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Flats</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Winter Wear</a></li>
                              </ul>
                            </div>
                            <!-- /.col -->

                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">Niño</h2>
                              <ul class="links">
                                <li><a href="#">Toys & Games</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">School Bags</a></li>
                                <li><a href="#">Lunch Box</a></li>
                                <li><a href="#">Footwear</a></li>
                              </ul>
                            </div>
                            <!-- /.col -->

                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">Niña</h2>
                              <ul class="links">
                                <li><a href="#">Sandals </a></li>
                                <li><a href="#">Shorts</a></li>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Jwellery</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Night Dress</a></li>
                                <li><a href="#">Swim Wear</a></li>
                              </ul>
                            </div>
                            <!-- /.col -->

                            <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="assets/images/banners/top-menu-banner.jpg" alt=""> </div>
                            <!-- /.yamm-content -->
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown mega-menu">
                    <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Tecnología <span class="menu-label hot-menu hidden-xs">hot</span> </a>
                    <ul class="dropdown-menu container">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                              <h2 class="title">Computación</h2>
                              <ul class="links">
                                <li><a href="CategoryTecnologia.php">Gaming PC</a></li>
                                <li><a href="CategoryTecnologia.php">Laptops</a></li>
                                <li><a href="CategoryTecnologia.php">Monitores</a></li>
                                <li><a href="CategoryTecnologia.php">Tablets</a></li>
                                <li><a href="CategoryTecnologia.php">Networking</a></li>
                                <li><a href="CategoryTecnologia.php">Software</a></li>
                                <li><a href="CategoryTecnologia.php">Lenovo</a></li>
                                <li><a href="CategoryTecnologia.php">Microsoft</a></li>
                                <li><a href="CategoryTecnologia.php">Asus</a></li>
                                <li><a href="CategoryTecnologia.php">Monitores</a></li>
                                <li><a href="CategoryTecnologia.php">Accesorios</a></li>
                              </ul>
                            </div>
                            <!-- /.col -->

                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                              <h2 class="title">Auriculares</h2>
                              <ul class="links">
                                <li><a href="CategoryTecnologia.php">Audífonos Gamer</a></li>
                                <li><a href="CategoryTecnologia.php">Auriculares Portátiles</a></li>
                                <li><a href="CategoryTecnologia.php">Auriculares DJ</a></li>
                                <li><a href="CategoryTecnologia.php">Auriculares con micrófono</a></li>
                                <li><a href="CategoryTecnologia.php">Auriculares con cancelación de ruido activa</a></li>
                                <li><a href="CategoryTecnologia.php">Auriculares deportivos</a></li>
                                <li><a href="CategoryTecnologia.php">Auriculares inalámbricos</a></li>
                              </ul>
                            </div>
                            <!-- /.col -->

                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                              <h2 class="title">Mouses</h2>
                              <ul class="links">
                                <li><a href="CategoryTecnologia.php">Mouses Gaming</a></li>
                                <li><a href="CategoryTecnologia.php">Mouses Portátiles</a></li>
                                <li><a href="CategoryTecnologia.php">Mouse de Oficina</a></li>
                                <li><a href="CategoryTecnologia.php">Mouse Ergonómico</a></li>
                                <li><a href="CategoryTecnologia.php">Mouse inalámbrico</a></li>
                                <li><a href="CategoryTecnologia.php">Logitech</a></li>
                                <li><a href="CategoryTecnologia.php">Razer</a></li>
                                <li><a href="CategoryTecnologia.php">HyperX</a></li>
                                <li><a href="CategoryTecnologia.php">Corsair</a></li>
                              </ul>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                              <h2 class="title">Televisores</h2>
                              <ul class="links">
                                <li><a href="CategoryTecnologia.php">Televisores LED</a></li>
                                <li><a href="CategoryTecnologia.php">Televisores Plasma</a></li>
                                <li><a href="CategoryTecnologia.php">Televisores LCD</a></li>
                                <li><a href="CategoryTecnologia.php">Televisores 3D</a></li>
                                <li><a href="CategoryTecnologia.php">Televisores Smart TV</a></li>
                                <li><a href="CategoryTecnologia.php">Televisores 4K</a></li>
                                <li><a href="CategoryTecnologia.php">Televisores Smart TV</a></li>
                                <li><a href="CategoryTecnologia.php">Philips</a></li>
                                <li><a href="CategoryTecnologia.php">Panasonic</a></li>
                                <li><a href="CategoryTecnologia.php">Toshiba</a></li>
                              </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner"> <a href="#"><img alt="" src="assets/images/banners/banner-laptop.jpg"></a> </div>
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.yamm-content -->
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown hidden-sm"> <a href="category.html">Salud y Belleza <span class="menu-label new-menu hidden-xs">new</span> </a> </li>
                  <li class="dropdown hidden-sm"> <a href="category.html">Deportes</a> </li>
                  <li class="dropdown"> <a href="contact.html">ElectroHogar</a> </li>
                  <li class="dropdown"> <a href="contact.html">Muebles</a> </li>
                  <li class="dropdown"> <a href="contact.html">Calzado</a> </li>
                  <li class="dropdown"> <a href="contact.html">Jugueteria y Bebés</a> </li>
                  <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">XD</a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-menu">
                              <ul class="links">
                                <li><a href="home.php">Inicio</a></li>
                                <li><a href="category.html">Categoria</a></li>
                                <li><a href="detail.html">Detail</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Detail</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                                <li><a href="my-wishlist.html">Wishlist</a></li>
                                <li><a href="terms-conditions.html">Terms and Condition</a></li>
                                <li><a href="Seguimiento-Compras.php">Seguimiento de Compras</a></li>
                                <li><a href="product-comparison.html">Product-Comparison</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="404.html">404</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown  navbar-right special-menu"> <a href="#">Get 30% off on selected items</a> </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
              </div>
              <!-- /.nav-outer -->
            </div>
            <!-- /.navbar-collapse -->

          </div>
          <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
      </div>
      <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

  </header>



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
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                      <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                      <p>+(888) 123-4567<br>
                        +(888) 456-7890</p>
                    </div>
                  </li>
                  <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
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
        <div class="col-xs-12 col-sm-4 no-padding copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </div>
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