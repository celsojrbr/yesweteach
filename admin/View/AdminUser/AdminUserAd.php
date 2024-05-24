<?php
	use src\MensagemTrait;
	
	use src\Conexao\Conexao;

	use Controler\Unidade\UnidadeControler;
	
	use Controler\AdminUser\AdminUserControler;
	
	use Controler\historielog\historielogControler;
	use Controler\Login\LoginControler;
	use Model\AdminUser\AdminUser as AdminUser;
	
	$pdo = Conexao::getInstance();

	$Unidades = UnidadeControler::GetAllUnidadeDB($pdo);
?>
<?php
//var_dump($_POST);
	
if(isset($_POST['NomeCompleto'])){
	
	if(AdminUserControler::InsertAdminUserDB($pdo,$_POST)){
		
		$arrayLog['user']= $_SESSION["AdminUserLogado"]->GetNomeCompleto();
		$arrayLog['pc']= gethostname();
		$arrayLog['cod_operacao']= "5"; // Impressão
		$arrayLog['coduser']= $_SESSION["AdminUserLogado"]->GetCodAdminUser();
		$arrayLog['nivel']= $_SESSION["AdminUserLogado"]->GetNivel();
		$arrayLog['codunidade']= $_SESSION["AdminUserLogado"]->GetCodUnidade();
		$arrayLog['TextoAcao']= "Adicionou o administrador";

		historielogControler::InserthistorielogDB($pdo,$arrayLog);
		
		MensagemTrait::set('Sucesso arquivo Editato no banco de dados', 'success');
		header('Location: AdminUsers'); 
	}

	 
}
?>

<h1>Adicionar AdminUser</h1>

<div class="">

	<form action=""  method="post" >
		<div class="row">
		<div class="col-sm-12">
		<div class="form-group">
			<label for="Nome do Completo">Nome do Completo:</label>
			<input name="NomeCompleto" placeholder="Nome do Completo"  type="text" class="form-control" id="Nome" value="">
		</div>
		</div>
		
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Email">Email:</label>
				<input name="Email" placeholder="Email AdminUser"  type="text" class="form-control" id="Nome" value="">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="CPF">CPF:</label>
				<input name="CPF" placeholder="CPF AdminUser"  type="text" class="form-control" id="Nome" value="">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Nome">Unidade:</label>
				<select name="CodUnidade" class="form-control" id="exampleFormControlSelect1">
					<?php foreach ($Unidades as $Unidade) { ?>
						<option value="<?php print_r($Unidade->GetCodUnidade()); ?>"><?php print_r($Unidade->GetNomeUnidade()); ?></option>
					<?php } ?>
					
				</select>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Nome">Nivel:</label>
				<select name="Nivel" class="form-control" id="exampleFormControlSelect1">
					<option value="1">Administrador Geral</option>
					
				</select>
			</div>
		</div>
		
		
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Telefone">Telefone:</label>
				<input name="Telefone" placeholder="Telefone do AdminUser"  type="text" class="form-control" id="Nome" value="">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Celular">Celular:</label>
				<input name="Celular" placeholder="Celular do AdminUser"  type="text" class="form-control" id="Nome" value="">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Login">Login:</label>
				<input name="Login" placeholder="Login do AdminUser"  type="text" class="form-control" id="Nome" value="">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Nome">Senha:</label>
				<input name="Senha" placeholder="Senha AdminUser"  type="text" class="form-control" id="Nome" value="">
			</div>
		</div>
		<div class="col-sm-4">
			<button type="submit" class="btn btn-default">Cadastra AdminUser</button>
		</div>
		</div>
	</form> 
</div>
