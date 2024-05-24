<?php
NameSpace Controler\loghistorico;

use src\Conexao\Conexao;

use Model\loghistorico\loghistorico;

class loghistoricoControler{

    public static function InsertloghistoricoDB($pdo,$Array){
		$Ip = $Array['Ip'];
		$user = $Array['user'];
		$coduser = $Array['coduser'];
		$pc = $Array['pc'];
		$comando = $Array['comando'];
		$texto = $Array['texto'];
		
		
		
		$Sqlquery = "INSERT INTO `loghistorico` (`CodLog`, `Ip`, `CodUser`, `User`, `Pc`, `comando`, `data`, `texto`) VALUES (NULL, '$Ip', '$coduser', '$user', '$pc', '$comando', CURRENT_TIMESTAMP, '$texto');";
		
		$prepare = $pdo->prepare("$Sqlquery");
	
		//var_dump($Sqlquery);	
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
	}

}


?>