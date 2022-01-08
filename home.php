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
$varsesion=$_SESSION['usuario'];
if($varsesion==null || $varsesion=''){
  if(!isset($_SESSION['user_is_login']) || @$_SESSION['user_is_login']==false){

    include('header.html'); 
  }
  else{
    include('headerLogueado.html'); 
  } 
}
else{
  include('headerLogueado.html'); 
} 


?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-vs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <?php include('tablaCategorias.html'); ?>
        <!-- /.side-menu --> 
      <!-- ================================== TOP NAVIGATION : END ================================== --> 
        <!-- ============================================== HOT DEALS ============================================== -->
        <div class="sidebar-widget hot-deals outer-bottom-xs">
          <h3 class="section-title">Ofertas</h3>
          <div id="lista-productosofertas" class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image"> 
                  <a href="#">
                  <img src="image\ModaHombre\Ternos\T2\frente.jpg" alt=""> 
                  <img src="image\ModaHombre\Ternos\T2\atras.jpg" alt="" class="hover-image">
                  </a>
                  </div>
                  <div class="sale-offer-tag"><span>49%<br>
                    off</span></div>
                  <div id="countdown" class="timing-wrapper">
                    <div class="box-wrapper">
                      <div class="date box"> <span class="key dias"></span><span class="value">DIAS</span> </div>
                    </div>
                    <div class="box-wrapper">
                        <div class="hour box"> <span class="key horas"></span><span class="value">HORAS</span> </div>
                    </div>
                    <div class="box-wrapper">
                        <div class="minutes box"> <span class="key minutos"></span><span class="value">MINS</span> </div>
                    </div>
                    <div class="box-wrapper">
                        <div class="seconds box"> <span class="key segundos"></span><span class="value">SEC</span> </div>
                    </div>
                  </div>
                </div>
                <!-- /.hot-deal-wrapper -->
                
                <div class="product-info text-left m-t-20">
                  <h3 class="name"><a href="detallesProducto.html">Saco de Vestir Hombre</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="product-price"><span class="moneda">S/.</span> <span class="price">177.99</span> <span class="price-before-discount">S/.349.00</span> </div>
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  <a class="btn btn-primary cart-btn agregar-carrito" type="button" data-id="1">Añadir al carrito</a>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image"> 
                   <a href="#">
                  <img src="image\ModaHombre\Pantalones\Ps1\frente.jpg" alt=""> 
                  <img src="image\ModaHombre\Pantalones\Ps1\atras.jpg" alt="" class="hover-image">
                  </a>
                   </div>
                  <div class="sale-offer-tag"><span>35%<br>
                    off</span></div>
                  <div id="countdown1" class="timing-wrapper">
                    <div class="box-wrapper">
                      <div class="date box"> <span class="key dias"></span><span class="value">DIAS</span> </div>
                    </div>
                    <div class="box-wrapper">
                        <div class="hour box"> <span class="key horas"></span><span class="value">HORAS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="minutes box"> <span class="key minutos"></span><span class="value">MINS</span> </div>
                    </div>
                    <div class="box-wrapper">
                      <div class="seconds box"> <span class="key segundos"></span><span class="value">SEC</span> </div>
                    </div>
                  </div>
                </div>
                <!-- /.hot-deal-wrapper -->
                
                <div class="product-info text-left m-t-20">
                  <h3 class="name"><a href="detail.html">Pantalón Jogger Hombre</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="product-price"><span class="moneda">S/.</span> <span class="price">97.40</span> <span class="price-before-discount">S/.129.90</span> </div>
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  <a class="btn btn-primary cart-btn agregar-carrito" type="button"data-id="2">Añadir al carrito</a>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  <div class="image">
                   <a href="#">
                  <img src="image\ModaHombre\Polos\P4\lejos.jpg" alt=""> 
                  <img src="image\ModaHombre\Polos\P4\espalda.jpg" alt="" class="hover-image">
                  </a>
                   </div>
                  <div class="sale-offer-tag"><span>55%<br>
                    off</span></div>
                  <div id="countdown2" class="timing-wrapper">
                    <div class="box-wrapper">
                      <div class="date box"> <span class="key dias"></span><span class="value">DIAS</span> </div>
                    </div>
                    <div class="box-wrapper">
                        <div class="hour box"> <span class="key horas"></span><span class="value">HORAS</span> </div>
                    </div>
                    <div class="box-wrapper">
                        <div class="minutes box"> <span class="key minutos"></span><span class="value">MINS</span> </div>
                    </div>
                    <div class="box-wrapper">
                        <div class="seconds box"> <span class="key segundos"></span><span class="value">SEC</span> </div>
                    </div>
                  </div>
                </div>
                <!-- /.hot-deal-wrapper -->
                
                <div class="product-info text-left m-t-20">
                  <h3 class="name"><a href="detail.html">Polo Manga Corta 100% Algodón Hombre</a></h3>
                  <div class="rating rateit-small"></div>
                  <div class="product-price"><span class="moneda">S/.</span> <span class="price">22.46</span> <span class="price-before-discount">S/.49.90</span> </div>
                  <!-- /.product-price --> 
                  
                </div>
                <!-- /.product-info -->
                
                <div class="cart clearfix animate-effect">
                  <a class="btn btn-primary cart-btn agregar-carrito" type="button"data-id="3">Añadir al carrito</a>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget --> 
        </div>
        <!-- ============================================== HOT DEALS: END ============================================== --> 
        
        <!-- ============================================== SPECIAL OFFER ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small">
          <h3 class="section-title">Ofertas Especiales</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\Vestidos,ShortyPantalones\V1\frente.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Vestido Corto Estampado Mujer Mango</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 225.96 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\Vestidos,ShortyPantalones\V2\lejos.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Jean Mom Mujer Basement</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 119.90 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\BlusasyPolos\BP1\lejos.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Blusa Manga Corta Mujer Sybilla</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 89.90 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\Vestidos,ShortyPantalones\V4\lejos.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Falda Short Mujer</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 79.90 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\BlusasyPolos\BP3\lejos.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Polo Manga Corta Mujer Superdry</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 119.90 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\BlusasyPolos\BP4\lejos.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Polo Manga Corta 100% Algodón Mujer Superdry</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 129.90 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\Linceria\L1\lejos.jpg"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Camisa de Dormir Mujer University Club</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 24.95 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\Linceria\L3\lejos.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Pack Pijama Mujer Sybilla</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 39.90 </span> </div>
                            <!-- /.product-price --> 
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaMujer\Linceria\L2\atras.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Short Pijama Mujer</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 39.90 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL OFFER : END ============================================== --> 
        <!-- ============================================== PRODUCT TAGS ============================================== -->
        <!-- ============================================== PRODUCT TAGS : END ============================================== --> 
        <!-- ============================================== SPECIAL DEALS ============================================== -->
        
        <div class="sidebar-widget outer-bottom-small">
          <h3 class="section-title">Ofertas Especiales</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\Zapatos\Zapatos Mujer\ZM1\ambas.jpg"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Zapatillas Mujer Training Flexagon Energy 3</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 111.93</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\Zapatos\ZapatosNiñoyNiña\ZpN1\ambos.jpg"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Zapatillas Urbanas Niña Coniglio Sp Cut2 Pri</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 79.90 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\Zapatos\ZapatosVaron\ZV3\ambos.jpg"  alt="image"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Sandalias Hombre Crocs Crocband Unisex</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 174.30 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\SaludyBelleza\LiempiezaFacial\SB1\lado_derecho.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Cerave gel limpiador espumoso 236ml</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 52.40 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\SaludyBelleza\Maquillaje\MQ1\en_uso.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Kit 5 favoritos de maquillaje 2</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 249 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\SaludyBelleza\Perfumes\P1\presentacion2.jpg" alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Nina EDT 80 ml + Nina Rouge EDT Miniatura 4ml + Nina Rose EDT Miniatura 4ml + Bolsa de Regalo</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 299 </span> </div>
                            <!-- /.product-price --> 
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaHombre\Pantalones\Ps2\lejos.jpg" alt="images">
                              <div class="zoom-overlay"></div>
                              </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Pantalón Hombre</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 69.93 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaHombre\Polos\P3\lejos.jpg"  alt="">
                              <div class="zoom-overlay"></div>
                              </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Polo Manga Corta Hombre</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 49.90 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="image\ModaHombre\Short\S3\lejos.jpg" alt="image"> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Short Hombre</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> S/ 55.93 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
        <!-- ============================================== NEWSLETTER ============================================== -->

        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        
        <!-- ============================================== Testimonials============================================== -->

        <!-- ============================================== Testimonials: END ============================================== -->
        
        
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(image/FotosDanielcalato/Banners_verano.jpg);"> <!--- fondo de seccion -->
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Mejores Marcas</div>
                  <div class="big-text fadeInDown-1"> Nuevas Colecciones </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Disfruta de este verano con lo ultimo de la moda</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="CategoryModaMujer.php" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Comprar</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url(image/FotosDanielcalato/Banners_verano2.jpg);"> <!--- fondo de seccion -->
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Verano 2022</div>
                  <div class="big-text fadeInDown-1"> Moda Hombre </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>No permitas que el verano te quite el estilo</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="CategoryModaHombre.php" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Comprar</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        

        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Nuevos Productos</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right category_list" id="new-products-1">
              <li><a class="category_item" data-transition-type="backSlide" href="#" data-toggle="tab" category="all">Todos</a></li>
              <li><a class="category_item" data-transition-type="backSlide" href="#" data-toggle="tab" category="deporte">Deportes</a></li>
              <li><a class="category_item" data-transition-type="backSlide" href="#" data-toggle="tab" category="tecnología">Tecnología</a></li>
              <li><a class="category_item" data-transition-type="backSlide" href="#" data-toggle="tab" category="muebles">Muebles</a></li>
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane in active">
              <div class="product-slider">
                <div id="lista-productos1" class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel product-item" category="muebles">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image/Muebles/Escritorio/Escritorio1/frente.jpg" alt=""> 
                              <img src="image/Muebles/Escritorio/Escritorio1/lado_derecho.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Silla de Oficina Bone</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">299.90</span> <span class="price-before-discount">S/. 399.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="4"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->
                  
                  <div class="item item-carousel product-item" category="muebles">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image/Muebles/Sala/sala2/frente.jpg" alt="sala frente"> 
                              <img src="image/Muebles/Sala/sala2/abierto_derecha.jpg" alt="sala abierto derecha" class="hover-image">
                          </a>
                           </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Centro de TV 50" Sensación</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">649.00</span> <span class="price-before-discount">$999</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="5"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->
                  
                  <div class="item item-carousel product-item" category="muebles">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                           <a href="detail.html">
                             <img src="image/Muebles/Comedor/C1/frente.jpg" alt=""> 
                              <img src="image/Muebles/Comedor/C1/tamaño.jpg" alt="" class="hover-image">
                          </a>
                           </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Mesa de Comedor Gold 8 Sillas Rectangular</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">1699.00</span> <span class="price-before-discount">$ 2,599</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="6"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->
                  
                  <div class="item item-carousel product-item" category="tecnología">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                           <a href="detail.html">
                             <img src="image/Tecnologia/Audifonos/Audifono1/Frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Audifonos/Audifono1/lado.jpg" alt="" class="hover-image">
                          </a> 
                          </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Audífonos Gamer para Ps4 Pc Xbox</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"><span class="monedas">S/.</span> <span class="price">189.00</span> <span class="price-before-discount">S/ 229</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="7"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->
                  
                  <div class="item item-carousel product-item" category="tecnología">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                           <a href="detail.html">
                             <img src="image/Tecnologia/Mouse/Mouse1/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Mouse/Mouse1/con humo.jpg" alt="" class="hover-image">
                          </a> 
                          </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Mouse Gamer Cobra M711-RGB 10000 DPI</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">99.00</span> <span class="price-before-discount">S/ 109.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="8"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->
                  
                  <div class="item item-carousel product-item" category="tecnología">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                           <a href="detail.html">
                              <img src="image/Tecnologia/Televisores/Tv1/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Televisores/Tv1/lado derecho.jpg" alt="" class="hover-image">
                          </a>
                          </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">TELEVISOR SAMSUNG CRYSTAL ULTRA HD 4K 55'' SMART TV </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">1999.00</span> <span class="price-before-discount">2099.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="9"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->
                  
                  <div class="item item-carousel product-item" category="tecnología">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                           <a href="detail.html">
                            <img src="image\Tecnologia\Computadoras\Compu1\1.jpg" alt=""> 
                              <img src="image\Tecnologia\Computadoras\Compu1\4.jpg" alt="" class="hover-image">
                          </a> 
                          </div>
                          <!-- /.image -->
                          
                          <!-- <div class="tag hot"><span>hot</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">IdeaCentre AIO 3i Intel Core i3 23.8" Full HD</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">1999.00</span.> <span class="price-before-discount">S/ 2099.00</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="10"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->

                  <div class="item item-carousel product-item" category="deporte">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image/Deporte/RopaDeportivaHombre/RDH1/frente.jpg" alt=""> 
                              <img src="image/Deporte/RopaDeportivaHombre/RDH1/atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Polera Essentials Mélange Casual Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">179.90</span>  </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="11"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->

                  <div class="item item-carousel product-item" category="deporte">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image/Deporte/RopaDeportivaHombre/RDH2/frente.jpg" alt=""> 
                              <img src="image/Deporte/RopaDeportivaHombre/RDH2/atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Buzo Deportivo Essentials Piping Training Hombre</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">199.90</span>  </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="12"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->

                  <div class="item item-carousel product-item" category="deporte">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image/Deporte/RopaDeportivaMujer/RDF1/Polera_frente.jpg" alt=""> 
                              <img src="image/Deporte/RopaDeportivaMujer/RDF1/Polera_atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Polera Identity Fleece Training Mujer</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">119.92</span> <span class="price-before-discount">S/. 149.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="13"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->

                  <div class="item item-carousel product-item" category="deporte">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.html">
                             <img src="image/Deporte/RopaDeportivaMujer/RDF2/frente.jpg" alt=""> 
                              <img src="image/Deporte/RopaDeportivaMujer/RDF2/atras.jpg" alt="" class="hover-image">
                          </a> 
                       </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Top Deportivo Mujer</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="monedas">S/.</span> <span class="price">17.94</span> <span class="price-before-discount">S/. 29.90</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect ">
                          <div class="action ">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito1" type="button" title="Agregar" data-id="14"> <i class="fa fa-shopping-cart"></i> </a>
                              </li>
                              <li class="lnk" style="visibility: hidden;"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>

                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart agregar-deseos" type="button" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
                  <!-- /.item -->

                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content --> 
        </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
		
        <!-- =========================HOT DEAL SECTION=========================== -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3 class="dias" ></h3>
										<span>Días</span>
									</div>
								</li>
								<li>
									<div>
										<h3 class="horas" ></h3>
										<span>Horas</span>
									</div>
								</li>
								<li>
									<div>
										<h3 class="minutos" ></h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3 class="segundos" ></h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="btn btn-primary" href="category.html">Comprar ahora</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
        
        <!-- ============================================== Tecnologia & Electrohogar ============================================== -->
        <section class="section featured-product">
        <div class="row">
        <div class="col-lg-3">
          <h3 class="section-title">Tecnología & ElectroHogar</h3>
          <ul class="sub-cat">
          <li><a href="CategoryTecnologia.php">Computadoras</a></li>
          <li><a href="CategoryTecnologia.php">Audifonos</a></li>
          <li><a href="CategoryTecnologia.php">Mouse</a></li>
          <li><a href="CategoryTecnologia.php">Televisores</a></li>
          <li><a href="CategoryElectrohogar.php">Cocina</a></li>
          <li><a href="CategoryElectrohogar.php">Lavadoras</a></li>
          <li><a href="CategoryElectrohogar.php">Refrigeración</a></li>
          </ul>
          </div>
          <div class="col-lg-9">
          <div id="lista-productos2" class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="categorias/detallesProductoPc3.html">
                             <img src="image/Tecnologia/Computadoras/Compu3/Frente_caracteristicas.jpg" alt=""> 
                             <img src="image/Tecnologia/Computadoras/Compu3/lado derecho.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="categorias/detallesProductoPc3.html">FVivoBook 15 K513 Core i7 11a 15.6''</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="monedas">S/.</span> <span class="price">4499.95</span> <span class="price-before-discount">S/ 5,599</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito2" type="button" title="Agregar" data-id="15"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="categorias/detallesProductoAudifono2.html">
                             <img src="image/Tecnologia/Audifonos/Audifono2/caja.jpg" alt=""> 
                              <img src="image/Tecnologia/Audifonos/Audifono2/Costado.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag new"><span>nuevo</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="categorias/detallesProductoAudifono2.html">FGamer Cybertel Xtreme</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">80.90</span>  </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito2" type="button" title="Agregar" data-id="16"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="categorias/detallesProductoMouse2.html">
                             <img src="image/Tecnologia/Mouse/Mouse2/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Mouse/Mouse2/lado_izquierdo.jpg" alt="" class="hover-image">
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
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">189.95</span>  </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito2" type="button" title="Agregar" data-id="17"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image/Tecnologia/Televisores/Tv2/frente.jpg" alt=""> 
                              <img src="image/Tecnologia/Televisores/Tv2/lado izquierdo.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="categorias/detallesProductoTv1.html">Televisor 50" Borderless 4K Ultra HD Smart TV 50PUD7625</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">1899.90</span> <span class="price-before-discount">S/ 2,499</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                        <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito2" type="button" title="Agregar" data-id="18"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image/ElectroHogar/Cocina/Cocina2/frente.jpg" alt=""> 
                              <img src="image/ElectroHogar/Cocina/Cocina2/lado_derecho.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Cocina LG RSG315T Gas 6 Hornillas con Easy Clean Acero inoxidable</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">2799.90 </span> <span class="price-before-discount">S/ 4,149</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito2" type="button" title="Agregar" data-id="19"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image/ElectroHogar/Lavadora/Lav1/Abierto.jpg" alt=""> 
                              <img src="image/ElectroHogar/Lavadora/Lav1/Derecha.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Lavadora LG Carga Superior Smart Inverter con TurboDrum WT13BSB 13 Kg Negra</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">1499.95</span> <span class="price-before-discount">S/ 1,979</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito2" type="button" title="Agregar" data-id="20"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image/ElectroHogar/Refrigeracion/refri1/frente_caracteristicas.jpg" alt=""> 
                              <img src="image/ElectroHogar/Refrigeracion/refri1/abierto_lleno.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Refrigeradora SBS 685L FAMILY HUB RS27T5561B1/PE</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="monedas">S/.</span><span class="price">6999.90</span> <span class="price-before-discount">S/ 9,999</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito2" type="button" title="Agregar" data-id="21"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->
            <!-- ===========item 21 en productos================= -->

          </div>
          </div>
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        <!-- ============================================== BANNER VERANO ZZONA MEDIO ============================================== -->
        <div class="wide-banners outer-bottom-xs">
          <div class="row">
            <div class="col-md-8">
              <div class="wide-banner1 cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets/images/banners/moda_mujer_banner.jpg" alt=""> </div>
                <div class="strip strip-text">
                  <div class="strip-inner">
                    <h2 class="text-right">Lo nuevo para este verano<br>
                      <span class="shopping-needs">Hasta 20% de descuento en polos y vestidos</span></h2>
                  </div>
                </div>
                <div class="new-label">
                  <div class="text">NUEVO</div>
                </div>
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
            <div class="col-md-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="assets/images/banners/bannerdeportivo.jpg" alt=""> </div>
                
                
                <!-- /.new-label --> 
              </div>
              <!-- /.wide-banner --> 
            </div>
            
          </div>
          <!-- /.row --> 
        </div>
        <!-- /.wide-banners -->

        <!-- ============================================== BANNER VERANO ZZONA MEDIO : END ============================================== --> 
          
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <section class="section new-arriavls">
          <h3 class="section-title">Productos Destacados</h3>
          <div id="lista_productos3"class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="guanteessential.html">
                             <img src="image/Deporte/Accesorios/AC1/frente.jpg" alt=""> 
                              <img src="image\Deporte\Accesorios\AC1\unidad.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="guanteessential.html">Guantes Essential</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">49.90</span>  </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito3" type="button" title="Agregar" data-id="22"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Deporte\Maquinas\Maquina1\frente.jpg" alt=""> 
                              <img src="image\Deporte\Maquinas\Maquina1\lado_derecho.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Banca de Entrenamiento Press Stamina</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">659.90</span> <span class="price-before-discount">S/ 1,099.90</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito3" type="button" title="Agregar" data-id="23"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Deporte\RopaDeportivaHombre\RDH4\frente.jpg" alt=""> 
                              <img src="image\Deporte\RopaDeportivaHombre\RDH4\atras.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Polo Deportivo Hombre</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="monedas">S/.</span><span class="price">41.90</span> <span class="price-before-discount">S/ 59.90</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito3" type="button" title="Agregar" data-id="24"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Deporte\RopaDeportivaMujer\RDF3\frente.jpg" alt=""> 
                              <img src="image\Deporte\RopaDeportivaMujer\RDF3\Atras.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag hot"><span>hot</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Short Deportivo Mujer</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">26.96</span> <span class="price-before-discount">S/ 30</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito3" type="button" title="Agregar" data-id="25"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image\JugueteriayBebe\Juegos\J1\frente.jpg" alt=""> 
                              <img src="image\JugueteriayBebe\Juegos\J1\detalle5.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Cama Saltarina Azul 1.83 M</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">559.90</span> <span class="price-before-discount">S/ 799.90</span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito3" type="button" title="Agregar" data-id="26"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> 
                          <a href="detail.html">
                             <img src="image\Zapatos\ZapatosVaron\ZV4\frente.jpg" alt=""> 
                              <img src="image\Zapatos\ZapatosVaron\ZV4\detalle.jpg" alt="" class="hover-image">
                          </a>
                          
                          </div>
                    <!-- /.image -->
                    
                    <div class="tag sale"><span>sale</span></div>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html">Zapatillas Urbanas Hombre adidas Originals Nizza</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"><span class="monedas">S/.</span> <span class="price">229.00</span>  </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <a data-toggle="tooltip" class="btn btn-primary icon agregar-carrito3" type="button" title="Agregar" data-id="27"> <i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        <li class="lnk" style="visibility: hidden;"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="lista de Deseos"> <i class="icon fa fa-heart"></i> </a> </li>
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
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
        <!-- /.section ===================item data id =27 =============--> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand7.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand8.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand9.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand10.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand11.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand12.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand13.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item-->
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand14.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <!--/.item--> 
        </div>
        <!-- /.owl-carousel #logo-slider --> 
      </div>
      <!-- /.logo-slider-inner --> 
      
    </div>
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 


<!-- ============================================================= FOOTER ============================================================= -->
<?php include('footer.html'); ?>
<script src="assets/js/pedido.js"></script>
<!-- <script src="assets/js/compra.js"></script> -->
<script src="assets/js/pedirdeseos.js"></script>
<script src="assets/js/deseos.js"></script>
<!-- ============================================================= FOOTER : END============================================================= -->
</body>

</html>