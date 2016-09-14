<?php
// ***************************************************************************************************************
// * Empresa     	    	: Click Menor Preço
// * Script      	    		: solicite.php
// * Programador 	   : Renan Toniolo Rocha
// * Linguagem   	   : PHP / HTML / CSS / JavaScript
// * Objetivo	 			: Pagina para enviar um e-mail  pedindo para ser cadastrado no sistema como associado
// * Data Criacao	    : 05/08/2016
// * Ultima Atualizacao : 20/08/2016
// ****************************************************************************************************************


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
	
	<title>Click Menor Preço | Solicite nosso Representante</title>
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
					<li class="active">
						<a href="solicite.php">Solicite nosso Representante</a>
					</li>
					<li>
						<a href="fale-conosco.php">Fale Conosco</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<form name="cadastro" method="post" action="solicite.class.php" onSubmit="return validar(this)" />
	<div class="container">
		<div class="logo-interna">
			<a href="index.html">
				<img src="img/logo-meio.png" alt="Click menor preço">
			</a>
		</div>
		<section class="container-form add-input">
		<?php if($_GET["enviar"] == true) { ?>
		<h1>Obrigado por entrar em contato com nosso representante.</h1>
		<?php }else{  ?>
			<h1>Preencha o formulário abaixo, e solicite a visita do nosso representante.</h1>
		<?php } ?>
			<div class="input-group">
				<input name="nome" class="form-control" placeholder="Nome Completo"> 
				<input name="email" class="form-control" placeholder="Email"> 
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12 pdd-no">
				<div class="input-group ddd">				
					<input name="dd" class="form-control" placeholder="DD" maxlength="2"> 
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12 pdd-no">
				<div class="form-group">						
					<input name="telefone" class="form-control" placeholder="Telefone"> 
				</div>					
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 input-group">				
				<input name="cidade" class="form-control" placeholder="Cidade"> 
			</div>
			<div class="bt-enviar">
				<input type="submit" value="Enviar">
			</div>
			<div class="margem-40"></div>
		</section>		
	</div>
	</form>
	<footer>
		Click Menor Preço - Todos os direitos reservados
	</footer>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	

</body>

</html>