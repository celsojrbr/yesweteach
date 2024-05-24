<?php
use src\MensagemTrait;
	
use src\Conexao\Conexao;

use Controler\Noticia\NoticiaControler;
use Controler\prematricula\prematriculaControler;
use Controler\depoimento\depoimentoControler;

$pdo = Conexao::getInstance();


//var_dump($_POST);

?>

    <section class="banner" id="top" style="background-image: url(<?php echo $localURL; ?>imgs/04.jpeg); margin-top: 60px; ">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
					<img src="<?php echo $localURL.$LogoMarcaDesktop; ?>" class="img-fluid" alt="Yes, we teach!" style="/*! filter: drop-shadow(0.20rem 0.20rem darkorange); */ padding-top: 0px;border-radius: 100%;width: 100%;margin-top: 35px;">
				</div>
                <div class="col-md-7">
                    <div class="banner-caption" style="padding:90px 0px;padding-bottom: 120px;">
                        <h2 style="color:#fff; /*text-shadow: 0.1rem 0.1rem darkorange;*/"><b>Yes, we teach! | Escola de Inglês Online</b></h2>
                        <h3 style="color:#fff; /*text-shadow: 0.1rem 0.1rem darkorange;*/ font-size: 2.5rem;"><b>Transforme seu amanhã, hoje: aprenda inglês e abra portas para experiências incríveis</b></h3>
                        <p style="color:#fff; /*text-shadow: 0.1rem 0.1rem darkorange;*/ font-size: 2rem;">Entendemos que aprender um novo idioma é uma ponte para aventuras e oportunidades únicas. Oferecemos aulas ao vivo, com professores dedicados e selecionados especialmente para atender ao seu perfil e objetivos, em aulas individuais, em duplas ou pequenos grupos.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
	
	

<main>
	<section class="our-services" style="padding-top: 0px;">
		<div class="container">
			<div class="row" style="margin-right:0px; margin-left:0px;">
			
				<div class="col-md-12" style="background: #f2b705; color:#000; margin-bottom: 15px;margin-top: -70px;z-index: 2;">
					<h1 style="" Class="parte1">Desbrave o seu futuro agora mesmo: domine o inglês e desbloqueie oportunidades para vivências extraordinárias</h1>
				</div>
				
				<div class="col-md-4" style="background: #f2b705; color:#000; display: flex; align-items: center">
					<h1 Class="parte2" style="">Muito além de <b>aulas de inglês tradicionais: soluções de alta performance no aprendizado da língua são a especialidade</b> da Yes, we teach!</h1>
				</div>
				
				<div class="col-md-4 Divisao" >
					<div class="" style="background: #f2b705; color:#000;align-items: center;display: flex;">
						<h1 Class="parte3" style=""><b>Aprenda de onde estiver! Nossas aulas são 100% online</b>, permitindo que você tenha liberdade geográfica pra aprender inglês!</h1>
					</div>
					<br/>
					<div class="" style="background: #f2b705; color:#000;align-items: center;display: flex;">
						<h1 Class="parte4" style="">Você nunca é visto como um número: <b>Na Yes, we teach! os alunos são analisados individualmente,</b> independendo se são parte da consultoria individual ou em grupos.</h1>
					</div>
				</div>
				
				<div class="col-md-4" style="background: #f2b705; color:#000;align-items: center;display: flex;">
					<h1 Class="parte5" style="">Respeitamos a pluralidade e individualidade de cada aluno, norteando todos os processos da escola, principalmente no início, <b>quando em uma entrevista inicial consideramos seus interesses e objetivos pra indicarmos a melhor solução!</b></h1>
				</div>
				
				
				
				
			</div>
		</div>
	</section>
	
	
	<section class="home-aboutus-area" id="Sobre nós" style="padding:0px;background-color:#737373; color:#fff !important; font-size:18px; ">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6 no-padding about-left" style="padding-left:0px;">
					<!---<img class="img-fluid" src="<?php echo $localURL; ?>imgs/yesweteach.jpg" alt="">=-->
					<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" class="img-fluid img-fluidmobile" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background-image:url('<?php echo $localURL; ?>imgs/yesweteach.jpg');">
				</div>
				<div class="col-lg-4 about-left">
					<h1 class="text-white"><b style="font-size:40px;border-bottom: solid #f2b705;">Sobre a empresa</b></h1><br>
					<p style="color:#fff !important; font-size:18px;">A <b>Yes, we teach!</b> começou a partir de duas professoras apaixonadas pela possibilidade de proporcionar experiências e expandir universos, que cansadas de escutar histórias de alunos frustrados com metodologias mirabolantes ou extremamente conservadoras, uniram suas experiências, diversas vivências e conhecimentos para oferecer soluções definitivas. Nosso foco é apresentar uma nova forma de aprendizado, onde o aluno além de obter um aproveitamento completo do conteúdo, também inclui novos conhecimentos em seu dia-a-dia.</p>
					<p style="color:#fff !important; font-size:18px;"><b>Atentas às necessidades de nossos alunos,</b> nós da Yes, desenhamos nossas atividades para oferecer conforto e eficiência ao incluir o ensino na rotina de nossos clientes. </p>
				</div>
			</div>
		</div>
	</section>

