<?php
use src\MensagemTrait;
	
use src\Conexao\Conexao;

use Controler\Unidade\UnidadeControler;

use Controler\AdminUser\AdminUserControler;

$pdo = Conexao::getInstance();

$AdminUsers = AdminUserControler::GetAllAdminUserDB($pdo);


?>
<?php
//var_dump($_POST);
	
if(isset($_POST['NomeUnidade'])){
	
	
	if(UnidadeControler::InsertUnidadeDB($pdo,$_POST)){
		
		MensagemTrait::set('Sucesso arquivo Inserido no banco de dados', 'success');
		header('Location: Unidades'); 
	}

	 
}
?>

<h1>Adicionar Unidade</h1>

<div class="">
	
	<form action=""  method="post" >
	<div class="form-group">
		<label for="Nome">Nome Unidade:</label>
		<input name="NomeUnidade" placeholder="Nome Unidade"  type="text" class="form-control" id="Nome" value="">
	</div>
	<div class="form-group">
		<label for="Nome">Endereço Unidade:</label>
		<input name="EndUnidade" placeholder="Endereço Unidade"  type="text" class="form-control" id="Nome" value="">
	</div>
	<div class="form-group">
		<label for="Nome">Telefone Unidade:</label>
		<input name="TelefoneUnidade" placeholder="Nome unidade"  type="text" class="form-control" id="Nome" value="">
	</div>
	
	<div class="form-group">
		<label for="Nome">Responsavel pela Unidade:</label>
		<select name="Responsavel" class="form-control" id="exampleFormControlSelect1">
		<?php foreach ($AdminUsers as $AdminUser) {
			if($AdminUser->Getstatus()==1){?>
			<option value="<?php echo $AdminUser->GetCodAdminUser(); ?>"><?php echo $AdminUser->GetNomeCompleto(); ?></option>
		<?php }
		} ?>
		</select>
	</div>
			 
	 
	  <button type="submit" class="btn btn-default">Adicionar Unidade</button>
	</form> 
</div>