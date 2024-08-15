<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SPPA</title>
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
		<style>
			* {
				font-family: 'Poppins', sans-serif;
			}
			
			@media (max-width: 910px) {
				.hiddenlowres {
					display: none;
				}
			}
			
			@media (max-width: 1360px) {
				.hiddenlowresmain {
					display: none;
				}
			}
			
			.nav-link {
				position: relative;
				overflow: hidden;
				display: inline-block;
				padding-bottom: 2px; 
			}
			
			.nav-link::after {
				content: '';
				position: absolute;
				bottom: 0;
				left: 50%;
				width: 0;
				height: 2px;
				background: #000;
				transition: width 0.3s ease, left 0.3s ease;
				transform: translateX(-50%);
			}
			
			.nav-link:hover::after {
				width: 100%;
			}
			
			.flex {
				display: flex;
				align-items: center;
			}  
			
			.hidden {
				display: none;
			}
			
			.icon-wrapper {
				display: inline-flex;
				align-items: center;
				justify-content: center;
				width: 40px; 
				height: 40px; 
				border-radius: 50%; 
				padding: 10px; 
				transition: background-color 0.3s ease, filter 0.3s ease; 
			}
			
			.icon-instagram {
				background-color: #C13584; 
			}
			
			.icon-facebook {
				background-color: #1877F2; 
			}
			
			.icon-email {
				background-color: #D44638; 
			}
			
			.icon-wrapper:hover {
				filter: brightness(0.6); 
			}
			
			.icon-wrapper a {
				color: #ffffff;
			}
			
			.hamburger-menu {
				transition: transform 0.3s ease-in-out;
				transform: translateX(100%);
			}
			
			.hamburger-menu.active {
				transform: translateX(0);
			}
			
			.overlay {
				background: rgba(0, 0, 0, 0.5);
				transition: opacity 0.3s ease-in-out;
				opacity: 0;
			}
			
			.overlay.active {
				opacity: 1;
			}
		</style>
	</head>
		<body class="bg-gray-200 bg-cover bg-center" style="background-image: url('src/assets/images/patinhas.png'); background-size: 900px; background-repeat: repeat;">
			<header class="fixed top-0 left-0 w-full z-20">
				<nav class="flex items-center justify-between mx-auto bg-white shadow-md p-3 h-full">
					<a class="flex items-center" href="index.html">
						<img class="w-18 h-14 ml-2" src="src/assets/images/sppa.png" alt="Logo SPPA">
					</a>
					<span id="hamburger-btn" class="text-2xl cursor-pointer block lg:hidden order-last">☰</span>
					<ul class="hidden lg:flex items-center gap-11 mx-auto h-full">
						<li class="py-1 h-full flex items-center">
							<a href="src/pages/sobrenos.html" class="nav-link text-black text-lg rounded transition duration-300">QUEM SOMOS</a>
						</li>
						<li class="py-1 h-full flex items-center">
							<a href="#" class="nav-link text-black text-lg rounded transition duration-300">NOSSAS ATIVIDADES</a>
						</li>
						<li class="py-1 h-full flex items-center">
							<a href="src/pages/adocao.php" class="nav-link text-black text-lg rounded transition duration-300">ADOÇÃO</a>
						</li>
						<li class="py-1 h-full flex items-center">
							<a href="#" class="nav-link text-black text-lg rounded transition duration-300">EVENTOS</a>
						</li>
						<li class="py-1 h-full flex items-center">
							<a href="#" class="nav-link text-black text-lg rounded transition duration-300">DOAÇÕES</a>
						</li>
						<li class="py-1 h-full flex items-center">
							<a href="#" class="nav-link text-black text-lg rounded transition duration-300">CONTATO</a>
						</li>
					</ul>
					<div class="hidden lg:flex gap-3">
						<a href="https://www.instagram.com/sppaongpiracicaba" target="_blank" class="text-pink-500 text-3xl">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="https://www.facebook.com/groups/298032553718906/" target="_blank" class="text-blue-700 text-3xl">
							<i class="fab fa-facebook"></i>
						</a>
					</div>
				</nav>
			</header>
			<div id="overlay" class="fixed inset-0 z-10 bg-black bg-opacity-50 hidden"></div>
			<div id="hamburger-menu" class="fixed inset-y-0 z-10 left-0 bg-white w-64 h-full shadow-lg hamburger-menu hidden flex items-center justify-center">
				<div class="w-full p-4 relative">
					<button id="close-btn" class="absolute top-[-30px] right-2 text-xl">✖</button>
					<ul class="flex flex-col gap-4 text-center">
						<li><a href="index.html" class="text-black text-lg rounded transition duration-300">INÍCIO</a></li>
						<li><a href="src/pages/sobrenos.html" class="text-black text-lg rounded transition duration-300">QUEM SOMOS</a></li>
						<li><a href="#" class="text-black text-lg rounded transition duration-300">NOSSAS ATIVIDADES</a></li>
						<li><a href="src/pages/adocao.php" class="text-black text-lg rounded transition duration-300">ADOÇÃO</a></li>
						<li><a href="#" class="text-black text-lg rounded transition duration-300">EVENTOS</a></li>
						<li><a href="#" class="text-black text-lg rounded transition duration-300">DOAÇÕES</a></li>
						<li><a href="#" class="text-black text-lg rounded transition duration-300">CONTATO</a></li>
					</ul>
				</div>
			</div>
			<section class="h-screen flex items-center bg-cover bg-center p-5 z-10">
				<div class="max-w-6xl mx-auto w-full text-black text-center lg:text-left">
					<h2 class="text-5xl lg:text-7xl font-bold leading-tight lg:leading-[87.5px]"> Resgatando <span class="text-blue-800 font-bold">esperança</span><br> e construindo <span class="text-blue-800 font-bold">lares</span>
					</h2>
					<p class="text-lg lg:text-xl mt-4">Sociedade Piracicabana de Proteção aos Animais</p>
					<a href="src/pages/adocao.php" class="inline-block">
						<button class="mt-12 bg-red-600 text-white py-4 px-8 text-lg font-bold rounded-lg shadow-md hover:scale-110 transition-transform duration-500"> Adote um peludinho <img src="src/assets/images/pata.png" class="inline w-6 ml-2">
						</button>
					</a>
				</div>
			</section>
			<img class="absolute bottom-0 right-0 max-w-lg z-10 hiddenlowresmain" src="src/assets/images/gato.png" alt="Gato">
			<img class="absolute bottom-0 right-[18%] max-w-sm hiddenlowresmain" src="src/assets/images/cachorro.png" alt="Cachorro">
			<img src="src/assets/images/linetr.png" alt="Detalhe Animal" class="absolute mt-20 top-0 right-0 w-64 h-auto hidden md:block">
			<img src="src/assets/images/linebl.png" alt="Detalhe Animal" class="absolute bottom-0 left-0 right-0 w-64 hidden md:block">
			<footer class="bg-[#021452]">
				<div class="container mx-auto py-10 px-4">
					<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
						<div>
							<h4 class="text-lg text-white">SPPA</h4>
							<ul class="text-gray-300 mt-4 space-y-2">
								<li>Transformando vidas</li>
								<li class="flex space-x-4 mt-4">
									<div class="icon-wrapper icon-instagram">
										<a href="https://www.instagram.com/sppaongpiracicaba/" class="text-xl"><i class="fab fa-instagram"></i></a>
									</div>
									<div class="icon-wrapper icon-facebook">
										<a href="https://www.facebook.com/groups/298032553718906/" class="text-xl"><i class="fab fa-facebook-f"></i></a>
									</div>
									<div class="icon-wrapper icon-email">
										<a href="mailto:sppaong@gmail.com" class="text-xl"><i class="fas fa-envelope"></i></a>
									</div>
								</li>
							</ul>
						</div>
						<div>
							<h4 class="text-lg text-white">ONG</h4>
							<ul class="mt-4 space-y-2">
								<li><a href="src/pages/sobrenos.html" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">QUEM SOMOS</a></li>
								<li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">NOSSAS ATIVIDADES</a></li>
								<li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">CONTATO</a></li>
							</ul>
						</div>
						<div>
							<h4 class="text-lg text-white">ANIMAIS</h4>
							<ul class="mt-4 space-y-2">
								<li><a href="src/pages/adocao.php" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">ADOTE UM PELUDINHO</a></li>
								<li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">PONTOS DE ADOÇÃO</a></li>
								<li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">DOE AGORA</a></li>
							</ul>
						</div>
						<div class="flex items-start space-x-4">
							<div>
								<h4 class="text-lg text-white">DOE AGORA</h4>
								<div class="mt-4">
									<p class="text-gray-300"> CHAVE <span class="text-blue-400 font-bold">PIX</span> CNPJ:<br>
										<span id="cnpj">56.986.342/0001-87</span>
										<button class="ml-2 text-blue-400" onclick="Copiar()">
											<i class="far fa-copy"></i>
										</button>
									</p>
								</div>
							</div>
							<img src="src/assets/images/qr.png" alt="QR Code" class="w-24 hiddenlowres">
						</div>
					</div>
				</div>
				<div class="bg-[#000b30] text-center text-[#808080] py-4"> &copy; 2024 Todos os direitos reservados </div>
			</footer>
			<script>
				document.addEventListener('DOMContentLoaded', () => {
					const hamburgerBtn = document.getElementById('hamburger-btn');
					const closeBtn = document.getElementById('close-btn');
					const hamburgerMenu = document.getElementById('hamburger-menu');
					const overlay = document.getElementById('overlay');
			
					hamburgerBtn.addEventListener('click', () => {
						hamburgerMenu.classList.remove('hidden');
						hamburgerMenu.classList.add('active');
						overlay.classList.remove('hidden');
						overlay.classList.add('active');
					});
			
					closeBtn.addEventListener('click', () => {
						hamburgerMenu.classList.remove('active');
						hamburgerMenu.classList.add('hidden');
						overlay.classList.remove('active');
						overlay.classList.add('hidden');
					});
			
					overlay.addEventListener('click', () => {
						hamburgerMenu.classList.remove('active');
						hamburgerMenu.classList.add('hidden');
						overlay.classList.remove('active');
						overlay.classList.add('hidden');
					});
				});
		
				function Copiar() {
					var cnpj = document.getElementById("cnpj").innerText;
					var tempInput = document.createElement("input");
					tempInput.value = cnpj;
					document.body.appendChild(tempInput);
					tempInput.select();
					document.execCommand("copy");
					document.body.removeChild(tempInput);
					alert("CNPJ copiado: " + cnpj);
				}
			</script>
	</body>
</html>