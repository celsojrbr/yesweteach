<?php
NameSpace Controler\Slide;

use src\Conexao\Conexao;

use Model\Slide\Slide;

class SlideControler{
	
	public static function GetslideDB($pdo,$id){
		$slidecoes=[];

        $prepare = $pdo->prepare("SELECT * FROM `slide` where `slide`.`status` like 1 and `slide`.`CodSlide` like $id;");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
			
			$slidedo = new slide();
			
			$slidedo->setCodSlide($value['CodSlide']);
			$slidedo->setNomeSlide($value['NomeSlide']);
			$slidedo->setTitulo($value['Titulo']);
			$slidedo->setSubTitulo($value['SubTitulo']);
			$slidedo->setImagemSlide($value['ImagemSlide']);
			$slidedo->setstatus($value['status']);
			$slidedo->setdataCriado($value['dataCriado']);
			$slidedo->setordenSlide($value['ordenSlide']);
			$slidedo->setLinkText($value['Link']);
			

			
			$slidecoes[] = $slidedo;
        }
        return $slidedo;
		
	}
	
	public static function GetAllslideDB($pdo){
		$slidecoes=[];

        $prepare = $pdo->prepare("SELECT * FROM `slide` where `slide`.`Status` like 1 ORDER BY `slide`.`ordenSlide` DESC ");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {
			
			$slidedo = new slide();
			
			$slidedo->setCodSlide($value['CodSlide']);
			$slidedo->setNomeSlide($value['NomeSlide']);
			$slidedo->setTitulo($value['Titulo']);
			$slidedo->setSubTitulo($value['SubTitulo']);
			$slidedo->setImagemSlide($value['ImagemSlide']);
			$slidedo->setstatus($value['status']);
			$slidedo->setdataCriado($value['dataCriado']);
			$slidedo->setordenSlide($value['ordenSlide']);
			$slidedo->setLinkText($value['Link']);
			
			
			$slidecoes[] = $slidedo;
        }
        return $slidecoes;
		
	}
	
	
	public static function InsertslideDB($pdo,$Array){
		
		
		
		$NomeSlide = $Array['NomeSlide'];
		$Titulo= $Array['Titulo'];
		$SubTitulo= $Array['SubTitulo'];
		$ImagemSlide= $Array['ImagemSlide'];
		//$status= $Array['status'];
		//$dataCriado= $Array['dataCriado'];
		$ordenSlide= $Array['OrdenSlide'];
		$LinkText= $Array['LinkText'];
		
		
		$sqlquery = "INSERT INTO `slide` ( `NomeSlide`, `Titulo`, `SubTitulo`, `ImagemSlide`, `status`, `dataCriado`, `ordenSlide`,`Link`) VALUES ( '$NomeSlide', '$Titulo', '$SubTitulo', '$ImagemSlide', '1', CURRENT_TIMESTAMP, '$ordenSlide','$LinkText');";

		
        $prepare = $pdo->prepare("$sqlquery");
		
		
		
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
		
		
	}
	
	public static function UpdateslideDB($pdo,$Array){
		
		$CodSlide = $Array['CodSlide'];
		$NomeSlide = $Array['NomeSlide'];
		$Titulo= $Array['Titulo'];
		$SubTitulo= $Array['SubTitulo'];
		$ImagemSlide= $Array['ImagemSlide'];
		//$status= $Array['status'];
		//$dataCriado= $Array['dataCriado'];
		$ordenSlide= $Array['ordenSlide'];
		$LinkText= $Array['LinkText'];
		
		$sqlquery = "UPDATE `slide` SET `NomeSlide` = '$NomeSlide', `Titulo` = '$Titulo', `SubTitulo` = '$SubTitulo', `ImagemSlide` = '$ImagemSlide', `ordenSlide` = '$ordenSlide', `Link` = '$LinkText' WHERE `slide`.`CodSlide` = $CodSlide;";
		
        $prepare = $pdo->prepare("$sqlquery");
		
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
		
	}
	
	public static function DeletarslideDB($pdo,$id){
		
		$CodSlide = $id;

        $sqlquery = "UPDATE `slide` SET `status` = '0' WHERE `slide`.`CodSlide` = $CodSlide;";

        $prepare = $pdo->prepare("$sqlquery");
		
		if($prepare->execute()){
            return true;
        }else{
            return false;
        }
		
	}
	
	public static function TrocarOrdenlideDB($pdo,$id,$Orden){
		
		$CodSlide = $id;
		
		$Orden = $Orden;
		
        $sqlquery = "UPDATE `slide` SET `status` = '0' WHERE `slide`.`CodSlide` = $CodSlide;";

        $prepare = $pdo->prepare("$sqlquery");
		
		if($prepare->execute()){
            return true;
        }else{
            return false;
        }
		
	}

}