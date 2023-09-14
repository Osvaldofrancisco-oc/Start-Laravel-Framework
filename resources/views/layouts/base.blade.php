<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>FROGES</title>

</head>

<body id="lading-page">
    <header>
        <div id="title">
            <h1 >FRO</h1>
            <h1 >GES</h1>
        </div>

        <ul>
            <a href="{{route('/')}}"><li><i class="fa-solid fa-browser"></i>Inicio</li></a>
            <a href="{{route('sobre')}}"><li>Serviços</li></a>
            <a href="{{route('contacto')}}"><li>Contactos</li></a>
            <a href="{{ route('login')}}" id="inscreva-se-btn"><li>Entrar</li></a>
        </ul>
    </header>
	<br><br>

	@yield('content')

    <br>
    <br><br>
	<br><br><br>

	<footer>
				<div id="sobre" class="container-footer">
					<div class="row-footer">
						<div class="footer-col">
							<h3>Redes Socias</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia voluptatum eaque exercitationem sint numquam a</p>
							<ul>
								<div class="media">
										<li><a href=""> <img src="{{asset('../home/assts/img/facebook.svg')}}" alt=""></a></li>
										<li><a href=""><img src="{{asset('../home/assts/img/instagram.svg')}}" alt=""></a></li>
										<li><a href=""><img src="{{asset('../home/assts/img/twitter.svg')}}" alt=""></a></li>
										<li><a href=""><img src="{{asset('../home/assts/img/whatsapp.svg')}}" alt=""></a></li>
								</div>
								
							</ul>
						</div>
						
						<div class="footer-col">
							<ul>
								<h3>
										Link
								</h3>
								<li><a href="#">Home</a></li>
								<li><a href="#">Sobre</a></li>
								<li><a href="#">Servicos</a></li>
							</ul>
		
						</div>

						<div class="footer-col">
							<ul>
								<h3>Suporte</h3>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Como funciona</a></li>
								<li><a href="#">Caraterística</a></li>
							</ul>
		
						</div>

						<div class="footer-col">
							<ul>
								<h3>Contactos</h3>
								<li>
									<p>+244935555500</p>
								</li>
								<li>
									<p>frotas@gmail.com</p>
								</li>
								<li>
									<p>Angola</p>
								</li>
		
							</ul>
		
						</div>
					</div>
				</div>
			</footer>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>