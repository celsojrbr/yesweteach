<?php
use src\MensagemTrait;
	
use src\Conexao\Conexao;

use Controler\informacoessite\informacoessiteControler;

use Controler\AdminUser\AdminUserControler;

$pdo = Conexao::getInstance();

$infoBasica = informacoessiteControler::GetinformacoessiteDB($pdo,1);

$AutorSite = $infoBasica->getAutorSite();
$Facebook = $infoBasica->getFacebook();
$Instagram = $infoBasica->getInstagram();
$youtube = $infoBasica->getyoutube();
$Email = $infoBasica->getEmail();
$telefone = $infoBasica->gettelefone();
$Whatsapp = $infoBasica->getWhatsapp();
$TituloBase = $infoBasica->getTituloBase();
$DescricaoBase = $infoBasica->getDescricaoBase();
$app_id = $infoBasica->getapp_id();
$BDToken = $infoBasica->getBDToken();
$articletag = $infoBasica->getarticletag();
$keywords = $infoBasica->getkeywords();
$TagExtrasImplementa = $infoBasica->getTagExtrasImplementa();
$ScriptExterno = $infoBasica->getScriptExterno();
$LogoMarcaDesktop = $infoBasica->getLogoMarcaDesktop();
$LogoMarcaMobile = $infoBasica->getLogoMarcaMobile();
$favico = $infoBasica->getfavico();
$Status = $infoBasica->getStatus();
$DataCriado = $infoBasica->getDataCriado();
$DataAtualizado = $infoBasica->getDataAtualizado();
$codInformacoessite  = $infoBasica->getcodInformacoessite();

	
if(isset($_POST['codInformacoessite'])){
	//var_dump($_FILES);
	/*$LogoMarcaDesktop
	$LogoMarcaMobile
	$favico*/
	
	$dadosarquivi1 = $_FILES['LogoMarcaDesktop'];
	if(preg_match('/^image\/(jpeg|jpg|JPEG|JPG|pjpeg|PJPEG|png|PNG)$/', $dadosarquivi1['type'])){
		//$nome = md5(time().rand()).'.jpg';
		// matriz de entrada
		$what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º','\'' );

		// matriz de saída
		$by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','' );

		// devolver a string
		$nome =  str_replace($what, $by, $_POST['TituloBase']);
		
		$nome = $nome.'.jpg';
		
		$subirimagen = move_uploaded_file($dadosarquivi1['tmp_name'], '../imgs/'.$nome);
		
		$_POST["LogoMarcaDesktop"]= "imgs/".$nome;
	}else{
		$_POST["LogoMarcaDesktop"] =$LogoMarcaDesktop;
	}
	
	$dadosarquivi2 = $_FILES['LogoMarcaMobile'];
	if(preg_match('/^image\/(jpeg|jpg|JPEG|JPG|pjpeg|PJPEG|png|PNG)$/', $dadosarquivi2['type'])){
		//$nome = md5(time().rand()).'.jpg';
		// matriz de entrada
		$what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º','\'' );

		// matriz de saída
		$by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','' );

		// devolver a string
		$nome =  str_replace($what, $by, $_POST['TituloBase']);
		
		$nome = $nome.'.jpg';
		
		$subirimagen = move_uploaded_file($dadosarquivi2['tmp_name'], '../imgs/'.$nome);
		
		$_POST["LogoMarcaMobile"]= "imgs/".$nome;
	}else{
		$_POST["LogoMarcaMobile"] =$LogoMarcaMobile;
	}
	
	$dadosarquivi3 = $_FILES['favico'];
	if(preg_match('/^image\/(jpeg|jpg|JPEG|JPG|pjpeg|PJPEG|png|PNG)$/', $dadosarquivi3['type'])){
		//$nome = md5(time().rand()).'.jpg';
		// matriz de entrada
		$what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º','\'' );

		// matriz de saída
		$by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','' );

		// devolver a string
		$nome =  str_replace($what, $by, $_POST['TituloBase']);
		
		$nome = $nome.'.jpg';
		
		$subirimagen = move_uploaded_file($dadosarquivi3['tmp_name'], '../imgs/'.$nome);
		
		$_POST["favico"]= "imgs/".$nome;
	}else{
		$_POST["favico"] =$favico;
	}
	
	
	
	//var_dump($_POST);
	
	
	
	if(informacoessiteControler::UpdateinformacoessiteDB($pdo,$_POST)){
		
		MensagemTrait::set('Sucesso arquivo Inserido no banco de dados', 'success');
		//header('Location: informacoessite'); 
	}
}
?>

