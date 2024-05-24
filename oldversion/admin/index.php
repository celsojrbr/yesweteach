<?php

	include('src/Conexao/Conexao.php');
	use src\Conexao\Conexao;

	include('src/MensagemTrait.php');
	use src\MensagemTrait;
	
	include('src/ControlerView/ViewControler.php');
	use src\ControlerView\View;
	
	include('autoload.php');
	
	/**************************************************************************************/
	use Controler\AdminUser\AdminUserControler;
	
	use Model\AdminUser\AdminUser as AdminUser;
	
	use Controler\Login\LoginControler as LoginControler;


	$pdo = Conexao::getInstance();
	
	
	
	if(!isset($_SESSION)){
   		session_start();
	}
	
	
	
	/*criando rota inicial caso náo tenha nenhuma rotas*/
	if(!isset($_GET['route'])){
	
		$_GET['route'] = 'home';
	}
	
	/*debuger*/
	//var_dump($_GET);
	/*echo"<br/>";
	echo"<br/>";
	echo"<br/>";
	echo"<br/>";*/
	$UsuarioLogadoAgora = new AdminUser(); 
	$UsuarioLogadoAgora = LoginControler::fixObject($_SESSION["AdminUserLogado"]);

	//var_dump($UsuarioLogadoAgora);
	
	switch ($_GET['route']) {
		/********************************************************************/
		case 'Inicio':
			# code...
				/*criando pagina inicial apartir de uma entrada*/
				$View = new View('View/Inicio.php',$_POST);
				$View->Renderizar('View/Inicio.php',$_POST,$UsuarioLogadoAgora);
				
				
			break;
			
		case 'AdminUser':
			# code...
				/*criando pagina inicial apartir de uma entrada*/
				$View = new View('View/AdminUser/AdminUser.php',$_POST);
				$View->Renderizar('View/AdminUser/AdminUser.php',$_POST,$UsuarioLogadoAgora);
				
				
			break;
			
		case 'AdminUsersAd':
			# code...
				//$AdminUsers = AdminUserControler::GetAllAdminUserDB($pdo);
				
				$View = new View('View/AdminUser/AdminUserAd.php',$_POST);
				$View->Renderizar('View/AdminUser/AdminUserAd.php',$_POST,$UsuarioLogadoAgora);
				
			break;
		
		case 'AdminUsersEd':
			# code...
				$Perfil = $UsuarioLogadoAgora;
				
				$cod = $_GET['id'];
				$AdminUser = AdminUserControler::GetAdminUserDB($pdo,$cod);
				
				$View = new View('View/AdminUser/AdminUserEd.php',$AdminUser);
				$View->Renderizar('View/AdminUser/AdminUserEd.php',$AdminUser,$UsuarioLogadoAgora);
				
			break;
		
		case 'AdminUsersEx':
			# code...
				//$Perfil = $AdminUser;
			
				$cod = $_GET['id'];
				$AdminUser = AdminUserControler::GetAdminUserDB($pdo,$cod);
				
				$View = new View('View/AdminUser/AdminUserEx.php',$AdminUser);
				$View->Renderizar('View/AdminUser/AdminUserEx.php',$AdminUser,$UsuarioLogadoAgora);
				
			break;
		
		
		/************************************************************************/
		case 'Slide':
			# code...
				/*criando pagina inicial apartir de uma entrada*/
				$View = new View('View/Slide/Slide.php',$_POST);
				$View->Renderizar('View/Slide/Slide.php',$_POST,$UsuarioLogadoAgora);
				
				
			break;
			
		case 'SlideAd':
			# code...
				//$AdminUsers = AdminUserControler::GetAllAdminUserDB($pdo);
				
				$View = new View('View/Slide/SlideAd.php',$_POST);
				$View->Renderizar('View/Slide/SlideAd.php',$_POST,$UsuarioLogadoAgora);
				
			break;
		
		case 'SlideED':
			# code...
				$Perfil = $UsuarioLogadoAgora;
				
				$View = new View('View/Slide/SlideED.php',$_POST);
				$View->Renderizar('View/Slide/SlideED.php',$_POST,$UsuarioLogadoAgora);
				
			break;
		
		case 'SlideEX':
			# code...
				//$Perfil = $AdminUser;
				
				$View = new View('View/Slide/SlideEX.php',$_POST);
				$View->Renderizar('View/Slide/SlideEX.php',$_POST,$UsuarioLogadoAgora);
				
			break;
		
		
		
			/************************************************************************/
		case 'informacoessite':
			# code...
				/*criando pagina inicial apartir de uma entrada*/
				$View = new View('View/informacoessite/informacoessite.php',$_POST);
				$View->Renderizar('View/informacoessite/informacoessite.php',$_POST,$UsuarioLogadoAgora);
				
				
			break;
			
		
		/************************************************************************/
		case 'Depoimentos':
			# code...
				/*criando pagina inicial apartir de uma entrada*/
				$View = new View('View/Depoimentos/Depoimentos.php',$_POST);
				$View->Renderizar('View/Depoimentos/Depoimentos.php',$_POST,$UsuarioLogadoAgora);
				
				
			break;
			
		case 'DepoimentosAd':
			# code...
				//$AdminUsers = AdminUserControler::GetAllAdminUserDB($pdo);
				
				$View = new View('View/Depoimentos/DepoimentosAd.php',$_POST);
				$View->Renderizar('View/Depoimentos/DepoimentosAd.php',$_POST,$UsuarioLogadoAgora);
				
			break;
		
		case 'DepoimentosEd':
			# code...
				$Perfil = $UsuarioLogadoAgora;
				
				$View = new View('View/Depoimentos/DepoimentosEd.php',$_POST);
				$View->Renderizar('View/Depoimentos/DepoimentosEd.php',$_POST,$UsuarioLogadoAgora);
				
			break;
		
		case 'DepoimentosEx':
			# code...
				$View = new View('View/Depoimentos/DepoimentosEx.php',$_POST);
				$View->Renderizar('View/Depoimentos/DepoimentosEx.php',$_POST,$UsuarioLogadoAgora);
				
			break;

		
		
		/********************************************************************/
		case 'Sair':
		# code...
			
			LoginControler::LogOutAdminUser();
			header('Location: Inicio'); 
			
			
		break;
			
			
		default:
			# code...
			$View = new View('View/Inicio.php',$_POST);
			$View->Renderizar('View/Inicio.php', $_POST, $UsuarioLogadoAgora);
			
		break;

	
	}
?>