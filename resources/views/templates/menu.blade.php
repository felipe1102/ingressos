<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Titulo -->
	<title>@yield('title')</title>


	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.min.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/default.css">		

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>



</head>
<body>
	<!-- Parte superior da pagina. Menu/logo -->
	<div class="body">
		<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
			<div class="header-body">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-logo">
								<a href="index.html">
									<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
								</a>
							</div>
						</div>
						<div class="header-column">
							<div class="header-row">
								<div class="header-search hidden-xs">
									<form id="searchForm" action="http://preview.oklerthemes.com/porto/5.7.2/page-search-results.html" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="q" id="q" placeholder="Procurar..." required>
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>
								</div>
								<nav class="header-nav-top">
									<ul class="nav nav-pills">
									
										<li class="hidden-xs">
											<a href="contact-us.html"><i class="fa fa-angle-right"></i> Entrar/Cadastrar</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="header-row">
								<div class="header-nav">
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
										<i class="fa fa-bars"></i>
									</button>
									<ul class="header-social-icons social-icons hidden-xs">
										<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									</ul>
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
										<nav>
											<ul class="nav nav-pills" id="mainNav">
												<li class="">
													<a href="">
														Eventos
													</a>
												</li>
												<li class="">
													<a href="">
														Quem Somos
													</a>
												</li>
												<li class="">
													<a href="">
														Serviços
													</a>
												</li>
												<li class="">
													<a href="">
														Dúvidas
													</a>
												</li>
												<li class="">
													<a href="">
														Fale Conosco
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Conteudo -->
		<div role="main" class="main">
			@yield('content')
		</div>

		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="col-md-3">
						<div class="newsletter">
							<h4>Newsletter</h4>
							<p>Mantenha-se sempre envolvido com nossos eventos. Entre com seu e-mail e fique sabendo de todas as nossas novidades.
							</p>
		
							<div class="alert alert-success hidden" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
		
							<div class="alert alert-danger hidden" id="newsletterError"></div>
		
							<form id="newsletterForm" action="http://preview.oklerthemes.com/porto/5.7.2/php/newsletter-subscribe.php" method="POST">
								<div class="input-group">
									<input class="form-control" placeholder="exemplo@hotmail.com" name="newsletterEmail" id="newsletterEmail" type="text">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit">Go!</button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-3">
						<h4>Formas de Pagamento</h4>
						<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
							<p>Carregando...</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-details">
							<h4>Contate-nos</h4>
							<ul class="contact">
								<li><p><i class="fa fa-map-marker"></i> <strong>Endereço:</strong> Rua A, Goiânia, Goiás</p></li>
								<li><p><i class="fa fa-phone"></i> <strong>Fone:</strong> (123) 12334-5678</p></li>
								<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">email@exemplo.com</a></p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<h4>Siga-nos</h4>
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-1">
							
						</div>
						<div class="col-md-7">
							<p>© Copyright 2017. Todos os Direitos Reservados.</p>
						</div>
						<div class="col-md-4">
							<nav id="sub-menu">
								<ul>
									
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<!-- Vendor -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/common/common.min.js"></script>
	<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/vide/vide.min.js"></script>
	
	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>
	
	<!-- Current Page Vendor and Views -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	

	
	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>


	
</body>
</html>