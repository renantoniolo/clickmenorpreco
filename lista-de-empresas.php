<?php
// *********************************************************************************
// * Empresa     	    	: Click Menor Preço
// * Script      	    		: lista-de-empresas.php
// * Programador 	   : Renan Toniolo Rocha
// * Linguagem   	   : PHP / HTML / CSS / JavaScript
// * Objetivo	 			: Pagina que lista todas as Associados cadastradas
// * Data Criacao	    : 05/08/2016
// * Ultima Atualizacao : 20/08/2016
// *********************************************************************************
include_once("adm/pesqProdutoAssociados.class.php");

$emailWhats = $_POST["emailWhats"];
$categoria = $_POST["categoria"];
$produto = strtoupper($_POST["produto"]);
$cidade = strtoupper($_POST["cidade"]);


// instancia a classe de pesquisa
$pesq = new pesqProdutoAssociados($emailWhats, $categoria, $produto, $cidade);

// Busca as categorias cadastradas
$categorias = $pesq->buscarCategorias();

// Busca as cidades cadastradas
$cidades = $pesq->buscarCidadesCadastradas();

// busco os associados
$associados = $pesq->buscarAssociado();


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

	<title>Click Menor Preço | Lista de associados</title>
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
					<li>
						<a href="index.php">Início</a>
					</li>
					<li class="active">
						<a href="lista-de-empresas.php">Lista de associados</a>
					</li>
					<li>
						<a href="solicite.php">Solicite nosso Representante</a>
					</li>
					<li>
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
		<div class="logo-lista">
			<a href="index.php">
				<img src="img/logo-meio.png" alt="Click menor preço">
			</a>
		</div>
		<section class="">
		<form name="form1" method="post" action="lista-de-empresas.php">
			<div class="col-md-3 col-sm-4 col-xs-7 pdd-no">
				<select name="categoria" class="form-control" id="sel1">
						<option value="0" >CATEGORIA</option>
<?php
				while($linha = mysql_fetch_array($categorias))
				{
					$Id = $linha["ID_Categoria"];
					$Nome = $linha["Nome"];

					if($categoria == $Id){ // seleciona a categoria que buscou
						echo "<option value='$Id' selected='selected'>$Nome</option>";
					}
					else {
						echo "<option value='$Id'>$Nome</option>";
					}
		}
  ?>
  			</select>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-7 pdd-no">
				<select name="cidade" class="form-control" id="sel1">
						<option value="0" >CIDADE</option>
				<?php
					while($linha = mysql_fetch_array($cidades))
					{
						$Id_Cidade = $linha["ID_Cidade"];
						$Nome_Cidade = $linha["Nome"];

						if($cidade == $Id_Cidade){ // seleciona a cidade que buscou
							echo "<option value='$Id_Cidade' selected='selected'>$Nome_Cidade</option>";
						}
						else {
							echo "<option value='$Id_Cidade'>$Nome_Cidade</option>";
						}

					}
				?>
				</select>
			</div>
			<div class="col-md-1 col-sm-2 col-xs-4 pdd-no bt-enviar-lista">
				<input type="submit" value="Pesquisar">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 pdd-no">
			<?php if(count($associados) > 0) { ?>
				<h4>Solicitação enviada com sucesso. Encontramos <?php echo count($associados); ?> associado(s) que podem ter seu produto.</h4>
			<?php } else { ?>
				<h4>Desculpe mas não encontramos nenhum Associado que podem ter seu produto. Teste em outra CATEGORIA.</h4>
			<?php } ?>
				<ul class="lista-itens">
				<?php
				for($i=0; $i < count($associados); $i++)
				{
					//associado
					$ass = $associados[$i];

					// Nome do Associado
					$nome = $ass[0];
					$email_ass = $ass[1];
					$telefone_ass = $ass[2];
					$whats = $ass[3];
					echo "<li><a href='#'><i class='fa fa-caret-right'></i>".$nome."    <img src='img/telefone_24.png' alt='email' align= 'middle'>    ".$telefone_ass."    <img src='img/whats_24.png' alt='email' align= 'middle'>    ".$whats."    <img src='img/email_24.png' alt='email' align= 'middle'>    ".$email_ass."</a></li>";

				}
				?>
				</ul>

				<div class="margem-40"></div>
			</div>
			</form>
		</section>
	</div>
	<footer>
		Click Menor Preço - Todos os direitos reservados
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
