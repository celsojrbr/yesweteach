<?php
NameSpace Controler\unidade;

use src\Conexao\Conexao;

use Model\Unidade\Unidade;

class unidadeControler{

    public static function GetAllunidadeDB($pdo){
        $unidades=[];

        $prepare = $pdo->prepare("SELECT * FROM `unidade` where `unidade`.`Status` like 1 ORDER BY `unidade`.`CodUnidade` ASC ");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
            $unidade = new Unidade($value);
           
            
           
            $unidades[] = $unidade;
        }
        return $unidades;
    }
	

    public static function GetunidadeDB($pdo,$id){
        $id = $id;

        $sqlquery = "SELECT * FROM `unidade` where `unidade`.`CodUnidade` = '$id' and `status` = '1';";
	    $prepare = $pdo->prepare($sqlquery);
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        $unidade ="";

        foreach ($result as $key => $value) {
            
            $unidade = new Unidade($value);
			
           
            $unidades[] = $unidade;
            
            
        }
        
        return $unidade;
    }

    public static function InsertunidadeDB($pdo,$Array){
       
	//$CodUnidade=$Array['CodUnidade'];
    $NomeUnidade=$Array['NomeUnidade'];
    $EndUnidade=$Array['EndUnidade'];
    $telefoneUnidade=$Array['telefoneUnidade'];
    $telefone2Unidade=$Array['telefone2Unidade'];
    $bairro=$Array['bairro'];
    $Fotounidade=$Array['Fotounidade'];
    $status=$Array['status'];
    $dataCriado=$Array['dataCriado'];
    $CepUnidade=$Array['CepUnidade'];
    $Responsavel=$Array['Responsavel'];
    
   
    

    $sqlquery = "INSERT INTO `unidade` (`CodUnidade`, `NomeUnidade`, `EndUnidade`, `CepUnidade`, `telefoneUnidade`, `telefone2Unidade`, `bairro`, `Fotounidade`, `status`, `dataCriado`, `Responsavel`) VALUES (NULL, '$NomeUnidade', '$EndUnidade', '$CepUnidade', '$telefoneUnidade', '$telefone2Unidade', '$bairro', '$Fotounidade', '1', CURRENT_TIMESTAMP, '$Responsavel') ";

    
    $prepare = $pdo->prepare("$sqlquery");

        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
    }



    public static function UpdateunidadeDB($pdo,$Array){
		
        $CodUnidade=$Array['CodUnidade'];
		$NomeUnidade=$Array['NomeUnidade'];
		$EndUnidade=$Array['EndUnidade'];
		$TelefoneUnidade=$Array['TelefoneUnidade'];
		$Responsavel=$Array['Responsavel'];
    



        $sqlquery = "UPDATE `unidade` SET `NomeUnidade` = '$NomeUnidade', `EndUnidade` = '$EndUnidade', `TelefoneUnidade` = '$TelefoneUnidade', `Responsavel` = '$Responsavel' WHERE `unidade`.`CodUnidade` = $CodUnidade;";

		
        $prepare = $pdo->prepare("$sqlquery");
		
		
		
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }


    }


    public static function DeletarunidadeDB($pdo,$id){

        $idunidade = $id;

        $sqlquery = "UPDATE `unidade` SET `Status` = '0' WHERE `unidade`.`CodUnidade` = $idunidade;";

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