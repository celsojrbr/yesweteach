<?php
NameSpace Controler\informacoessite;

use src\Conexao\Conexao;

use Model\informacoessite\informacoessite;

class informacoessiteControler{

    public static function GetAllinformacoessiteDB($pdo){
        $informacoessites=[];

        $prepare = $pdo->prepare("SELECT * FROM `informacoessite` where `informacoessite`.`Status` like 1 ORDER BY `informacoessite`.`Codinformacoessite` ASC ");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
            $informacoessite = new informacoessite($value);
           
            
           
            $informacoessites[] = $informacoessite;
        }
        return $informacoessites;
    }
	

    public static function GetinformacoessiteDB($pdo,$id){
        $id = $id;

        $sqlquery = "SELECT * FROM `informacoessite` where `informacoessite`.`Codinformacoessite` = '$id' and `status` = '1';";
	    $prepare = $pdo->prepare($sqlquery);
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        $informacoessite ="";
		/*var_dump($sqlquery);
		var_dump($result);*/

        foreach ($result as $key => $value) {
            
            $informacoessite = new informacoessite($value);
			
           
            $informacoessites[] = $informacoessite;
            
            
        }
        
        return $informacoessite;
    }

    public static function InsertinformacoessiteDB($pdo,$Array){
       
	//$Codinformacoessite=$Array['Codinformacoessite'];
    $AutorSite=$Array['AutorSite'];
    $Facebook=$Array['Facebook'];
    $Instagram=$Array['Instagram'];
    $youtube=$Array['youtube'];
    $Email=$Array['Email'];
    $telefone=$Array['telefone'];
    $Whatsapp=$Array['Whatsapp'];
    $TituloBase=$Array['TituloBase'];
    $DescricaoBase=$Array['DescricaoBase'];
    $app_id=$Array['app_id'];
    $articletag=$Array['articletag'];
    $keywords=$Array['keywords'];
    $TagExtrasImplementa=$Array['TagExtrasImplementa'];
    $ScriptExterno=$Array['ScriptExterno'];
    $LogoMarcaDesktop=$Array['LogoMarcaDesktop'];
    $LogoMarcaMobile=$Array['LogoMarcaMobile'];
    $favico=$Array['favico'];
    $BDToken=$Array['BDToken'];
    //$Status=$Array['Status'];
    
    

    $sqlquery = "INSERT INTO `informacoessite` (`AutorSite`, `Facebook`, `Instagram`, `youtube`, `Email`, `telefone`, `Whatsapp`, `TituloBase`, `DescricaoBase`, `app_id`,`BDToken`, `articletag`, `keywords`, `TagExtrasImplementa`, `ScriptExterno`, `LogoMarcaDesktop`, `LogoMarcaMobile`, `favico`, `Status`, `DataCriado`, `DataAtualizado`) VALUES ('$AutorSite', '$Facebook', '$Instagram', '$youtube', '$Email', '$telefone', '$Whatsapp', '$TituloBase', '$DescricaoBase', '$app_id', '$BDToken','$articletag', '$keywords', '$TagExtrasImplementa', '$ScriptExterno', '$LogoMarcaDesktop', '$LogoMarcaMobile', '$favico', '1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP) ";

    
    $prepare = $pdo->prepare("$sqlquery");

        if($prepare->execute()){
            return $pdo->lastInsertId();
        }else{
            return false;
        }
    }



    public static function UpdateinformacoessiteDB($pdo,$Array){
		
        $Codinformacoessite=$Array['Codinformacoessite'];
		$AutorSite=$Array['AutorSite'];
		$Facebook=$Array['Facebook'];
		$Instagram=$Array['Instagram'];
		$youtube=$Array['youtube'];
		$Email=$Array['Email'];
		$telefone=$Array['telefone'];
		$Whatsapp=$Array['Whatsapp'];
		$TituloBase=$Array['TituloBase'];
		$DescricaoBase=$Array['DescricaoBase'];
		$app_id=$Array['app_id'];
		$articletag=$Array['articletag'];
		$keywords=$Array['keywords'];
		$TagExtrasImplementa=$Array['TagExtrasImplementa'];
		$ScriptExterno=$Array['ScriptExterno'];
		$LogoMarcaDesktop=$Array['LogoMarcaDesktop'];
		$LogoMarcaMobile=$Array['LogoMarcaMobile'];
		$favico=$Array['favico'];
		$Status=$Array['Status'];
		$BDToken=$Array['BDToken'];
    



        $sqlquery = "UPDATE `informacoessite` SET `AutorSite` = '$AutorSite', `Facebook` = '$Facebook', `Instagram` = '$Instagram', `youtube` = '$youtube', `Email` = '$Email', `telefone` = '$telefone', `Whatsapp` = '$Whatsapp', `TituloBase` = '$TituloBase', `DescricaoBase` = '$DescricaoBase', `app_id` = '$app_id', `articletag` = '$articletag', `keywords` = '$keywords', `TagExtrasImplementa` = '$TagExtrasImplementa', `ScriptExterno` = '$ScriptExterno', `LogoMarcaDesktop` = '$LogoMarcaDesktop', `LogoMarcaMobile` = '$LogoMarcaMobile', `favico` = '$favico', `Status` = '$Status', `BDToken` = '$BDToken' WHERE `informacoessite`.`codInformacoessite` = $Codinformacoessite;";	
		

		
        $prepare = $pdo->prepare("$sqlquery");
		
		
		
        if($prepare->execute()){
            return $codInformacoessite;
        }else{
            return false;
        }


    }


    public static function DeletarinformacoessiteDB($pdo,$id){

        $idinformacoessite = $id;

        $sqlquery = "UPDATE `informacoessite` SET `Status` = '0' WHERE `informacoessite`.`Codinformacoessite` = $idinformacoessite;";

        $prepare = $pdo->prepare("$sqlquery");
		
		//print_r($prepare);
		
        if($prepare->execute()){
            return $codInformacoessite;
        }else{
            return false;
        }
    }

    

}


?>