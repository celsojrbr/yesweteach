<?php
	
	include('src/Conexao/Conexao.php');
	use src\Conexao\Conexao;

	include('src/MensagemTrait.php');
	use src\MensagemTrait;
	
	include('src/ControlerView/ViewControler.php');
	use src\ControlerView\View;
	
	include('autoload.php');
	
	
	
	use Controler\informacoessite\informacoessiteControler;
	
	
	
	$pdo = Conexao::getInstance();
	
	$DadosBaseSite = informacoessiteControler::GetinformacoessiteDB($pdo,1);
	
	if(!isset($_SESSION)){
   		session_start();
	}
	
	
	
	/*criando rota inicial caso náo tenha nenhuma rotas*/
	if(!isset($_GET['route']) || empty($_GET['route'])){
		$_GET['route'] = 'Inicio/';
		$ArrayDados = explode( '/' , $_GET['route']);
		$_GET['route'] = 'Inicio';
		$ArrayDados[0] = "Inicio";
	}else{
		
		$ArrayDados = explode( '/' , $_GET['route']);
		if(in_array("feed",$ArrayDados)){
			$ArrayDados[0] ="yesweteach/feed/";
		}
	}

	
	
	
	// primera parte é a pagina que vai ser acessada a segunda é o array dos dados
	//print_r($ArrayDados);
	View::CriandoPagina($_GET,$ArrayDados);

?>