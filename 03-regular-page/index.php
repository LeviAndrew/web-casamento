<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<title>Thamires & Levi</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<meta property="og:title" content="Thamires & Levi - Casamento"/>
	<meta property="og:site_name" content="thamilevi.com.br"/>
	<meta property="og:description" content="Criamos esse site para compartilhar com você nosso casamento. Estamos muito felizes e contamos com seu apoio e orações."/>
	<meta property="og:image" content="https://www.thamilevi.com.br/casamento/images/thami-levi.png"/>
	<meta property="og:image:width" content="158"/>
	<meta property="og:image:height" content="158"/>
	<meta property="og:url" content="https://www.thamilevi.com.br/casamento">
	<meta property="og:type" content="website">
	
	<link rel="icon" type="image/png" size="32x32" href="images/favicon.png">
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Playball%7CBitter" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	
	<link href="common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="common-css/font-icon.css" rel="stylesheet">
	
	<?php
		if(isset($_GET['url'])) {
			if(($_GET['url'] == "presents-list") || ($_GET['url'] == "agradecimento")) {
				echo "<link href='03-regular-page/css/styles.css' rel='stylesheet'>";
				echo "<link href='03-regular-page/css/responsive.css' rel='stylesheet'>";
			} else {
				echo "<link href='01-homepage/css/styles.css' rel='stylesheet'>";
				echo "<link href='01-homepage/css/responsive.css' rel='stylesheet'>";
			}	
		} else {
			echo "<link href='01-homepage/css/styles.css' rel='stylesheet'>";
			echo "<link href='01-homepage/css/responsive.css' rel='stylesheet'>";
		}
		
	?>
	
</head>
<body>
	
	<header id="home">
		
		<div class="container">
		
			<a class="logo" href="http://thamilevi.com.br"><img src="images/aliancas-logo.png" alt="Noiva & Noivo"></a>
			
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon icon-bars"></i></div>
			
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="http://thamilevi.com.br">Home</a></li>
				<li><a href="?url=inicio#uniao"><i class="icon icon-ciurclke" style="margin:0 10px 0 0"></i> Nossa União</a></li>
				<li><a href="?url=inicio#data">Data</a></li>
				<li><a href="?url=inicio#programacao">Programação</a></li>
				<li><a href="?url=presents-list"><i class="icon icon-heart" style="margin:0 10px 0 0"> </i>Lista de Presentes</a></li>
				<li><a href="?url=inicio#galeria">Galeria</a></li>
				<li><a href="#contato">Contato</a></li>
			</ul><!-- main-menu -->
			
		</div><!-- container -->
	</header>
	
	<?php
		if(isset($_GET['url'])) {
			if($_GET['url'] == "presents-list") {
				include 'presents-list.php';	
			}
			elseif($_GET['url'] == "agradecimento") {
				include 'agradecimento.php';	
			}
			else {
				include 'home.php';
			}	
		}
		else {
			include 'home.php';
		}
	?>
	
	
	<footer id="contato">
		<div class="container center-text">
			
			<div class="container center-text">
				<div class="row">		
					<div class="col-sm-12">
						
						<div class="heading">
							<h2 class="title">Contato</h2>
						</div>
						<div class="logo-wrapper">
							<i class="icon icon-star"></i>
							<a class="logo" href="https://thamilevi.com.br"><img src="images/aliancas-logo.png" alt="Noiva & Noivo"></a>							
						</div>
						
						
						<div class="margin-bottom">
							<p>20 de Dezembro 2022</p>
							<p>Junte-se a nós enquanto celebramos a vida e o amor.</p>
							<h4><a href="https://api.whatsapp.com/send?l=pt_pt&phone=5548999454663" class="phone" title="celular">+55 48 99945-4663</a></h4>
							<h4><a href="https://api.whatsapp.com/send?l=pt_pt&phone=5548998373065" target="_blank" class="phone" title="whatsapp">+55 48 99837-3065</a> <i class="icon icon-whatsapp"></i></h4>
							<p>Rua Goiabas nº 2131 - Vargem Grande - Florianópolis/SC<br><small>Rua Antônio Francisco da Silveira nº 231, casa 2 - Pantanal - Florianópolis/SC</small></p>
							
						</div><!-- margin-bottom -->
					</div><!-- col-sm-10 -->
					
				</div><!-- row -->
			</div><!-- container -->
			
			<div class="newsletter">
				
			</div><!-- newsletter -->
			
			<h4 class="title">Nossas Redes Sociais</h4>
			<ul class="social-icons">
				<li><a href="https://www.instagram.com" title="Noiva" target="_blank">@thamiresoliveiraaoficial<i class="icon icon-instagram"></i></a></li>
				<li><a href="https://www.facebook.com" title="Noiva" target="_blank">facebook.com/thamires.oliveira.737001<i class="icon icon-facebook"></i></a></li>
				<li><i class="icon icon-heart"></i></li>
				<li><a href="https://www.instagram.com" title="Noivo" target="_blank">@leviiandrew<i class="icon icon-instagram"></i></a></li>
				<li><a href="https://www.facebook.com" title="Noivo" target="_blank">facebook.com/leviaquino98<i class="icon icon-facebook"></i></a></li>
			</ul>
			<hr>
			<ul class="footer-links">			
				<li><a href="http://thamilevi.com.br">Home</a></li>
				<li><a href="?url=inicio#uniao">Nossa União</a></li>
				<li><a href="?url=inicio#data">Data</a></li>
				<li><a href="?url=inicio#programacao">Programação</a></li>
				<li><a href="https://www.casar.com/encontre-um-casamento/">Lista de Presentes</a></li>
				<li><a href="?url=inicio#galeria">Galeria</a></li>
			</ul>
			<hr>
			<p class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script><br><i class="icon-heart" aria-hidden="true" style="color:#E45F74;"></i>&nbsp; Casamento de Thamires & Levi &nbsp;<i class="icon-heart" aria-hidden="true" style="color:#E45F74;"></i><br>by <a href="https://alexandreaquino.com" target="_blank">AA Design</a></p>
			
		</div><!-- container -->
	</footer>
	
	
	<!-- SCIPTS -->
	
	<script src="common-js/jquery-3.1.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/jquery.countdown.min.js"></script>
	
	<script src="common-js/jquery.fluidbox.min.js"></script>
	
	<script src="common-js/scripts.js"></script>
	
</body>
</html>