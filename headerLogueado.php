<?php session_start();?>
<?php
  <html>
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
                      <a class="search-button" href="#" ></a> </div>
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
                      <a href="#"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Tecnología <span class="menu-label hot-menu hidden-xs">hot</span> </a>
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
</html>
?>