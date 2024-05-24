<?php
NameSpace Controler\historielog;

use src\Conexao\Conexao;

use Model\historielog\historielog;

class historielogControler{

    public static function InserthistorielogDB($pdo,$Array){
    $ip = $_SERVER['REMOTE_ADDR'].' port >'.$_SERVER['REMOTE_PORT'];
    $user = $Array['user'];
    $pc = $Array['pc'];
    $cod_operacao = $Array['cod_operacao'];
    $coduser = $Array['coduser'];
    $nivel = $Array['nivel'];
    $codunidade = $Array['codunidade'];
    $TextoAcao = $Array['TextoAcao'];
	
    $sqlquery="INSERT INTO `loghistorico`  (`Ip`, `CodUser`, `User`, `Pc`, `comando`, `data`, `texto`) VALUES ('$ip', '$coduser', '$user', '$pc', '$cod_operacao', CURRENT_TIMESTAMP, '$TextoAcao');";

    
    $prepare = $pdo->prepare("$sqlquery");
	
    //var_dump($pdo->prepare("$sqlquery"));
	
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
    }



}


?>