<h1>Informações Básica do site</h1>
<?php 
	MensagemTrait::get();
?>
<div class="">
	
	 <form action=""  method="post" enctype="multipart/form-data">
			<input name="codInformacoessite" type="hidden" class="form-control" id="idunidade" value="<?php echo $codInformacoessite;?>" >
	  <div class="form-group">
		<label for="Nome">Autor Site:</label>
		<input name="AutorSite" placeholder="AutorSite"  type="text" class="form-control" id="Nome" value="<?php echo $AutorSite; ?>">
	  </div>
	  <div class="form-group">
		<label for="Nome">Facebook:</label>
		<input name="Facebook" placeholder="Facebook"  type="text" class="form-control" id="Nome" value="<?php echo $Facebook; ?>">
	  </div>
	  <div class="form-group">
		<label for="Nome">Instagram:</label>
		<input name="Instagram" placeholder="Instagram"  type="text" class="form-control" id="Nome" value="<?php echo $Instagram; ?>">
	  </div>
	  <div class="form-group">
		<label for="Nome">youtube:</label>
		<input name="youtube" placeholder="Youtube"  type="text" class="form-control" id="Nome" value="<?php echo $youtube; ?>">
	  </div>
	  <div class="form-group">
		<label for="Nome">Email:</label>
		<input name="Email" placeholder="Email"  type="text" class="form-control" id="Nome" value="<?php echo $Email; ?>">
	  </div>
	  <div class="form-group">
		<label for="Nome">telefone:</label>
		<input name="telefone" placeholder="Telefone"  type="text" class="form-control" id="Nome" value="<?php echo $telefone; ?>">
	  </div>
	  <div class="form-group">
		<label for="Nome">Whatsapp:</label>
		<input name="Whatsapp" placeholder="Whatsapp"  type="text" class="form-control" id="Nome" value="<?php echo $Whatsapp; ?>">
	  </div>
	  
	  <div class="form-group">
		<label for="Nome">Titulo Base:</label>
		<input name="TituloBase" placeholder="Titulo Base"  type="text" class="form-control" id="Nome" value="<?php echo $TituloBase; ?>">
	  </div> 
	 
		  <div class="form-group">
			<label for="Nome">app_id(ID do Facebook/Meta):</label>
			<input name="app_id" placeholder="app_id"  type="text" class="form-control" id="Nome" value="<?php echo $app_id; ?>">
		  </div>
	 
	  
	 <div class="row"> 
	 
		 <div class="col-sm-4">
		  <div class="form-group">
			<label for="Nome">Descricao Base:</label>
			<textarea name="DescricaoBase" class="form-control" placeholder="DescricaoBase" style="height: 200px;"><?php echo $DescricaoBase; ?></textarea>
		  </div>
	  </div>
		
	  <div class="col-sm-8">
		  <div class="form-group">
			<label for="Nome">Token(Token gerado para FEED do instragram):</label>
			<input name="BDToken" placeholder="Token de acesso do facebook/instragram"  type="text" class="form-control" id="Nome" value="<?php echo $BDToken; ?>">
		  </div>
	  
		<div class="form-group">
			<label for="Nome">articletag:</label>
			<input name="articletag" placeholder="Articletag"  type="text" class="form-control" id="Nome" value="<?php echo $articletag; ?>">
		</div>
	  </div>
	  
	  
	
		<div class="col-sm-4">
			<div class="form-group">
				<label for="Nome">Logo Marca Desktop:Altura:500px largura:500px</label><br/>
				<div id="picture_preview1" style="float: right;margin-top:-25px;"><img style="width:150px; border:solid;" src="../<?php echo $LogoMarcaDesktop; ?>" /></div>
				<label class="btn btn-default btn-file">
					Carregar Imagem<input onchange="updateSize('Imagem1','picture_preview1');" id="Imagem1" name="LogoMarcaDesktop" type="file" style="display: none;">
				</label><br/>
				selected files: <span id="fileNum">0</span>; 
				total size: <span id="fileSize">0</span>
				<span id="picture_error"></span>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="form-group">
				<label for="Nome">Logo Marca Mobile:Altura:100px largura:100px</label><br/>
				<div id="picture_preview2" style="float: right;margin-top:-25px;"><img style="width:100px; border:solid;" src="../<?php echo $LogoMarcaMobile; ?>" /></div>
				<label class="btn btn-default btn-file">
					Carregar Imagem<input onchange="updateSize('Imagem2','picture_preview2');" id="Imagem2" name="LogoMarcaMobile" type="file" style="display: none;">
				</label><br/>
				selected files: <span id="fileNum">0</span>; 
				total size: <span id="fileSize">0</span>
				<span id="picture_error"></span>
			</div>
		</div>
		
		
		<div class="col-sm-4">
			<div class="form-group">
				<label for="Nome">favico:Altura:50px largura:50px</label><br/>
				<div id="picture_preview3" style="float: right;margin-top:-25px;"><img style="width:50px;border:solid;" src="../<?php echo $favico; ?>" /></div>
				<label class="btn btn-default btn-file">
					Carregar Imagem<input onchange="updateSize('Imagem3','picture_preview3');" id="Imagem3" name="favico" type="file" style="display: none;">
				</label><br/>
				selected files: <span id="fileNum">0</span>; 
				total size: <span id="fileSize">0</span>
				<span id="picture_error"></span>
			</div>
		</div>
		
		
		
		
		<div class="col-sm-4">
			<div class="form-group">
				<label for="Nome">keywords:</label>
				<textarea name="keywords" class="form-control" placeholder="Palavras chaves separada por virgula para auxilizar no google pesquisa ex: curso de ingles,curso de ingles," style="height: 200px;"><?php echo $keywords; ?></textarea>
			</div>
		</div>
		
		<div class="col-sm-4">  
			<div class="form-group">
				<label for="Nome">TagExtrasImplementa:</label>
				<textarea name="TagExtrasImplementa" class="form-control" placeholder="Tag de lugar externos" style="height: 200px;"><?php echo $TagExtrasImplementa; ?></textarea>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="form-group">
				<label for="Nome">ScriptExterno:</label>
				<textarea name="ScriptExterno" class="form-control" placeholder="scripts externos" style="height: 200px;"><?php echo $ScriptExterno; ?></textarea>
			</div>
		</div>
		
		
		
		
		
	</div>
	  
	  
	 
	  <button type="submit" class="btn btn-default">Editar unidade</button>
	</form> 
