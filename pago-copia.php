<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>Replay.com | Pago</title>

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
    <link rel="stylesheet" href="assets/css/estilo-tarjeta.css">

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
                    <li class='active'>Pago</li>
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
                <div class="fbra_tab fbra_checkoutDeliverySteps__easyDeliveryStep fbra_test_checkoutDeliverySteps__easyDeliveryStep fbra_tab--completed fbra_tab--enabled fbra_tab--active">
                    <span class="fbra_text fbra_text fbra_checkoutDeliverySteps__easyDeliveryStepText" title="">Despacho</span>
                </div>
                <div class="fbra_tab fbra_checkoutDeliverySteps__securePaymentStep fbra_test_checkoutDeliverySteps__securePaymentStep fbra_tab--inProgress fbra_tab--active">
                    <span class="fbra_text fbra_text fbra_checkoutDeliverySteps__securePaymentStepText fbra_selected" title="">Pago</span>
                </div>
                <div class="fbra_tab fbra_checkoutDeliverySteps_confirmDeliveryStep fbra_test_checkoutDeliverySteps_confirmDeliveryStep fbra_tab--disabled fbra_tab--disabled fbra_tab--inactive">
                    <span class="fbra_text fbra_text fbra_checkoutDeliverySteps__confirmDeliveryStepText" title="">Confirmación</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================== CONTENT BOLSA  ============================================== -->
    <div class="fbra_container containerpago">
        <!-- Main content -->
        <div class="ffff">
            <div id="fbra_checkoutDeliverAndCollect">
                <div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutDeliverAndCollect">
                    <div class="fbra_appContainer fbra_test_appContainer">
                        <div class="fbra_deliveryGroupsContainer fbra_test_deliveryGroupsContainer">
                            <div class="fbra_deliveryGroupsContainer__deliverToAddressTabContent fbra_test_deliveryGroupsContainer__deliverToAddressTabContent fbra_test_homeDeliveryTabContent--2">

                                <div class="fbra_deliverToAddressTabContentContainer fbra_test_deliverToAddressTabContentContainer">
                                    <div class="fbra_loadingWrapper">
                                        <div id="" class="fbra_deliverToAddressTabContentContainer__addAddressScreen fbra_test_deliverToAddressTabContentContainer__addAddressScreen fbra_test_deliverToAddressTabContentContainer_addAddressScreen">

                                            <form class="fbra_addressFormContainer pagodemela">
                                                <section id="tarjetausuario" class="fbra_section fbra_test_deliverToAddress fbra_deliverToAddress" title="">
                                                    <div class="fbra_test_deliverToAddress__address fbra_deliverToAddress__address">
                                                        <div class="wrapper">
                                                            <div class="box">
                                                                <input type="radio" name="select" id="option-1" value="tarjeta">
                                                                <input type="radio" name="select" id="option-2" value="codigoqr">
                                                                <input type="radio" name="select" id="option-3">
                                                                <input type="radio" name="select" id="option-4">
                                                                <label for="option-1" class="option-1">
                                                                    <div class="dot"></div>
                                                                    <div class="text">Tarjetas de Crédito y Débito (Visa, Mastercard, Amex y Dinners)</div>
                                                                    <div class="icono-tarjeta">
                                                                        <ul>
                                                                            <li><img src="assets/images/payments/2.png" alt="" width="30px"></li>
                                                                            <li><img src="assets/images/payments/3.png" alt="" width="30px"></li>
                                                                            <li><img src="assets/images/payments/4.png" alt="" width="30px"></li>
                                                                        </ul>
                                                                    </div>
                                                                </label>
                                                                <div id="mostrardivtarjeta" class="checkout_form" style="display:none;">
                                                                    <div class="card_number" id="card-container">
                                                                        <input type="text" class="input" id="card" placeholder="0000 0000 0000 0000">
                                                                        <div id="logo"></div>
                                                                    </div>
                                                                    <div class="card_grp">
                                                                        <div class="expiry_date">
                                                                            <input type="text" class="expiry_input" id="mesexpire" data-mask="00" placeholder="00">
                                                                            <input type="text" class="expiry_input" id="anioexpire" data-mask="00" placeholder="00">
                                                                        </div>
                                                                        <div class="cvc">
                                                                            <input type="text" class="cvc_input" id="codecvv" data-mask="000" placeholder="000">
                                                                            <div class="cvc_img">
                                                                                ?
                                                                                <div class="img">
                                                                                    <img src="assets/images/payments/tarjetacvv.png" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="boton-tarjeta" class="btn">
                                                                        Usar Tarjeta
                                                                    </div>
                                                                </div>
                                                                <label for="option-2" class="option-2">
                                                                    <div class="dot"></div>
                                                                    <div class="text">Pago con código QR (Yape, Luquita, Tunki)</div>
                                                                    <div class="icono-tarjeta">
                                                                        <ul>
                                                                            <li><img src="assets/images/payments/yape.png" alt="" width="30px"></li>
                                                                            <li><img src="assets/images/payments/lukita.png" alt="" width="30px"></li>
                                                                            <li><img src="assets/images/payments/tunki.png" alt="" width="30px"></li>
                                                                        </ul>
                                                                    </div>
                                                                </label>
                                                                <div id="mostrarQR" class="checkout_form" style="display:none;">
                                                                    <div class="new-qr-pay">
                                                                        <p style="text-align:center;">Escanea el código QR</p>
                                                                    </div>
                                                                    <div style="text-align:center;">
                                                                        <img src="assets/images/payments/chartqr.png" alt="QR">
                                                                    </div>
                                                                </div>
                                                                <label for="option-3" class="option-3">
                                                                    <div class="dot"></div>
                                                                    <div class="text">Pago por banca móvil o banca por internet</div>
                                                                    <div class="icono-tarjeta">
                                                                        <ul>
                                                                            <li><img src="assets/images/payments/1.png" alt="" width="30px"></li>
                                                                        </ul>
                                                                    </div>
                                                                </label>
                                                                <label for="option-4" class="option-4">
                                                                    <div class="dot"></div>
                                                                    <div class="text">Transferencia Bancaria</div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <p class="textocomprobante">Selección de Comprobante de pago:</p>
                                                    <!--boton radio de boleta o factura-->
                                                    <div class="opciones-radio">
                                                        <div class="form-group">
                                                            <span class="opcion-radio">
                                                                <input type="radio" id="comida_mexicana" name="tipo_comida" checked="">
                                                                <label for="comida_mexicana">Boleta</label>
                                                            </span>

                                                            <span class="opcion-radio">
                                                                <input type="radio" id="comida_italiana" name="tipo_comida"><label for="comida_italiana">Factura</label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!--boton radio de boleta o factura-->
                                                    <span class="textoboleta">La boleta o factura se enviará al email: </span><span id="usercorreo" class="boletita">correo@gmail.com</span>
                                                    <div class="separapago"></div>
                                                </section>
                                            </form>
                                            <div style="display: flex;">
                                                <div class="fbra_formItem fbra_formItem--Button fbra_input--useAddress" style="padding: 20px; "><a href="#"><button class="botonRegresar" title="">Regresar</button></a></div>
                                                <div class="fbra_formItem fbra_formItem--Button fbra_input--useAddress" style="padding: 20px;"><a href="confirmacionCompra.php"><button class="botonContinuar" title="">Continuar</button></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content ends -->

        <!-- Sidebar -->
        <div class="fbra_sidebar">
            <h2 class="fbra_heading fbra_test_orderSummary__orderSummaryHeading fbra_orderSummary__orderSummaryHeading arregloo">
                <center>Resumen de tu orden</center>
            </h2>
            <div id="fbra_checkoutOrderSummary" class="contorno">

                <div class="fbra_falabellaComponent fbra_falabellaComponentCheckoutOrderSummary payment-redesign">
                    <section class="fbra_section fbra_orderSummary" title="">
                        <div class="fbra_loadingWrapper">
                            <div class="sss"><span class="fbra_text fbra_test_orderSummary__numberOfItems fbra_orderSummary__numberOfItems" title="">Productos </span><span class="fbra_text fbra_test_orderSummary__itemsTotalPrice fbra_orderSummary__itemsTotalPrice" title=""></span></div>
                            <div class="fbra_test_orderSummary__itemsContainer fbra_orderSummary__itemsContainer">
                                <!-- wea de productos-->
                                <ol id="prodresumen" class="fbra_test_orderSummary__items fbra_orderSummary__items">
                                    <!-- wea de productos-->
                                </ol>
                            </div><a class="fbra_anchor fbra_test_orderSummary__editItems fbra_orderSummary__editItems fbra_OrderSummary__edit" href="shopping-cart.php" target="" title="" defaultclassname="fbra_anchor" classnames="">Volver a la Bolsa</a>
                            <!-- wea de precios-->
                            <ul id="weaderesumen1" class="fbra_test_orderSummary__totalCosts fbra_orderSummary__totalCosts">
                                <!-- wea de precios-->
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- Sidebar ends -->
    </div>
    <!-- ============================================== CONTENT BOLSA : END ============================================== -->

    <span class="footer-more-product"><a href="home.php">Ver más productos</a></span>

    <!-- ============================================================= FOOTER ============================================================= -->

    <?php include 'footer.html'; ?>
    <!-- <script src="assets/js/pedido.js"></script> -->
    <script src="assets/js/despachopago.js"></script>
    <script src="assets/js/pago-correo.js"></script>
    <script src="assets/js/validar-tarjeta.js"></script>
    <script>
        $(document).ready(function() {
            //$("#mostrardivtarjeta").hide();

            $("input[type='radio']").change(function() {

                //Ocultas todo 
                $("#mostrardivtarjeta").hide();
                $("#mostrarQR").hide();
                // $("#edad").hide();
                const botontarjeta = document.getElementById("boton-tarjeta");
                //obtenes el valor de los dos sets de Radios
                var opc = $("input[id='option-1']:checked").val();
                var opc2 = $("input[id='option-2']:checked").val();

                //tomas la decisión que queres en base a los dos valores
                //en este caso si selecciona "nombre" y "ciudad" mostras el input text para el Nombre
                if (opc == "tarjeta") {
                    $("#mostrardivtarjeta").show();
                    console.log("mostrar tarjeta");
                    botontarjeta.addEventListener("click", function(evento) {
                        // Aquí todo el código que se ejecuta cuando se da click al botón
                        console.log("le diste clic en usar tarjeta");
                        //$("#mostrardivtarjeta").hide();
                    });

                }
                if (opc2 == "codigoqr") {
                    $("#mostrarQR").show();
                    console.log("mostrar QR");
                    //$("#apellido").show();
                    console.log("codigoqr seleccionado"); //funca    
                }

            });
        });
    </script>
    <!-- ============================================================= FOOTER : END============================================================= -->
</body>

</html>