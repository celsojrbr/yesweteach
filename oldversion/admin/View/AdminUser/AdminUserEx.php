<?php
	use src\MensagemTrait;
	
	use src\Conexao\Conexao;
	
	use Controler\AdminUser\AdminUserControler;
	
	use Controler\Unidade\UnidadeControler;

	use Controler\historielog\historielogControler;
	use Controler\Login\LoginControler;
	use Model\AdminUser\AdminUser as AdminUser;
	
	$pdo = Conexao::getInstance();
	
	$AdminUser = $dados;
	$Unidades = UnidadeControler::GetAllUnidadeDB($pdo);
	$cod = $AdminUser->GetCodUnidade();
	$UnidadeTrabalhando = UnidadeControler::GetUnidadeDB($pdo,$cod);
	
	$arrayNiveis =array('Administrador Geral');

	
?>

<?php
//var_dump ($_POST);
if(isset($_POST['CodAdminUser'])){
	
	
	if(AdminUserControler::DeletarAdminUserDB($pdo,$_POST['CodAdminUser'])){
		
		$arrayLog['user']= $_SESSION["AdminUserLogado"]->GetNomeCompleto();
		$arrayLog['pc']= gethostname();
		$arrayLog['cod_operacao']= "5"; // Impressão
		$arrayLog['coduser']= $_SESSION["AdminUserLogado"]->GetCodAdminUser();
		$arrayLog['nivel']= $_SESSION["AdminUserLogado"]->GetNivel();
		$arrayLog['codunidade']= $_SESSION["AdminUserLogado"]->GetCodUnidade();
		$arrayLog['TextoAcao']= "Excluio o administrador :".$_POST['CodAdminUser'];

		historielogControler::InserthistorielogDB($pdo,$arrayLog);
		
		MensagemTrait::set('Sucesso arquivo Excluido no banco de dados', 'success');
		header('Location: AdminUsers'); 
	}

	 
}
?>

<h1>Excluir AdminUser</h1>

<div class="">

	<form action=""  method="post" >
		<div class="row">
		<div class="col-sm-12">
			<input name="CodAdminUser" placeholder="CodAdminUser"  type="hidden" class="form-control" id="CodAdminUser" value="<?php echo $AdminUser->GetCodAdminUser(); ?>">
		<div class="form-group">
			<label for="Nome do Completo">Nome do Completo:</label>
			<input name="NomeCompleto" placeholder="Nome do Completo"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetNomeCompleto(); ?>" disabled>
		</div>
		</div>
		
		<div class="col-sm-4">
			<div class="form-group">
				<label for="Email">Email:</label>
				<input name="Email" placeholder="Email AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetEmail(); ?>" disabled>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="CPF">CPF:</label>
				<input name="CPF" placeholder="CPF AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetCPF(); ?>" disabled>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="Nome">Unidade:</label>
				<select name="CodUnidade" class="form-control" id="exampleFormControlSelect1" disabled>
					<option value="<?php print_r($UnidadeTrabalhando->GetCodUnidade()); ?>"><?php print_r($UnidadeTrabalhando->GetNomeUnidade()); ?></option>
					<?php foreach ($Unidades as $Unidade) { ?>
						<option value="<?php print_r($Unidade->GetCodUnidade()); ?>"><?php print_r($Unidade->GetNomeUnidade()); ?></option>
					<?php } ?>

				</select>
			</div>
		</div>
		
		
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Telefone">Telefone:</label>
				<input name="Telefone" placeholder="Telefone do AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetTelefone(); ?>" disabled>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Celular">Celular:</label>
				<input name="Celular" placeholder="Celular do AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetCelular(); ?>" disabled>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Login">Login:</label>
				<input name="Login" placeholder="Login do AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetLogin(); ?>" disabled>
				<input type="hidden" name="Login" placeholder="Login do AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetLogin(); ?>" disabled>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Nome">Senha:</label>
				<input type="password" name="Senha" placeholder="Senha AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetSenha(); ?>" disabled>
				<input type="hidden" name="Senha" placeholder="Senha AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetSenha(); ?>">
			</div>
		</div>
		<div class="col-sm-4">
			<button type="submit" class="btn btn-danger">Excluir AdminUser</button>
		</div>
		</div>
	</form> 
</div>
