<!DOCTYPE html>
<html lang="es">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<link rel="shortcut icon" href="assets/images/favicon.png">
<title>Replay.com | Politicas de Privacidad</title>

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
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Pol??ticas de Privacidad</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="terms-conditions-page">
			<div class="row">
				<div class="col-md-12 terms-conditions">
	<h2 class="heading-title">POL??TICA DE PRIVACIDAD</h2>
	<div class="">
    <p>
    ??ltima actualizaci??n: 03 de enero de 2022 <br>
Esta Pol??tica de privacidad describe Nuestras pol??ticas y procedimientos sobre la recopilaci??n, el uso y la divulgaci??n de Su informaci??n cuando utiliza el Servicio y le informa sobre Sus derechos de privacidad y c??mo la ley lo protege.
Usamos sus datos personales para proporcionar y mejorar el Servicio. Al usar el Servicio, acepta la recopilaci??n y el uso de informaci??n de acuerdo con esta Pol??tica de privacidad. Esta Pol??tica de privacidad se ha creado con la ayuda de la Plantilla de pol??tica de privacidad.
</p>
  <h2>Interpretaci??n y Definiciones</h2>
  <h3>Interpretaci??n</h3>
  <p>
  Las palabras cuya letra inicial est?? en may??scula tienen significados definidos bajo las siguientes condiciones. Las siguientes definiciones tendr??n el mismo significado independientemente de que aparezcan en singular o en plural.
</p>
  <h3>Definiciones</h3>
  <p>
  A los efectos de esta Pol??tica de Privacidad:
Cuenta significa una cuenta ??nica creada para que Usted acceda a nuestro Servicio o partes de nuestro Servicio.
Empresa (referida como "la Empresa", "Nosotros", "Nos" o "Nuestro" en este Acuerdo) se refiere a Replay.
Las cookies son peque??os archivos que un sitio web coloca en su computadora, dispositivo m??vil o cualquier otro dispositivo, y que contienen los detalles de su historial de navegaci??n en ese sitio web entre sus muchos usos.
Pa??s se refiere a: Per??
Dispositivo significa cualquier dispositivo que pueda acceder al Servicio, como una computadora, un tel??fono celular o una tableta digital.
Los datos personales son cualquier informaci??n que se relaciona con un individuo identificado o identificable.
Servicio se refiere al sitio web.
Proveedor de servicios significa cualquier persona f??sica o jur??dica que procesa los datos en nombre de la Compa????a. Se refiere a empresas de terceros o personas empleadas por la Empresa para facilitar el Servicio, proporcionar el Servicio en nombre de la Empresa, realizar servicios relacionados con el Servicio o ayudar a la Empresa a analizar c??mo se utiliza el Servicio.
Servicio de redes sociales de terceros se refiere a cualquier sitio web o sitio web de red social a trav??s del cual un Usuario puede iniciar sesi??n o crear una cuenta para usar el Servicio.
Los Datos de uso se refieren a los datos recopilados autom??ticamente, ya sea generados por el uso del Servicio o por la propia infraestructura del Servicio (por ejemplo, la duraci??n de una visita a la p??gina).
El sitio web se refiere a Replay, accesible desde https://127.0.0.1/proyecto/home.php
Usted se refiere a la persona que accede o utiliza el Servicio, o la empresa u otra entidad legal en nombre de la cual dicha persona accede o utiliza el Servicio, seg??n corresponda.
</p>
	<h2 class="heading-title">Recopilaci??n y uso de sus datos personales</h2>
  <h2>Tipos de datos recopilados</h2>
  <h3>Informaci??n personal</h3>
  <p>
  Mientras usa Nuestro Servicio, podemos pedirle que nos proporcione cierta informaci??n de identificaci??n personal que se puede usar para contactarlo o identificarlo. La informaci??n de identificaci??n personal puede incluir, entre otros:
Datos de uso
  </p>
  <h3>Datos de uso</h3>
  <p>
  Los Datos de uso se recopilan autom??ticamente cuando se utiliza el Servicio.
