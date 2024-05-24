<?php
NameSpace Model\Noticia;

class Noticia{

    private $codigo;
    private $titulo;
    private $subtitulo;
    private $texto;
    private $data;
    private $status;
    private $littleimg;
    private $tituloindex;
    private $subtitulonoticia;
    private $codCategoria;
    private $codCategoria2;
    private $codSubCategoria;
	private $LinkVideo;
	private $KeyWords;
    
    /*gets \ sets*/

    public function Getcodigo(){
        return $this->codigo;
    }

    public function Gettitulo(){
        return $this->titulo;
    }
	
	public function Getsubtitulo(){
        return $this->subtitulo;
    }
	
	public function Gettexto(){
        return $this->texto;
    }
	public function Getdata(){
        return $this->data;
    }
	public function Getstatus(){
        return $this->status;
    }
	public function Getlittleimg(){
        return $this->littleimg;
    }
	public function Gettituloindex(){
        return $this->tituloindex;
    }
	public function Getsubtitulonoticia(){
        return $this->subtitulonoticia;
    }
	public function GetcodCategoria(){
        return $this->codCategoria;
    }
	public function GetcodCategoria2(){
        return $this->codCategoria2;
    }
	public function GetcodSubCategoria(){
        return $this->codSubCategoria;
    }
	
	public function GetLinkVideo(){
        return $this->LinkVideo;
    }
	
	public function GetKeyWords(){
        return $this->KeyWords;
    }

    /***/
    /***/
	public function Setcodigo($codigo){
	   $this->codigo = $codigo;
	}
	
	public function Settitulo($titulo){
	   $this->titulo = $titulo;
	}
	
	public function Setsubtitulo($subtitulo){
	   $this->subtitulo = $subtitulo;
	}
	
	public function Settexto($texto){
	   $this->texto = $texto;
	}
	
	public function Setdata($data){
	   $this->data = $data;
	}
	
	public function Setstatus($status){
	   $this->status = $status;
	}
	
	public function Setlittleimg($littleimg){
	   $this->littleimg = $littleimg;
	}
	
	public function Settituloindex($tituloindex){
	   $this->tituloindex = $tituloindex;
	}
	
	public function Setsubtitulonoticia($subtitulonoticia){
	   $this->subtitulonoticia = $subtitulonoticia;
	}
	
	public function SetcodCategoria($codCategoria){
	   $this->codCategoria = $codCategoria;
	}
	
	public function SetcodCategoria2($codCategoria2){
	   $this->codCategoria2 = $codCategoria2;
	}
	
	public function SetcodSubCategoria($codSubCategoria){
	   $this->codSubCategoria = $codSubCategoria;
	}
	
	public function SetLinkVideo($LinkVideo){
	   $this->LinkVideo = $LinkVideo;
	}
	
	public function SetKeyWords($KeyWords){
	   $this->KeyWords = $KeyWords;
	}
	

	

}


?>