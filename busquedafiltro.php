<!DOCTYPE html>
<html lang="es">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<link rel="shortcut icon" href="assets/images/favicon.png">
<title>Replay.com</title>

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
<link rel="stylesheet" href="assets/css/jPages.css">

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
    <header class="header-style-1"> 
  
        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
          <div class="container">
            <div class="header-top-inner">
              <div class="cnt-account">
                <ul class="list-unstyled">
                  <!-- <li class="myaccount"><a href="#"><span>Mi cuenta</span></a></li> -->
                  <li class="wishlist"><a href="my-wishlist.php"><span>Lista de Deseos</span></a></li>
                  <li class="Seguimiento"><a href="Seguimiento-Compras.php"><span>Seguimiento de Compras</span></a></li>
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
                <!-- ============================================================= LOGO : END ============================================================= --> </div>
              <!-- /.logo-holder -->
              
              <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder"> 
                <!-- /.contact-row --> 
                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area">
                  <form>
                    <div class="control-group">
                      <ul class="categories-filter animate-dropdown">
                        <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categorias<b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu" >
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="CategoryTecnologia.php"> Tecnología</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="CategoryElectrohogar.php"> ElectroHogar</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="CategoryMuebles.php"> Muebles</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Deportes</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Calzado</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Salud y Belleza</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="CategoryModaHombre.php"> Moda Hombre</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="CategoryModaMujer.php"> Moda Mujer</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Moda Infantil</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Juguetería y Bebés</a></li>
                          </ul>
                        </li>
                      </ul>
                      <input type="text" id="textobuscar" class="search-field" placeholder="Buscar aquí..." />
                      <a class="search-button" href="#" id="botonbuscar"></a> </div>
                  </form>
                </div>
                <!-- /.search-area --> 
                <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
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
                  <ul  class="dropdown-menu">
                    <li>
                      <div id="carrito" class="cart-item product-summary">
                        <div class="row">
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
                          <a href="#" id="procesar-compra" class="btn btn-upper btn-primary btn-block m-t-20">Ir al carrito</a> </div>
                        <!-- /.cart-total--> 
                      </div>

                      
                    </li>
                  </ul>
                  <!-- /.dropdown-menu--> 
                </div>
                <!-- /.dropdown-cart ENDDDDD--> 
                <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
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
                                  <h2 class="title">Moda Hombre</h2>
                                  <ul class="links">
                                    <li><a href="CategoryModaHombre.php">Polos</a></li>
                                    <li><a href="CategoryModaHombre.php">Pantalones</a></li>
                                    <li><a href="CategoryModaHombre.php">Short</a></li>
                                    <li><a href="CategoryModaHombre.php">Ternos</a></li>
                                    <li><a href="CategoryModaHombre.php">Barbados</a></li>
                                    <li><a href="CategoryModaHombre.php">Bronco</a></li>
                                    <li><a href="CategoryModaHombre.php">JHON HOLDEN</a></li>
                                    <li><a href="CategoryModaHombre.php">Nike</a></li>
                                    <li><a href="CategoryModaHombre.php">Pionier</a></li>
                                    <li><a href="CategoryModaHombre.php">Jack & Jones</a></li>
                                  </ul>
                                </div>
                                <!-- /.col -->
                                
                                <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                  <h2 class="title">Moda Mujer</h2>
                                  <ul class="links">
                                    <li><a href="CategoryModaMujer.php">Polos</a></li>
                                    <li><a href="CategoryModaMujer.php">Blusas</a></li>
                                    <li><a href="CategoryModaMujer.php">Faldas </a></li>
                                    <li><a href="CategoryModaMujer.php">Pantalones</a></li>
                                    <li><a href="CategoryModaMujer.php">Jeans</a></li>
                                    <li><a href="CategoryModaMujer.php">Joggers</a></li>
                                    <li><a href="CategoryModaMujer.php">Short</a></li>
                                    <li><a href="CategoryModaMujer.php">INDEX</a></li>
                                    <li><a href="CategoryModaMujer.php">Pepe Jeans</a></li>
                                    <li><a href="CategoryModaMujer.php">Barbados</a></li>
                                    <li><a href="CategoryModaMujer.php">Vestidos</a></li>
                                    <li><a href="CategoryModaMujer.php">Lenceria</a></li>
                                  </ul>
                                </div>
                                <!-- /.col -->
                                
                                <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                  <h2 class="title">Niño</h2>
                                  <ul class="links">
                                    <li><a href="#">Polos</a></li>
                                    <li><a href="#">Camisas</a></li>
                                    <li><a href="#">Pantalones</a></li>
                                    <li><a href="#">Short</a></li>
                                    <li><a href="#">Poleras</a></li>
                                    <li><a href="#">Casacas</a></li>
                                    <li><a href="#">Harvest</a></li>
                                    <li><a href="#">Pepe Jeans</a></li>
                                    <li><a href="#">Cloudbreak</a></li>
                                  </ul>
                                </div>
                                <!-- /.col -->
                                
                                <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                  <h2 class="title">Niña</h2>
                                  <ul class="links">
                                    <li><a href="#">Polos</a></li>
                                    <li><a href="#">Blusas</a></li>
                                    <li><a href="#">Pantalones</a></li>
                                    <li><a href="#">Short</a></li>
                                    <li><a href="#">Poleras</a></li>
                                    <li><a href="#">Casacas</a></li>
                                    <li><a href="#">Colloky</a></li>
                                    <li><a href="#">Next</a></li>
                                    <li><a href="#">Levis</a></li>
                                  </ul>
                                </div>
                                <!-- /.col -->
                                
                                <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="image/FotosDanielcalato/Banner Ropa.jpg" alt=""> </div>
                                
                                <!-- /.yamm-content --> 
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown mega-menu"> 
                      <a href="#"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Tecnología</a>
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
                            <!-- /.yamm-content --> </li>
                        </ul>
                      </li>
                      
                      <li class="dropdown yamm mega-menu"> 
                      <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Salud y Belleza</a>
                          <ul class="dropdown-menu container">
                            <li>
                              <div class="yamm-content ">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                    <h2 class="title">Perfumes</h2>
                                    <ul class="links">
                                      <li><a href="#">Buy & Try</a></li>
                                      <li><a href="#">Hombre</a></li>
                                      <li><a href="#">Mujer</a></li>
                                      <li><a href="#">Sets</a></li>
                                    </ul>
                                  </div>
                                  <!-- /.col -->
                                  
                                  <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                    <h2 class="title">Maquillaje</h2>
                                    <ul class="links">
                                      <li><a href="#">Cejas</a></li>
                                      <li><a href="#">Brochas y Accesorios</a></li>
                                      <li><a href="#">Labios</a></li>
                                      <li><a href="#">Minis</a></li>
                                      <li><a href="#">Ojos</a></li>
                                      <li><a href="#">Rostro</a></li>
                                    </ul>
                                  </div>
                                  <!-- /.col -->
                                  
                                  <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                    <h2 class="title">Cuidado del Rostro</h2>
                                    <ul class="links">
                                      <li><a href="#">Hidratantes faciales</a></li>
                                      <li><a href="#">Limpiadores faciales</a></li>
                                      <li><a href="#">Bloqueadores faciales</a></li>
                                      <li><a href="#">Tratamiento de ojos</a></li>
                                      <li><a href="#">Tratamiento facial</a></li>
                                      <li><a href="#">Sets de rostro</a></li>
                                      <li><a href="#">Macarillas</a></li>
                                      <li><a href="#">Necesidades específicas</a></li>
                                    </ul>
                                  </div>
                                  <!-- /.col -->
                                  
                                  <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="image/FotosDanielcalato/skincare.jpg" alt=""> </div>
                                  <!-- /.yamm-content --> 
                                </div>
                              </div>
                            </li>
                          </ul>
                      </li>
                      
                      <li class="dropdown yamm mega-menu"> 
                      <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Deporte</a>
                            <ul class="dropdown-menu container">
                              <li>
                                <div class="yamm-content ">
                                  <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                      <h2 class="title">Ropa Deportiva Hombre</h2>
                                      <ul class="links">
                                        <li><a href="#">Buzos conjunto</a></li>
                                        <li><a href="#">Casacas y cortavientos</a></li>
                                        <li><a href="#">Pantalones y joggers</a></li>
                                        <li><a href="#">Polares</a></li>
                                        <li><a href="#">Poleras</a></li>
                                        <li><a href="#">Polos</a></li>
                                        <li><a href="#">Short</a></li>
                                      </ul>
                                    </div>
                                    <!-- /.col -->
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                      <h2 class="title">Ropa Deportiva Mujer</h2>
                                      <ul class="links">
                                        <li><a href="#">Buzos conjunto</a></li>
                                        <li><a href="#">Casacas y cortavientos</a></li>
                                        <li><a href="#">Mallas (leggings)</a></li>
                                        <li><a href="#">Pantalones y joggers</a></li>
                                        <li><a href="#">Polares</a></li>
                                        <li><a href="#">Poleras</a></li>
                                        <li><a href="#">Polos</a></li>
                                        <li><a href="#">Short</a></li>
                                        <li><a href="#">Top</a></li>
                                      </ul>
                                    </div>
                                    <!-- /.col -->
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                      <h2 class="title">Accesorios</h2>
                                      <ul class="links">
                                        <li><a href="#">Botellas y tomatodos</a></li>
                                        <li><a href="#p">Gorros y viseras</a></li>
                                        <li><a href="#">Mochilas y bolsos</a></li>
                                        <li><a href="#">Medias</a></li>
                                        <li><a href="#">Pelotas</a></li>
                                        <li><a href="#">Relojes</a></li>
                                      </ul>
                                    </div>
                                    <!-- /.col -->

                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                      <h2 class="title">Maquinas</h2>
                                      <ul class="links">
                                        <li><a href="#">Accesorios fitness</a></li>
                                        <li><a href="#">Bicicletas estacionarias</a></li>
                                        <li><a href="#">Bicicletas de spinning</a></li>
                                        <li><a href="#">Elípticas</a></li>
                                        <li><a href="#">Máquina de abdominales</a></li>
                                        <li><a href="#">Mini gimnasios</a></li>
                                        <li><a href="#">Pesas y macuernas</a></li>
                                        <li><a href="#">Trotadoras</a></li>
                                      </ul>
                                    </div>
                                    <!-- /.col -->
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="image/FotosDanielcalato/banner-deportivo.jpg" alt=""> </div>
                                  <!-- /.yamm-content --> 
                                </div>
                              </div>
                            </li>
                          </ul>
                      </li>

                      <li class="dropdown yamm mega-menu"> 
                      <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Electrohogar</a>
                              <ul class="dropdown-menu container">
                                <li>
                                  <div class="yamm-content ">
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                        <h2 class="title">Cocina</h2>
                                        <ul class="links">
                                          <li><a href="CategoryElectrohogar.php">Campanas</a></li>
                                          <li><a href="CategoryElectrohogar.php">Cocinas de mesa</a></li>
                                          <li><a href="CategoryElectrohogar.php">Cocinas de pie</a></li>
                                          <li><a href="CategoryElectrohogar.php">Combos de cocina</a></li>
                                          <li><a href="CategoryElectrohogar.php">Encimeras</a></li>
                                          <li><a href="CategoryElectrohogar.php">Hornos empotrables</a></li>
                                        </ul>
                                      </div>
                                      <!-- /.col -->
                                      
                                      <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                        <h2 class="title">Lavado</h2>
                                        <ul class="links">
                                          <li><a href="CategoryElectrohogar.php">Centros de lavado</a></li>
                                          <li><a href="CategoryElectrohogar.php">Lavadoras</a></li>
                                          <li><a href="CategoryElectrohogar.php">Lavasecas</a></li>
                                          <li><a href="CategoryElectrohogar.php">Lavavajillas</a></li>
                                          <li><a href="CategoryElectrohogar.php">Planchado</a></li>
                                          <li><a href="CategoryElectrohogar.php">Secadoras</a></li>
                                        </ul>
                                      </div>
                                      <!-- /.col -->
                                      
                                      <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                        <h2 class="title">Refrigeración</h2>
                                        <ul class="links">
                                          <li><a href="CategoryElectrohogar.php">Bottom freezer</a></li>
                                          <li><a href="CategoryElectrohogar.php">Cavas</a></li>
                                          <li><a href="CategoryElectrohogar.php">Congeladoras</a></li>
                                          <li><a href="CategoryElectrohogar.php">Frenchdoor</a></li>
                                          <li><a href="CategoryElectrohogar.php">Frigobares</a></li>
                                          <li><a href="CategoryElectrohogar.php">Vitrinas comerciales</a></li>
                                        </ul>
                                      </div>
                                      <!-- /.col -->
  
                                      
                                      <div class="col-xs-12 col-sm-6 col-md-5 col-menu banner-image"> <img class="img-responsive" src="image/FotosDanielcalato/banner_electrodomestico2.jpg" alt=""> </div>
                                  <!-- /.yamm-content --> 
                                </div>
                              </div>
                            </li>
                          </ul>
                      </li>

                      <li class="dropdown yamm mega-menu"> 
                      <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Muebles</a>
                              <ul class="dropdown-menu container">
                                <li>
                                  <div class="yamm-content ">
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                        <h2 class="title">Comedor</h2>
                                        <ul class="links">
                                          <li><a href="CategoryMuebles.php">Aparadores y vitrinas</a></li>
                                          <li><a href="CategoryMuebles.php">Bancos de bar</a></li>
                                          <li><a href="CategoryMuebles.php">Bares</a></li>
                                          <li><a href="CategoryMuebles.php">Juegos de comedor</a></li>
                                          <li><a href="CategoryMuebles.php">Mesas de comedor</a></li>
                                          <li><a href="CategoryMuebles.php">Sillas de comedor</a></li>
                                        </ul>
                                      </div>
                                      <!-- /.col -->
                                      
                                      <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                        <h2 class="title">Escritorio</h2>
                                        <ul class="links">
                                          <li><a href="CategoryMuebles.php">Escritorios</a></li>
                                          <li><a href="CategoryMuebles.php">Estantes</a></li>
                                          <li><a href="CategoryMuebles.php">Libreros</a></li>
                                          <li><a href="CategoryMuebles.php">Repisas</a></li>
                                          <li><a href="CategoryMuebles.php">Archivadores</a></li>
                                          <li><a href="CategoryMuebles.php">Sillas de escritorio</a></li>
                                        </ul>
                                      </div>
                                      <!-- /.col -->
                                      
                                      <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                        <h2 class="title">Sala</h2>
                                        <ul class="links">
                                          <li><a href="CategoryMuebles.php">Banquetas y puffs</a></li>
                                          <li><a href="CategoryMuebles.php">Butacas</a></li>
                                          <li><a href="CategoryMuebles.php">Centros entretemiento</a></li>
                                          <li><a href="CategoryMuebles.php">Futones y sofá cama</a></li>
                                          <li><a href="CategoryMuebles.php">Juegos de sala</a></li>
                                          <li><a href="CategoryMuebles.php">Mesas centro y laterales</a></li>
                                          <li><a href="CategoryMuebles.php">Seccionales</a></li>
                                          <li><a href="CategoryMuebles.php">Sofás</a></li>
                                          <li><a href="CategoryMuebles.php">Sofás reclinables</a></li>
                                        </ul>
                                      </div>
                                      <!-- /.col -->
  
                                      
                                      <div class="col-xs-12 col-sm-6 col-md-5 col-menu banner-image"> <img class="img-responsive" src="image/FotosDanielcalato/banner_muebles.jpg" alt=""> </div>
                                  <!-- /.yamm-content --> 
                                </div>
                              </div>
                            </li>
                          </ul>
                      </li>

                      <li class="dropdown yamm mega-menu"> 
                      <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Calzado</a>
                                <ul class="dropdown-menu container">
                                  <li>
                                    <div class="yamm-content ">
                                      <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                          <h2 class="title">Calzado Hombre</h2>
                                          <ul class="links">
                                            <li><a href="#">Botines</a></li>
                                            <li><a href="#">Mocasines</a></li>
                                            <li><a href="#">Sandalías</a></li>
                                            <li><a href="#">Shoe Care</a></li>
                                            <li><a href="#">Zapatos casuales</a></li>
                                            <li><a href="#">Zapatillas urbanas</a></li>
                                            <li><a href="#">Zapatos de vestir</a></li>
                                          </ul>
                                        </div>
                                        <!-- /.col -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                          <h2 class="title">Calzado Mujer</h2>
                                          <ul class="links">
                                            <li><a href="#">Botines</a></li>
                                            <li><a href="#">Sandalías</a></li>
                                            <li><a href="#">Zapatillas urbanas</a></li>
                                            <li><a href="#">Zapatos casuales</a></li>
                                            <li><a href="#">Zapatos de taco</a></li>
                                            <li><a href="#">Zapatos planos y ballerinas</a></li>
                                          </ul>
                                        </div>
                                        <!-- /.col -->
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                          <h2 class="title">Calzado infantil</h2>
                                          <ul class="links">
                                            <li><a href="#">Botas y botines</a></li>
                                            <li><a href="#">Sanadalías</a></li>
                                            <li><a href="#">Zapatos bebés</a></li>
                                            <li><a href="#">Zapatillas niñas</a></li>
                                            <li><a href="#">Zapatillas niños</a></li>
                                            <li><a href="#">Zapatos niñas</a></li>
                                            <li><a href="#">Zapatos niños</a></li>
                                          </ul>
                                        </div>
                                        <!-- /.col -->
    
                                        
                                        <div class="col-xs-12 col-sm-6 col-md-5 col-menu banner-image"> <img class="img-responsive" src="image/FotosDanielcalato/banner_calzado.jpg" alt=""> </div>
                                    <!-- /.yamm-content --> 
                                  </div>
                                </div>
                              </li>
                            </ul>
                      </li>

                      <li class="dropdown yamm mega-menu"> 
                      <a href="#" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Jugueteria y Bebés</a>
                                  <ul class="dropdown-menu container">
                                    <li>
                                      <div class="yamm-content ">
                                        <div class="row">
                                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                            <h2 class="title">Juguetes</h2>
                                            <ul class="links">
                                              <li><a href="#">Carros y pistas</a></li>
                                              <li><a href="#">Cocinitas y juego de roles</a></li>
                                              <li><a href="#">Desarrollo y aprendizaje</a></li>
                                              <li><a href="#">Disfraces</a></li>
                                              <li><a href="#">Figuras de acción y sets</a></li>
                                              <li><a href="#">Juguetes bebé</a></li>
                                              <li><a href="#">Juguetes a control remoto</a></li>
                                              <li><a href="#">Juegos de mesa</a></li>
                                              <li><a href="#">Lego y armables</a></li>
                                              <li><a href="#">Manualidades y arte</a></li>
                                              <li><a href="#">Maquillaje infantil</a></li>
                                              <li><a href="#">Muñecas y accesorios</a></li>
                                              <li><a href="#">Peluches y mascotas</a></li>
                                            </ul>
                                          </div>
                                          <!-- /.col -->
                                          
                                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                            <h2 class="title">Juegos</h2>
                                            <ul class="links">
                                              <li><a href="#">Autos a batería</a></li>
                                              <li><a href="#">Bicicletas infantiles</a></li>
                                              <li><a href="#">Camas elásticas</a></li>
                                              <li><a href="#">Casitas y juegos de jardín</a></li>
                                              <li><a href="#">Juguetes deportivos</a></li>
                                              <li><a href="#">Patines y skates</a></li>
                                              <li><a href="#">Piscinas e inflables</a></li>
                                              <li><a href="#">Scooters y triciclos</a></li>
                                            </ul>
                                          </div>
                                          <!-- /.col -->
                                          
                                          <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                            <h2 class="title">Todo Bebé</h2>
                                            <ul class="links">
                                              <li><a href="#">Alimentacion infantil</a></li>
                                              <li><a href="#">Andadores y caminadores</a></li>
                                              <li><a href="#">Baño bebé</a></li>
                                              <li><a href="#">Bolsos y portabebes</a></li>
                                              <li><a href="#">Biberones y chupones</li>
                                              <li><a href="#">Coches para bebés</a></li>
                                              <li><a href="#">Corrales y colchones</a></li>
                                              <li><a href="#">Gimnasios</a></li>
                                              <li><a href="#">Juguetes bebé</a></li>
                                              <li><a href="#">Lactancia</a></li>
                                              <li><a href="#">Salud y cuidado</a></li>
                                              <li><a href="#">Pañales y toallitas</a></li>
                                            </ul>
                                          </div>
                                          <!-- /.col -->
      
                                          
                                          <div class="col-xs-12 col-sm-6 col-md-5 col-menu banner-image"> <img class="img-responsive" src="image/FotosDanielcalato/banner_juguetes.jpg" alt=""> </div>
                                      <!-- /.yamm-content --> 
                                    </div>
                                  </div>
                                </li>
                            </ul>
                      </li>

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

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="home.php">Home</a></li>
        <li class='active'>Búsqueda</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12 col-sm-12 col-md-3 sidebar'> 
      <!-- ================================== TOP NAVIGATION ================================== -->
      <?php include('tablaCategorias.html'); ?>
        <!-- /.side-menu --> 
      <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget">
              <h3 class="section-title">Comprar por</h3>
              <div class="widget-header">
                <h4 class="widget-title">Categorias</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion"> <!---category list TECNOLOGIAAAAAAAAAAAA-->
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="all"> Todos </a> </div>
                    <!-- /.accordion-heading -->
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="audifonos"> Audifonos </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="computacion"> Computadoras y laptops </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="mouses"> Mouse </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="televisores"> Televisores </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="cocina"> Cocina </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="lavado"> Lavadora </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="refri"> Refrigerador </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="comedor"> Comedor </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="escritorio"> Escritorio </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="sala"> Sala </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="polos"> Polo Hombre </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="pantalones"> Pantalon Hombre </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="short"> Short Hombre </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="ternos"> Ternos </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="Polos y Blusas"> Polos Mujer </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="Faldas, Pantalones y Vestidos"> Pantalones y Vestidos Mujer </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="Lencería"> Lencería Mujer </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
            <!-- ============================================== PRICE SILDER============================================== -->
            <div class="sidebar-widget">
              <div class="widget-header">
                <h4 class="widget-title">Barra de precios</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">S/20.00</span> <span class="pull-right">S/2,000.00</span> </span>
                  <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                  <input type="text" class="price-slider" value="" >
                </div>
                <!-- /.price-range-holder --> 
                <a href="#" class="lnk btn btn-primary">Mostrar</a> </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRICE SILDER : END ============================================== --> 
            <!-- ============================================== MANUFACTURES============================================== -->

            <!-- ============================================== MANUFACTURES: END ============================================== --> 
            <!-- ============================================== COLOR============================================== -->

            <!-- ============================================== COLOR: END ============================================== --> 
            <!-- ============================================== COMPARE============================================== -->

            <!-- ============================================== COMPARE: END ============================================== --> 
            <!-- ============================================== PRODUCT TAGS ============================================== -->

            <!-- /.sidebar-widget --> 
            <!-- /.Testimonials -->
            
            <!-- ============================================== Testimonials: END ============================================== -->
            
             <!-- ============================================== NEWSLETTER ============================================== -->

                <!-- /.sidebar-widget --> 
                <!-- ============================================== NEWSLETTER: END ============================================== --> 
            
           
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class="col-xs-12 col-sm-12 col-md-9 rht-col"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active">
              <div class="category-product" id="lista-productoscatg"> 
                <div class="row productos-filtrar" id="itemContainer"> <!-- /.category-product controlador paginado-->



                  <!-- ============================================ data item = 32 ============= -->
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->

          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php include('footer.html'); ?>
<script src="assets/js/pedido3.js"></script>
<!-- <script type="text/javascript" src="assets/js/ordenarprecio.js"></script> -->
<!-- <script src="assets/js/jPages.min.js"></script>
<script src="assets/js/paginado.js"></script> -->
<!-- <script src="assets/js/compra.js"></script> -->
<!-- ============================================================= FOOTER : END============================================================= --> 

<script src="assets/js/barrabusqueda.js"></script>

</body>

</html>