Los datos de uso pueden incluir informaci??n como la direcci??n del protocolo de Internet de su dispositivo (por ejemplo, la direcci??n IP), el tipo de navegador, la versi??n del navegador, las p??ginas de nuestro Servicio que visita, la hora y la fecha de su visita, el tiempo dedicado a esas p??ginas, dispositivo ??nico identificadores y otros datos de diagn??stico.
Cuando accede al Servicio a trav??s de un dispositivo m??vil, podemos recopilar cierta informaci??n autom??ticamente, que incluye, entre otros, el tipo de dispositivo m??vil que utiliza, la identificaci??n ??nica de su dispositivo m??vil, la direcci??n IP de su dispositivo m??vil, su sistema operativo, el tipo de navegador de Internet m??vil que utiliza, identificadores ??nicos de dispositivos y otros datos de diagn??stico.
Tambi??n podemos recopilar informaci??n que su navegador env??a cada vez que visita nuestro Servicio o cuando accede al Servicio a trav??s de un dispositivo m??vil.
  </p>
  <h3>Informaci??n de servicios de redes sociales de terceros</h3>
  <p>
  La Compa????a le permite crear una cuenta e iniciar sesi??n para usar el Servicio a trav??s de los siguientes Servicios de redes sociales de terceros:
Google
Facebook
Gorjeo
Si decide registrarse o concedernos acceso a un Servicio de redes sociales de terceros, podemos recopilar datos personales que ya est??n asociados con la cuenta de Su Servicio de redes sociales de terceros, como Su nombre, Su direcci??n de correo electr??nico, Sus actividades. o Su lista de contactos asociada con esa cuenta.
Tambi??n puede tener la opci??n de compartir informaci??n adicional con la Compa????a a trav??s de la cuenta de su Servicio de redes sociales de terceros. Si elige proporcionar dicha informaci??n y Datos personales, durante el registro o de otra manera, le est?? dando permiso a la Compa????a para usarla, compartirla y almacenarla de manera consistente con esta Pol??tica de privacidad.
  </p>
  <h3>Tecnolog??as de seguimiento y cookies</h3>
  <p>
  Usamos Cookies y tecnolog??as de seguimiento similares para rastrear la actividad en Nuestro Servicio y almacenar cierta informaci??n. Las tecnolog??as de seguimiento utilizadas son balizas, etiquetas y scripts para recopilar y rastrear informaci??n y para mejorar y analizar Nuestro Servicio. Las tecnolog??as que utilizamos pueden incluir:
