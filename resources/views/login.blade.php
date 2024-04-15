<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta name="description" content="Multicines Cinestar es una empresa pionera en el formato de multicines en el Perú. Información de películas, estrenos, concursos y más">
		<link rel="shortcut icon" href="{{ asset('../resources/img/varios/favicon.ico') }}">
		<link href="{{ asset('../resources/css/estilos.css') }}" rel="stylesheet" type="text/css">
		<title>Multicines Cinestar</title>
	</head>
	<body>

		<header>
			<div class="area-logo">
				<a href="{{ route('/') }}"><img class = "logo"src="{{ asset('../resources/img/varios/logo-cinestar.png') }}"/></a>
			</div>
			<nav class="menu">
		    	<a id="btnPeliculas" href="{{ route('peliculas','cartelera') }}">HOME</a>
		       	<a href="{{ route('peliculas','Estrenos') }}">PELICULAS</a>
				<a id="btnCines" href="{{ route('cines')}}">CINES</a>
		       	<a href="https://www.cinestar.com.pe/chocolateria">CHOCOLATERÍA</a>
		        <a href="https://www.cinestar.com.pe/socios">SOCIO</a>
		        <a href="https://www.cinestar.com.pe/corporativo">VENTA CORPORATIVA</a>
		        <a href="https://www.cinestar.com.pe/promotions">PROMOCIONES</a>
			</nav>
			<div class="iconos">
				<a class="eres-socio" href="#">¿Eres Socio?</a>
				<img class ="svg" src="{{ asset('../resources/img/svg/linkedin.svg') }}" alt="">
				<img class ="svg" src="{{ asset('../resources/img/svg/instagram.svg') }}" alt="">
				<img class ="svg" src="{{ asset('../resources/img/svg/dacebook.svg') }}" alt="">
				<img class ="svg-perfil" src="{{ asset('../resources/img/svg/perfil.svg') }}" alt="">
			</div>
		</header>
	
		<div class="contenido">
			<section class="slider" id="slider">
				<div class="banners" id="banners">
					<img class="banner" id="b1"src="{{ asset('../resources/img/banners/b1.png') }}" alt="">
					<img class="banner" id="b2"src="{{ asset('../resources/img/banners/b2.png') }}" alt="">
					<img class="banner" id="b3"src="{{ asset('../resources/img/banners/b3.png') }}" alt="">
					<img class="banner" id="b4"src="{{ asset('../resources/img/banners/b4.png') }}" alt="">
					<img class="banner" id="b5"src="{{ asset('../resources/img/banners/b5.png') }}" alt="">
				</div>
				<div class="botones-banners">
					<span class="btn1" onload="alturaSlider()" id="btn1"></span>
					<span class="btn2" onload="alturaSlider()" id="btn2"></span>
					<span class="btn3" onload="alturaSlider()" id="btn3"></span>
					<span class="btn4" onload="alturaSlider()" id="btn4"></span>
					<span class="btn5" onload="alturaSlider()" id="btn5"></span>
				</div>
				<a class="btn-comprar" href="#">
					Comprar
				</a>
			</section>
			<section class="contenido-interno" id="contenido-interno">
				@yield('contenido-interno')
			</section>


			<section class="ventas-corporativas">
				<h1 class="titulo">Ventas Corporativas</h1>
				<div class="cards">
					<div class="card">
						<img src="{{ asset('../resources/img/svg/salas.svg') }}" alt="">
						<h2>Alquiler de Salas para Eventos</h2>
					</div>
					<div class="card">
						<img src="{{ asset('../resources/img/svg/pantallas.svg') }}" alt="">
						<h2>Alquiler de Pantallas</h2>
					</div>
					<div class="card">
						<img src="{{ asset('../resources/img/svg/funciones-privadas.svg') }}" alt="">
						<h2>Funciones Privadas</h2>
					</div>
					<div class="card">
						<img src="{{ asset('../resources/img/svg/banners.svg') }}" alt="">
						<h2>Banners y cartelera estática en el hall</h2>
					</div>
					<div class="card">
						<img src="{{ asset('../resources/img/svg/activacion.svg') }}" alt="">
						<h2>Activación de marca</h2>
					</div>
				</div>
			</section>
		</div>
		<footer>
			<div class="links-footer">
				<a href="https://www.cinestar.com.pe/libro-de-reclamaciones" class="link-footer">LIBRO DE RECLAMACIONES</a>
				<a href="https://www.cinestar.com.pe/trabaja-con-nosotros" class="link-footer">TRABAJA CON NOSOTROS</a>
				<a href="http://www.cinestarmovietime.ws/cpe/login.php" class="link-footer">COMPROBANTE DE PAGO</a>
				<a href="https://www.cinestar.com.pe/quienes-somos" class="link-footer">QUIÉNES SOMOS</a>
				<a href="https://cinestar-files.obs.la-south-2.myhuaweicloud.com/content-management/8548d16a-1c77-482f-a1f5-cad00c11c407.pdf" class="link-footer">TERMINOS Y CONDICIONES</a>
			</div>
			<div class="formulario-footer">
				<h1 class="footer">Contáctanos</h1>
				<form action="#">
					<div class="nombres">
						<label for="">Nombres</label>
						<input type="text">
					</div>
					<div>
						<label for="">Apellidos</label>
						<input type="text">
					</div>
					<div>
						<label for="">Email</label>
						<input type="email">
					</div>
					<div>
						<label for="">Distrito</label>
						<input type="text">
					</div>
					<div>
						<label for="">Mensaje</label>
						<input type="text">
						<input class="btn-enviar" type="button" value="Enviar">
					</div>
				</form>
			</div>
		</footer>
		<script type="module" src="js/script.js"></script>
		<script src="{{ asset('../resources/js/slider.js') }}"></script>
		<script src="{{ asset('../resources/js/actualizaVentana.js') }}"></script>
	</body>
</html>