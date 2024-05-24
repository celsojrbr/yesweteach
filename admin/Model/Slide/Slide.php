<?php
NameSpace Model\Slide;

class Slide{
	
	private $CodSlide;
	private $NomeSlide;
	private $Titulo;
	private $SubTitulo;
	private $ImagemSlide;
	private $status;
	private $dataCriado;
	private $ordenSlide;
	private $LinkText;
	private $Link;
	
	public function getCodSlide(){
		return $this->CodSlide;
	}

	public function setCodSlide($CodSlide){
		$this->CodSlide = $CodSlide;
	}

	public function getNomeSlide(){
		return $this->NomeSlide;
	}

	public function setNomeSlide($NomeSlide){
		$this->NomeSlide = $NomeSlide;
	}

	public function getTitulo(){
		return $this->Titulo;
	}

	public function setTitulo($Titulo){
		$this->Titulo = $Titulo;
	}

	public function getSubTitulo(){
		return $this->SubTitulo;
	}

	public function setSubTitulo($SubTitulo){
		$this->SubTitulo = $SubTitulo;
	}

	public function getImagemSlide(){
		return $this->ImagemSlide;
	}

	public function setImagemSlide($ImagemSlide){
		$this->ImagemSlide = $ImagemSlide;
	}

	public function getStatus(){
		return $this->status;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function getDataCriado(){
		return $this->dataCriado;
	}

	public function setDataCriado($dataCriado){
		$this->dataCriado = $dataCriado;
	}

	public function getOrdenSlide(){
		return $this->ordenSlide;
	}

	public function setOrdenSlide($ordenSlide){
		$this->ordenSlide = $ordenSlide;
	}
	
	public function getLinkText(){
		return $this->LinkText;
	}

	public function setLinkText($LinkText){
		$this->LinkText = $LinkText;
	}
	
	public function getLink(){
		return $this->Link;
	}

	public function setLink($Link){
		$this->Link = $Link;
	}
	
}


?>