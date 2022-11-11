<!DOCTYPE HTML>
<html>
	<head>
		<title>Personajes The Rick and Morty </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner --> 
					
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Rick and Morty</a></h1>
								<hr />
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">EMPEZAR</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li>HOME</li>
							</ul>
						</nav>
				</div>
			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Personajes The Rick and Morty</h2>

					</header>
				</section>

			<!-- Carousel -->
				<section class="carousel">
					<div class="reel">
                        @foreach ($personajes as $personaje)
                            <article>
                                <a target="_blank" href="{{route('detalle.personaje',$personaje['id'])}}" class="image featured"><img src="{{$personaje['imagen']}}" alt="" /></a>
                                <header>
                                    <h3><a target="_blank" href="{{route('detalle.personaje',$personaje['id'])}}">{{$personaje['nombre']}}</a></h3>
                                </header>
                                <p>Especie: {{$personaje['especie']}}.</p>
                                <p>Gender: {{$personaje['genero']}}.</p>
                                <p>Status: {{$personaje['estatus']}}.</p>
                            </article>
                        @endforeach
						
					</div>
				</section>

			
					
				

		</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>