<?php
	$Whatsapplink = str_replace(array("(", ")", "-"), "", $Whatsapp);
	//var_dump($_POST);
	if(isset($_POST['NomeCompleto'])){
		
		$prematricula =  prematriculaControler::InsertprematriculaDB($pdo,$_POST);
		
		echo "
				<div class='modal fade show' id='exampleModalXl' tabindex='-1' aria-labelledby='exampleModalXlLabel' style='padding-right: 16px; display: block;' aria-modal='true' role='dialog'>
					<div class='modal-dialog modal-xl' style='max-width: 100%;'>
						<div class='modal-content'>
						<button type='button' class='close' onclick='trocarClasse();' >
                            <span aria-hidden='true' style='font-size: 50px;'>×</span>
                        </button>
							<table style='width:100%; background:#fff' align='center' cellpadding='0' cellspacing='0'>
								<tr>
									<td align='center'>
										<a href=''><img style='text-align:center;' src='https://yesweteach.com.br/imgs/Yes--we-teach-.jpg' alt='Yes We Teach'></a>
									</td>
								</tr>
								<tr>	
									<td align='center' style='background:#f2b705; color:#fff; font-size:16px;'>
										<br/>
										<h1 class='TextIncricao' Style='font-weight: bold;'>INSCRIÇÃO EFETUADA COM SUCESSO!</h1>							
										<p id='TextNormalizado'>
										<b>Em breve um dos nosso colaborador entrara em contato para conversar e efetivar a sua matrícula!</b></p>
										<p id='TextNormalizado' >
										Lembrando que menores de idade deverão estar acompanhados de um responsável legal no ato da matrícula.
										</p>
										<br/>
										
										<p id='TextNormalizado' >Esperamos por você!</p>
										<br/>
										<p id='TextNormalizado' >
											<h1><a href='https://api.whatsapp.com/send/?phone=55$Whatsapplink' target='_blank'><button class='btn btn-primary' type='button' style='font-size: 0.75em;'>Entre em contado pra agilizar o processo</button></a></h1>
										</p>
									</td>
								</tr>
								<tr>	
									<td align='center' style='color:#000;'><br/>
										<p>Yes, we teach! © 2024. Todos os direitos reservados.</p>
									</td>
									
								</tr>
								
							</table>
						</div>
					</div>
				</div>
				";
				if($_COOKIE['contato'] == true){
					$Nome = $_POST['NomeCompleto'];
					$Email = $_POST['Email'];
					$Telefone = $_POST['Whatsapp'];
					$Mensagem = $_POST['ContePouco'];


					// Instância do objeto PHPMailer
					$mail = new PHPMailer;

					// var_dump($mail);
					// Instância do objeto PHPMailer
					//var_dump($dadosExtra);
					//$mail = $dadosExtra;

					// configuração do tipo de escrita do email
					$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
						
					 var_dump($mail);
					// Configura para envio de e-mails usando SMTP
					$mail->isSMTP();
					 
					// Servidor SMTP
					$mail->Host = 'ssl://smtp.gmail.com';
					 
					// Usar autenticação SMTP
					$mail->SMTPAuth = true;
					 
					// Usuário da conta
					$mail->Username = 'siteformulariocontato@gmail.com';
					 
					// Senha da conta
					$mail->Password = 'xmnhjrwpxqpbudkz';
					 
					// Tipo de encriptação que será usado na conexão SMTP
					$mail->SMTPSecure = 'ssl';
					 
					// Porta do servidor SMTP
					$mail->Port = 465;
					 
					// Informa se vamos enviar mensagens usando HTML
					$mail->IsHTML(true);
					 
					// Email do Remetente
					$mail->From = "siteformulariocontato@gmail.com";
					 
					// Nome do Remetente
					$mail->FromName = 'Site Yes we teach - Comunicação';
					 
					// Endereço do e-mail do destinatário

					$mail->addAddress("administrativo@yesweteach.com.br","Administrativo - Yes we teach");
					$mail->addAddress("pedagogico@yesweteach.com.br","Pedagogico - Yes we teach");
					/*$mail->addAddress("celsojrbr@gmail.com","Pedagogico - Yes we teach");*/

					$mail->AddCC("siteformulariocontato@gmail.com","Formulários de matricula site, Yes we teach - Comunicação");
					//$mail->addAddress("$Email","$Nome");


					$assunto=nl2br("Formulários do Site - Yes we teach - Pré Matriculado");
					// Assunto do e-mail
					$mail->Subject = "$assunto";
					
					$mensagem = $Mensagem;
					$mensagem = $mensagem."<br/><br/><br/>Nome:$Nome <br/>Email:$Email <br/>Telefone:$Telefone<br/>Celular:$Celular";
					
					if($mail->Send()){
						@setcookie("contato", true, time()+600, '/');
					}
			
				}
		
	}
	
