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

$AutorSite = "Yes, we teach!";
$Facebook = "";
$Instagram = "";
$youtube = "";
$Linkdin = "";
$TituloBase = "Yes, we teach!";
$DescricaoBase = "Transforme sua jornada educacional na Yes, we teach! Inovação no aprendizado, soluções personalizadas para integração diária. Descubra a diferença conosco!";
$app_id = "";
$articletag = "";
$keywords = "";
$TagExtrasImplementa = "";
$ScriptExterno = "";
$LogoMarcaDesktop = "$localURL"."imgs/Logo yes.png";
$LogoMarcaMobile = "";
$favico = "";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $TituloBase; ?></title>
        
        <meta name="description" content="<?php echo $DescricaoBase; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/fontAwesome.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/hero-slider.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/owl-carousel.css">
        <link rel="stylesheet" href="<?php echo $localURL; ?>src/Css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="<?php echo $localURL; ?>src/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<h1 style="visibility: hidden; position: absolute;"><?php echo $TituloBase; ?></h1>
	<div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="Inicio"><div class="logo">
                            <img src="<?php echo $LogoMarcaDesktop; ?>" alt="<?php echo $AutorSite; ?>" style="width: 100px;">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li><a href="<?php echo $localURL; ?>Inicio">Início</a></li>

                                <li><a href="<?php echo $localURL; ?>Inicio#Sobre nós">Sobre nós</a></li>

                                <li><a href="<?php echo $localURL; ?>Inicio#Depoimentos">Depoimentos</a></li>

                                <li><a href="<?php echo $localURL; ?>Inicio#Planos e condições">Planos e condições</a></li>

                                <li><a href="<?php echo $localURL; ?>Inicio#Possibilidades">Possibilidades</a></li>
								
                                <li><a href="<?php echo $localURL; ?>Inicio#Investimento">Investimento</a></li>
								
                                <li><a href="<?php echo $localURL; ?>Inicio#Fale Conosco">Fale Conosco</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      

