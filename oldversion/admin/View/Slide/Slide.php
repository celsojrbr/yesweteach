<?php

use src\Conexao\Conexao;

use Controler\Usuario\UsuarioControler;

use Controler\Slide\SlideControler;
use src\MensagemTrait;

$Usuariologado = $Usuario;

$pdo = Conexao::getInstance();

$slide = $dados;

$slides = SlideControler::GetAllslideDB($pdo);

?>

<div>
	<h2>Slide:</h2>
	<br/>
</div>
<a href="SlideAd">
	<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Adicionar Slide</button>
</a>
<br/>
<br/>
<?php 
	

	MensagemTrait::get();
	//print_r($RG);
?>
<div class="container">
	<div class="row">
		<table class="table table-striped">
		   <thead>
				<tr>
					<th>CodSlide.</th>
					<th>Nome</th>
					<th>Titulo</th>
					<th>SubTitulo</th>
					<th>Imagem do Slide</th>
					<th>Orden <br/>do Slide</th>
					<th>Link</th>
					<th>Ações</th>
				</tr>
		   </thead>
		  
			<tbody>
				<?php
				
				// print_r($Noticias);
				
				foreach ($slides as $slide) { 
					
				?>
			
				<tr>
					<td><?php echo $slide->getCodSlide(); ?></td>
					<td><?php echo $slide->getNomeSlide(); ?></td>
					<td><?php echo $slide->getTitulo(); ?></td>
					<td><?php echo $slide->getSubTitulo(); ?></td>
					<td><img style="width: 120px;" src="../imgs/SlideImagem/<?php echo $slide->getImagemSlide(); ?>"/></td>
					<td><?php echo $slide->getOrdenSlide(); ?></td>
					<td><?php echo $slide->getLinkText(); ?></td>
			        <td>
						<!--<a href='SlideTrocar?CodSlide=<?php echo $slide->getCodSlide(); ?>'>
			         		<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Trocar Orden</button>
			         	</a><br/><br/>-->
						<a href='SlideED?CodSlide=<?php echo $slide->getCodSlide(); ?>'>
			         		<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar</button>
			         	</a><br/><br/>
			         	<a href="SlideEX?CodSlide=<?php echo $slide->getCodSlide(); ?>">
			         		<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button>
			         	</a>
			        </td>
				
				</tr>
			
				<?php 
				}
				?>
			</tbody>
		</table>
		<!-- final da listagem da noticias -->
			
			
			
		
			  
		
			
	</div>
</div>