?>
	
	
	
	<section class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="left-content">
						<br>
						<h4 style="font-size:48px;text-decoration-color: #f2b705;text-decoration: underline;text-decoration-color: #f2b705;">O Match Perfeito!</h4>
						<p style="font-size:24px">Tanto nas <b>aulas individuais como em grupos</b>, combinamos alunos e professores que tenham interesses em comum, pra formar uma conexão incrível, <b>facilitando o aprendizado e tornando essa jornada muito mais agradável!</b></p>
						<p class="blue-button" style="text-align: center;"><a href="<?php echo "https://api.whatsapp.com/send/?phone=55$Whatsapplink"; ?>" role="button">Matricule-se já!</a></p>

						<br>
					</div>
				</div>
				<div class="col-md-6">
					<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" class="img-fluid" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL; ?>imgs/01.jpeg');background-size: cover; background-position: center;height: 370px;width: 100%;">
					<!--<i style="text-align: center;width: 100%;display: block;">Sté e Bia, Sócias fundadoras da Yes, we teach!</i>-->
				</div>
			</div>
		</div>
	</section>
	
	
	<section class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" class="img-fluid" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL; ?>imgs/02.jpeg');background-size: cover; background-position: center;height: 370px;width: 100%;">
					<!--<i style="text-align: center;width: 100%;display: block;">Sté e Bia, Sócias fundadoras da Yes, we teach!</i>-->
				</div>
			
				<div class="col-md-6">
					<div class="left-content">
						<br>
						<h4 style="font-size:48px;text-decoration-color: #f2b705;text-decoration: underline;text-decoration-color: #f2b705;">Materiais autênticos, aprendizado genuíno</h4>
						<p style="font-size:24px">Nossos materiais foram desenvolvidos considerando a <b>realidade e objetivos de nossos alunos</b>, o que torna a experiência muito mais significativa e enriquecedora.</p>
						<p class="blue-button" style="text-align: center;"><a href="<?php echo "https://api.whatsapp.com/send/?phone=55$Whatsapplink"; ?>" role="button">Matricule-se já!</a></p>

						<br>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<section class="our-services">
		<div class="container">
			<div class="row">
				
			
				<div class="col-md-6">
					<div class="left-content">
						<br>
						<h4 style="font-size:42px;text-decoration-color: #f2b705;text-decoration: underline;text-decoration-color: #f2b705;">Tenha todas as suas informações ao alcance das suas mãos.</h4>
						<p style="font-size:24px">Os alunos da Yes, we teach! têm <b>acesso a uma ferramenta exclusiva</b>: o nosso Portal do Aluno, um site e um aplicativo, onde é possível receber informativos sobre as aulas, acompanhar sua frequência, entrar em contato com a escola e professor, receber devolutivas detalhadas, baixar os nossos materiais didáticos disponíveis em PDF e ter acesso às aulas gravadas.</p>
						<!--<div class="blue-button">
							<a href="<?php echo $localURL; ?>Saber Mas"> saber mas</a>
						</div>-->

						<br>
					</div>
				</div>
				
				<div class="col-md-6">
					<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" class="img-fluid" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL; ?>imgs/03.jpeg');background-size: cover; background-position: center;height: 430px;width: 100%;">
					<!--<i style="text-align: center;width: 100%;display: block;">Sté e Bia, Sócias fundadoras da Yes, we teach!</i>-->
				</div>
				
			</div>
		</div>
	</section>
		
		
		
		<section class="featured-places" id="Depoimentos" style="padding-top:20px; text-align:center;">
			<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            
                            <h2 style="font-size:48px; text-decoration-color: #f2b705; text-decoration: underline; text-decoration-color: #f2b705;">Depoimentos</h2>
							<h2 style="text-align:center;">O que nossos alunos têm a dizer:</h2>
                        </div>
                    </div> 
                </div> 
				<div class="row">
					
					<?php  
					
					$Depoimentos = depoimentoControler::GetAlldepoimentoDB($pdo);
					
					foreach ($Depoimentos as $key => $Depoimento) {
						$FotoDepoente = $Depoimento->getLocalImagem();
						$NomeDepoente = $Depoimento->getNomeDepoente();
						$DepoimentoDepoente = $Depoimento->getDepoimento();
						$EstrelaDepoente = $Depoimento->getEstrela();
						
						
					?>
					<div class="col-md-6" <?php	if($key==2 || $key==3){ echo 'style="padding-top: 40px;"'; } ?>>
						
						<!--<img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" width="140" height="140" class="bd-placeholder-img rounded-circle" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL.$FotoDepoente; ?>');background-size: cover; background-position: center;">-->
						
						<h2 class="fw-normal"><?php echo $NomeDepoente; ?></h2>
						<p><?php echo $DepoimentoDepoente; ?></p>
						<p></p>
					</div><!-- /.col-lg-4 -->
					
					<?php
					
					}
					?>
					<br/>
					<p class="blue-button" style="margin: auto;margin-top: 35px;"><a href="<?php echo "https://api.whatsapp.com/send/?phone=55$Whatsapplink"; ?>" role="button">Matricule-se já!</a></p>
				</div>
		</section>
		
		
		<section class="featured-places" id="Planos e condições" style="padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            
                            <h2 style="font-size:48px;text-decoration-color: #f2b705;text-decoration: underline;text-decoration-color: #f2b705;">Planos e condições</h2>
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
					
					<div class="col-md-12" Style="justify-content: center; display:flex; text-align: center;">
					
							<div class="col-md-5">
								<div class="jumbotron">
									<h1>40h</h1>
									<p>Níveis “Basic” (A1 e A2) Pre-Intermediate (B1)</p>
								 </div>
			
							</div>
							
							<div class="col-md-5">
							
								<div class="jumbotron">
									<h1>80h</h1>
									<p>Intermediate (B2) e Advanced (C1)</p>
								 </div>
			
							</div>
	
					</div>
					
					
			
					
				</div>
			</div>
		</section>
		
		<section class="featured-places" id="Investimento" style="padding-top:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading" style="margin-bottom: 30px;">
                            
                            <h2 style="font-size:48px;text-decoration-color: #f2b705;text-decoration: underline;text-decoration-color: #f2b705;">Investimento</h2>
                        </div>
                    </div> 
                </div> 
                <div class="row">
					<div class="col-md-12">
						<h2 style="text-align:center;">Clique nas opções abaixo para saber mais!</h2>
						<br/>
						<br/>
						<br/>
					</div>
					
					<div class="col-md-4">
						
						<div class="bs-example" data-example-id="simple-jumbotron">
							<div class="jumbotron">
								<h2 style="font-size:3rem">Individuais</h2>
								<br/>
								<br/>
								<br/>
								<p>
									Para 1 aula semanal (60m cada):</BR>
									6xR$397,00 | 6x€73,00 </BR></BR>
									Para 1 aula semanal (90m cada):</BR>
									8xR$516,21 | 8x€95,00</BR></BR>
									Para duas aulas semanais (60m cada):</BR>
									6xR$688,27 | 6x€127,00</BR></BR></BR>
								</p>
								<p  class="blue-button"><a href="Inicio#Matrículas" role="button">Matricule-se já!</a></p>
								<br/>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="bs-example" data-example-id="simple-jumbotron">
							<div class="jumbotron" style="padding-bottom: 4.5rem;">
								<h2 style="font-size:3rem">Duplas</h2>
								<p>
									Para 1 aula semanal (60m cada) em duplas:</BR>
									6xR$317,40* | 6x€59,00*</BR></BR>
									Para 1 aula semanal (90m cada) em duplas:</BR>
									8xR$412,96* | 8x€76,00*</BR></BR>
									Para 2 aulas semanais (60m cada) em duplas:</BR>
									6xR$550,61* | 6x€102,00*</BR>
								</p>
								<I>valores por aluno*</I></BR></BR>
								<p  class="blue-button"><a href="Inicio#Matrículas" role="button">Matricule-se já!</a></p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="bs-example" data-example-id="simple-jumbotron">
							<div class="jumbotron">
								<h2 style="font-size:3rem">Grupos</h2>
								<I>(ATÉ 6 pessoas)</I>
								<br/>
								<br/>
								<p>
									Para 2 aulas semanais (60m cada) em grupos: </BR>
									6xR$434,70* | 6x€80,00*</BR></BR>
									Para 1 aula semanal (90m cada) em grupos:</BR>
									8xR$326,00* | 8x€60,00*</BR>
								</p>
								<I>valores por aluno*</I></BR></BR></BR></BR></BR></BR>
								<p  class="blue-button"><a href="Inicio#Matrículas" role="button">Matricule-se já!</a></p>
								<br/>
							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</section>
