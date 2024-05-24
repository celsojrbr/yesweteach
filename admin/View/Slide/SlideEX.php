<?php
	use src\MensagemTrait;
	
	use src\Conexao\Conexao;
	
	use Controler\Usuario\UsuarioControler;
	
	use Controler\Slide\SlideControler;
	
	use Controler\historielog\historielogControler;
	use Controler\Login\LoginControler;
	use Model\AdminUser\AdminUser as AdminUser;

	
	$pdo = Conexao::getInstance();

?>
<?php
	/*var_dump($_POST);
	var_dump($_FILES);*/
	//var_dump($Slide);

	$CodSlide = $_GET['CodSlide'];
	
	$Slide = SlideControler::GetslideDB($pdo,$CodSlide);
	if(isset($_POST['CodSlide'])){
		$cadastrar = SlideControler::DeletarslideDB($pdo,$_POST['CodSlide']);
		
		if($cadastrar){
			MensagemTrait::set('Slide editado com sucesso', 'success');
			header('Location: Slide');
		}else{
			MensagemTrait::set('Não foi possivel Excluir o Slide', 'danger');
			header('Location: SlideEX?CodSlide='.$_GET['CodSlide']);
		}
		
		
	}
		
?>

<h1>Editar Slide</h1>
<?php 
	MensagemTrait::get();
	
?>
<div class="">

	<form action=""  method="post" enctype="multipart/form-data" class="row">
		<input name="CodSlide" type="hidden" value="<?php echo $Slide->GetCodSlide(); ?>" />
		<div class="col-sm-6">
			<div class="form-group">
				<label for="titulo">Nome do Slide:</label>
				<input name="NomeSlide" placeholder="Nome do Slide" class="form-control" id="titulo" value="<?php echo $Slide->GetNomeSlide(); ?>" type="text" disabled>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="form-group">
				<label for="Subtitulo">Titulo:</label>
				<input name="Titulo" placeholder="Titulo" class="form-control" id="Subtitulo" value="<?php echo $Slide->GetTitulo(); ?>" type="text" disabled>
			</div>
		</div>	
		
		<div class="col-sm-6">
			<div class="form-group">
				<label for="titulo">SubTitulo:</label>
				<input name="SubTitulo" placeholder="SubTitulo" class="form-control" id="titulo" value="<?php echo $Slide->GetSubTitulo(); ?>" type="text" disabled>
			</div>
		</div>
		
		
		
		<div class="col-sm-6">
		
			<div class="form-group">
				<label for="Nome">Imagem:</label><br/>
				<div id="picture_preview" style="float: right;margin-top:-25px;"><img style="width:250px;" src="../imgs/SlideImagem/<?php echo $Slide->GetImagemSlide(); ?>" /></div>
				<label class="btn btn-default btn-file">
					Carregar Imagem<input onchange="updateSize();" id="Imagem" name="ImagemSlide" type="file" style="display: none;" disabled>
				</label><br/>
				selected files: <span id="fileNum">0</span>; 
				total size: <span id="fileSize">0</span></p>
				<span id="picture_error"></span>
				
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="form-group">
				<label for="Descricao">Orden de Slide:</label>
				<input name="ordenSlide" placeholder="Orden de Slide" class="form-control" id="titulo" value="<?php echo $Slide->GetordenSlide(); ?>" type="text" disabled>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="form-group">
				<label for="Descricao">Link:</label>
				<input name="Link" placeholder="Link" class="form-control" id="titulo" value="<?php echo $Slide->GetLinkText(); ?>" type="text" disabled>
			</div>
		</div>
		
		<br style="clear:both;"/>
		
		
		<br style="clear:both;" />
		
		<div class="container" style="text-align: center;">
			<button type="submit" class="btn btn-danger">Excluir Slide</button>
		</div>
		
		</div>
	</form> 
</div>
<script>
$(document).ready(function(){
    $('[name="data"]').mask('00/00/0000');
});

$(document).ready(function(){
    $('[name="DataFinal"]').mask('00/00/0000');
});

$(document).ready(function(){
    $('[name="HorarioUsado"]').mask('00:00 às 00:00');
});
$(document).ready(function(){
    $('[name="RG"]').mask('99.999.999-A');
});


function updateSize() {
	var nBytes = 0,
	  oFiles = document.getElementById("Imagem").files,
	  nFiles = oFiles.length;
	for (var nFileId = 0; nFileId < nFiles; nFileId++) {
		nBytes += oFiles[nFileId].size;
	}
	
	
	var elemento = document.getElementById("picture_preview");
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
	
	document.getElementById("picture_preview").appendChild(img);
	// end of optional code
	document.getElementById("fileNum").innerHTML = nFiles;
	document.getElementById("fileSize").innerHTML = sOutput;
}
</script>
