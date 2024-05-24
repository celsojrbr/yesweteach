<?php
use src\Conexao\Conexao;

use Controler\Login\LoginControler;

use src\MensagemTrait;

$pdo = Conexao::getInstance();

if(isset($_POST['Login']) && isset($_POST['Senha'])){
	
	if(LoginControler::LogInAdminUser($pdo,$_POST)){
		header('Location: Inicio');
		
	}else{
		MensagemTrait::set("Não foi possivel acessar a área administrativa do site, login ou senha Invalido.","danger");
	}
	
}

?>
<div class="row">
<div class="col-sm-4">

</div>
<div class="col-sm-4">
	<form action=""  method="post" >
		<h1 style="text-align: center;">Login:</h1>
		<br/>
		<br/>
		<?php 
			MensagemTrait::get();
		?>
		<br/>
		<div class="form-group">
			<input name="Login" placeholder="Login Usuario"  type="text" class="form-control" id="Nome" value="">
		</div>
		<br/><br/>
		<div class="input-group">
			<input name="Senha" placeholder="Senha Usuario"  type="password" class="form-control" id="senha" value="">
			
			<span class="input-group-text" id="olho">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
					<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
					<path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
				</svg>
            </span>
			
			
			
		</div>
		<br/>
		<div class="form-group" >
			<button type="submit" class="btn btn-default center-block">Logar</button>
		</div>
	</form> 
</div>
<div class="col-sm-4">

</div>


</div>

<script>
var senha = $('#senha');
var olho= $("#olho");

olho.mousedown(function() {
  senha.attr("type", "text");
});

olho.mouseup(function() {
  senha.attr("type", "password");
});
// para evitar o problema de arrastar a imagem e a senha continuar exposta, 
//citada pelo nosso amigo nos comentários
$( "#olho" ).mouseout(function() { 
  $("#senha").attr("type", "password");
});
</script>