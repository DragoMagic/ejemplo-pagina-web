<!DOCTYPE HTML>
<html lang="es">
	
	
	<head>
		<link rel="icon" type="image/png" href="images/Logo solo el Love.png" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LoveArtBF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row"> <!-- Configuación de Logo tipo Principal -->
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">
						<img src="images/Logo Pequeño.png" width="400" height="150">
						</a></div>
				</div>
				
				<!-- este es el menu de la barra de inicio el cual sirve seleccionar o agregar segun uno quiera -->
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li class="has-dropdown">
							<a href="#"><!-- aqui va el Texto del Menu segun la casilla que se quiera --></a>
							<ul class="dropdown">
								<!--<li><a href="#">aqui va el Texto del Menu segun la casilla que se quiera </a></li>
								<li><a href="#">aqui va el Texto del Menu segun la casilla que se quiera </a></li>
								<li><a href="#">aqui va el Texto del Menu segun la casilla que se quiera </a></li>
								<li><a href="#">aqui va el Texto del Menu segun la casilla que se quiera </a></li>-->
							</ul> 
						</li>
						<li><a href="Productos.php">Productos</a></li>
						<li class="has-dropdown">
							<a href="#"><!-- aqui va el Texto del Menu segun la casilla que se quiera --></a>
							<ul class="dropdown">
								<!--<li><a href="#">aqui va el Texto del Menu segun la casilla que se quiera </a></li>
								<li><a href="#">aqui va el Texto del Menu segun la casilla que se quiera </a></li>
								<li><a href="#">aqui va el Texto del Menu segun la casilla que se quiera </a></li>
								<li><a href="#">aqui va el Texto del Menu segun la casilla que se quiera </a></li>-->
							</ul> 
						</li>
						<!--<li><a href="pricing.html"><!-- aqui va el Texto del Menu segun la casilla que se quiera  </a></li>-->
						<!--<li><a href="contacto.html">Contacto</a></li>-->
						<li class="btn-cta"><a href="Cotiza.php"><span>Cotizar</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	<!-- Imagen de Fondo Primera (Gris)-->
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Bienvenidos a LoveArtBF</span>
							<h1>Cotizar por tus Productos Favoritos</h1>	
						</div>
						
						
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<!--<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="signup">Registrate</a></li>
										<li class="gtco-second"><a href="#" data-tab="login">Inicia Sesion</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<form action="Registro.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Usuario o Correo</label>
														<input type="text" class="form-control" id="usernamereg">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Contraseña</label>
														<input type="password" class="form-control" id="passwordreg">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password2">verifica Contraseña</label>
														<input type="password" class="form-control" id="password2">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="Sign up">
													</div>
												</div>
											</form>	
										</div>
										<?php
											
											if(isset($_POST['submit'])){
												require("registro.php");
											}
										?>

										<div class="tab-content-inner" data-content="login">
											<form action="Validar.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Usuario o Correo</label>
														<input type="text" class="form-control" id="username">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Contraseña</label>
														<input type="password" class="form-control" id="password">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="Login">
													</div>
												</div>
											</form>	
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>-->
							
					
				</div>
			</div>
		</div>
	</header>>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Cotiza con Nosotros</h2>
					<p>Aqui veras algunos de nuevos productos, Eligue el que mas te guste y Cotiza con Nosotros</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Productos/0.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Productos/0.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Set de Tortas</h2>
							<p>Cotiza por estos Magnificos Set de Tortas Personalizados</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Productos/2.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Productos/2.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Imanes Personalizados</h2>
							<p>Magnificos Imanes Personalizados, con el diseño que mas te guste</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Productos/4.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Productos/4.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dijes de Solteras</h2>
							<p>Hermosos Dijes de Solteras, eligue tu diseño y Nosotros hacemos el Resto</p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Productos/7.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Productos/7.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Stikers Personalizados</h2>
							<p>Hermosos Stikers Personalilzados, Cotiza por los tuyos</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Productos/8.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Productos/8.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Fotografias</h2>
							<p>Busca tus Fotos Favoritas y nosotros le damos vida</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Productos/9.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Productos/9.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Mouse PAD</h2>
							<p>Solo necesitas buscar la imagen y nosotros realizamos el resto</p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	
	<div id="gtco-features" class="border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>¿Como Puedes Hacerlo?</h2>
					<p>Aqui te enseñamos Paso a Paso a como Cotizar por tus Productos Preferidos</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-vector"></i>
						</span>
						<h3>Primer Paso</h3>
						<p>Anda al Menú y Pincha Productos, Hay tendras mucha variedad de Productos</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
					  <h3>Segundo Paso</h3>
						<p>Tienes que identificar Los productos que quieras</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
					  <h3>Tercer Paso</h3>
						<p>Una Vez identificados, Pincha <strong>Cotizar</strong></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-ruler-pencil"></i>
						</span>
						<h3>Cuarto Paso</h3>
						<p>Completa los datos segun formulario para poder Cotizar tus productos</p>
					</div>
				</div>

				<!--<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-paint-roller"></i>
						</span>
						 <h3>Accent Colours</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-announcement"></i>
						</span>
						<h3>Theme Updates</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-stats-up"></i>
						</span>
						<h3>Increase Earnings</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-magnet"></i>
						</span>
						<h3>Passive Income</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p> -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- esto es para agregar un tipo de conteo de subcritores o me gustas depende como uno lo configure -->
	<!-- <div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Fun Facts</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
						<span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Creativity Fuel</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
						<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Happy Clients</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-briefcase"></i>
						</span>
						<span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Projects Done</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-time"></i>
						</span>
						<span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Hours Spent</span>

					</div>
				</div>
					
			</div>
		</div>
	</div> -->
	<!-- esto es para poder colocar tipos de imaganes o videos depende como uno lo configure -->
	<div id="gtco-products">
		<div class="gtco-container">
		  <div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Productos</h2>
					<p>Aqui les dejamos algunos de nuestros Productos Dinamicos</p>
				</div>
			</div>
			<div class="item">
			  <center>
			    <iframe width="871" height="490" src="https://www.youtube.com/embed/b_r0sfcVHsE?list=PLSUrOH13Jygbbrl2OIQUYEoctJfkc0p4p" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
		      </center>
			  <!--<a href="#"><img src="images/img_1.jpg"></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/img_2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/img_3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
					</div>
					<div class="item">
						<a href="#"><img src="images/img_4.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a> -->
		  </div>
			<div class="row">
				<div class="owl-carousel owl-carousel-carousel"> </div>
		  </div>
		</div>
	</div>

	

	<!--<div id="gtco-subscribe"> este es para mostrar el menu de la Subcribirse colocando el correo.
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Para Cotizar subcribete y podras obtener beneficios y mas Productos</p></p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Correo</label>
								<input type="email" class="form-control" id="email" placeholder="Ingresa tu Correo">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>-->

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>LoveArtBF<span class="footer-logo"><span><span></span></h3>
						<p>Tenemos la mejor calidad y los mejores Productos al mejor precio, no olvides recomendar nuestra Pagina a tus amigos; siguenos en Facebook y Instagram para ver mas Novedades</p>
					</div>
				</div>

				<!-- <div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Terms of services</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div> -->

				<div class="col-md-4">
					<div class="gtco-widget">
					  <h3>Contactos</h3>
					  <ul class="gtco-quick-contact"><!-- Este es para poder rediccionar los iconos y mofidicar los nombres -->
						<!-- <li><a href="#"><i class="icon-phone"></i> </a></li>-->
							<li><a href="https://gmail.com"><i class="icon-mail2"></i> LoveArtBF@gmail.com</a></li>
							<li><a href="https://www.facebook.com/LoveArtBf"><i class="icon-facebook"></i> /LoveArtBF</a></li>
						  <li><a href="https://www.instagram.com/loveartbf"><i class="icon-instagram"></i> @LoveArtBF</a></li>
						  <li><a href="https://www.matrimonios.cl/recuerdos-matrimonios/loveartbf--e138351"><i class="icon-calendar"></i> Matrimonios.cl/LoveArtBF</a></li>
					  </ul>
				  </div>
				</div>

			</div>
			<!-- Este es el menú para su modificación de derechos de Autor -->
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2019  Derechos de Autor</small> 
						<small class="block">Diseñada por LoveArtBF<!--<a href="#" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small> -->
					</p>
					<p class="pull-right"><!--esto es para crear los iconos y administrar la Pagina del enlace de direccionamiento -->
						<ul class="gtco-social-icons pull-right">
							<!--<li><a href="#"><i class="icon-twitter"></i></a></li>-->
							<li><a href="https://www.gmail.com"><i class="icon-mail2"></i></a></li>
							<li><a href="https://www.facebook.com/LoveArtBf"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/loveartbf"><i class="icon-instagram"></i></a></li>
							<li><a href="https://www.matrimonios.cl/recuerdos-matrimonios/loveartbf--e138351"><i class="icon-calendar"></i></a></li>
							<!-- <li><a href="#"><i class="icon-dribbble"></i></a></li>-->
							
							
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
							
</html>

