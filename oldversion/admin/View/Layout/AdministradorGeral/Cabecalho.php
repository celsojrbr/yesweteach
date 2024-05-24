<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<link rel="stylesheet" href="src/Css/bootstrapCss/bootstrap.css">
	<link rel="stylesheet" href="src/Css/estilo.css">
	<script src="src/js/jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

</head>
<body>
<?php
	$Inicio=array("Inicio", "Home");
	$AdminUser=array("AdminUser", "AdminUser");
	$Unidades=array("Unidades", "UnidadesAd", "UnidadesEd", "UnidadesEx");
	$Depoimentos=array("Depoimentos", "DepoimentosAd", "DepoimentosEd", "DepoimentosEx");
	$Prematriculas=array("Prematricula", "PrematriculasAd", "PrematriculasEd", "PrematriculasEx");
	$Informacoes=array("informacoessite", "InformacoesAd", "InformacoesEd", "InformacoesEx");
	$Slides=array("Slide", "SlideAd", "SlideEd", "SlideEx");
	
	
	$rotas = $_GET["route"];
?>
<div class="container">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="Inicio">Gerenciamento</a>
		</div>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-brand <?php if(in_array($rotas,$AdminUser)){echo 'active';}?>">
					<a class="nav-link" href="AdminUser">Administradores</a>
				</li>
				<li class="nav-brand <?php if(in_array($rotas,$Depoimentos)){echo 'active';}?>"><a class="nav-link"  href="Depoimentos">Depoimentos</a></li>
				<li class="nav-brand <?php if(in_array($rotas,$Informacoes)){echo 'active';}?>"><a class="nav-link"  href="informacoessite">Informações Básica</a></li>
				<li class="nav-brand <?php if(in_array($rotas,$Prematriculas)){echo 'active';}?>"><a class="nav-link"  href="Prematricula">Prematricula</a></li>
				<li class="nav-brand <?php if(in_array($rotas,$Slides)){echo 'active';}?>"><a class="nav-link"  href="Slide">Slides</a></li>
				<!--<li class="nav-brand <?php if(in_array($rotas,$Unidades)){echo 'active';}?>"><a class="nav-link"  href="Unidades">Unidades</a></li>-->
			</ul>
			

		</div>
		<ul class="nav navbar-nav navbar-right">
			<a class="navbar-brand" href="index.php?route=Sair"><li>Sair</li></a>
		</ul>
		
	
	</div>
	
</nav>

</div>
<br style="clear:both"/>
<br style="clear:both"/>
<br style="clear:both"/>
<div class="container">