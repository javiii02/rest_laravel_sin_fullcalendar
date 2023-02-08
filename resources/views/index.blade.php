@extends('layouts.app')


@section('content')



<!-- SLIDER -->
{{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active" style="background-image: url('images/plato01.jpg')">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('images/img02.jpg')">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('images/img03.jpg')">
			<div class="carousel-caption">
			</div>
		</div>
		<div class="carousel-item" style="background-image: url('images/img04.jpg')">
			<div class="carousel-caption">
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Anterior</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Siguiente</span>
	</button>
</div> --}}

<!-- CARTA -->
<section id="carta">
	<h1 class="text-center">Nuestra Carta</h1>
	<div class="card-group">
		<div class="card">
			<video src=".\images\vid3.mp4" controls type="mp4" ></video>
			<audio src=".\images\aud3.wav" type="wav" controls></audio>
			<!-- <img class="card-img-top" src="images/plato01.jpg" alt="Card image cap"> -->
			<div class="card-body">

				<h2 class="card-title" style="font-weight: bold;">Filete Stroganoff</h2>
				<p class="card-text">Saliendo un poco de Europa Central. y adentrándonos en la cocina clásica rusa,
					nos encontraremos con un plato que ha inspirado miles de otras variedades de recetas de carne:
					el Filete Stroganoff.
				</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Más información.</small>
				<!--Redireccionará a una página o mostrará más información sobre el plato-->
			</div>
		</div>
		<div class="card">
			<video src="./images/vid1.mov" controls ></video>
			<audio src=".\images\aud2.mp3" controls></audio>
			<!-- <img class="card-img-top" src="images/plato02.jpg" alt="Card image cap"> -->
			<div class="card-body">
				<h2 class="card-title" style="font-weight: bold;">Rouladen</h2>
				<p class="card-text">Existen pocos platos típicos tan conocidos en Alemania como los Rouladen,
					rollitos de carne vacuna
					rellenos de cebolla, pepinillo y tocino o bacon. Un plato ideal para disfrutar en familia.</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Más información.</small>
				<!--Redireccionará a una página o mostrará más información sobre el plato-->
			</div>
		</div>
		<div class="card">
			<video src=".\images\vid2.webm" controls></video>
			<audio src=".\images\aud1.ogg" type="ogg" controls></audio>
			<!-- <img class="card-img-top" src="images/plato01.jpg" alt="Card image cap"> -->
			<div class="card-body">
				<h2 class="card-title" style="font-weight: bold;">Tercer Plato</h2>
				<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, modi? Veritatis illum
					voluptatibus quaerat voluptas accusamus quidem alias! Neque soluta dolores inventore.</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Más información.</small>
				<!--Redireccionará a una página o mostrará más información sobre el plato-->
			</div>
		</div>
	</div>
</section>



<!-- SOBRE NOSOTROS FALTA POR COMPLETARLO -->

<!-- Sobre nosotros
<section id="sobre_nosotros">
	<h1 class="text-center">Sobre nosotros</h1>
	<div class="container-fluid" id="sobre_nosotros-container">
		<div class="row" id="banner-row">
			<div class="col-md-12" id="banner-col2">
				<img class="img-responsive rounded mx-auto d-block" src="images/plato01.jpg" alt="" />
			</div>
			<h3 class="text-center">
				Aqui va el texto sobre nosotros.
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
				industry's
				standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
				scrambled it to
				make a type specimen book.
			</h3>
		</div>
	</div>
</section>
<br> -->

@endsection