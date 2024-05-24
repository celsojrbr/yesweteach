<?php
use src\MensagemTrait;
	
use src\Conexao\Conexao;

use Controler\Unidade\UnidadeControler;

use Controler\AdminUser\AdminUserControler;

$pdo = Conexao::getInstance();

$Unidade = $dados;

$cod = $Unidade->GetResponsavel();

$AdminUserResponsavel = AdminUserControler::GetAdminUserDB($pdo,$cod);

$AdminUsers = AdminUserControler::GetAllAdminUserDB($pdo);

?>
<?php
//var_dump($_POST);
	
if(isset($_POST['CodUnidade'])){
	
	
	if(UnidadeControler::UpdateunidadeDB($pdo,$_POST)){
		
		MensagemTrait::set('Sucesso arquivo Inserido no banco de dados', 'success');
		header('Location: Unidades'); 
	}

	 
}
?>

<h1>Editar Unidade</h1>

<div class="">
	
	 <form action=""  method="post" >
			<input name="CodUnidade" type="hidden" class="form-control" id="idunidade" value="<?php echo $Unidade->GetCodUnidade();?>">
	  <div class="form-group">
		<label for="Nome">Nome Unidade:</label>
		<input name="NomeUnidade" placeholder="Nome Unidade"  type="text" class="form-control" id="Nome" value="<?php echo $Unidade->GetNomeUnidade(); ?>">
	  </div>
	  <div class="form-group">
		<label for="Nome">Endereço Unidade:</label>
		<input name="EndUnidade" placeholder="Endereço Unidade"  type="text" class="form-control" id="Nome" value="<?php echo $Unidade->GetEndUnidade(); ?>">
	  </div>
	  <div class="form-group">
		<label for="Nome">Telefone Unidade:</label>
		<input name="TelefoneUnidade" placeholder="Nome unidade"  type="text" class="form-control" id="Nome" value="<?php echo $Unidade->GetTelefoneUnidade(); ?>">
	  </div>
	  
			<div class="form-group">
				<label for="Nome">Responsavel pela Unidade:</label>
				<select name="Responsavel" class="form-control" id="exampleFormControlSelect1">
					<option value="<?php echo $AdminUserResponsavel->GetCodAdminUser(); ?>"><?php echo $AdminUserResponsavel->GetNomeCompleto(); ?></option>
					<?php foreach ($AdminUsers as $AdminUser) {
						if($AdminUser->Getstatus()==1){?>
						<option value="<?php echo $AdminUser->GetCodAdminUser(); ?>"><?php echo $AdminUser->GetNomeCompleto(); ?></option>
					<?php }
					} ?>
					
				</select>
			</div>
			 
	 
	  <button type="submit" class="btn btn-default">Editar unidade</button>
	</form> 
</div>