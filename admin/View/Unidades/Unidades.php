<?php

$Unidades = $dados;

use src\Conexao\Conexao;

use Controler\AdminUser\AdminUserControler;

use Controler\Inscricao\InscricaoControler;

$pdo = Conexao::getInstance();

$AdminUserLogado = $Usuario;

?>
<div>

	<h2>Unidades:</h2>

</div>
<?php 
	use src\MensagemTrait;

	MensagemTrait::get();
?>

<div class="container">
	<div class="row">
		<table class="table table-striped">
			<thead>
			    <tr>
			        <th>#</th>
			        <th>Nome Unidade</th>
			        <th>Endereço Unidade</th>
			        <th>Telefone Unidade</th>
			        <th>Responsavel</th>
			        <th>Ações</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($Unidades as $Unidade) { 
			if($AdminUserLogado->GetNivel() > 1){
				if($AdminUserLogado->GetCodUnidade()==$Unidade->GetCodUnidade()){
					?>
				<tr>
			        <td><?php print_r($Unidade->GetCodUnidade()); ?></td>
			        <td><?php print_r($Unidade->GetNomeUnidade()); ?></td>
			        <td><?php print_r($Unidade->GetEndUnidade()); ?></td>
			        <td><?php print_r($Unidade->GetTelefoneUnidade()); ?></td>
			        <?php 
			        	$cod = $Unidade->GetResponsavel();
			        	$AdminUser = AdminUserControler::GetAdminUserDB($pdo,$cod);

			        ?>
			        <td><?php print_r($AdminUser->GetNomeCompleto()); ?></td>
					<td>
						<a href="Eventos&CodUnidade=<?php print_r($Unidade->GetCodUnidade()); ?>">
			         		<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Eventos na Unidade</button>
			         	</a>
						<br/><br/>
						<a href="Salas&id=<?php print_r($Unidade->GetCodUnidade()); ?>">
			         		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-blackboard"></span> Salas da Unidade</button>
			         	</a>
						<br/><br/>
						<a href="UnidadesEd&id=<?php print_r($Unidade->GetCodUnidade()); ?>">
			         		<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar Unidade</button>
			         	</a>
						<br/><br/>
						<a href='UnidadesEx&id=<?php print_r($Unidade->GetCodUnidade()); ?>'>
			         		<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir Unidade</button>
			         	</a>
					</td>
				</tr>
			<?php
				}
			}else{
			
			?>
				<tr>
			        <td><?php print_r($Unidade->GetCodUnidade()); ?></td>
			        <td><?php print_r($Unidade->GetNomeUnidade()); ?></td>
			        <td><?php print_r($Unidade->GetEndUnidade()); ?></td>
			        <td><?php print_r($Unidade->GetTelefoneUnidade()); ?></td>
			        <?php 
			        	$cod = $Unidade->GetResponsavel();
			        	$AdminUser = AdminUserControler::GetAdminUserDB($pdo,$cod);

			        ?>
			        <td><?php print_r($AdminUser->GetNomeCompleto()); ?></td>
					<td>
						<a href="Eventos&CodUnidade=<?php print_r($Unidade->GetCodUnidade()); ?>">
			         		<button type="button" class="btn btn-info"><span class="glyphicon glyphicon-calendar"></span> Eventos na Unidade</button>
			         	</a>
						<br/><br/>
						<a href="Salas&id=<?php print_r($Unidade->GetCodUnidade()); ?>">
			         		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-blackboard"></span> Salas da Unidade</button>
			         	</a>
						<br/><br/>
						<a href="UnidadesEd&id=<?php print_r($Unidade->GetCodUnidade()); ?>">
			         		<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar Unidade</button>
			         	</a>
						<br/><br/>
						<a href='UnidadesEx&id=<?php print_r($Unidade->GetCodUnidade()); ?>'>
			         		<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir Unidade</button>
			         	</a>
					</td>
				</tr>
			<?php }
			} ?>
			</tbody>
			</table>
			<a href="UnidadesAd">
			<?php 
			if($AdminUserLogado->GetNivel() == 1){?>
         		 <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Adicionar Unidade</button>
			<?php }?>
         	</a>
	</div>
</div>