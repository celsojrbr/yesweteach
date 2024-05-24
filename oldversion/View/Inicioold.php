<?php
use src\MensagemTrait;
	
use src\Conexao\Conexao;

use Controler\Noticia\NoticiaControler;

$pdo = Conexao::getInstance();
?>
    <section class="banner" id="top" style="background-image: url(imgs/homepage-banner-image-1920x700.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
					<img src="<?php echo $localURL; ?>imgs/Logo yes.png" class="img-fluid" alt="Yes, we teach!" style="filter: drop-shadow(0.50rem 0.30rem darkorange);">
				</div>
                <div class="col-md-8">
                    <div class="banner-caption" style="padding:141px 0px;">
                        <h3 style="color:#fff; text-shadow: 0.3rem 0.2rem darkorange;"><b>Transforme sua jornada educacional na Yes, we teach! Inovação no aprendizado, soluções personalizadas para integração diária. Descubra a diferença conosco!</b></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4 style="font-size:48px">Sobre a empresa</h4>
                            <p>A <b>Yes, we teach!</b> começou a partir de duas professoras apaixonadas pela possibilidade de proporcionar experiências e expandir universos, que cansadas de escutar histórias de alunos frustrados com metodologias mirabolantes ou extremamente conservadoras, uniram suas experiências, diversas vivências e conhecimentos para oferecer soluções definitivas. Nosso foco é apresentar uma nova forma de aprendizado, onde o aluno além de obter um aproveitamento completo do conteúdo, também inclui novos conhecimentos em seu dia-a-dia.</p>
							<p><b>Atentas às necessidades de nossos alunos,</b> nós da Yes, desenhamos nossas atividades para oferecer conforto e eficiência ao incluir o ensino na rotina de nossos clientes. </p>
                            <div class="blue-button">
                                <a href="<?php echo $localURL; ?>Saber Mas"> saber mas</a>
                            </div>

                            <br>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" class="img-fluid" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL; ?>imgs/yesweteach.jpg');background-size: cover; background-position: center;height: 370px;width: 100%;">
						<i style="text-align: center;width: 100%;display: block;">Sté e Bia, Sócias fundadoras da Yes, we teach!</i>
                    </div>
                </div>
            </div>
        </section>
		
		
		
		<section class="featured-places" style="padding-top:20px; text-align:center;">
			<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            
                            <h2 style="font-size:48px">Depoimentos</h2>
                        </div>
                    </div> 
                </div> 
				<div class="row">
					<div class="col-md-12">
						<h2 style="text-align:center;">O que nossos alunos têm a dizer:</h2>
					</div> 	
			    </div>
				</br>
				<div class="row">
					<div class="col-lg-6">
						
						<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" width="140" height="140" class="bd-placeholder-img rounded-circle" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL; ?>imgs/yesweteach.jpg');background-size: cover; background-position: center;">
						
						<h2 class="fw-normal">Yasmin Lanza</h2>
						<p>“Acredito firmemente que evolui de maneira significativa no inglês, aprendi diversas coisas nesse primeiro ano que eu nem imaginava antes, isso tudo aconteceu sempre com muito suporte de questões, dúvidas, acertos e erros abertos para que esse caminho fosse percorrido da maneira mais explicativa e cristalina possível! Métodos e materiais incríveis, professores dedicados e a motivação que é passada desde a matrícula na Yes até as aulas, para que a gente consiga aprender de verdade um novo idioma e se sentir bem e realizado com cada etapa!”</p>
						<p></p>
					</div><!-- /.col-lg-4 -->
					
					<div class="col-lg-6">
						<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" width="140" height="140" class="bd-placeholder-img rounded-circle" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL; ?>imgs/yesweteach.jpg');background-size: cover; background-position: center;">
						
						<h2 class="fw-normal">Lohraine Fonseca</h2>
						<p>“A evolução do inicio até hoje é bizarra. Hoje eu já consigo formar algumas frases (poucas), mas consigo. Antes eu só entendia a tradução da palavra "seca", sem conseguir entender os conectores (in, on, at, the, a, an...). Confesso que pelo excesso de trabalho, nao consegui me dedicar como gostaria, mas prometo melhorar isso em 2024. Sobre vocês: SEM PALAVRAS! Incriveis demais!”</p>
						<p></p>
					</div><!-- /.col-lg-4 -->
					<br style="clear:both;" />
					<br style="clear:both;" />
					<div class="col-lg-6">
						<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" width="140" height="140" class="bd-placeholder-img rounded-circle" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL; ?>imgs/yesweteach.jpg');background-size: cover; background-position: center;">
						
						<h2 class="fw-normal">Leonardo Lacerda</h2>
						<p>“As aulas na Yes foram fundamentais para que eu me sinta mais confiante ao falar inglês, meu vocabulário sempre foi voltado para temas técnicos relacionados ao meu trabalho e nas aulas da Yes eu tive a abertura de explorar inúmeras expressões sobre como me comunicar, posicionar e expressar meus pensamentos pessoais. Hoje mesmo precisei desenvolver um small talk com um colega de trabalho da Irlanda e foi muito bom perceber que consigo falar de assuntos diversos, coisa que há 6 meses parecia extremamente difícil para mim.”</p>
						<p></p>
					</div><!-- /.col-lg-4 -->

					<div class="col-lg-6">
						<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" width="140" height="140" class="bd-placeholder-img rounded-circle" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL; ?>imgs/yesweteach.jpg');background-size: cover; background-position: center;">
						
						<h2 class="fw-normal">Suellen Chagas</h2>
						<p>“Quando comecei no mundo do inglês, me sentia perdida e incapaz, mesmo vindo de outra escola. Com a Yes além de me sentir segura em aula para errar, acertar, brincar, é nítido o meu desenvolvimento. Metodologia que acompanha o aluno, sem destruir o nosso psicológico. Eu evoluí sim, principalmente quando ouço alguma música e consigo entender o significado dela., ou assisto uma propaganda em inglês e entendo corretamente o que foi dito e fico horas pensando "Finalmente está acontecendo! O inglês está chegando pra mim".</p>
						<p></p>
					</div>
				</div>
		</section>
		
		
		<section class="featured-places" style="padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            
                            <h2 style="font-size:48px">Planos e condições</h2>
                        </div>
                    </div> 
                </div> 
                <div class="row">
					<div class="col-md-12">
						<h2 style="text-align:center;">A seguir, possibilidades para ter acesso aos nossos cursos disponíveis:</h2>
					</div> 
					
					
					<div class="col-md-12">
						<p style="text-align:center;">Após análise individual, o aluno é nivelado, e assim são montados contratos a cada novo módulo, que pode ser realizado individualmente em duplas (60 ou 90 minutos semanais), ou em grupos de até 6 pessoas (90 ou 120 minutos semanais, em 1 ou 2 dias na semana).</p>
						
						<p style="text-align:center;">Os contratos são montados a partir do pacote de aulas, e calendário vigente, e então o valor final é composto pelo valor total das aulas, dividido pelos meses presentes em contrato, gerando mensalidades fixas.</p>
					</div> 
					
					<div class="col-md-4">
						<div class="jumbotron">
							<h1>40h</h1>
							<p>Níveis “Basic” (A1 e A2) Pre-Intermediate (B1)</p>
						 </div>
	
					</div>
					
					<div class="col-md-4">
					
						<div class="jumbotron">
							<h1>80h</h1>
							<p>Intermediate (B2) e Advanced (C1)</p>
						 </div>
	
					</div>
					
					<div class="col-md-4">
						
					</div>
			
					
				</div>
			</div>
		</section>
		
		<section class="featured-places" style="padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            
                            <h2 style="font-size:48px">Investimento</h2>
                        </div>
                    </div> 
                </div> 
                <div class="row">
					<div class="col-md-12">
						<h2 style="text-align:center;">Clique nas opções abaixo para saber mais!</h2>
					</div>
					<div class="col-md-4">
						<div class="bs-example" data-example-id="simple-jumbotron">
							<div class="jumbotron">
								<h2>Individuais</h2>
								<p>
									Para 1 aula semanal (60m cada):</BR>
									6xR$397,00 l 6x€73,00 </BR></BR>
									Para 1 aula semanal (90m cada):</BR>
									8xR$516,21 l 8x€95,00</BR></BR>
									Para duas aulas semanais (60m cada):</BR>
									6xR$688,27 l 6x€127,00</BR></BR></BR>
								</p>
								<p  class="blue-button"><a href="#" role="button">Matricule-se já!</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="bs-example" data-example-id="simple-jumbotron">
							<div class="jumbotron">
								<h2>Duplas</h2>
								<p>
									Para 1 aula semanal (60m cada) em duplas:</BR>
									6xR$317,40* l 6x€59,00*</BR></BR>
									Para 1 aula semanal (90m cada) em duplas:</BR>
									8xR$412,96* l 8x€76,00*</BR></BR>
									Para 2 aulas semanais (60m cada) em duplas:</BR>
									6xR$550,61* l 6x€102,00*</BR>
								</p>
								<I>valores por aluno*</I></BR></BR>
								<p  class="blue-button"><a href="#" role="button">Matricule-se já!</a></p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="bs-example" data-example-id="simple-jumbotron">
							<div class="jumbotron">
								<h2>Grupos</h2>
								<I>(ATÉ 6 pessoas)</I>
								<p>
									Para 2 aulas semanais (60m cada) em grupos: </BR>
									6xR$434,70* l 6x€80,00*</BR></BR>
									Para 1 aula semanal (90m cada) em grupos:</BR>
									8xR$326,00* l 8x€60,00*</BR>
								</p>
								<I>valores por aluno*</I></BR></BR></BR></BR></BR></BR>
								<p  class="blue-button"><a href="#" role="button">Matricule-se já!</a></p>
							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</section>
		
		
		<section class="featured-places" style="padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            
                            <h2 style="font-size:48px">Matrículas Abertas!</h2>
							
							Nome Completo
							
							Telefone/Whatsapp para contato (Com DDD!) *
														
							Quantos anos você tem? *
							
							Qual você considera ser seu nível de inglês? *
							-Não possuo NENHUM conhecimento em inglês.
							-Básico
							-Intermediário
							-Avançado
							
							Como conheceu a Yes? *
							-Instagram
							-Amigos
							-Outro:
							
							Conte um pouquinho sobre você! Vamos adorar te conhecer melhor! (De preferência, em inglês - caso já tenha algum conhecimento!)
							
							
							
							
                        </div>
                    </div> 
                </div> 
                <div class="row">
					
				</div>
			</div>
		</section>
				
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
					<?php $Noticias = NoticiaControler::GetAllNoticiaDB($pdo,0,3);
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
		<div id="Fale Conosco"></div>
	<section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                    <h2 class="text-center" style="Color:#fff;font-size:48px;">Fale Conosco</h2>
					
					</div>
					<br/>
					<br/>
					<form>
					<div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-6">
                                      <fieldset>
                                        <input name="nome" type="text" class="form-control" id="name" placeholder="Digite seu nome..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-6">
                                      <fieldset>
                                        <input name="assunto" type="text" class="form-control" id="subject" placeholder="Digite o assunto..." required="">
                                      </fieldset>
                                    </div>
									
                                    <div class="col-md-6">
                                      <fieldset>
                                        <input name="Email" type="text" class="form-control" id="name" placeholder="Digite seu email..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-6">
                                      <fieldset>
                                        <input name="Telefone" type="text" class="form-control" id="subject" placeholder="Digite seu Telefone..." required="">
                                      </fieldset>
                                    </div>
									
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="mensagem" class="form-control" id="message" placeholder="Escreva sua mensagem..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <div class="blue-button">
                                            <a href="#" id="form-submit" class="btn">Enviar</a>
                                        </div>
                                      </fieldset>
                                    </div>
                                </div>
                            </div>
							</form>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content" style="padding:30px 30px 30px 30px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                            <p>Em caso de Dúvidas, Críticas, Sugestões, Elogios ou Reclamações, entre em contato através do nosso formulário de contato</p>
                                            <ul>
                                                <li><span>Telefone:</span><a href="Tel:5511930518143">+55(11)93051-8143</a></li>
                                                <li><span>Email:</span><a href="Mail:administrativo@yesweteach.com.br">administrativo@yesweteach.com.br</a></li>
                                                <li><span>Address:</span><i class="fa fa-map-marker"></i> 212 Barrington Court New York</li>
                                            </ul>
                                        </div>
										<footer style="padding:0px;">
										<div class="about-veno">
											<ul class="social-icons">
												<li>
													<a href="#"><i class="fa fa-facebook"></i></a>
													<a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-linkedin"></i></a>
												</li>
											</ul>
										</div>
										</footer>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
            </div>
        </section>	
		
	</main>
	
	
	