Cookies o Cookies del Navegador. Una cookie es un peque??o archivo que se coloca en su dispositivo. Puede indicar a su navegador que rechace todas las cookies o que indique cu??ndo se env??a una cookie. Sin embargo, si no acepta las Cookies, es posible que no pueda utilizar algunas partes de nuestro Servicio. A menos que haya ajustado la configuraci??n de su navegador para que rechace las Cookies, nuestro Servicio puede usar Cookies.
Cookies Flash. Ciertas caracter??sticas de nuestro Servicio pueden usar objetos almacenados localmente (o Flash Cookies) para recopilar y almacenar informaci??n sobre Sus preferencias o Su actividad en nuestro Servicio. Las cookies de Flash no se gestionan con la misma configuraci??n del navegador que las utilizadas para las cookies del navegador. Para obtener m??s informaci??n sobre c??mo puede eliminar las cookies de Flash, lea "??D??nde puedo cambiar la configuraci??n para deshabilitar o eliminar objetos locales compartidos?" disponible en https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_
Balizas web. Ciertas secciones de nuestro Servicio y nuestros correos electr??nicos pueden contener peque??os archivos electr??nicos conocidos como web beacons (tambi??n conocidos como gifs transparentes, etiquetas de p??xeles y gifs de un solo p??xel) que permiten a la Compa????a, por ejemplo, contar los usuarios que han visitado esas p??ginas. o abri?? un correo electr??nico y para otras estad??sticas relacionadas con el sitio web (por ejemplo, registrar la popularidad de una determinada secci??n y verificar la integridad del sistema y del servidor).
Las cookies pueden ser cookies "persistentes" o de "sesi??n". Las cookies persistentes permanecen en su computadora personal o dispositivo m??vil cuando se desconecta, mientras que las cookies de sesi??n se eliminan tan pronto como cierra su navegador web. M??s informaci??n sobre cookies: Uso de Cookies por parte de Free Pol??tica de Privacidad.
Utilizamos cookies de sesi??n y persistentes para los fines establecidos a continuaci??n:
Cookies necesarias/esenciales
Tipo: Cookies de sesi??n
Administrado por: Nosotros
Prop??sito: estas cookies son esenciales para brindarle los servicios disponibles a trav??s del sitio web y permitirle usar algunas de sus funciones. Ayudan a autenticar a los usuarios y previenen el uso fraudulento de cuentas de usuario. Sin estas Cookies, no se pueden proporcionar los servicios que ha solicitado, y solo utilizamos estas Cookies para proporcionarle esos servicios.
Pol??tica de Cookies / Aviso de Aceptaci??n de Cookies
Tipo: Cookies persistentes
Administrado por: Nosotros
Finalidad: Estas Cookies identifican si los usuarios han aceptado el uso de cookies en el Sitio Web.
Cookies de funcionalidad
Tipo: Cookies persistentes
Administrado por: Nosotros
Prop??sito: estas cookies nos permiten recordar las elecciones que hace cuando usa el sitio web, como recordar sus datos de inicio de sesi??n o su preferencia de idioma. El prop??sito de estas Cookies es brindarle una experiencia m??s personal y evitar que tenga que volver a ingresar sus preferencias cada vez que use el sitio web.
Para obtener m??s informaci??n sobre las cookies que utilizamos y sus opciones con respecto a las cookies, visite nuestra Pol??tica de cookies o la secci??n Cookies de nuestra Pol??tica de privacidad.
</p>
<h2>Uso de sus datos personales</h2>
<p>
La Compa????a puede utilizar los Datos Personales para los siguientes fines:
Para proporcionar y mantener nuestro Servicio, incluso para monitorear el uso de nuestro Servicio.
Para gestionar Su Cuenta: para gestionar Su registro como usuario del Servicio. Los Datos Personales que proporcione pueden darle acceso a diferentes funcionalidades del Servicio que est??n disponibles para Usted como usuario registrado.
Para la ejecuci??n de un contrato: el desarrollo, cumplimiento y realizaci??n del contrato de compra de los productos, art??culos o servicios que haya adquirido o de cualquier otro contrato con Nosotros a trav??s del Servicio.
Para contactarlo: para contactarlo por correo electr??nico, llamadas telef??nicas, SMS u otras formas equivalentes de comunicaci??n electr??nica, como notificaciones autom??ticas de una aplicaci??n m??vil sobre actualizaciones o comunicaciones informativas relacionadas con las funcionalidades, productos o servicios contratados, incluidas las actualizaciones de seguridad, cuando sea necesario o razonable para su implementaci??n.
Para proporcionarle noticias, ofertas especiales e informaci??n general sobre otros bienes, servicios y eventos que ofrecemos que son similares a los que ya compr?? o pregunt??, a menos que haya optado por no recibir dicha informaci??n.
Para gestionar Sus solicitudes: Para atender y gestionar Sus solicitudes hacia Nosotros.
Para transferencias comerciales: podemos usar su informaci??n para evaluar o realizar una fusi??n, venta, reestructuraci??n, reorganizaci??n, disoluci??n u otra venta o transferencia de algunos o todos nuestros activos, ya sea como una empresa en marcha o como parte de una quiebra, liquidaci??n, o procedimiento similar, en el que los Datos personales que tenemos sobre los usuarios de nuestro Servicio se encuentran entre los activos transferidos.
Para otros fines: podemos utilizar su informaci??n para otros fines, como el an??lisis de datos, la identificaci??n de tendencias de uso, la determinaci??n de la eficacia de nuestras campa??as promocionales y para evaluar y mejorar nuestro Servicio, productos, servicios, marketing y su experiencia.
Podemos compartir su informaci??n personal en las siguientes situaciones:
Con Proveedores de Servicios: Podemos compartir Su informaci??n personal con Proveedores de Servicios para monitorear y analizar el uso de nuestro Servicio, para contactarlo.
Para transferencias comerciales: Podemos compartir o transferir Su informaci??n personal en relaci??n con, o durante las negociaciones de, cualquier fusi??n, venta de activos de la Compa????a, financiamiento o adquisici??n de todo o una parte de Nuestro negocio a otra compa????a.
Con afiliados: podemos compartir su informaci??n con nuestros afiliados, en cuyo caso exigiremos a esos afiliados que respeten esta Pol??tica de privacidad. Los afiliados incluyen nuestra empresa matriz y cualquier otra subsidiaria, socios de empresas conjuntas u otras empresas que controlamos o que est??n bajo control com??n con nosotros.
Con socios comerciales: Podemos compartir Su informaci??n con Nuestros socios comerciales para ofrecerle ciertos productos, servicios o promociones.
Con otros usuarios: cuando comparte informaci??n personal o interact??a en las ??reas p??blicas con otros usuarios, dicha informaci??n puede ser vista por todos los usuarios y puede distribuirse p??blicamente al exterior. Si interact??a con otros usuarios o se registra a trav??s de un Servicio de redes sociales de terceros, Sus contactos en el Servicio de redes sociales de terceros pueden ver Su nombre, perfil, im??genes y descripci??n de Su actividad. De manera similar, otros usuarios podr??n ver descripciones de Su actividad, comunicarse con Usted y ver Su perfil.
Con su consentimiento: podemos divulgar su informaci??n personal para cualquier otro prop??sito con su consentimiento.
</p>
<h2>Retenci??n de sus datos personales</h2>
<p>
La Compa????a conservar?? sus Datos personales solo durante el tiempo que sea necesario para los fines establecidos en esta Pol??tica de privacidad. Conservaremos y utilizaremos sus datos personales en la medida necesaria para cumplir con nuestras obligaciones legales (por ejemplo, si estamos obligados a conservar sus datos para cumplir con las leyes aplicables), resolver disputas y hacer cumplir nuestros acuerdos y pol??ticas legales.
La Compa????a tambi??n conservar?? los Datos de uso para fines de an??lisis interno. Los Datos de uso generalmente se retienen por un per??odo de tiempo m??s corto, excepto cuando estos datos se utilizan para fortalecer la seguridad o mejorar la funcionalidad de Nuestro Servicio, o cuando estamos legalmente obligados a retener estos datos por per??odos de tiempo m??s largos.
</p>
<h2>Transferencia de sus datos personales</h2>
<p>
Su informaci??n, incluidos los Datos personales, se procesa en las oficinas operativas de la Compa????a y en cualquier otro lugar donde se encuentren las partes involucradas en el procesamiento. Significa que esta informaci??n puede transferirse y mantenerse en computadoras ubicadas fuera de Su estado, provincia, pa??s u otra jurisdicci??n gubernamental donde las leyes de protecci??n de datos pueden diferir de las de Su jurisdicci??n.
Su consentimiento a esta Pol??tica de privacidad seguido de Su env??o de dicha informaci??n representa Su acuerdo con esa transferencia.
La Compa????a tomar?? todas las medidas razonablemente necesarias para garantizar que sus datos se traten de forma segura y de acuerdo con esta Pol??tica de privacidad y no se realizar?? ninguna transferencia de sus datos personales a una organizaci??n o pa??s, a menos que existan controles adecuados establecidos, incluida la seguridad de Sus datos y otra informaci??n personal.
</p>
<h2>Divulgaci??n de sus datos personales</h2>
<h3>Transacciones de negocios</h3>
<p>
Si la Compa????a est?? involucrada en una fusi??n, adquisici??n o venta de activos, Sus Datos personales pueden transferirse. Le enviaremos un aviso antes de que sus Datos personales se transfieran y queden sujetos a una Pol??tica de privacidad diferente.
</p>
<h3>Cumplimiento de la ley</h3>
<p>
En determinadas circunstancias, es posible que se le solicite a la Compa????a que divulgue sus Datos personales si as?? lo requiere la ley o en respuesta a solicitudes v??lidas de las autoridades p??blicas (por ejemplo, un tribunal o una agencia gubernamental).
</p>
<h3>Otros requisitos legales</h3>
<p>
La Compa????a puede divulgar sus datos personales de buena fe cuando considere que esta acci??n es necesaria para lo siguiente:
Cumplir con una obligaci??n legal
Proteger y defender los derechos o propiedad de la Compa????a
Prevenir o investigar posibles irregularidades en relaci??n con el Servicio
Proteger la seguridad personal de los Usuarios del Servicio o del p??blico
Prot??jase contra la responsabilidad legal
</p>
<h2>Seguridad de sus datos personales</h2>
<p>
La seguridad de sus datos personales es importante para nosotros, pero recuerde que ning??n m??todo de transmisi??n por Internet o m??todo de almacenamiento electr??nico es 100 % seguro. Si bien nos esforzamos por utilizar medios comercialmente aceptables para proteger sus datos personales, no podemos garantizar su seguridad absoluta.
</p>
<h1>Privacidad de los ni??os</h1>
<p>
Nuestro Servicio no se dirige a ninguna persona menor de 13 a??os. No recopilamos a sabiendas informaci??n de identificaci??n personal de ninguna persona menor de 13 a??os. Si usted es padre o tutor y sabe que su hijo nos ha proporcionado Datos personales, por favor Cont??ctenos. Si nos damos cuenta de que hemos recopilado Datos personales de cualquier persona menor de 13 a??os sin verificaci??n del consentimiento de los padres, tomamos medidas para eliminar esa informaci??n de Nuestros servidores.
Si necesitamos basarnos en el consentimiento como base legal para procesar su informaci??n y su pa??s requiere el consentimiento de uno de sus padres, podemos solicitar el consentimiento de su padre antes de recopilar y usar esa informaci??n.
</p>
<h1>Enlaces a otros sitios web</h1>
<p>
Nuestro Servicio puede contener enlaces a otros sitios web que no son operados por Nosotros. Si hace clic en el enlace de un tercero, ser?? dirigido al sitio de ese tercero. Le recomendamos encarecidamente que revise la Pol??tica de privacidad de cada sitio que visite.
No tenemos control ni asumimos ninguna responsabilidad por el contenido, las pol??ticas de privacidad o las pr??cticas de los sitios o servicios de terceros.
</p>
<h1>Cambios a esta Pol??tica de Privacidad</h1>
<p>
Es posible que actualicemos nuestra Pol??tica de privacidad de vez en cuando. Le notificaremos cualquier cambio publicando la nueva Pol??tica de Privacidad en esta p??gina.
Le informaremos por correo electr??nico y/o un aviso destacado en Nuestro Servicio, antes de que el cambio entre en vigencia y actualizaremos la fecha de "??ltima actualizaci??n" en la parte superior de esta Pol??tica de privacidad.
Se le recomienda revisar esta Pol??tica de Privacidad peri??dicamente para cualquier cambio. Los cambios a esta Pol??tica de privacidad son efectivos cuando se publican en esta p??gina.
</p>
<h2 class="header-title">Cont??ctenos</h2>
		<p>Si tiene alguna pregunta sobre esta Pol??tica de privacidad, puede contactarnos:
Al visitar esta p??gina en nuestro sitio web:<a href="politicasPrivacidad.php" class='contact-form'>Politicas de Privacidad</a></p>
	</div>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
  <?php include('footer.html');?>
  <script src="assets/js/pedido3.js"></script>
<!-- ============================================================= FOOTER : END============================================================= --> 

</body>

</html>