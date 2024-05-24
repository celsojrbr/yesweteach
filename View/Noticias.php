<?php 
use src\MensagemTrait;
	
use src\Conexao\Conexao;

use Controler\Noticia\NoticiaControler;

$in = 0;
$fim = 150;

$localURL = "http://192.168.0.17/novoinstituto/Site/";

$pdo = Conexao::getInstance();

$Noticias = NoticiaControler::GetAllNoticiaDB($pdo,$in,$fim);

?>
<br/>
<br/>
<br/>
<br/>

	<section class="featured-places" style="padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            
                            <h2 style="font-size:48px">Notícias</h2>
                        </div>
                    </div> 
                </div> 
                <div class="row">
					<?php 
					//$Noticias = NoticiaControler::GetAllNoticiaDB($pdo,0,3);
					$contador = 0;
					$estiloNoticias = 0;
					
					foreach($Noticias as $key => $Noticia){
						$estiloNoticias++;
						if($estiloNoticias==1 || $estiloNoticias==6){
							$estilo="col-md-4 col-sm-6 col-xs-12";
						}else{
							$estilo="col-md-4 col-sm-6 col-xs-12";
						}
						
						/***********************************/
						/* criando o link com a url amigavel */
						$link = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$Noticia->Gettitulo());
						// matriz de entrada
						$what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º','\'' );

						// matriz de saída
						$by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-' );

						// devolver a string
						$link =  str_replace($what, $by, $link);
						$link = $localURL.'Noticia/'.$link.'/'.$Noticia->Getcodigo();
						
						
						$linkNoticia= $link;
						
						$categoria="";
						
						if($Noticia->GetLinkVideo() == null){
							if ($Noticia->Getlittleimg() != 'vazio'){
							
								$linkImagem ='<img title="'.$Noticia->Gettitulo().'" style="background: rgba(0, 0, 0, 0) url(\''.$localURL.'imgs/noticias/'.$Noticia->Getlittleimg().'\') repeat scroll center center / 107% auto; display: ; margin-left:20px; margin-bottom:20px;" src="'.$localURL.'imgs/semfundo2.png" align="right" width="100%" height="auto" >';
							}else{
								$linkImagem = '<img title="'.$Noticia->Gettitulo().'" style="background: rgba(0, 0, 0, 0) url(\''.$localURL.'imgs/noticias/'.$Noticia->Getlittleimg().'\') repeat scroll center center / 107% auto; display: ; margin-left:20px; margin-bottom:20px;" src="'.$localURL.'imgs/semfundo2.png" align="right" width="100%" height="auto" >';
							
							}
						}else{
							$DateVideo = explode ( '/' , $Noticia->GetLinkVideo());
							
							$CorrentCode = explode ( '=' ,$DateVideo[3]);
							//	print_r($CorrentCode);
							
							$linkImagem = "<iframe width='auto' height='auto' src='https://www.youtube.com/embed/".$CorrentCode[1]."' frameborder='0' allowfullscreen></iframe>";
							
							//$linkImagem = '<img src="http://localhost/NovoJornalNC/imgs/youtube-button.png" style="background-image:url(https://i.ytimg.com/vi/'.$CorrentCode[1].'/maxresdefault.jpg); background-size: 100% auto; margin-bottom:20px " onmouseover="hover(this);" onmouseout="unhover(this);" width="100%" height="auto" align="left">';
							
						}
						
						$imagemLink="$linkImagem";
						
						$Titulo= $Noticia->Gettituloindex();;
						$Descricao=$Noticia->Getsubtitulonoticia();;
						$Data=@date("d/m/Y h:i", strtotime($Noticia->Getdata()));
					?>
                    <div class="<?php echo $estilo; ?>">
						<a href="<?php echo $link; ?>">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="<?php echo $localURL.'imgs/noticias/'.$Noticia->Getlittleimg(); ?>" alt="<?php echo $link; ?>">
                                </div>

                                <div class="overlay-content">
                                 <!--<strong title="Author"><i class="fa fa-user"></i> Admin</strong> &nbsp;&nbsp;&nbsp;&nbsp;-->
                                 <strong title="Posted on"><i class="fa fa-calendar"></i> <?php echo $Data; ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                 
                                </div>
                            </div>

                            <div class="down-content">
                                <h4><?php echo $Titulo; ?></h4>

                                <p><?php echo $Descricao; ?></p>
								<br/>
                            </div>
                        </div>
						</a>
                    </div>
					<?php
					if($contador==2){
						echo "<br style='clear:both;' />";
						$contador=0;
					}else{
						$contador++;
					}
											
					}
					
					?>
                   
					<br style="clear:both;"/>
					<br style="clear:both;"/>
					<br style="clear:both;"/>
					<fieldset class="text-center">
						<div class="blue-button">
							<a href="<?php echo $localURL; ?>Notícias" id="form-submit" class="btn">Ver todas notícias</a>
						</div>
					</fieldset>
					
                </div>
            </div>
			
			
			
			
        </section>