</main>		


	<section class="home-aboutus-area" id="Sobre nós" style="padding:0px;background-color:#737373; color:#fff !important; font-size:18px; ">
		<div class="container">
		<br/>
		<br/>
			<div class="row">
				
				<div class="col-md-12">
					<h4 style="font-size:38px;text-decoration-color: #f2b705;text-decoration: underline;text-decoration-color: #f2b705; text-align:center;"><b>Passo a Passo</b></h4>
					</br>
					</br>
				</div>
				<div class="col-md-3">
					
					<p style="color:#fff !important; font-size:18px;"><font style="font-size:35px;font-family: arial;">1.</font><br/>Nessa fase aprendemos mais sobre os seus interesses e necessidade através de um bate papo no Zoom, é também nesse momento que fazemos o teste oral caso você já tenha alguma experiência com o idioma para podermos te nivelar.</p>
					
				</div>
				
				<div class="col-md-3">
					<p style="color:#fff !important; font-size:18px;"><font style="font-size:35px;font-family: arial;">2.</font><br/>No caso de aulas em grupo, sugerimos uma aula experimental para que você conheça as outras pessoas da turma.</p>
					
				</div>
				
				<div class="col-md-3">
					<p style="color:#fff !important; font-size:18px;"><font style="font-size:35px;font-family: arial;">3.</font><br/>No caso de aulas em grupo, sugerimos uma aula experimental para que você conheça as outras pessoas da turma.</p>
					
				</div>
				
				<div class="col-md-3">
					<p style="color:#fff !important; font-size:18px;"><font style="font-size:35px;font-family: arial;">4.</font><br/>Com tudo pronto, você recebe o e-mail de boas vindas, acessa o Portal do Aluno e é hora de começar as aulas na Yes!</p>
					
				</div>
				
			</div>
		</div>
		<br/>
		<br/>
	</section>
	
	<section class="home-aboutus-area" style="padding-top: 0px;padding-bottom: 0px;">
		<div class="container">
			<?php include("slideInicial.php"); ?>			
		</div>
	</section>
	
