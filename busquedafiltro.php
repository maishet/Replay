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
<?php include('header.html'); ?>

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
            <div class="image"> <img src="assets/images/banners/banner-laptop2.jpg" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> SÚPER </div>
                <div class="big-text"> OFERTA </div>
                <div class="excerpt hidden-sm hidden-md"> HASTA 25% DSCTO </div>
                <div class="excerpt-normal hidden-sm hidden-md"> ¡Encuentra tu laptop ideal! </div>
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
            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">
              <div class="pagination-container"></div>
            </div>
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active">
              <div class="category-product" id="lista-productoscatg"> 
                <div class="row productos-filtrar" id="itemContainer"> <!-- /.category-product controlador paginado-->
                  <!-- /.item -->
                  <div class="col-sm-6 col-md-4 col-lg-3" data-price="">
                  <div class="item producto-item" category="audifonos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono1.html">
                             <img src="image/Tecnologia/Audifonos/Audifono1/Frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Audifonos/Audifono1/lado.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono1.html">Audífonos Gamer para Ps4 Pc Xbox</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">189.00</span> <span class="price-before-discount">S/ 229</span> </div>
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
                  <div class="item producto-item" category="audifonos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono2.html">
                             <img src="image/Tecnologia/Audifonos/Audifono2/Frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Audifonos/Audifono2/Costado.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono2.html">XTREME HG502 RGB Auricular Gamer</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">69.00</span> <span class="price-before-discount">S/ 89.00</span> </div>
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
                  <div class="item producto-item" category="audifonos" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoAudifono3.html">
                             <img src="image/Tecnologia/Audifonos/Audifono3/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Audifonos/Audifono3/caja.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoAudifono3.html">Audífonos Gamer Onikuma K9</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">639.00</span>  </div>
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
                  <div class="item producto-item" category="computacion" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc1.html">
                             <img src="image\Tecnologia\Computadoras\Compu1\1.jpg" alt=""> 
                              <img src="image\Tecnologia\Computadoras\Compu1\4.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoPc1.html">IdeaCentre AIO 3i Intel Core i3 23.8" Full HD</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">1999.00</span.> <span class="price-before-discount">S/ 2099.00</span> </div>
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
                  <div class="item producto-item" category="computacion" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc2.html">
                             <img src="image\Tecnologia\Computadoras\Compu2\1.jpg" alt=""> 
                              <img src="image\Tecnologia\Computadoras\Compu2\2.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoPc2.html">ZenBook 14 UM425 Ryzen 5 5500U 14'' FHD 512GB SSD 8GB RAM</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">3599.00</span> <span class="price-before-discount">S/ 4699.00</span> </div>
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
                  <div class="item producto-item" category="computacion" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoPc3.html">
                             <img src="image/Tecnologia/Computadoras/Compu3/frente_caracteristicas.jpg" alt=""> 
                              <img src="image/Tecnologia/Computadoras/Compu3/lado derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoPc3.html">VivoBook 15 K513 Core i7 11a 15.6''</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">4499.00</span> <span class="price-before-discount">S/ 5599.00</span> </div>
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
                  <div class="item producto-item" category="mouses" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoMouse1.html">
                             <img src="image/Tecnologia/Mouse/Mouse1/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Mouse/Mouse1/lado derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoMouse1.html">Mouse Gamer Cobra M711-RGB 10000</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">99.00</span> <span class="price-before-discount">S/ 109.00</span> </div>
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
                  <div class="item producto-item" category="mouses" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoMouse2.html">
                             <img src="image/Tecnologia/Mouse/Mouse2/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Mouse/Mouse2/lado_arriba.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoMouse2.html">MOUSE LOGITECH G203 RGB</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">189.00</span>  </div>
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
                  <div class="item producto-item" category="mouses" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image/Tecnologia/Mouse/Mouse1/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Mouse/Mouse1/lado derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Mouse Gaming G360 Black</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">139.00</span> <span class="price-before-discount">S/ 159.00</span> </div>
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
                  <div class="item producto-item" category="televisores" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="categorias/detallesProductoTv1.html">
                             <img src="image/Tecnologia/Televisores/Tv1/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Televisores/Tv1/lado derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="categorias/detallesProductoTv1.html">TELEVISOR SAMSUNG CRYSTAL ULTRA HD 4K 55'' SMART TV </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">1999.00</span> <span class="price-before-discount">2099.00</span> </div>
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
                  <div class="item producto-item" category="televisores" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Tecnologia\Televisores\Tv2\Frente.jpg" alt=""> 
                              <img src="image\Tecnologia\Televisores\Tv2\lado_derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Televisor 50" Borderless 4K Ultra HD Smart TV 50PUD7625</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">1899.00</span> <span class="price-before-discount">S/ 2499.00</span> </div>
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
                  <div class="item producto-item" category="televisores" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Tecnologia\Televisores\Tv3\frente.jpg" alt=""> 
                              <img src="image\Tecnologia\Televisores\Tv3\lado_iquierdo.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Televisor 58" Borderless 4K Ultra HD Smart TV 58PUD7625</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">1949.00</span> <span class="price-before-discount">S/ 2899.00</span> </div>
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
                  <div class="item producto-item" category="televisores" >
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Tecnologia\Televisores\Tv4\frente.jpg" alt=""> 
                              <img src="image\Tecnologia\Televisores\Tv4\lado_derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Televisor Samsung Smart TV 50" QLED 4K QN50Q60AAGXPE (2021)</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">2499.00</span> <span class="price-before-discount">S/ 3399.00</span> </div>
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
          <div class="clearfix filters-container bottom-row">
            <div class="text-right">
              <div class="pagination-container"></div>
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
<script src="assets/js/pedido3.js"></script>
<script type="text/javascript" src="assets/js/ordenarprecio.js"></script>
<script src="assets/js/jPages.min.js"></script>
<script src="assets/js/paginado.js"></script>
<!-- <script src="assets/js/compra.js"></script> -->
<!-- ============================================================= FOOTER : END============================================================= --> 


</body>

</html>