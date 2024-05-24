<?php
NameSpace Controler\Login;

use src\Conexao\Conexao;

use Model\AdminUser\AdminUser;

use src\MensagemTrait;

use Controler\loghistorico\loghistoricoControler;


class LoginControler{

	public static function Validador(){
		if(isset($_SESSION['AdminUserLogado'])){
			
			return true;
		}else{
			
			return false;
		}
		
	}

	public static function LogInAdminUser($pdo,$Array=array()){
		$Login = $Array['Login'];
		$Senha = $Array['Senha'];
		
		$prepare = $pdo->prepare("SELECT * FROM `adminuser` where `adminuser`.`Login` like '$Login' and `status` = 1;");
		//var_dump($prepare);
		
		$prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);
        $AdminUser = new AdminUser();
		
		
        if($result){
	        foreach ($result as $key => $value) {
	           
				if(password_verify($Senha, $value['Senha'])){
					$AdminUser = new AdminUser($value);
					
				
	            $AdminUsers[] = $AdminUser;
				}else{
					MensagemTrait::set("login ou/e senha incorretas","danger");
					return false;
				}
	        }
			
	        $_SESSION['AdminUserLogado'] = $AdminUser;
			
			$pdo = Conexao::getInstance();
			
			
			$arrayLog['Ip']= gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$arrayLog['coduser']= $_SESSION["AdminUserLogado"]->GetCodAdminUser();
			$arrayLog['user']= $_SESSION["AdminUserLogado"]->GetNomeCompleto();
			$arrayLog['pc']= gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$arrayLog['comando']= "Usuario logou no sistema do site"; 
			$arrayLog['texto']= "Administrador logado:".$_SESSION["AdminUserLogado"]->GetCodAdminUser();
			
			loghistoricoControler::InsertloghistoricoDB($pdo,$arrayLog);
			
	        return $AdminUser;
        }else{
			
        	return false;
        }


	}

	public static function LogOutAdminUser(){
		session_destroy();
	}
	
	public static function fixObject (&$object){
		//var_dump(gettype($object));
		if (is_object ($object) && gettype ($object) == 'object'){
			return ($object = unserialize (serialize ($object)));
			return $object;
		}
	}

}

?>