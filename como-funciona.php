<?php
// *********************************************************************************
// * Empresa     	    	: Click Menor Preço
// * Script      	    		: como-funciona.php
// * Programador 	   : Renan Toniolo Rocha
// * Linguagem   	   : PHP / HTML / CSS / JavaScript
// * Objetivo	 			: Pagina explicativa de como funciona o click menor preço
// * Data Criacao	    : 03/10/2016
// * Ultima Atualizacao : 03/10/2016
// *********************************************************************************


?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
	<meta property="url" content="http://clickmenorpreco.com.br" >
   <meta property="title" content="Click Menor Preço" >
   <meta property="description" content="O site Click Menor Preço é voltado para consultas de preços em estabelecimentos dos mais variados segmentos. Para pesquisar, basta cadastrar o número de WhatsApp ou e-mail, digitar o produto que pretende comprar e a sua categoria. Pronto! Em pouco minutos já vai receber uma mensagem no WathsApp ou no e-mail com o preço do produto escolhido." >
	<meta property="keywords" content="Click Menor Preço, Click Menor Preco, Pesquisa de Preços, Menor Preço, Melhor Preço" >

	<title>Click Menor Preço | Como Funciona</title>
	<link rel="icon" href="img/favicon.png" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/projeto.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/validacao.js"></script>
</head>
<body>
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="./" class="navbar-brand"></a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php">Início</a>
					</li>
					<li>
						<a href="lista-de-empresas.php">Lista de associados</a>
					</li>
					<li>
						<a href="solicite.php">Solicite nosso Representante</a>
					</li>
					<li class="active">
						<a href="como-funciona.php">Como Funciona</a>
					</li>
					<li>
						<a href="fale-conosco.php">Fale Conosco</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<div class="logo-interna">
			<a href="index.php">
				<img src="img/logo-meio.png" alt="Click menor preço">
			</a>
		</div>
			<div class="col-md-12" >
				<h3>O sistema do Click Menor Preço é muito prático!</h3>
					<ol>
						<li>O consumidor digita seu <strong>Whatsapp</strong> ou <strong>e-mail</strong> (o que preferir para as empresas entrarem em contato).</li>
						<li>Escreve o produto que precisa.</li>
						<li>Escolhe a categoria desejada e clica em "Pesquisar".</li>
						<div class="img-como-funciona img-responsive">
							<img src="img/como_funciona.png" alt="Como Funciona">
						</div>
						<li>Nesse exato momento, as empresas que pertencem à categoria selecionada vão receber um e-mail com as informações da pesquisa.</li>
					</ol>
					<br>
					<p>E ​pronto, as empresas que tiverem o produto escolhido pelo consumidor vão entrar em contato diretamente com ele, para oferecer seus produtos ou serviços com as melhores condições!</p>
					<p>Experimente agora mesmo, faça uma consulta clicando <a href="fale-conosco.php">aqui</a>!</p>
					<div class="margem-40"></div>
			</div>
	</div>

	<footer>
		Click Menor Preço - Todos os direitos reservados
	</footer>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
