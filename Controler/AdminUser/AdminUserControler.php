<?php
NameSpace Controler\AdminUser;

use src\Conexao\Conexao;

use Model\AdminUser\AdminUser;

class AdminUserControler{
	
    public static function GetAllAdminUserDB($pdo){
        $AdminUsers=[];

        $prepare = $pdo->prepare("SELECT * FROM `adminuser` ORDER BY `adminuser`.`CodAdminUser` ASC ");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);
		foreach ($result as $key => $value) {
            $AdminUser = new AdminUser($value);
           
           
            $AdminUsers[] = $AdminUser;
			
        }
        return $AdminUsers;
    }
	
	public static function GetAllAdminUserMinhaUnidadeDB($pdo,$nivelControler){
		$AdminUsers[] = "";
		return $AdminUsers;
	}

    public static function GetAdminUserDB($pdo,$id){
        $id = $id;

        $sqlquery = "SELECT * FROM `adminuser` WHERE `adminuser`.`Codadminuser` = '$id';";
        $prepare = $pdo->prepare("$sqlquery");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        

        foreach ($result as $key => $value) {
            
            $AdminUser = new AdminUser($value);
           
           
            $AdminUsers[] = $AdminUser;
            
            
        }
        
        return $AdminUser;
    }

    public static function InsertAdminUserDB($pdo,$Array){
       
	$NomeCompleto = $Array['NomeCompleto'];
	$Email= $Array['Email'];
	$CPF= $Array['CPF'];
	$CodUnidade= $Array['CodUnidade'];
	$Telefone= $Array['Telefone'];
	$Celular= $Array['Celular'];
	$Login= $Array['Login'];
	$Senha= password_hash($Array['Senha'], PASSWORD_DEFAULT);
	$Nivel= $Array['Nivel'];
   
    

    $sqlquery = "INSERT INTO `adminuser` (`Login`, `Senha`, `Nivel`, `CPF`, `CodUnidade`, `NomeCompleto`, `Telefone`, `Celular`, `Email`, `status`) VALUES ('$Login', '$Senha', '$Nivel', '$CPF', '$CodUnidade', '$NomeCompleto', '$Telefone', '$Celular', '$Email', '1');";

    
    $prepare = $pdo->prepare("$sqlquery");
    //var_dump($pdo->prepare("$sqlquery"));
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
    }
	
	public static function AtualizarAdminUserDB($pdo,$Array){
    $CodAdminUser = $Array['CodAdminUser'];
	$NomeCompleto = $Array['NomeCompleto'];
	$Email= $Array['Email'];
	$CPF= $Array['CPF'];
	$CodUnidade= $Array['CodUnidade'];
	$Telefone= $Array['Telefone'];
	$Celular= $Array['Celular'];
	$Login= $Array['NovoLogin'];
	$Senha= password_hash($Array['NovaSenha'], PASSWORD_DEFAULT);
	$Nivel= $Array['Nivel'];
   
    

    $sqlquery = "UPDATE `adminuser` SET `Login` = '$Login', `Senha` = '$Senha', `Nivel` = '$Nivel', `CPF` = '$CPF', `CodUnidade` = '$CodUnidade', `NomeCompleto` = '$NomeCompleto', `Telefone` = '$Telefone', `Celular` = '$Celular', `Email` = '$Email' WHERE `adminuser`.`CodAdminUser` = $CodAdminUser;";

    
    $prepare = $pdo->prepare("$sqlquery");
    //var_dump($pdo->prepare("$sqlquery"));
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
    }



    public static function UpdateAdminUserDB($pdo,$Array){
		
        $CodAdminUser = $Array['CodAdminUser'];
        $NomeCompleto = $Array['NomeCompleto'];
		$Email= $Array['Email'];
		$CPF= $Array['CPF'];
		$CodUnidade= $Array['CodUnidade'];
		$Telefone= $Array['Telefone'];
		$Celular= $Array['Celular'];
		$Login= $Array['Login'];
		$Senha= $Array['Senha'];
		$Nivel= $Array['Nivel'];
    



        $sqlquery = "UPDATE `adminuser` SET `Login` = '$Login', `Senha` = '$Senha', `Nivel` = '$Nivel', `CPF` = '$CPF', `CodUnidade` = '$CodUnidade', `NomeCompleto` = '$NomeCompleto', `Telefone` = '$Telefone', `Celular` = '$Celular', `Email` = '$Email' WHERE `adminuser`.`CodAdminUser` = $CodAdminUser;";

		
        $prepare = $pdo->prepare("$sqlquery");
		
		
		
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }


    }


    public static function DeletarAdminUserDB($pdo,$id){

        $idAdminUser = $id;

        $sqlquery = "UPDATE `adminuser` SET `status` = '0' WHERE `adminuser`.`CodAdminUser` like $idAdminUser;";

        $prepare = $pdo->prepare("$sqlquery");
		
		//print_r($prepare);
		
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
    }

    

}


?>