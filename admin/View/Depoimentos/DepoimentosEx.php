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
	
	//print_r($_POST);
	if(depoimentoControler::DeletardepoimentoDB($pdo,$_POST['CodDepoimento'])){
		
		MensagemTrait::set('Sucesso arquivo Excluido no banco de dados', 'success');
		header('Location: Depoimentos'); 
	}

	 
}
?>

<h1>Excluir Depoimento</h1>

<div class="">
	
	 <form action=""  method="post" enctype="multipart/form-data">
			<input name="CodDepoimento" type="hidden" class="form-control" id="idunidade" value="<?php echo $Depoimento->getCodDepoimento();?>">
	  <div class="form-group">
		<label for="Nome">Nome Depoente:</label>
		<input name="NomeDepoente" placeholder="Nome Depoente"  type="text" class="form-control" id="Nome" value="<?php echo $Depoimento->getNomeDepoente();?>" disabled>
	</div>
	<div class="form-group">
		<label for="Nome">Estrela:</label>
		<input name="Estrela" placeholder="Qts Estrelas"  type="text" class="form-control" id="Nome" value="<?php echo $Depoimento->getEstrela();?>" disabled>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="Nome">Imagem:</label><br/>
			<div id="picture_preview" style="float: right;margin-top:-25px;"><img src="../<?php echo $Depoimento->getLocalImagem(); ?>" style="height:100px;"/>Atual</div>
			<label class="btn btn-default btn-file">
				Carregar Imagem<input onchange="updateSize();" id="Imagem" name="Imagem" type="file" style="display: none;" disabled>
			</label><br/>
			selected files: <span id="fileNum">0</span>; 
			total size: <span id="fileSize">0</span></p>
			<span id="picture_error"></span>
			
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<label for="Descricao">Depoimento:</label>
			<textarea name="Depoimento" class="form-control"  placeholder="Depoimento" style="height: 200px;" disabled><?php echo $Depoimento->getDepoimento();?></textarea>
		</div>
	</div>
	 
	  <button type="submit" class="btn btn-default">Excluir Depoimento</button>
	</form> 
</div>