<main>	
		
		<section class="featured-places" style="padding-top:20px;">
            <div class="container">
                <div class="row">
				
				
			
				
				
                    <div class="col-md-12">
                        <div class="section-heading">
                            
							<?php include("FormInicial.php"); ?>
							
                        </div>
                    </div> 
                </div> 
                <div class="row">
					
				</div>
			</div>
		</section>
				
		 
		 
		 
	<div id="Fale Conosco"></div>
	<section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
			<br/>
			<br/>
			<br/>
            <div class="container rodapecss">
                <div class="contact-content">
                    <div class="row">
                    <h2 class="text-center titulorodape" style="">Feed do nosso Instagram</h2>
					
					
					<br/>
					<br/>
					<div class="col-md-7"> 
						<?php include("InstagramFeed.php"); ?>
					</div>
					
                        <div class="col-md-5 partrodape2">
                            <div class="right-content" style="padding:30px 30px 30px 30px;font-size: 18px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                            <p style="font-size: 19px;">Em caso de Dúvidas, Críticas, Sugestões, Elogios ou Reclamações, entre em contato através do nosso formulário de contato</p>
                                            <ul>
                                                <li>Telefone:<a href="Tel:55<?php echo $Whatsapp; ?>" style="font-size: 18px;">+55<?php echo $Whatsapp; ?></a></li>
                                                <li>Email:<a href="Mail:administrativo@yesweteach.com.br" style="font-size: 18px;"><?php echo $Email; ?></a></li>
                                                <li>Rede Social:@yes.we.teach</li>
                                            </ul>
                                        </div>
										<footer style="padding:0px;">
										<div class="about-veno">
										<br/>
											<ul class="social-icons">
												<li>
													<a href="<?php echo $Facebook; ?>" target="_blank" style="width: 50px; height: 50px; line-height: 65px;"><i class="fa fa-facebook" style="font-size: 30px;"></i></a>
													<a href="https://api.whatsapp.com/send/?phone=55<?php echo $Whatsapplink; ?>" target="_blank" style="width: 50px; height: 50px; line-height: 65px;"><i class="fa fa-whatsapp" style="font-size: 30px;"></i></a>
													<a href="<?php echo $Instagram; ?>" target="_blank" style="width: 50px; height: 50px; line-height: 65px;"><i class="fa fa-instagram" style="font-size: 30px;"></i></a>
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
            </div>
        </section>	
		
	</main>

	
	
	
	
	
	