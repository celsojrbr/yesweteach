<?php
use src\MensagemTrait;
	
use src\Conexao\Conexao;


use Controler\depoimento\depoimentoControler;

$pdo = Conexao::getInstance();


?>
<?php
//var_dump($_POST);
	
if(isset($_POST['NomeDepoente'])){
	
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
	}
	
	
	if(depoimentoControler::InsertdepoimentoDB($pdo,$_POST)){
		
		MensagemTrait::set('Sucesso arquivo Inserido no banco de dados', 'success');
		header('Location: Depoimentos'); 
	}

	 
}
?>

<h1>Adicionar Unidade</h1>

<div class="">
	
	<form action=""  method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="Nome">Nome Depoente:</label>
		<input name="NomeDepoente" placeholder="Nome Depoente"  type="text" class="form-control" id="Nome" value="">
	</div>
	<div class="form-group">
		<label for="Nome">Estrela:</label>
		<input name="Estrela" placeholder="Qts Estrelas"  type="text" class="form-control" id="Nome" value="">
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label for="Nome">Imagem:</label><br/>
			<div id="picture_preview" style="float: right;margin-top:-25px;"></div>
			<label class="btn btn-default btn-file">
				Carregar Imagem<input onchange="updateSize();" id="Imagem" name="Imagem" type="file" style="display: none;" required>
			</label><br/>
			selected files: <span id="fileNum">0</span>; 
			total size: <span id="fileSize">0</span></p>
			<span id="picture_error"></span>
			
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<label for="Descricao">Depoimento:</label>
			<textarea name="Depoimento" class="form-control"  placeholder="Depoimento" style="height: 200px;"></textarea>
		</div>
	</div>
	 
	  <button type="submit" class="btn btn-default">Adicionar Depoimento</button>
	</form> 
</div>

<script>

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