</div>


<script>
function updateSize(Imagem,picture_preview) {
	var nBytes = 0,
	  oFiles = document.getElementById(Imagem).files,
	  nFiles = oFiles.length;
	for (var nFileId = 0; nFileId < nFiles; nFileId++) {
		nBytes += oFiles[nFileId].size;
	}
	
	
	var elemento = document.getElementById(picture_preview);
	while (elemento.firstChild) {
	  elemento.removeChild(elemento.firstChild);
	}
	
	var sOutput = nBytes + " bytes";
	// optional code for multiples approximation
	for (var aMultiples = ["KiB", "MiB", "GiB", "TiB", "PiB", "EiB", "ZiB", "YiB"], nMultiple = 0, nApprox = nBytes / 1024; nApprox > 1; nApprox /= 1024, nMultiple++) {
		sOutput = nApprox.toFixed(3) + " " + aMultiples[nMultiple] + " (" + nBytes + " bytes)";
	}
	console.log(oFiles);
	var img = document.createElement("img");
	img.src = window.URL.createObjectURL(oFiles[0]);
	img.height = 100;
	img.onload = function() {
		window.URL.revokeObjectURL(this.src);
	}
	
	document.getElementById(picture_preview).appendChild(img);
	// end of optional code
	document.getElementById("fileNum").innerHTML = nFiles;
	document.getElementById("fileSize").innerHTML = sOutput;
}
</script>