<!DOCTYPE html>
<html lang="es">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<link rel="shortcut icon" href="assets/images/favicon.png">
<title>Replay.com | Moda Hombre</title>

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

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="home.php">Home</a></li>
        <li class='active'>Moda Hombre</li>
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
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="polos"> Polos </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->

                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="pantalones"> Pantalones </a> </div>
                    <!-- /.accordion-heading -->

                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#" data-toggle="collapse" class="item_catg accordion-toggle collapsed" category="shorts"> Shorts </a> </div>
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
        <!-- ========================================== SECTION ??? HERO ========================================= -->
        
        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="image/FotosDanielcalato/Banners_ModaHombre.png" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> APROVECHA</div>
                <div class="big-text"> LAS </div>
                <div class="big-text"> OFERTAS </div>
                <div class="excerpt hidden-sm hidden-md"> HASTA 50% EN DESCUENTO</div>
                <div class="excerpt-normal hidden-sm hidden-md"> ??Encuentra tu prenda ideal! </div>
                <div class="buy-btn"><a href="#" class="lnk btn btn-primary">Comprar Ahora</a></div>
              </div>
              <!-- /.caption --> 
            </div>
            <!-- /.container-fluid --> 
          </div>
        </div>
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">

                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
              <div class="col col-sm-6 col-md-6 no-padding">
                <div class="lbl-cnt">
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <span>Ordenar por:</span>
                      <select name="" id="select">
                        <option value="default">Defecto</option>
                        <option value="menorprecio">Precio:Menor precio</option>
                        <option value="mayorprecio">Precio:Mayor precio</option>
                      </select>  
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
                <!-- mostraba lista de 1 al 10 -->
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">
              <div class="pagination-container"></div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active">
              <div class="category-product" id="lista-productoscatg"> 
                <div class="row productos-filtrar" id="itemContainer"> <!-- /.category-product controlador paginado-->
                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="polos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono2.html">
                             <img src="image\ModaHombre\Polos\P1\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Polos\P1\espalda.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono2.html">Polo Manga Corta Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">49.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="16"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="polos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono3.html">
                             <img src="image\ModaHombre\Polos\P2\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Polos\P2\espalda.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono2.html">Polo Manga Corta Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">49.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="28"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="polos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc1.html">
                             <img src="image\ModaHombre\Polos\P3\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Polos\P3\espalda.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono2.html">Polo Manga Corta Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">49.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="10"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="polos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono1.html">
                             <img src="image\ModaHombre\Polos\P4\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Polos\P4\espalda.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono1.html">Polo Manga Corta Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">22.46</span> <span class="price-before-discount">S/ 49.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="7"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="pantalones" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc2.html">
                             <img src="image\ModaHombre\Pantalones\Ps1\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Pantalones\Ps1\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoPc2.html">Pantal??n Jogger Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">97.40</span> <span class="price-before-discount">S/ 129.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="29"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="pantalones" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc3.html">
                             <img src="image\ModaHombre\Pantalones\Ps2\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Pantalones\Ps2\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoPc3.html">Pantal??n Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">69.93</span> <span class="price-before-discount">S/ 99.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="15"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="pantalones" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoMouse1.html">
                             <img src="image\ModaHombre\Pantalones\Ps3\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Pantalones\Ps3\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoMouse1.html">Pantal??n Slim Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">39.95</span> <span class="price-before-discount">S/ 79.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="8"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="shorts" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoMouse2.html">
                             <img src="image\ModaHombre\Short\S1\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Short\S1\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoMouse2.html">Short Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">89.90</span>  </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="17"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="shorts" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\ModaHombre\Short\S2\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Short\S2\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoMouse2.html">Short Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">79.90</span>  </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="30"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="shorts" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoTv1.html">
                             <img src="image\ModaHombre\Short\S3\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Short\S3\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoTv1.html">Short Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">55.93</span> <span class="price-before-discount">79.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="9"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="shorts" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoTv1.html">
                             <img src="image\ModaHombre\Short\S4\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Short\S4\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoTv1.html">Short Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">69.93</span> <span class="price-before-discount">99.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="9"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="ternos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\ModaHombre\Ternos\T1\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Ternos\T1\espalda.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Saco de vestir</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">419.90</span> <span class="price-before-discount">S/ 699.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="18"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="ternos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\ModaHombre\Ternos\T2\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Ternos\T2\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Saco de Vestir Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">177.99</span> <span class="price-before-discount">S/ 349.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="31"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="ternos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\ModaHombre\Ternos\T3\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Ternos\T3\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Saco de vestir</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">419.90</span> <span class="price-before-discount">S/ 699.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="32"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="ternos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\ModaHombre\Ternos\T4\frente.jpg" alt=""> 
                              <img src="image\ModaHombre\Ternos\T4\atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Casaca Hombre Foster</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">239.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="32"> <i class="fa fa-shopping-cart"></i> </a>

                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- ============================================ data item = ### ============= -->
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container bottom-row">
            <div class="text-right">
              <div class="pagination-container">
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
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
<script src="assets/js/pedido2.js"></script>
<script type="text/javascript" src="assets/js/ordenarprecio.js"></script>
<script src="assets/js/jPages.min.js"></script>
<script src="assets/js/paginado.js"></script>
<!-- <script src="assets/js/compra.js"></script> -->
<!-- ============================================================= FOOTER : END============================================================= --> 


</body>

</html>