<?php 

use src\MensagemTrait;
	
use src\Conexao\Conexao;

use Controler\Imagem\ImagemControler;
use Controler\Slide\SlideControler;


//contador 
$conter = 0;

//controlador de ativado inicial
$estale = "active";

$Slides = SlideControler::GetAllSlideDB($pdo,0,5);
?>
<br/>

<div class="section-heading">
	<h2 style="font-size:48px;text-decoration-color: #f2b705;text-decoration: underline;text-decoration-color: #f2b705;">Veja um pouco da nossas aulas:</h2>
</div>

<div id="carousel-example-generic" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php
		if(isset($Slides)){
		
		foreach ($Slides as $Slide){
			if($conter==1){
				$estale = "";
			}
			$linkImagem = "imgs/SlideImagem/".$Slide->GetImagemSlide()."";
			echo  "<li data-target='#carousel-example-generic' data-slide-to='$conter' class='$estale' ><img src='$linkImagem' width='100%' style='display: block;border: #f2b705 solid;' /></li>";
			$conter++;
		}
		$conter = 0;
		$estale = "active";
		}
		?>
		
		<!--<li data-target="#carousel-example-generic" data-slide-to="1"><img src="" /></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"><img src="" /></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"><img src="" /></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"><img src="" /></li>
		<li data-target="#carousel-example-generic" data-slide-to="5"><img src="" /></li>-->
	</ol>
	
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">


<?php
	//print_r($Noticias);
	if(isset($Slides)){
		
		foreach ($Slides as $Slide){
			if($conter==1){
				$estale = "";
			}
			/* criando o link com a url amigavel */
			$link = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$Slide->Gettitulo());
			/* tirando os espasos  */
			$link = str_replace(" ","-", $link);
			$link = $localURL.'Noticia/'.$link.'/'.$Slide->GetCodSlide();
			$link = $Slide->GetLink();
			
			// link da imagem
			
			$linkImagem = "imgs/SlideImagem/".$Slide->GetImagemSlide()."";
			
			
			$linkNoticia= $link;
			
			$TituloNoticias = $Slide->Gettitulo();
			
			// link da imagem
			$linkImagem = "imgs/SlideImagem/".$Slide->GetImagemSlide()."";
			$imglink =$Slide->GetImagemSlide();
			if(!file_exists($linkImagem)){
				$linkImagem = "imgs/SlideImagem/1.jpg";
			}
		
?>		
		<!-- First slide -->
		<a href="<?php echo $linkNoticia; ?>" title="<?php echo $TituloNoticias; ?>" class="carousel-item <?php echo $estale;?>" style="background-image:url(<?php echo $localURL.$linkImagem; ?>)">
			<div class="carousel-caption">
				<!--<h1 data-animation="animated bounceInUp">
				<a class="linkslide" ><?php echo $TituloNoticias; ?></a></h1>
			
				<h2 data-animation="animated bounceInDown">
				<a class="linkslide" href="<?php echo $linkNoticia; ?>" ><?php echo $TituloNoticias; ?></a></h2>
				
				<a href="http://www.facebook.com/sharer.php?u=<?php echo $linkNoticia; ?>" class="btn btn-ghost btn-lg" data-animation="animated fadeInLeft">Compartilhar</a><a href="<?php echo $linkNoticia; ?>" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Ler Mais</a>-->
			</div>
		</a>
<?php	
		
		
		$conter++;
		
	}
}


?>
	
	</div>
	
	<!-- <button class="carousel-control-prev" type="button" data-target="#carousel-example-generic" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-target="#carousel-example-generic" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</button>

	
	Controls (currently displayed none from style.css)
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>-->
</div>
<br/>
<!-- /.carousel -->