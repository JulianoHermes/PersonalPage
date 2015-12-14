<!DOCTYPE html>
<html>
<head>
	<title>My Personal Page</title>
	<meta charset='utf-8'>

	<meta name="description" content="Juliano Gustavo Hermes - Analista de Sistemas de Automação">
	<meta name="keywords" content="PLC, Supervisório, Rockwell, Schneider">
	
	<link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/colorbox.css">

	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>

</head>
<body>
<header>
	<div class="cabecalho">
		<a href="home" title="Página Inicial" id="self">
			<img src="images/self_header.jpg" class="cabecalho-self" title="Páginal Inicial" alt="HOME">
		</a>
	</div>
	<div class="cabecalho-menu">
		<nav>
			<ul>
				<li>
					<a href="trabalho" title="Trabalhos">Trabalhos</a>
				</li>
				<li>
					<a href="home" title="Home">Home</a>
				</li>
				<li>
					<a href="contato" title="Contato">Contato</a>
				</li>
			</ul>
		</nav>
	</div>
</header>


<?php
	$param = "home";

	if(isset($_GET["param"])){
		$param = $_GET["param"];
	}

	$pagina = "paginas/".$param.".php";

	if(file_exists($pagina)){
		include $pagina;
	}else{
		include "paginas/erro.php";
	}
?>


<div class="clear"></div>

<footer>
	<p>Desenvolvido por Juliano Gustavo Hermes - Todos os direitos reservados</p>
	<p>nas Redes Sociais:</p>
	<p> 
		<a href="http://www.facebook.com/juliano-hermes" title="Facebook" class="fa fa-facebook-square fa-3x"></a>
	</p>
</footer>

</body>
</html>