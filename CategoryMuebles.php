<!DOCTYPE html>
<html lang="es">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<link rel="shortcut icon" href="assets/images/favicon.png">
<title>Replay.com | Muebles</title>

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
        <li class='active'>Muebles</li>
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
        
        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="image/FotosDanielcalato/Banner_catgMuebles.jpg" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> SÚPER </div>
                <div class="big-text"> OFERTA </div>
                <div class="excerpt hidden-sm hidden-md"> HASTA 35% DSCTO </div>
                <div class="excerpt-normal hidden-sm hidden-md"> ¡Encuentra tu mueble ideal! </div>
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

                  <div class="item producto-item" category="comedor" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono1.html">
                             <img src="image\Muebles\Comedor\C1\frente.jpg" alt=""> 
                              <img src="image\Muebles\Comedor\C1\tamaño.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono1.html">Mesa de Comedor Gold 8 Sillas Rectangularx</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">1699.00</span> <span class="price-before-discount">S/ 2599</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="6"> <i class="fa fa-shopping-cart"></i> </a>
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
                  <!-- /.item 6-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="comedor" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono2.html">
                             <img src="image\Muebles\Comedor\C2\Frente.jpg" alt=""> 
                              <img src="image\Muebles\Comedor\C2\tamaño.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono2.html">Silla de Comedor Croisette Set x 2</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">1199.00</span> <span class="price-before-discount">S/ 1799.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="40"> <i class="fa fa-shopping-cart"></i> </a>
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
                  <!-- /.item 40-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="comedor" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono3.html">
                             <img src="image\Muebles\Comedor\C3\Frente.jpg" alt=""> 
                              <img src="image\Muebles\Comedor\C3\de_lado.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono3.html">Juego de Comedor Morten 6 Sillas</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">999.00</span> <span class="price-before-discount">S/ 1499.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="41"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 41-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="escritorio" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc1.html">
                             <img src="image\Muebles\Escritorio\Escritorio1\Frente.jpg" alt=""> 
                              <img src="image\Muebles\Escritorio\Escritorio1\lado_derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoPc1.html">Silla de Oficina Bone Color Beig Tapizado</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">299.90</span> <span class="price-before-discount">S/ 399.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="4"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 4-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="escritorio" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc2.html">
                             <img src="image\Muebles\Escritorio\Escritorio2\Frente.jpg" alt=""> 
                              <img src="image\Muebles\Escritorio\Escritorio2\delado.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoPc2.html">Escritorio Vintage 2 Cajones 130x55</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">549.00</span> <span class="price-before-discount">S/ 899.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="42"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 42-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="escritorio" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc3.html">
                             <img src="image\Muebles\Escritorio\Escritorio3\frente.jpg" alt=""> 
                              <img src="image\Muebles\Escritorio\Escritorio3\lado_derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoPc3.html">Escritorio Portugal CAST 3 cajones</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">399.90</span> <span class="price-before-discount">S/ 499.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="43"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 43-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="escritorio" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoMouse1.html">
                             <img src="image\Muebles\Escritorio\Escritorio4\frente.jpg" alt=""> 
                              <img src="image\Muebles\Escritorio\Escritorio4\tamaño.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoMouse1.html">Escritorio Axis-Wen. / Artico</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">549.22</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="44"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 44-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="sala" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoMouse2.html">
                             <img src="image\Muebles\Sala\sala1\Frente.jpg" alt=""> 
                              <img src="image\Muebles\Sala\sala1\lado_derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoMouse2.html">Mesa de TV 65' Joy 5 Cajones</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">299.90</span> <span class="price-before-discount">S/ 499.90</span>  </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="45"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 45-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="sala" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Muebles\Sala\sala2\frente.jpg" alt=""> 
                              <img src="image\Muebles\Sala\sala2\lado_izquierdo.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Centro de TV 50" Sensación</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">649.00</span> <span class="price-before-discount">S/ 999.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="5"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 5-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="sala" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoTv1.html">
                             <img src="image\Muebles\Sala\sala3\frente.jpg" alt=""> 
                              <img src="image\Muebles\Sala\sala3\lado_derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoTv1.html">Juego de Sala Alaska 3-2-1 Cuerpos </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">2099.00</span> <span class="price-before-discount">S/ 2799.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="46"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 46-->

                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="sala" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Muebles\Sala\sala4\uso.jpg" alt=""> 
                              <img src="image\Muebles\Sala\sala4\frente.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Seccional Jeremy 3 Cuerpos Intercambiable</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">1099.00</span> <span class="price-before-discount">S/ 1399.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito" type="button" title="Agregar" data-id="47"> <i class="fa fa-shopping-cart"></i> </a>

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
                  <!-- /.item 47-->

                  <!-- ============================================ data item = 47 ============= -->
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