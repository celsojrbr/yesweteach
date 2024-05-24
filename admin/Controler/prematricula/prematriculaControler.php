<?php
NameSpace Controler\prematricula;

use src\Conexao\Conexao;

use Model\prematricula\prematricula;

class prematriculaControler{

    public static function GetAllprematriculaDB($pdo){
        $prematriculas=[];

        $prepare = $pdo->prepare("SELECT * FROM `prematricula` where `prematricula`.`Status` like 1 ORDER BY `prematricula`.`Codprematricula` ASC ");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
            $prematricula = new prematricula($value);
           
            
           
            $prematriculas[] = $prematricula;
        }
        return $prematriculas;
    }
	

    public static function GetprematriculaDB($pdo,$id){
        $id = $id;

        $sqlquery = "SELECT * FROM `prematricula` where `prematricula`.`Codprematricula` = '$id' and `status` = '1';";
	    $prepare = $pdo->prepare($sqlquery);
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        $prematricula ="";
		/*var_dump($sqlquery);
		var_dump($result);*/

        foreach ($result as $key => $value) {
            
            $prematricula = new prematricula($value);
			
           
            $prematriculas[] = $prematricula;
            
            
        }
        
        return $prematricula;
    }

    public static function InsertprematriculaDB($pdo,$Array){
       
	//$Codprematricula=$Array['Codprematricula'];
		$NomeCompleto=$Array['NomeCompleto'];
		$Email=$Array['Email'];
		$Telefone=$Array['Telefone'];
		$Whatsapp=$Array['Whatsapp'];
		$NivelIngles=$Array['NivelIngles'];
		$ComoConheceu=$Array['ComoConheceu'];
		$ContePouco=$Array['ContePouco'];
		$CPF=$Array['CPF'];
		$Status="1";
		//$datacriado=$Array['datacriado'];
		
		$sqlquery = "INSERT INTO `prematricula` (`NomeCompleto`, `Email`, `Telefone`, `Whatsapp`, `NivelIngles`, `ComoConheceu`, `ContePouco`, `Status`, `datacriado`) VALUES ( '$NomeCompleto', '$Email', '$Telefone', '$Whatsapp', '$NivelIngles', '$ComoConheceu', '$ContePouco', '$Status', CURRENT_TIMESTAMP);";

    
		$prepare = $pdo->prepare("$sqlquery");

        if($prepare->execute()){
            return $pdo->lastInsertId();
        }else{
            return false;
        }
    }



    public static function UpdateprematriculaDB($pdo,$Array){
		
        $Codprematricula=$Array['Codprematricula'];
		$NomeCompleto=$Array['NomeCompleto'];
		$Email=$Array['Email'];
		$Telefone=$Array['Telefone'];
		$Whatsapp=$Array['Whatsapp'];
		$NivelIngles=$Array['NivelIngles'];
		$ComoConheceu=$Array['ComoConheceu'];
		$ContePouco=$Array['ContePouco'];
		$CPF=$Array['CPF'];
		$Status=$Array['Status'];
		$datacriado=$Array['datacriado'];
		
		
        $sqlquery = "";	
		
        $prepare = $pdo->prepare("$sqlquery");
		
        if($prepare->execute()){
            return $codprematricula;
        }else{
            return false;
        }


    }


    public static function DeletarprematriculaDB($pdo,$id){

        $idprematricula = $id;

        $sqlquery = "UPDATE `prematricula` SET `Status` = '0' WHERE `prematricula`.`Codprematricula` = $idprematricula;";

        $prepare = $pdo->prepare("$sqlquery");
		
		//print_r($prepare);
		
        if($prepare->execute()){
            return $codprematricula;
        }else{
            return false;
        }
    }

    

}


?>