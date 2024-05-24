<?php
NameSpace Controler\Noticia;

use src\Conexao\Conexao;

use Model\Noticia\Noticia;

class NoticiaControler{
	
    public static function GetAllNoticiaDB($pdo,$inicial,$limiter){
        $Noticias=[];

        $prepare = $pdo->prepare("SELECT * FROM `noticias` where `noticias`.`status` like 1 ORDER BY `noticias`.`data` DESC LIMIT $inicial,$limiter");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);
		foreach ($result as $key => $value) {
            $Noticia = new Noticia();
			
            $Noticia->Setcodigo($value['codigo']);
            $Noticia->Settitulo($value['titulo']);
            $Noticia->Setsubtitulo($value['subtitulo']);
            $Noticia->Settexto($value['texto']);
            $Noticia->Setdata($value['data']);
            $Noticia->Setstatus($value['status']);
            $Noticia->Setlittleimg($value['littleimg']);
            $Noticia->Settituloindex($value['tituloindex']);
            $Noticia->Setsubtitulonoticia($value['subtitulonoticia']);
            /*$Noticia->SetcodCategoria($value['codCategoria']);
            $Noticia->SetcodCategoria2($value['codCategoria2']);
            $Noticia->SetcodSubCategoria($value['codSubCategoria']);*/
            $Noticia->SetLinkVideo($value['LinkVideo']);
            $Noticia->SetKeyWords($value['KeyWords']);
            
            
           
            $Noticias[] = $Noticia;
			
        }
        return $Noticias;
    }
	
	public static function GetAllNoticiaAllDB($pdo){
        $Noticias=[];

        $prepare = $pdo->prepare("SELECT * FROM `noticias` where `noticias`.`status` like 1 ORDER BY `noticias`.`data` DESC");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);
		foreach ($result as $key => $value) {
            $Noticia = new Noticia();
			
            $Noticia->Setcodigo($value['codigo']);
            $Noticia->Settitulo($value['titulo']);
            $Noticia->Setsubtitulo($value['subtitulo']);
            $Noticia->Settexto($value['texto']);
            $Noticia->Setdata($value['data']);
            $Noticia->Setstatus($value['status']);
            $Noticia->Setlittleimg($value['littleimg']);
            $Noticia->Settituloindex($value['tituloindex']);
            $Noticia->Setsubtitulonoticia($value['subtitulonoticia']);
            /*$Noticia->SetcodCategoria($value['codCategoria']);
            $Noticia->SetcodCategoria2($value['codCategoria2']);
            $Noticia->SetcodSubCategoria($value['codSubCategoria']);*/
            $Noticia->SetLinkVideo($value['LinkVideo']);
			$Noticia->SetKeyWords($value['KeyWords']);
            
            
           
            $Noticias[] = $Noticia;
			
        }
        return $Noticias;
    }
	
	public static function GetAllNoticiaOfCategoriaDB($pdo,$Categoria){
        $Noticias=[];
		$Categoria = $Categoria;

        $prepare = $pdo->prepare("SELECT * FROM `noticias` where `noticias`.`status` like 1 and `noticias`.`codCategoria` like '$Categoria' ORDER BY `noticias`.`data` DESC");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);
		foreach ($result as $key => $value) {
            $Noticia = new Noticia();
			
            $Noticia->Setcodigo($value['codigo']);
            $Noticia->Settitulo($value['titulo']);
            $Noticia->Setsubtitulo($value['subtitulo']);
            $Noticia->Settexto($value['texto']);
            $Noticia->Setdata($value['data']);
            $Noticia->Setstatus($value['status']);
            $Noticia->Setlittleimg($value['littleimg']);
            $Noticia->Settituloindex($value['tituloindex']);
            $Noticia->Setsubtitulonoticia($value['subtitulonoticia']);
            /*$Noticia->SetcodCategoria($value['codCategoria']);
            $Noticia->SetcodCategoria2($value['codCategoria2']);
            $Noticia->SetcodSubCategoria($value['codSubCategoria']);*/
            $Noticia->SetLinkVideo($value['LinkVideo']);
			$Noticia->SetKeyWords($value['KeyWords']);
            
            
           
            $Noticias[] = $Noticia;
			
        }
        return $Noticias;
    }
	
	/*******************************************************************/
	public static function GetAllNoticiaOfSubCategoriaDB($pdo,$SubCategoria){
        $Noticias=[];
		$SubCategoria = $SubCategoria;

        $prepare = $pdo->prepare("SELECT * FROM `noticias` where `noticias`.`status` like 1 and `noticias`.`codSubCategoria` like '%$SubCategoria%' ORDER BY `noticias`.`data` DESC");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);
		
		
		foreach ($result as $key => $value) {
            $Noticia = new Noticia();
			
            $Noticia->Setcodigo($value['codigo']);
            $Noticia->Settitulo($value['titulo']);
            $Noticia->Setsubtitulo($value['subtitulo']);
            $Noticia->Settexto($value['texto']);
            $Noticia->Setdata($value['data']);
            $Noticia->Setstatus($value['status']);
            $Noticia->Setlittleimg($value['littleimg']);
            $Noticia->Settituloindex($value['tituloindex']);
            $Noticia->Setsubtitulonoticia($value['subtitulonoticia']);
			/*
			$Noticia->SetcodCategoria($value['codCategoria']);
            $Noticia->SetcodCategoria2($value['codCategoria2']);
            $Noticia->SetcodSubCategoria($value['codSubCategoria']);*/
            $Noticia->SetLinkVideo($value['LinkVideo']);
			$Noticia->SetKeyWords($value['KeyWords']);
			
            
            
           
            $Noticias[] = $Noticia;
			
        }
        return $Noticias;
    }
	
	
	
	
	
	
	
	
	
	public static function GetRandNoticiaDB($pdo,$inicial,$limiter){
        $Noticias=[];

        $prepare = $pdo->prepare("SELECT * FROM `noticias` where `noticias`.`status` like 1 ORDER BY rand() LIMIT $limiter");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);
		
		foreach ($result as $key => $value) {
            $Noticia = new Noticia();
			
            $Noticia->Setcodigo($value['codigo']);
            $Noticia->Settitulo($value['titulo']);
            $Noticia->Setsubtitulo($value['subtitulo']);
            $Noticia->Settexto($value['texto']);
            $Noticia->Setdata($value['data']);
            $Noticia->Setstatus($value['status']);
            $Noticia->Setlittleimg($value['littleimg']);
            $Noticia->Settituloindex($value['tituloindex']);
            $Noticia->Setsubtitulonoticia($value['subtitulonoticia']);
            /*$Noticia->SetcodCategoria($value['codCategoria']);
            $Noticia->SetcodCategoria2($value['codCategoria2']);
            $Noticia->SetcodSubCategoria($value['codSubCategoria']);*/
            $Noticia->SetLinkVideo($value['LinkVideo']);
			$Noticia->SetKeyWords($value['KeyWords']);
            
            
           
            $Noticias[] = $Noticia;
			
        }
        return $Noticias;
    }

    public static function GetNoticiaDB($pdo,$id){
        $id = $id;

        $sqlquery = "SELECT * FROM `noticias` where `noticias`.`codigo` like '$id';";
        $prepare = $pdo->prepare("$sqlquery");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        //print_r($prepare);

        foreach ($result as $key => $value) {
            
            $Noticia = new Noticia();
			
            $Noticia->Setcodigo($value['codigo']);
            $Noticia->Settitulo($value['titulo']);
            $Noticia->Setsubtitulo($value['subtitulo']);
            $Noticia->Settexto($value['texto']);
            $Noticia->Setdata($value['data']);
            $Noticia->Setstatus($value['status']);
            $Noticia->Setlittleimg($value['littleimg']);
            $Noticia->Settituloindex($value['tituloindex']);
            $Noticia->Setsubtitulonoticia($value['subtitulonoticia']);
            /*$Noticia->SetcodCategoria($value['codCategoria']);
            $Noticia->SetcodCategoria2($value['codCategoria2']);
            $Noticia->SetcodSubCategoria($value['codSubCategoria']);*/
            $Noticia->SetLinkVideo($value['LinkVideo']);
			$Noticia->SetKeyWords($value['KeyWords']);
           
            $Noticias[] = $Noticia;
            
            
        }
        
        return $Noticia;
    }
	
	public static function GetEspecialNoticiaDB($pdo){
        $sqlquery = "SELECT * FROM `noticias` where `noticias`.`status` like 1 and `noticias`.`codCategoria` like 1 ORDER BY `noticias`.`codigo` DESC limit 1;";
		
        $prepare = $pdo->prepare("$sqlquery");
        $prepare->execute();
        $result = $prepare->fetchall(\PDO::FETCH_ASSOC);

        

        foreach ($result as $key => $value) {
            
            $Noticia = new Noticia();
			
            $Noticia->Setcodigo($value['codigo']);
            $Noticia->Settitulo($value['titulo']);
            $Noticia->Setsubtitulo($value['subtitulo']);
            $Noticia->Settexto($value['texto']);
            $Noticia->Setdata($value['data']);
            $Noticia->Setstatus($value['status']);
            $Noticia->Setlittleimg($value['littleimg']);
            $Noticia->Settituloindex($value['tituloindex']);
            $Noticia->Setsubtitulonoticia($value['subtitulonoticia']);
            /*$Noticia->SetcodCategoria($value['codCategoria']);
            $Noticia->SetcodCategoria2($value['codCategoria2']);
            $Noticia->SetcodSubCategoria($value['codSubCategoria']);*/
            $Noticia->SetLinkVideo($value['LinkVideo']);
			$Noticia->SetKeyWords($value['KeyWords']);
           
            $Noticias[] = $Noticia;
            
            
        }
        
        return $Noticia;
    }

    public static function InsertNoticiaDB($pdo,$Array){
       
	$titulo= addslashes($Array['titulo']);
	$subtitulo= addslashes($Array['subtitulo']);
	$texto= addslashes($Array['texto']);
	$data= $Array['data'];
	$status= "1";
	/*lembra de que todos que não tiver colocar 'vazio' */
	$littleimg= addslashes($Array['littleimg']);
	
	$tituloindex= addslashes($Array['tituloindex']);
	$subtitulonoticia= addslashes($Array['subtitulonoticia']);
	//$codCategoria= $Array['codCategoria'];
	//$codCategoria2= $Array['codCategoria2'];
	
	/* isso é uma string que carrega as sub categorias*/
	//$codSubCategoria= $Array['codSubCategoria'];
	
	/*lembra de que todos que não tiver colocar 'NULL' */
	//$LinkVideo= $Array['LinkVideo'];$Noticia->SetKeyWords($value['KeyWords']);
	$KeyWords= addslashes($Array['KeyWords']);
	
	
	
    

    $sqlquery = "INSERT INTO `noticias` (`titulo`, `subtitulo`, `texto`, `data`, `status`, `littleimg`, `tituloindex`, `subtitulonoticia`, `codCategoria`, `codCategoria2`, `codSubCategoria`, `LinkVideo`,`KeyWords`) 
	VALUES ('$titulo', '$subtitulo', '$texto', '$data', '$status', '$littleimg', '$tituloindex', '$subtitulonoticia', '1', '1', 'NovaOnda', NULL,'$KeyWords');";
	
	$prepare = $pdo->prepare("$sqlquery");
    
	//break;
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }
    }



    public static function UpdateNoticiaDB($pdo,$Array){
		
        $codigo = $Array['codigo'];
		$titulo= addslashes($Array['titulo']);
		$subtitulo= addslashes($Array['subtitulo']);
		$texto= addslashes($Array['texto']);
		$data= $Array['data'];
		//$status= $Array['status'];
		/*lembra de que todos que não tiver colocar 'vazio' */
		$littleimg= addslashes($Array['littleimg']);
		$tituloindex= addslashes($Array['tituloindex']);
		$subtitulonoticia= addslashes($Array['subtitulonoticia']);
		$codCategoria= "1";
		$codCategoria2= "1";
		/* isso é uma string que carrega as sub categorias*/
		$codSubCategoria= "NovaOnda";
		/*lembra de que todos que não tiver colocar 'NULL' */
		$LinkVideo= $Array['LinkVideo'];
		$KeyWords= $Array['KeyWords'];
    
        $sqlquery = "UPDATE `noticias` SET `titulo` = '$titulo', `subtitulo` = '$subtitulo', `texto` = '$texto', `data` = '$data' ,`littleimg` = '$littleimg', `tituloindex` = '$tituloindex', `subtitulonoticia` = '$subtitulonoticia', `codCategoria` = '$codCategoria', `codCategoria2` = '$codCategoria2', `codSubCategoria` = '$codSubCategoria', `LinkVideo` = '$LinkVideo' , `KeyWords` = '$KeyWords' WHERE `noticias`.`codigo` = $codigo;";

		
        $prepare = $pdo->prepare("$sqlquery");
		
		//var_dump($sqlquery);
		
        if($prepare->execute()){
            return true;
        }else{
            return false;
        }


    }


    public static function DeletarNoticiaDB($pdo,$id){

        $idNoticia = $id;

        $sqlquery = "UPDATE `noticias` SET `status` = '0' WHERE `noticias`.`codigo` = $idNoticia;";

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