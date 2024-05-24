<?php
use Controler\AdminUser\AdminUserControler;
use src\Conexao\Conexao;
use Controler\Login\LoginControler;
use src\MensagemTrait;

$pdo = Conexao::getInstance();



$AdminUserlogado = $Usuario;




$arrayNivel=[];

$AdminUsers = AdminUserControler::GetAllAdminUserDB($pdo);

?>

<div>
	<h2>AdminUsers:</h2>

</div>
<?php 

	MensagemTrait::get();
	
?>
<div class="container">
	<div class="row">
		<table class="table table-striped">
		   <thead>
			  <tr>
				<th>#</th>
				<th>Nome AdminUser</th>
				<th>Telefone/celular</th>
				<th>Email</th>
				<th>Data Criado</th>
				<th>Editar AdminUsers</th>
			    <th>Excluir AdminUsers</th>
				 
			  </tr>
		   </thead>
		  
		   <tbody>
			   <?php
				
			   foreach ($AdminUsers as $AdminUserlista) { 
				if($AdminUserlista->Getstatus()==1){
			   ?>
			      <tr>
			         <th scope="row"><?php print_r($AdminUserlista->GetCodAdminUser()); ?></th>
			         <td><?php echo $AdminUserlista->GetNomeCompleto(); ?></td>
			         <td><?php echo $AdminUserlista->GetTelefone().' / '.$AdminUserlista->GetTelefone(); ?></td>
			         <td><?php print_r($AdminUserlista->GetEmail()); ?></td>
			         <td><?php print_r(@date("d/m/Y", strtotime($AdminUserlista->GetdataCriado()))); ?></td>
			         <th>
			         	<a href="AdminUsersEd&id=<?php print_r($AdminUserlista->GetCodAdminUser()); ?>">
			         		<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Editar AdminUser</button>
			         	</a>
			         </th>
			         <th>
			         	<a href='AdminUsersEx&id=<?php print_r($AdminUserlista->GetCodAdminUser()); ?>'>
			         		<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir AdminUser</button>
			         	</a>
			         </th>
			      </tr>
			    <?php }} ?>
			   </tbody>
			</table>
			
			<a href="AdminUsersAd">
         		<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Adicionar AdminUser</button>
         	</a>
			
	</div>
</div>