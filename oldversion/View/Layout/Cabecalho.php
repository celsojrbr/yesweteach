<?php 
global $localURL;
//$localURL = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
//$localURL = $_SERVER["REQUEST_URI"];
$localURL = "http://192.168.0.17/yesweteach/";

use src\MensagemTrait;
use src\Conexao\Conexao;
use Controler\Noticia\NoticiaControler;
use Controler\informacoessite\informacoessiteControler;
/*  verificador de aluno logado */

$pdo = Conexao::getInstance();
$DadosBaseSite = informacoessiteControler::GetinformacoessiteDB($pdo,1);
//var_dump($DadosBaseSite);	
$AutorSite = $DadosBaseSite->getAutorSite();
$Facebook = $DadosBaseSite->getFacebook();
$Instagram = $DadosBaseSite->getInstagram();
$youtube = $DadosBaseSite->getyoutube();
//$Linkdin =$DadosBaseSite->getLinkdin();
$Email = $DadosBaseSite->getEmail();
$Telefone = $DadosBaseSite->getTelefone();
$Whatsapp = $DadosBaseSite->getWhatsapp();
//$flickr = $DadosBaseSite->getflickr();
$TituloBase = $DadosBaseSite->getTituloBase();
$DescricaoBase =$DadosBaseSite->getDescricaoBase();
$app_id = $DadosBaseSite->getapp_id();
$articletag = $DadosBaseSite->getarticletag();
$keywords = $DadosBaseSite->getkeywords();
$TagExtrasImplementa =$DadosBaseSite->getTagExtrasImplementa();
$ScriptExterno = $DadosBaseSite->getScriptExterno();
$LogoMarcaDesktop = $DadosBaseSite->getLogoMarcaDesktop();;
$LogoMarcaMobile = $DadosBaseSite->getLogoMarcaMobile();
$favico = $DadosBaseSite->getfavico();
$BDToken= $DadosBaseSite->getBDToken();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $TituloBase; ?></title>
        
        <meta name="description" content="<?php echo $DescricaoBase; ?>">
        <meta name="keywords" content="<?php echo $keywords; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/fontAwesome.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/hero-slider.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/owl-carousel.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hero:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="<?php echo $localURL; ?>src/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<body>
	<?php include_once("analyticstracking.php"); ?>
	<h1 style="visibility: hidden; position: absolute;"><?php echo $TituloBase; ?></h1>
	
	
		<header>
			
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="background-color: #737373 !important;">
			<div class="container">
				<a class="navbar-brand" href="Inicio"><div class="logo">
					<img src="<?php echo $LogoMarcaDesktop; ?>" alt="<?php echo $AutorSite; ?>" style="width: 100px;background: #f2ebc4;">
					<img src="<?php echo $LogoMarcaDesktop; ?>" alt="<?php echo $AutorSite; ?>" style="width: 100px;/*filter: drop-shadow(0.10rem 0.10rem darkorange);*/">
				</div></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $localURL; ?>Inicio#Início" style="color:rgba(255,255,255,1) !important;">Início</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $localURL; ?>Inicio#Sobre nós" style="color:rgba(255,255,255,1) !important;">Sobre nós</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $localURL; ?>Inicio#Depoimentos" style="color:rgba(255,255,255,1) !important;">Depoimentos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $localURL; ?>Inicio#Planos e condições" style="color:rgba(255,255,255,1) !important;">Planos e condições</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $localURL; ?>Inicio#Possibilidades" style="color:rgba(255,255,255,1) !important;">Possibilidades</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $localURL; ?>Inicio#Investimento" style="color:rgba(255,255,255,1) !important;">Investimento</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $localURL; ?>Inicio#Fale Conosco" style="color:rgba(255,255,255,1) !important;">Fale Conosco</a>
					</li>
				</ul>
				
				<div class="team-social" style="font-size: 2.5rem;">
					<a target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $Whatsapp; ?>" style="color:rgba(255,255,255,1) !important;"><i class="fa fa-whatsapp"></i></a>
					<a target="_blank" href="<?php echo $Facebook; ?>" style="color:rgba(255,255,255,1) !important;"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="<?php echo $Instagram; ?>" style="color:rgba(255,255,255,1) !important;"><i class="fa fa-instagram"></i></a>
				</div>
				
				</div>
					</div>
			</nav>
			
		
		</header>
