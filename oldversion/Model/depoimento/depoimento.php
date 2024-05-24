<?php
NameSpace Model\depoimento;

class depoimento{

    private $CodDepoimento;
    private $NomeDepoente;
    private $Depoimento;
    private $Estrela;
    private $LocalImagem;
    private $Status;
    private $DataCriado;
    private $DataAtualizado;
    
	
   
	
	public function __construct($Values = null){
		if($Values!=null){
			$this->CodDepoimento = $Values['CodDepoimento'];
			$this->NomeDepoente = $Values['NomeDepoente'];
			$this->Depoimento = $Values['Depoimento'];
			$this->Estrela = $Values['Estrela'];
			$this->LocalImagem = $Values['LocalImagem'];
			$this->Status = $Values['Status'];
			$this->DataCriado = $Values['DataCriado'];
			$this->DataAtualizado = $Values['DataAtualizado'];
			
			
		
		 }	 
	}
	
	
	public function getCodDepoimento(){
		return $this->CodDepoimento;
	}

	public function setCodDepoimento($CodDepoimento){
		$this->CodDepoimento = $CodDepoimento;
	}

	public function getNomeDepoente(){
		return $this->NomeDepoente;
	}

	public function setNomeDepoente($NomeDepoente){
		$this->NomeDepoente = $NomeDepoente;
	}

	public function getDepoimento(){
		return $this->Depoimento;
	}

	public function setDepoimento($Depoimento){
		$this->Depoimento = $Depoimento;
	}

	public function getEstrela(){
		return $this->Estrela;
	}

	public function setEstrela($Estrela){
		$this->Estrela = $Estrela;
	}

	public function getLocalImagem(){
		return $this->LocalImagem;
	}

	public function setLocalImagem($LocalImagem){
		$this->LocalImagem = $LocalImagem;
	}

	public function getStatus(){
		return $this->Status;
	}

	public function setStatus($Status){
		$this->Status = $Status;
	}

	public function getDataCriado(){
		return $this->DataCriado;
	}

	public function setDataCriado($DataCriado){
		$this->DataCriado = $DataCriado;
	}

	public function getDataAtualizado(){
		return $this->DataAtualizado;
	}

	public function setDataAtualizado($DataAtualizado){
		$this->DataAtualizado = $DataAtualizado;
	}

}


?>