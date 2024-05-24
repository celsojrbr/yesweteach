<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
// Caminho da biblioteca PHPMailer
/*

*/
//echo "<head><meta charset='utf-8'></head>";

// verifica se já existe um cookie aberto

require_once('Vendor/PHPMailer/PHPMailerAutoload.php');
require_once ('Vendor/PHPMailer/class.phpmailer.php');


if($_COOKIE['contato'] == true){
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="BackgrandLayout4">
	<div id="BackgrandLayoutblack">
		<div id="Contato" class="container" >
		
			<h1>Ocoreu um erro!</h1>

			<p>Sua mensagem não pode ser enviada, pois já foi enviado mensagem desse computador, espere por mais um tempo e tente novamente.</p>

		</div>
	</div>
	<br/>
</div>
<?php

exit();

}
// verifica se todos os campos foram preenchidos corretamente
if(in_array("", $_POST) || in_array(null, $_POST) ){
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="BackgrandLayout4">
	<div id="BackgrandLayoutblack">
		<div id="Contato" class="container" >
		
			<h1>Ocoreu um erro!</h1>

			<p>Não conseguimos validar seus dados antes de fazer o envio, por favor, volte a pagina de contato e tente novamente.</p>

		</div>
	</div>
	<br/>
</div>
<?php

exit();

}


if (stristr($_POST['textoEscrito'], 'http')) {
	
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="BackgrandLayout4">
	<div id="BackgrandLayoutblack">
		<div id="Contato" class="container" >
		
			<h1>Ocorreu um erro, no conteudo da mensagem!</h1>

			<p>Não conseguimos validar seu E-mail antes de fazer o envio, por favor, volte a pagina de contato e tente novamente.</p>

		</div>
	</div>
	<br/>
</div>

<?php
exit();
}


if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
	//exit('<h1>E-mail inválido!</h1><p>O endereço de e-mail fornecido é inválido. <a href="javascript: return false;" onclick="javascript: history.back();">Clique aqui</a> para voltar ao formulário.</p>');
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="BackgrandLayout4">
	<div id="BackgrandLayoutblack">
		<div id="Contato" class="container" >
		
			<h1>Ocoreu um erro!</h1>

			<p>Não conseguimos validar seu E-mail antes de fazer o envio, por favor, volte a pagina de contato e tente novamente.</p>

		</div>
	</div>
	<br/>
</div>

<?php
exit();
}

$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Telefone = $_POST['Telefone'];
$Celular = $_POST['Celular'];
$Mensagem = $_POST['textoEscrito'];


// Instância do objeto PHPMailer
$mail = new PHPMailer;

// var_dump($mail);
// Instância do objeto PHPMailer
//var_dump($dadosExtra);
//$mail = $dadosExtra;

// configuração do tipo de escrita do email
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
	
 var_dump($mail);
// Configura para envio de e-mails usando SMTP
$mail->isSMTP();
 
// Servidor SMTP
$mail->Host = 'ssl://smtp.gmail.com';
 
// Usar autenticação SMTP
$mail->SMTPAuth = true;
 
// Usuário da conta
$mail->Username = 'siteformulariocontato@gmail.com';
 
// Senha da conta
$mail->Password = 'xmnhjrwpxqpbudkz';
 
// Tipo de encriptação que será usado na conexão SMTP
$mail->SMTPSecure = 'ssl';
 
// Porta do servidor SMTP
$mail->Port = 465;
 
// Informa se vamos enviar mensagens usando HTML
$mail->IsHTML(true);
 
// Email do Remetente
$mail->From = "siteformulariocontato@gmail.com";
 
// Nome do Remetente
$mail->FromName = 'Site Yes we teach - Comunicação';
 
// Endereço do e-mail do destinatário

$mail->addAddress("administrativo@yesweteach.com.br","Administrativo - Yes we teach");
$mail->addAddress("pedagogico@yesweteach.com.br","Pedagogico - Yes we teach");

$mail->AddCC("siteformulariocontato@gmail.com","Formulários, Yes we teach - Comunicação");
//$mail->addAddress("$Email","$Nome");


$assunto=nl2br("Formulários do Site - Yes we teach - ".$_POST['Assunto']);
// Assunto do e-mail
$mail->Subject = "$assunto";
 
// Mensagem que vai no corpo do e-mail
$mensagem = $Mensagem;
$mensagem = $mensagem."<br/><br/><br/>Nome:$Nome <br/>Email:$Email <br/>Telefone:$Telefone<br/>Celular:$Celular";
$mail->Body = nl2br($mensagem);

// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
//$mail->SMTPDebug = 1;	

/**
 * Envia o e-mail para o destinatário
 * @version 27/06/2013 10:51
*/
//var_dump($_POST);
//var_dump($mail);
if($mail->Send()){
	@setcookie("contato", true, time()+600, '/'); // cria um cookie para impedir que envie uma nova mensagem
?>
<div id="BackgrandLayout4">
	<div id="BackgrandLayoutblack">
		<div id="Contato" class="container" >
		
			<!--<h1>congratulation!</h1>-->
			<h1>Mensagem Enviada!</h1>

			<p>Sua mensagem foi enviada para a nossa equipe e em breve entraremos em contato!</p>

		</div>
	</div>
	<br/>
</div>

<?php
exit();
}else{
?>

<div id="BackgrandLayout4">
	<div id="BackgrandLayoutblack">
		<div id="Contato" class="container" >
		
			<h1>Ocoreu um erro!</h1>

			<p>sua mensagem Mensagem não pode ser enviada, tente entra em contato pelo email administrativo@yesweteach.com.br.</p>

		</div>
	</div>
	<br/>
</div>

<?php
exit();
}

?>