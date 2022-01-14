<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link rel="shortcut icon" href="../assets/images/favicon.png">
  <title>Replay | </title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

  <!-- Customizable CSS -->
  <link rel="stylesheet" href="../assets/css/main.css">
  <link rel="stylesheet" href="../assets/css/blue.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/css/owl.transitions.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/css/rateit.css">
  <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">
  <link href="../assets/css/lightbox.css" rel="../stylesheet">

  <!-- Icons/Glyphs -->
  <link rel="stylesheet" href="../assets/css/font-awesome.css">
  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800"
    rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
    rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">

  <?php
     include('ventanaComentario.html');
  ?>

<!-- ============================================== HEADER ============================================== -->
<?php 
/*session_start();
error_reporting(0);
$varsesion=$_SESSION['usuario'];
//colocar variable de session de "correo"
if($varsesion==null || $varsesion=''){
  if(!isset($_SESSION['user_is_login']) || @$_SESSION['user_is_login']==false){
*/
    include('header.html'); /*
  }
  else{
    include('headerLogueado.html'); 
  } 
}
else{
  include('headerLogueado.html'); 
} 
*/

?>
<!-- ============================================== HEADER : END ============================================== -->

<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-xs-12 col-sm-12'>
        <div class="detail-block">
            <a href="javascript: history.go(-1)" class="btn regresar "> REGRESAR</a>
				  <div class="row"id="divproductodetalle">
            
					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">
        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p1.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p1.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide2">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p2.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p2.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide3">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p3.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p3.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide4">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p4.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p4.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide5">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p5.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p5.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide6">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p6.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p6.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide7">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p7.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p7.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide8">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p8.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p8.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item" id="slide9">
                <a data-lightbox="image-1" data-title="Gallery" href="../assets/images/products/p9.jpg">
                    <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p9.jpg" />
                </a>
            </div><!-- /.single-product-gallery-item -->

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p1.jpg" />
                    </a>
                </div>

                <div class="item">
                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p2.jpg"/>
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p3.jpg" />
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p4.jpg" />
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="5" href="#slide5">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p5.jpg" />
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="6" href="#slide6">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p6.jpg" />
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="7" href="#slide7">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p7.jpg" />
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="8" href="#slide8">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p8.jpg" />
                    </a>
                </div>
                <div class="item">

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide9">
                        <img class="img-responsive" alt="" src="../assets/images/blank.gif" data-echo="../assets/images/products/p9.jpg" />
                    </a>
                </div>
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        			
					<div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
						<div class="product-info">
							<h1 class="name">Nombre del producto</h1>
							
							<div class="rating-reviews m-t-20 ">
								<div class="row">
                  <div class="col-lg-12 detalles">
                    <div >
                      <div class="pull-left" >
                        <span id="calEstrellasGen1">
                          <i class='bx bxs-star inactivo'></i>
                          <i class='bx bxs-star inactivo'></i>
                          <i class='bx bxs-star inactivo'></i>
                          <i class='bx bxs-star inactivo'></i>
                          <i class='bx bxs-star inactivo'></i>
                        </span>
                        <span class="puntaje"><span id="calificacion-general1">0</span> (<span id="cantidad-comentarios1">0</span>)</span>
                      </div>
                      <div class="pull-left">
                        <div class="reviews">
                        <a id="btn-abrir1" class="link1">Escribir comentario</a>
                        </div>
                      </div>
                    </div>
                      <div class="contenedor-codigo">
                        <span class="codigo">Código:</span><label for="">0019200097</label>
                      </div>
                    </div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->
              <hr class="linea-horizontal">
              <div class="contenedor-detalles"> 
                <div class="contenedor1"><!-- ---------- -->
                  <div class="stock-container info-container m-t-10 caracteristicas-cont">
                    <div class="row">
                      <div class="col-lg-12">
                        <span class="subt">Características destacadas</span>
                       </div>
                    </div><!-- /.row -->	
                    <div class="description-container m-t-20">
                      <ul class="caracteristicas">
                        <li>Característica 1: <span> Lorem ipsum dolor.</span></li>
                        <li>Característica 2: <span> Lorem ipsum dolor.</span></li>
                        <li>Característica 3: <span> Lorem ipsum dolor.</span></li>
                        <li>Característica 4: <span> Lorem ipsum dolor.</span></li>
                        <li>Característica 5: <span> Lorem ipsum dolor.</span></li>
                        <li>Característica 6: <span> Lorem ipsum dolor.</span></li>
                      </ul>
                                    
                    </div><!-- /.description-container -->
                    <a href="#description"class="ver-mas">Ver más características</a>
                  </div><!-- /.stock-container -->
                  <div>
                    <div>
                      <h3>Tipo de entrega</h3>
                      <div class="tipo-cont">
                          <i class='bx bxs-truck'></i>
                          <p class="text">Despacho en domicilio</p>
                      </div>    
                    </div>
                  </div>
                </div>
              
							<div class="contenedor2"><!-- ---------- -->  
                <div class="price-container quantity-container info-container precio-cant">
                  <div>
                    <!-- <div class="price-container stock-container info-container m-t-30"> -->

                    <div class="precio">
                        <div class="price-box">
                          <span class="monedaspf">S/.</span>
                                  <span class="price">189.00</span>

                        </div>
                        <div class="price-box">
                          <span class="price-strike">S/.900.00</span>
                        </div>
                      </div>
                          <!-- <i class="fa fa-heart"></i> -->
                      <div class="">
                      <div class="">
                        <div class="stock-box">
                          <span >Unidades disponibles :</span>
                          <span class="value">5+</span>
                        </div>	
                      </div>
                
                    </div>
                  </div>
                  <div>
                      <div class="qty-count">
                        <div class="cart-quantity">
                          <div class="quant-input cantidad">
                                    <div class="arrows">
                                      <div class="arrow plus gradient"  id="sumar"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                      <div class="arrow minus gradient" id="restar"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                    </div>
                                    <input type="text" id="input-number"value="1">
                                    <!-- <input id="number" type="number" value="1" min="1"> -->
                            </div>
                        </div>
                        </div>							
                    </div>
                </div iv><!-- /.price-container -->
  
                <div class="quantity-container info-container botones-detalles">
                    <div class="">
                      <a class="btn  btn-agregar"><i class="fa fa-shopping-cart inner-right-vs"></i> AGREGAR AL CARRITO</a>
                    </div>
                    <div class="">
                      <a class="btn btn-agregdeseos">
                        <i class='bx bxs-heart '></i> <p class="centrar">AGREGAR A LISTA DE DESEOS </p> 
                      </a>
                    </div>
                </div><!-- /.quantity-container -->
              </div>
						</div>
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				<div class="product-tabs inner-bottom-xs">
					<div class="row ">
						<div class="col-sm-12 ">
							<div class="tabs contenedor-descripcion" id="description">					
                 <div class="titulos-cont">
                    <a  href="#tab1" class=" title active titulo-es">Especificaciones</a>

                    <a href="#tab2" class=" title titulo-in">Información del Producto</a>
                </div>
                <div class="especificaciones-informacion tabs-content">
                  
									<div class="especificaciones tabs-panel active" id="tab1" >
                  	
										<table class="caracteristicas">
                      <tr>
                        <td>Caracteristica 1</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr>
                      <tr>
                        <td>Caracteristica 2</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr>
                      <tr>
                        <td>Caracteristica 3</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr>
                      <tr>
                        <td>Caracteristica 4</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr>
                      <tr>
                        <td>Caracteristica 5</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr>
                      <tr>
                        <td>Caracteristica 6 </td>
                        <td>Lorem ipsum dolor.</td>
                      </tr>
                      <tr>
                        <td>Caracteristica 7</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr> 
                      <tr>
                        <td>Caracteristica 8</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr> 
                      <tr>
                        <td>Caracteristica 9</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr> 
                      <tr>
                        <td>Caracteristica 10</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr> 
                      <tr>
                        <td>Caracteristica 11</td>
                        <td>Lorem ipsum dolor.</td>
                      </tr> 
                    </table>
									</div>
                  <div class="informacion-producto tabs-panel " id="tab2" >
                    <h3>Nombre del producto</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nam nostrum assumenda eligendi qui officia quis! Hic mole
                      stiae fugiat magnam autem error animi ab. Reiciendis eum recusandae quam repudiandae voluptates.
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nam nostrum assumenda eligendi qui officia quis! Hic mole
                      stiae fugiat magnam autem error animi ab. Reiciendis eum recusandae quam repudiandae voluptates.
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nam nostrum assumenda eligendi qui officia quis! Hic mole
                      stiae fugiat magnam autem error animi ab. Reiciendis eum recusandae quam repudiandae voluptates.
                      <br>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nam nostrum assumenda eligendi qui officia quis! Hic mole
                      stiae fugiat magnam autem error animi ab. Reiciendis eum recusandae quam repudiandae voluptates.
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nam nostrum assumenda eligendi qui officia quis! Hic mole
                      stiae fugiat magnam autem error animi ab. Reiciendis eum recusandae quam repudiandae voluptates.
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nam nostrum assumenda eligendi qui officia quis! 
                    </p>
										
									</div>	
								</div><!-- /.tab-pane -->
							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
          
				</div><!-- /.product-tabs -->
        <div class="product-tabs inner-bottom-xs">
					<div class="row ">
						<div class="col-sm-12 ">
							<div class="tab-content">								
								<div class="tab-pane in active">
									<div class="comentarios-cont">
                    <h1>Comentarios</h1>
                    <hr class="linea-horizontal-description">		
                    <div class="calificacion-cont">
                      <span class="subt">Calificación general</span>	
                      <!-- <button class="boton" id="btn-abrir">ESCRIBIR COMENTARIO</button>	 -->
                      <a class="btn boton" id="btn-abrir2">ESCRIBIR COMENTARIO</a>
                    </div>	
                    <div class="m-t-10 calificacion-general" >
                      <span id="calEstrellasGen2">
                        <i class='bx bxs-star inactivo'></i>
                          <i class='bx bxs-star inactivo'></i>
                          <i class='bx bxs-star inactivo'></i>
                          <i class='bx bxs-star inactivo'></i>
                          <i class='bx bxs-star inactivo'></i>
                      </span>
                        <span class="puntaje"><span id="calificacion-general2">0</span> (<span id="cantidad-comentarios2">0</span> calificaciones)</span>
                    </div>
                    <div class="m-t-20" id="contenedor-comentarios">
                      <div class="estrellas-comentarios">
                        <div><span>5</span><i class='bx bxs-star'></i><span id="5estrellas">0</span><span> calificaciones</span></div>
                        <div><span>4</span><i class='bx bxs-star'></i><span id="4estrellas">0</span><span> calificaciones</span></div>
                        <div><span>3</span><i class='bx bxs-star'></i><span id="3estrellas">0</span><span> calificaciones</span></div>
                        <div><span>2</span><i class='bx bxs-star'></i><span id="2estrellas">0</span><span> calificaciones</span></div>
                        <div><span>1</span><i class='bx bxs-star'></i><span id="1estrellas">0</span><span> calificaciones</span></div>
                        
                      </div>
                      <div class="m-t-20 cont-bottom">
                        <div class="cont1"><span id="cantidad-comentarios3">0</span><span> comentarios</span></div>
                         <div class="ordenar">
                            <p>Ordenar por:</p>
                            <!-- <div ><span>Seleccionar <i class='bx bxs-down-arrow'></i></span></div>      -->   
                            <select name=""  id="ordenarComentarios" >
                              <option value="" id="first">Seleccionar</option>
                              <option value="1" selected>Más recientes</option>
                              <option value="2" >De menor a mayor calificación</option>
                              <option value="3" >De mayor a menor calificación</option>
                            </select>
                        </div> 
                  
                      </div>
                      <div id="comentarios">

                      </div>
                    </div>
                    <hr>
									</div>	

								</div><!-- /.tab-pane -->
							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
          
				</div><!-- /.product-tabs -->
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand1.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand2.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand3.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand4.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand5.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand6.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand2.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand4.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand1.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="../assets/images/brands/brand5.png" src="../assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

 <!-- ============================================================= FOOTER ============================================================= -->
 <?php include('footer.html');?>
  <script src="../assets/js/pedidoporproducto.js"></script>
  <script src="../assets/js/deseospedido.js"></script>
  <!-- ============================================================= FOOTER : END============================================================= -->

</body>

</html>