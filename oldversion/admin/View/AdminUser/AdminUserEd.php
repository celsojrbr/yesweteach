<?php
use src\MensagemTrait;

use src\Conexao\Conexao;

use Controler\AdminUser\AdminUserControler;

use Controler\Unidade\UnidadeControler;

use Controler\historielog\historielogControler;
use Controler\Login\LoginControler;
use Model\AdminUser\AdminUser as AdminUser;

$AdminUser = $dados;

$pdo = Conexao::getInstance();

$Unidades = UnidadeControler::GetAllUnidadeDB($pdo);

$cod = $AdminUser->GetCodUnidade();

$UnidadeTrabalhando = UnidadeControler::GetUnidadeDB($pdo,$cod);

$arrayNiveis =array('Administrador Geral');

?>

<?php

if(isset($_POST['NomeCompleto'])){
	
	if($_POST['TrocarSenha']=='true'){
		//var_dump($_POST);
		if(AdminUserControler::AtualizarAdminUserDB($pdo,$_POST)){
			$arrayLog['user']= $_SESSION["AdminUserLogado"]->GetNomeCompleto();
			$arrayLog['pc']= gethostname();
			$arrayLog['cod_operacao']= "5"; // Impressão
			$arrayLog['coduser']= $_SESSION["AdminUserLogado"]->GetCodAdminUser();
			$arrayLog['nivel']= $_SESSION["AdminUserLogado"]->GetNivel();
			$arrayLog['codunidade']= $_SESSION["AdminUserLogado"]->GetCodUnidade();
			$arrayLog['TextoAcao']= "Editou o administrador :".$_POST['CodAdminUser'];

			historielogControler::InserthistorielogDB($pdo,$arrayLog);
			
			MensagemTrait::set('Sucesso arquivo Editato no banco de dados + login', 'success');
			header('Location: AdminUsers'); 
		}
	}else{
		if(AdminUserControler::UpdateAdminUserDB($pdo,$_POST)){
			
			$arrayLog['user']= $_SESSION["AdminUserLogado"]->GetNomeCompleto();
			$arrayLog['pc']= gethostname();
			$arrayLog['cod_operacao']= "5"; // Impressão
			$arrayLog['coduser']= $_SESSION["AdminUserLogado"]->GetCodAdminUser();
			$arrayLog['nivel']= $_SESSION["AdminUserLogado"]->GetNivel();
			$arrayLog['codunidade']= $_SESSION["AdminUserLogado"]->GetCodUnidade();
			$arrayLog['TextoAcao']= "Editou o administrador :".$_POST['CodAdminUser'];

			historielogControler::InserthistorielogDB($pdo,$arrayLog);
			
			MensagemTrait::set('Sucesso arquivo Editato no banco de dados', 'success');
			header('Location: AdminUsers'); 
		}
	}
	 
}
?>

<h1>Editar AdminUser</h1>
<div class="">

	<form action=""  method="post" >
		<div class="row">
		<div class="col-sm-12">
			<input name="CodAdminUser" placeholder="CodAdminUser"  type="hidden" class="form-control" id="CodAdminUser" value="<?php echo $AdminUser->GetCodAdminUser(); ?>">
		<div class="form-group">
			<label for="NomedoCompleto">Nome do Completo:</label>
			<input name="NomeCompleto" placeholder="Nome do Completo"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetNomeCompleto(); ?>">
		</div>
		</div>
		
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Email">Email:</label>
				<input name="Email" placeholder="Email AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetEmail();?>">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="CPF">CPF:</label>
				<input name="CPF" placeholder="CPF AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetCPF();?>">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Nome">Unidade:</label>
				<select name="CodUnidade" class="form-control" id="exampleFormControlSelect1">
					<option value="<?php print_r($UnidadeTrabalhando->GetCodUnidade()); ?>"><?php print_r($UnidadeTrabalhando->GetNomeUnidade()); ?></option>
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
					<option value="<?php print_r($AdminUser->GetNivel()); ?>"><?php echo $arrayNiveis[$AdminUser->GetNivel()-1]; ?></option>
					<option value="1">Administrador Geral</option>
				</select>
			</div>
		</div>
		
		
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Telefone">Telefone:</label>
				<input name="Telefone" placeholder="Telefone do AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetTelefone(); ?>">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="Celular">Celular:</label>
				<input name="Celular" placeholder="Celular do AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetCelular(); ?>">
			</div>
		</div>
		<div class="row col-sm-6" id="" >
		<input type="hidden" id="TrocarLoginSenha" name="TrocarSenha" value="false">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="Login">Login:</label>
					<input name="NovoLogin" placeholder="Login do AdminUser"  type="text" class="form-control" id="NovoLogin" value="<?php echo $AdminUser->GetLogin();?>" disabled>
					<input type="hidden" name="Login" placeholder="Login do AdminUser"  type="text" class="form-control" id="Nome" value="<?php echo $AdminUser->GetLogin();?>">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="Nome">Senha:</label>
					<input type="password" name="NovaSenha" placeholder="Senha" class="form-control" id="NovaSenha" value="<?php echo $AdminUser->GetSenha();?>" disabled>
					<input type="hidden" name="Senha" placeholder="Senha AdminUser" class="form-control" id="Nome" value="<?php echo $AdminUser->GetSenha();?>">
				</div>
			</div>
			<br/>
			<?php if($Usuario->GetNivel()==1 || $Usuario->GetCodAdminUser() == $AdminUser->GetCodAdminUser()) { 
			?>
			<div class="col-md-offset-4 col-sm-6" id="disabletrocasenha" >
				<a onclick="javascript:carregaAtivarMenu();" class="btn btn-default">Trocar login e senha</a>
			</div>
			<?php } ?>
		</div>
		<div class="col-sm-4">
			<button type="submit" class="btn btn-default">Atualizar AdminUser</button>
		</div>
		</div>
	</form> 
</div>

<script>
	function carregaAtivarMenu(){
		var NovoLogin = document.getElementById("NovoLogin");
		var NovaSenha = document.getElementById("NovaSenha");
		var disabletrocasenha = document.getElementById("disabletrocasenha");
		var TrocarLoginSenha = document.getElementById("TrocarLoginSenha");
		
		NovoLogin.removeAttribute("disabled");
		NovaSenha.removeAttribute("disabled");
		disabletrocasenha.setAttribute('style','visibility: hidden;');
		NovoLogin.value='';
		NovaSenha.value='';
		TrocarLoginSenha.value='true';
	}
</script>

