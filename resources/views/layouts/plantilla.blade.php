<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Cheers. Bar & Grill</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#carta">Nuestra Carta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre_nosotros">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reserva">Reserva</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
   
	</section>
        <main class="py-4">
            @yield('content')
        </main>
        <section id="footer">
		<section id="banner">
			<div class="container-fluid" id="banner-container">
				<div class="row" id="banner-row">
					<div class="col-md-4" id="footer-col1">
						<h3>E-mail</h3>
						<p>bar.grill@cheers.com</p>
					</div>

					<div class="col-md-4" id="footer-col2">
						<h3>Llámanos</h3>
						<p>+34 646 824 951</p>
					</div>

					<div class="col-md-4" id="footer-col2">
						<h3>Localización</h3>
						<p>Calle Cayetano, nº34</p>
					</div>

				</div>
			</div>
		</section>
</body>
</html>
