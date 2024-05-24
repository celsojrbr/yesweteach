<?php
NameSpace Controler\depoimento;

use src\Conexao\Conexao;

use Model\depoimento\depoimento;

class depoimentoControler{

    public static function GetAlldepoimentoDB($pdo){
        $depoimentos=[];

        $prepare = $pdo->prepare("SELECT * FROM `depoimento` where `depoimento`.`Status` like 1 ORDER BY `depoimento`.`CodDepoimento` DESC LIMIT 4");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
            $depoimento = new depoimento($value);
           
            
           
            $depoimentos[] = $depoimento;
        }
        return $depoimentos;
    }
	

    public static function GetdepoimentoDB($pdo,$id){
        $id = $id;

        $sqlquery = "SELECT * FROM `depoimento` where `depoimento`.`CodDepoimento` = '$id' and `status` = '1';";
	    $prepare = $pdo->prepare($sqlquery);
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        $depoimento ="";
		/*var_dump($sqlquery);
		var_dump($result);*/

        foreach ($result as $key => $value) {
            
            $depoimento = new depoimento($value);
			
           
            $depoimentos[] = $depoimento;
            
            
        }
        
        return $depoimento;
    }

    public static function InsertdepoimentoDB($pdo,$Array){
       
	//$CodDepoimento=$Array['CodDepoimento'];
		$NomeDepoente=$Array['NomeDepoente'];
		$Depoimento=$Array['Depoimento'];
		$Estrela=$Array['Estrela'];
		$LocalImagem=$Array['LocalImagem'];
		//$Status=$Array['Status'];
		$DataCriado=$Array['DataCriado'];
		$DataAtualizado=$Array['DataAtualizado'];
		
		$Status="1";
		//$datacriado=$Array['datacriado'];
		
		$sqlquery = "INSERT INTO `depoimento` (`NomeDepoente`, `Depoimento`, `Estrela`, `LocalImagem`, `Status`, `DataCriado`,`DataAtualizado`) VALUES ( '$NomeDepoente', '$Depoimento', '$Estrela', '$LocalImagem', '$Status', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);";

    
		$prepare = $pdo->prepare("$sqlquery");

        if($prepare->execute()){
            return $pdo->lastInsertId();
        }else{
            return false;
        }
    }



    public static function UpdatedepoimentoDB($pdo,$Array){
		
        $CodDepoimento=$Array['CodDepoimento'];
		$NomeDepoente=$Array['NomeDepoente'];
		$Depoimento=$Array['Depoimento'];
		$Estrela=$Array['Estrela'];
		$LocalImagem=$Array['LocalImagem'];
		$DataCriado=$Array['DataCriado'];
		$DataAtualizado=$Array['DataAtualizado'];
		
		
        $sqlquery = "";	
		
        $prepare = $pdo->prepare("$sqlquery");
		
        if($prepare->execute()){
            return $CodDepoimento;
        }else{
            return false;
        }


    }


    public static function DeletardepoimentoDB($pdo,$id){

        $iddepoimento = $id;

        $sqlquery = "UPDATE `depoimento` SET `Status` = '0' WHERE `depoimento`.`CodDepoimento` = $iddepoimento;";

        $prepare = $pdo->prepare("$sqlquery");
		
		//print_r($prepare);
		
        if($prepare->execute()){
            return $CodDepoimento;
        }else{
            return false;
        }
    }

    

}


?>