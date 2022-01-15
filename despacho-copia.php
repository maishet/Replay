<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>Replay.com | Despacho</title>

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
    <link rel="stylesheet" href="assets/css/estilocopia.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script> load all styles -->

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <!-- ?php include('header.html'); ?-->
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.php">Inicio</a></li>
                    <li class='active'>Despacho de Compras</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <!--copia falabella -->

    <div id="fbra_checkoutDeliverySteps">
        <div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutDeliverySteps">
            <div class="fbra_tabSet fbra_payment_redesign fbra_checkoutDeliverySteps step__2 fbra_test_checkoutDeliverySteps">
                <div class="fbra_tab fbra_checkoutDeliverySteps__yourBasketStep fbra_test_checkoutDeliverySteps__yourBasketStep fbra_tab--completed fbra_tab--enabled fbra_tab--active">
                    <span class="fbra_text fbra_text fbra_checkoutDeliverySteps__yourBasketStepText" title="">Carrito de
                        Compras</span>
                </div>
                <div class="fbra_tab fbra_checkoutDeliverySteps__easyDeliveryStep fbra_test_checkoutDeliverySteps__easyDeliveryStep fbra_tab--inProgress fbra_tab--enabled fbra_tab--active">
                    <span class="fbra_text fbra_text fbra_checkoutDeliverySteps__easyDeliveryStepText fbra_selected" title="">Despacho</span>
                </div>
                <div class="fbra_tab fbra_checkoutDeliverySteps__securePaymentStep fbra_test_checkoutDeliverySteps__securePaymentStep fbra_tab--disabled fbra_tab--inactive">
                    <span class="fbra_text fbra_text fbra_checkoutDeliverySteps__securePaymentStepText" title="">Pago</span>
                </div>
                <div class="fbra_tab fbra_checkoutDeliverySteps_confirmDeliveryStep fbra_test_checkoutDeliverySteps_confirmDeliveryStep fbra_tab--disabled fbra_tab--disabled fbra_tab--inactive">
                    <span class="fbra_text fbra_text fbra_checkoutDeliverySteps__confirmDeliveryStepText" title="">Confirmación</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================== CONTENT BOLSA  ============================================== -->
    <div class="fbra_container fbra_mainContainer">
        <!-- Main content -->
        <div class="fbra_mainContent">

            <div id="fbra_checkoutRegionAndComuna">

                <div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutRegionAndComuna">
                    <div class="fbra_deliveryOptionsTitle">
                        <h2 class="movil">Elige tus opciones de despacho</h2>
                    </div>
                    <section class="fbra_appContainer fbra_test_appContainer">

                        <section class="fbra_appContainer__formContainer fbra_test_appContainer__formContainer">

                            <p class="fbra_paragraph fbra_unrecognizedUser__useOrEditText">Selecciona el Departamento, Provincia y Distrito donde quieres despachar o retirar tus productos</p>
                            <div class="contieneNumberAndAcompaña">
                                <div class="numberCircle">1</div>
                                <div class="acompañaCircle">Ingrese tu dirección</div>
                            </div>
                            <form class="fbra_appContainer__form fbra_test_appContainer__form">
                                <div class="fbra_loadingWrapper">
                                    <div class="fbra_appContainer__selectField fbra_test_appContainer__selectField">
                                        <div class="fbra_formItem fbra_formItem--Select fbra_input--region">
                                            <div class="fbra_test_selectItem fbra_selectItem fbra_formItem__region"><label for="region" class="fbra_label fbra_selectItem__label fbra_inputTooltip fbra_test_selectItem__label">Departamento<p class="fbra_label_title"></p></label>
                                                <select id="region" name="region" class="fbra_select fbra_formItem__region">
                                                    <option class="fbra_selectOption" value="">Por favor selecciona un departamento</option>
                                                    <option class="fbra_selectOption" value="20000">ANCASH</option>
                                                    <option class="fbra_selectOption" value="30000">APURIMAC</option>
                                                    <option class="fbra_selectOption" value="40000">AREQUIPA</option>
                                                    <option class="fbra_selectOption" value="50000">AYACUCHO</option>
                                                    <option class="fbra_selectOption" value="60000">CAJAMARCA</option>
                                                    <option class="fbra_selectOption" value="80000">CUZCO</option>
                                                    <option class="fbra_selectOption" value="90000">HUANCAVELICA</option>
                                                    <option class="fbra_selectOption" value="100000">HUANUCO</option>
                                                    <option class="fbra_selectOption" value="110000">ICA</option>
                                                    <option class="fbra_selectOption" value="120000">JUNIN</option>
                                                    <option class="fbra_selectOption" value="130000">LA LIBERTAD</option>
                                                    <option class="fbra_selectOption" value="140000">LAMBAYEQUE</option>
                                                    <option class="fbra_selectOption" value="150000">LIMA</option>
                                                    <option class="fbra_selectOption" value="160000">LORETO</option>
                                                    <option class="fbra_selectOption" value="180000">MOQUEGUA</option>
                                                    <option class="fbra_selectOption" value="190000">PASCO</option>
                                                    <option class="fbra_selectOption" value="200000">PIURA</option>
                                                    <option class="fbra_selectOption" value="210000">PUNO</option>
                                                    <option class="fbra_selectOption" value="220000">SAN MARTIN</option>
                                                    <option class="fbra_selectOption" value="230000">TACNA</option>
                                                    <option class="fbra_selectOption" value="240000">TUMBES</option>
                                                    <option class="fbra_selectOption" value="250000">UCAYALI</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fbra_appContainer__selectField fbra_test_appContainer__selectField">
                                        <div class="fbra_formItem fbra_formItem--Select fbra_input--ciudad">
                                            <div class="fbra_test_selectItem fbra_selectItem fbra_formItem__ciudad"><label for="ciudad" class="fbra_label fbra_selectItem__label fbra_inputTooltip fbra_test_selectItem__label">Provincia<p class="fbra_label_title"></p></label><select id="ciudad" name="ciudad" class="fbra_select fbra_formItem__ciudad">
                                                    <option class="fbra_selectOption" value="">Selecciona una provinicia</option>

                                                    <option class="fbra_selectOption" value="40000">BARRANCA</option>
                                                    <option class="fbra_selectOption" value="40000">CAJATAMBO</option>
                                                    <option class="fbra_selectOption" value="40000">CANTA</option>
                                                    <option class="fbra_selectOption" value="20000">CAÑETE</option>
                                                    <option class="fbra_selectOption" value="20000">HUAROCHIRÍ</option>
                                                    <option class="fbra_selectOption" value="30000">HUAURA</option>
                                                    <option class="fbra_selectOption" value="20000">LIMA</option>
                                                    <option class="fbra_selectOption" value="20000">OYON</option>
                                                    <option class="fbra_selectOption" value="20000">YAUYOS</option>

                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="fbra_appContainer__selectField fbra_test_appContainer__selectField">
                                        <div class="fbra_formItem fbra_formItem--Select fbra_input--comuna">
                                            <div class="fbra_test_selectItem fbra_selectItem fbra_formItem__comuna"><label for="comuna" class="fbra_label fbra_selectItem__label fbra_inputTooltip fbra_test_selectItem__label">Distrito<p class="fbra_label_title"></p></label><select id="comuna" name="comuna" class="fbra_select fbra_formItem__comuna">
                                                    <option class="fbra_selectOption" value="">Selecciona un distrito</option>
                                                    <option class="fbra_selectOption" value="40000">ANCÓN</option>
                                                    <option class="fbra_selectOption" value="40000">ATE</option>
                                                    <option class="fbra_selectOption" value="40000">BARRANCO</option>
                                                    <option class="fbra_selectOption" value="40000">BREÑA</option>
                                                    <option class="fbra_selectOption" value="40000">CARABAYLLO</option>
                                                    <option class="fbra_selectOption" value="40000">CHACLACAYO</option>
                                                    <option class="fbra_selectOption" value="40000">CHORRILLOS</option>
                                                    <option class="fbra_selectOption" value="40000">CIENEGUILLA</option>
                                                    <option class="fbra_selectOption" value="40000">EL AGUSTINO</option>
                                                    <option class="fbra_selectOption" value="40000">INDEPENDENCIA</option>
                                                    <option class="fbra_selectOption" value="40000">JESÚS MARÍA</option>
                                                    <option class="fbra_selectOption" value="40000">LA MOLINA</option>
                                                    <option class="fbra_selectOption" value="40000">LA VICTORIA</option>
                                                    <option class="fbra_selectOption" value="40000">LIMA</option>
                                                    <option class="fbra_selectOption" value="40000">LINCE</option>
                                                    <option class="fbra_selectOption" value="40000">LOS OLIVOS</option>
                                                    <option class="fbra_selectOption" value="40000">LURIGANCHO-CHOSICA</option>
                                                    <option class="fbra_selectOption" value="40000">LURÍN</option>
                                                    <option class="fbra_selectOption" value="40000">MAGDALENA DEL MAR</option>
                                                    <option class="fbra_selectOption" value="40000">MIRAFLORES</option>
                                                    <option class="fbra_selectOption" value="40000">PACHACÁMAC</option>
                                                    <option class="fbra_selectOption" value="40000">PUCUSANA</option>
                                                    <option class="fbra_selectOption" value="40000">PUEBLO LIBRE</option>
                                                </select></div>
                                        </div>
                                        <div class="cuadroBotonRegresar">
                                            <button type="" class="botonRegresar">Regresar</button>
                                        </div>
                                        <div class="cuadroBotonContinuar">
                                            <button type="" class="botonContinuar">Continuar</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </section>
                    </section>
                    <div class="fbra_sidebar">
                    <h2 class="fbra_heading fbra_test_orderSummary__orderSummaryHeading fbra_orderSummary__orderSummaryHeading arregloo"><center>Resumen de tu orden</center></h2>
                        <div id="fbra_checkoutOrderSummary" class="contorno">
                            <div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutOrderSummary payment-redesign">
                                <section class="fbra_section fbra_orderSummary" title="">
                                    <div class="fbra_loadingWrapper">
                                        <div class="sss"><span class="fbra_text fbra_test_orderSummary__numberOfItems fbra_orderSummary__numberOfItems" title="">Productos</span><span class="fbra_text fbra_test_orderSummary__itemsTotalPrice fbra_orderSummary__itemsTotalPrice" title="">Detalles</span></div>
                                        <div class="fbra_test_orderSummary__itemsContainer fbra_orderSummary__itemsContainer">
                                            <ol class="fbra_test_orderSummary__items fbra_orderSummary__items">
                                                <li class="fbra_test_orderSummary__item fbra_orderSummary__item"><a href="/falabella-pe/product/18243266/Polo-Manga-Corta-Hombre/18243268" target="_blank" title="" defaultclassname="fbra_anchor" class="fbra_anchor" classnames=""><img src="https://falabella.scene7.com/is/image/FalabellaPE/18243268?$producto310$" alt="Polo Manga Corta Hombre" title="Polo Manga Corta Hombre" class="fbra_image fbra_test_orderSummary__itemImage fbra_orderSummary__itemImage"></a>
                                                    <div class="fbra_test_orderSummary__itemDetails fbra_orderSummary__itemDetails">
                                                        <div class="fbra-redesign-left"><span class="fbra_text fbra_test_orderSummary__itemProperty fbra_orderSummary__itemProperty" title="">BENETTON</span><span class="fbra_text fbra_test_orderSummary__itemProperty fbra_orderSummary__itemProperty__name" title="">Polo Manga Corta Hombre</span><span class="fbra_text fbra_test_orderSummary__itemPrice fbra_orderSummary__itemPrice" title="">S/ 49.95</span></div>
                                                        <div class="fbra-redesign-right"><span class="fbra_text fbra_orderSummary__itemProperty--no-capital fbra_test_orderSummary__quantity_and_sku" title="">Código: 18243268</span>
                                                            <div class="fbra_test_orderSummary__quantity_and_sku prod">2 un. </div>
                                                            <div class="fbra_test_orderSummary__quantity_and_sku color warrantyProduct">
                                                                M , Negro 1</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div><a class="fbra_anchor fbra_test_orderSummary__editItems fbra_orderSummary__editItems fbra_OrderSummary__edit sss" href="" target="" title="" defaultclassname="fbra_anchor" classnames="">Volver a la Bolsa</a>
                                        <ul class="fbra_test_orderSummary__totalCosts fbra_orderSummary__totalCosts">
                                            <li class="fbra_test_orderSummary__totalCost fbra_orderSummary__totalCost"><span class="fbra_text fbra_test_orderSummary__totalCostName fbra_orderSummary__totalCostName" title="">Monto final a pagar:</span><span class="fbra_text fbra_test_orderSummary__totalCostPrice fbra_orderSummary__totalCostPrice" title="">S/ 99.90</span></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="fbra_checkoutDeliverAndCollect">
                <div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutDeliverAndCollect"></div>
            </div>

            <div id="fbra_checkoutDeliveryActions"></div>

            <div id="fbra_checkoutSignIn">
                <section class="fbra_falabellaComponent fbra_falabellaComponentCheckoutSignIn">
                    <div class="props context refs updater state _reactInternalFiber"></div>
                </section>
            </div>

            <div id="fbra_checkoutTemporaryPassword">
                <div class="props context refs updater state _reactInternalFiber"></div>
            </div>


        </div>
        <!-- Main content ends -->

        <!-- Sidebar -->

        <!-- Sidebar ends -->

        <!-- MainFooter -->
        <div class="fbra_mainContentFooter">
        </div>
        <!-- Sidebar ends -->
    </div>
    <!-- ============================================== CONTENT BOLSA : END ============================================== -->

    <span class="footer-more-product"><a href="home.php">Ver más productos</a></span>

    <!-- ============================================================= FOOTER ============================================================= -->

    <?php include 'footer.html'; ?>
    <!-- <script src="assets/js/pedido.js"></script> -->
    <script src="assets/js/despachocompra.js"></script>
    <!-- ============================================================= FOOTER : END============================================================= -->
</body>

</html>