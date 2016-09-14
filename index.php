<?php
// *********************************************************************************
// * Empresa     	    	: Click Menor Preço
// * Script      	    		: index.php
// * Programador 	   : Renan Toniolo Rocha
// * Linguagem   	   : PHP / HTML / CSS / JavaScript
// * Objetivo	 			: Pagina principal do sistema
// * Data Criacao	    : 15/05/2016
// * Ultima Atualizacao : 01/08/2016
// *********************************************************************************
include_once("adm/bd_connection.class.php");

// instancia a conexao com a base de dados
$bd = new bd_connection();
// Busca as categorias cadastradas
$categorias = $bd->buscarCategorias();
// Busca as cidades cadastradas
$cidades = $bd->buscarCidadesCadastradas();

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
	
	<title>Click Menor Preço</title>
	<link rel="icon" href="img/favicon.png" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/projeto.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83026701-1', 'auto');
  ga('send', 'pageview');

</script>
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
					<li class="active">
						<a href="index.php">Início</a>
					</li>				
					<li>
						<a href="lista-de-empresas.php">Lista de associados</a>
					</li>
					<li>
						<a href="solicite.php">Solicite nosso Representante</a>
					</li>
					<li>
						<a href="fale-conosco.php">Fale Conosco</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<form name="form1" method="post" action="lista-de-empresas.php" >
		<div class="container">
			<div class="logo">
				<a href="index.php">
					<img src="img/logo-meio.png" alt="Click menor preço">
				</a>
			</div>
			<section class="container-form">
				<div class="input-group"> 
					<span class="input-group-addon">
						<i class="fa fa-whatsapp"></i>				
					</span>
					<span class="input-group-addon">
						<i class="fa fa-envelope-o"></i>
					</span>
					<input name="emailWhats" class="form-control" placeholder="WhatsApp ou e-mail"> 
				</div>
				<div class="sg-selecao">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="input-group">				
							<input name="produto" class="form-control" placeholder="Produto"> 
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
							<select name="categoria" class="form-control" id="sel1">
								<option value="0">CATEGORIA</option>
								<?php 
								while($linha = mysql_fetch_array($categorias))
								{
									$Id = $linha["ID_Categoria"];
									$Nome = $linha["Nome"];
								
									echo "<option value='$Id'>$Nome</option>";
							} 
							?>
						</select>
					</div>					
				</div>
				<div class="sg-combo">
					<select name="cidade" class="form-control">
						<option value="0" >CIDADE</option>
						<?php
						while($linha = mysql_fetch_array($cidades))
						{
									$Id_Cidade = $linha["ID_Cidade"];
									$Nome_Cidade = $linha["Nome"];
								
									echo "<option value='$Id_Cidade' selected='selected' >$Nome_Cidade</option>";
						} 
						?>
					</select>
				</div>			
				<div class="bt-enviar">
					<input type="submit" value="Pesquisar">
				</div>
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