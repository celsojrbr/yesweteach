<?php

$Unidades = $dados;

use src\Conexao\Conexao;

use Controler\AdminUser\AdminUserControler;

use Controler\depoimento\depoimentoControler;

$pdo = Conexao::getInstance();

$depoimentos =  depoimentoControler::GetAlldepoimentoDB($pdo);

$localURL = "http://192.168.0.17/yesweteach/";
?>
<div>

	<h2>Depoimentos:</h2>

</div>
<?php 
	use src\MensagemTrait;

	MensagemTrait::get();
?>

<div class="container">
	<div class="row">
		<a href="DepoimentosAd">
			 <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Adicionar Depoimentos</button>
		</a>
		<table class="table table-striped">
			<thead>
			    <tr>
			        <th>#</th>
			        <th>Nome Depoente</th>
			        <th>Depoimento</th>
			        <th>Imagen</th>
			        <th>Estrela</th>
			        <th>Ações</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($depoimentos as $Depoimento) { 
			
			
					$CodDepoimento = $Depoimento->getCodDepoimento();
					$FotoDepoente = $Depoimento->getLocalImagem();
					$NomeDepoente = $Depoimento->getNomeDepoente();
					$DepoimentoDepoente = $Depoimento->getDepoimento();
					$EstrelaDepoente = $Depoimento->getEstrela();
					
					?>
				<tr>
			        <td><?php echo $CodDepoimento; ?></td>
			        <td><?php echo $NomeDepoente; ?></td>
			        <td><?php echo $DepoimentoDepoente; ?></td>
			        <td> <img src="<?php echo $localURL; ?>imgs/semfundoImagenGaleria.png" width="100" height="100" class="bd-placeholder-img rounded-circle" alt="Sté e Bia Sócias fundadoras da Yes, we teach!" style="background:url('<?php echo $localURL.$FotoDepoente; ?>');background-size: cover; background-position: center;"></td>
			        <td><?php echo $EstrelaDepoente; ?></td>
			        
					<td>
						<a href="DepoimentosEd&id=<?php echo $CodDepoimento; ?>">
			         		<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar Depoente</button>
			         	</a>
						<br/><br/>
						<a href='DepoimentosEx&id=<?php echo $CodDepoimento; ?>'>
			         		<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir Depoente</button>
			         	</a>
					</td>
				</tr>
			<?php
		
			}
			
			?>
			</tbody>
			</table>
			
	</div>
</div>