<?php
date_default_timezone_set('America/Bogota');
use Carbon\Carbon;

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Meta Tag -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- SEO -->	
	<meta name="author" content="Jorge Munoz C">	
	<meta name="url" content="http://motivacion.teloprogramo.net/Principal">
	<meta name="copyright" content="company name">
	<meta name="robots" content="index,follow">	
	<meta property="fb:app_id" content="1233681736730792"/>
	<meta name="description" content="Te invito a trabajar en esta gran Empresa, No debes preocuparte por vender productos o con cumplir con un volumen de ventas mensuales. En esta empresa solo te piden trabajar 5 minutos en el dia para garantizar tu permanencia.
	Puedes desarrollar este negocio desde tu celular o PC y	Puedes hacerlo de forma gratuita."/>	
	<meta property="og:description" 
	content="Te invito a trabajar en esta gran Empresa, No debes preocuparte por vender productos o con cumplir con un volumen de ventas mensuales. En esta empresa solo te piden trabajar 5 minutos en el dia para garantizar tu permanencia.
	Puedes desarrollar este negocio desde tu celular o PC y	Puedes hacerlo de forma gratuita." />
	<meta property="og:url" content="http://motivacion.teloprogramo.net/Principal" />
	<meta property="og:title" content="Solo tu puedes comenzar a ganar dinero y desde casa">
	<meta property="og:site_name" content="Solo tu puedes comenzar a ganar dinero y desde casa">
	<!--   <meta property="og:image" content="http://ganadinero.teloprogramo.net/images/Clickeame/LogoSocial.png"> -->
	<meta property="og:image" content="http://motivacion.teloprogramo.net/images/ganadineroe.jpg">
	<meta property="og:image:width" content="640">
	<meta property="og:image:height" content="300">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="Estilos/images/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="Estilos/images/favicon/apple-touch-icon.png">  
	<link rel="stylesheet" type="text/css" href="Estilos/css/plugin.css">  
	<link rel="stylesheet" type="text/css" href="Estilos/css/style.css">  
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
	<script src="jquery/jquery-3.1.0.min.js"></script>	
	<input type="hidden" name="_token" id="_token"  value="<?php echo e(csrf_token()); ?>">
</head>
<body>
	<div class="preloader">
		<div class="rounder"></div>
	</div>
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="about-fixed">
						<div class="my-pic">
							<img src="images/yotas.jpeg" alt="">
							<a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
							<div id="menu" class="collapse">
								<ul class="menu-link">	
									<?php
									$vista = Route::currentRouteName();
									$current = array
									(
										'Principal' => '',
										'Camino' => '',
										'Seguridad' => '',
										'Herramientas' => ''
										);
									if ($vista == '' || $vista == 'Principal'){
										$current['Principal'] = 'active';
									}else if ($vista == '' || $vista == 'Camino'){
										$current['Camino'] = 'active';					
									}else if ($vista == '' || $vista == 'Seguridad'){
										$current['Seguridad'] = 'active';					
									}else if ($vista == '' || $vista == 'Herramientas'){
										$current['Herramientas'] = 'active';					
									}			
									?>
									<li class="<?php echo e($current['Principal']); ?>">
										<a href="<?php echo e(URL::route('Principal')); ?>">Introducción</a>
									</li>
									<li class="<?php echo e($current['Camino']); ?>">
										<a href="<?php echo e(URL::route('Camino')); ?>">Camino</a>
									</li>
									<li class="<?php echo e($current['Seguridad']); ?>">
										<a href="<?php echo e(URL::route('Seguridad')); ?>">Seguridad</a>
									</li>
									<li class="<?php echo e($current['Herramientas']); ?>">
										<a href="<?php echo e(URL::route('Herramientas')); ?>">Herramientas</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="my-detail">
							<div class="white-spacing">
								<h1>Jorge Muñoz</h1>
								<span>Emprendedor</span><br>
								<img src="images/whatsapp.png" width="30" height="30">
								<span>301-225-1727</span>
							</div> 
							<ul class="social-icon">
								<li><a href="https://www.facebook.com/Jorgeleoanardo18" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/smallvillejo" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<!-- <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="col-md-12 page-body">
						<?php echo $__env->yieldContent('content'); ?>
						<div id="fb-root"></div>
						<div class="pull-right">
							<h4>Total Visitas: <font size ="5", color ="#1abc9c"><label id="ID_contador_Visitas"></label></font> </h4>
						</div>
					</div>

					<div class="col-md-12 page-body margin-top-50 footer">
						<footer>

							<ul class="menu-link">


								<li class="<?php echo e($current['Principal']); ?>">
									<a href="<?php echo e(URL::route('Principal')); ?>">Introducción</a>
								</li>
								<li class="<?php echo e($current['Camino']); ?>">
									<a href="<?php echo e(URL::route('Camino')); ?>">Camino</a>
								</li>
								<li class="<?php echo e($current['Seguridad']); ?>">
									<a href="<?php echo e(URL::route('Seguridad')); ?>">Seguridad</a>
								</li>
								<li class="<?php echo e($current['Herramientas']); ?>">
									<a href="<?php echo e(URL::route('Herramientas')); ?>">Herramientas</a>
								</li>
							</ul>
							<p>© Copyright 2017 Villejo. Todos los derechos Reservados</p>
							<div class="uipasta-credit">Diseñado por <a href="https://www.facebook.com/Jorgeleoanardo18" target="_blank">@Villejo</a></div>
						</footer>
					</div>		
				</div>		


			</div>
		</div>
	</div>




	<script type="text/javascript">
		ContadorVisitas();


		function ContadorVisitas(){			
			$.ajax({
				type:'get',			
				url:'<?php echo e(url('ContadorVisitas')); ?>',
				success: function(data){ 
					$('#ID_contador_Visitas').text(data.TotalVisitas);
					
					// $('#id_grafica').empty().html(data);	
				}         
			});
		}
	</script>

	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>




	<!-- Back to Top Start -->
	<a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
	<!-- Back to Top End -->


	<!-- All Javascript Plugins  -->
	<script type="text/javascript" src="Estilos/js/jquery.min.js"></script>
	<script type="text/javascript" src="Estilos/js/plugin.js"></script>

	<!-- Main Javascript File  -->
	<script type="text/javascript" src="Estilos/js/scripts.js"></script>


</body>
</html>






