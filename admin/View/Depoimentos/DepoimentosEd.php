<?php
use src\MensagemTrait;
	
use src\Conexao\Conexao;

use Controler\Unidade\UnidadeControler;
use Controler\depoimento\depoimentoControler;

use Controler\AdminUser\AdminUserControler;

$pdo = Conexao::getInstance();

$CodDepoimento = $_GET['id'];
$Depoimento = depoimentoControler::GetdepoimentoDB($pdo,$CodDepoimento);

	
if(isset($_POST['CodDepoimento'])){
	
	$dadosarquivi1 = $_FILES['Imagem'];
	if(preg_match('/^image\/(jpeg|jpg|JPEG|JPG|pjpeg|PJPEG)$/', $dadosarquivi1['type'])){
		//$nome = md5(time().rand()).'.jpg';
		// matriz de entrada
		$what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º','\'' );

		// matriz de saída
		$by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','' );

		// devolver a string
		$nome =  str_replace($what, $by, $_POST['NomeDepoente']);
		
		$nome = $nome.'.jpg';
		
		$subirimagen = move_uploaded_file($dadosarquivi1['tmp_name'], '../imgs/Depoimentos/'.$nome);
		
		$_POST["LocalImagem"]= "imgs/Depoimentos/".$nome;
	}else{
		$_POST["LocalImagem"] =$Depoimento->GetLocalImagem();
	}
	
	if(depoimentoControler::UpdatedepoimentoDB($pdo,$_POST)){
		
		MensagemTrait::set('Sucesso arquivo Inserido no banco de dados', 'success');
		header('Location: Depoimentos'); 
	}

	 
}
?>

<h1>Editar Depoimento</h1>

<div class="">
	
	 <form action=""  method="post" enctype="multipart/form-data">
			<input name="CodDepoimento" type="hidden" class="form-control" id="idunidade" value="<?php echo $Depoimento->getCodDepoimento();?>">
	  <div class="form-group">
		<label for="Nome">Nome Depoente:</label>
		<input name="NomeDepoente" placeholder="Nome Depoente"  type="text" class="form-control" id="Nome" value="<?php echo $Depoimento->getNomeDepoente();?>">
	</div>
	<div class="form-group">
		<label for="Nome">Estrela:</label>
		<input name="Estrela" placeholder="Qts Estrelas"  type="text" class="form-control" id="Nome" value="<?php echo $Depoimento->getEstrela();?>">
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="Nome">Imagem:</label><br/>
			<div id="picture_preview" style="float: right;margin-top:-25px;"><img src="../<?php echo $Depoimento->getLocalImagem(); ?>" style="height:100px;"/>Atual</div>
			<label class="btn btn-default btn-file">
				Carregar Imagem<input onchange="updateSize();" id="Imagem" name="Imagem" type="file" style="display: none;">
			</label><br/>
			selected files: <span id="fileNum">0</span>; 
			total size: <span id="fileSize">0</span></p>
			<span id="picture_error"></span>
			
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<label for="Descricao">Depoimento:</label>
			<textarea name="Depoimento" class="form-control"  placeholder="Depoimento" style="height: 200px;"><?php echo $Depoimento->getDepoimento();?></textarea>
		</div>
	</div>
	 
	  <button type="submit" class="btn btn-default">Editar Depoimento</button>
	</form> 
</div>