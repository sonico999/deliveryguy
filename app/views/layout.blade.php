<!DOCTYPE html>
<html lang="es_ES">

	<head>
		<meta charset="UTF-8">
		<title>..:DeliveryGuy:..</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
		<!-- <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'> -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700,400' rel='stylesheet' type='text/css'>
		{{ HTML::style('assets/css/estilos.css'); }}
		{{ HTML::style('assets/css/normalize.css'); }}


	</head>
	<body>
		<header class="MainMenu">
		  	<figure class="MainMenu-containerImage">
				<a clsss="MainMenu-logoLink" href="#">
				
				{{ HTML::image('assets/img/logoOficial.png','',array('class' => 'MainMenu-image')) }}
				</a>
			</figure>

			<div class="MainMenu-ContainerOption">
				<p class="MainMenu-option"><a class="MainMenu-linkOption" href="">Descargar</a></p>
				<p class="MainMenu-option"><a class="MainMenu-linkOption" href="">Soporte</a></p>
				<p class="MainMenu-option"><a class="MainMenu-linkOption" href="">Preguntas frecuentes</a></p>
				<p class="MainMenu-option"><a class="MainMenu-linkOption" href="">Publicidad</a></p>
				<p class="MainMenu-optionSignIn"><a class="MainMenu-linkSignIn" href="">Registrate</a></p>
			</div>
		</header>

		<section class="InfoPrincipal">
	 		<div class="InfoPrincipa-phone">
	 			<firgure class="InfoPrincipal-containerImage">

	 			 {{ HTML::image('assets/img/phone.png','',array('class' => 'InfoPrincipal-image')) }}
	 			</firgure>
	 		</div>
			<div class="InfoPrincipal-containerDescription">
				<p class="InfoPrincipal-title">Te Presentamos a <br>DeliveryGuyApp</p>
				<p class="InfoPrincipal-subtitle">Lorem ipsum </p>
				<figure class="InfoPrincipal-imgApple">
				 {{ HTML::image('assets/img/apple.png','',array('class' => 'Header-image')) }}
				</figure>
				<figure class="InfoPrincipal-imgGoogle">
				{{ HTML::image('assets/img/google.png','',array('class' => 'Header-image')) }}
				</figure>
			</div>
		</section>

	</body>
		<script src=" static/js/jquery-1.11.0.min.js"></script>
		<script src=" static/js/jquery-migrate-1.2.1.min"></script>

</html>