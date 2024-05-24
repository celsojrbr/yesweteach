<?php
NameSpace Model\prematricula;

class prematricula{

    private $codprematricula;
    private $NomeCompleto;
	private $Email;
	private $Telefone;
	private $Whatsapp;
	private $NivelIngles;
	private $ComoConheceu;
	private $ContePouco;
	private $CPF;
	private $Status;
	private $datacriado;
	
	
   
	
	public function __construct($Values = null){
		if($Values!=null){
			$this->codprematricula = $Values['codprematricula'];
			$this->NomeCompleto = $Values['NomeCompleto'];
			$this->Email = $Values['Email'];
			$this->Telefone = $Values['Telefone'];
			$this->Whatsapp = $Values['Whatsapp'];
			$this->NivelIngles = $Values['NivelIngles'];
			$this->ComoConheceu = $Values['ComoConheceu'];
			$this->ContePouco = $Values['ContePouco'];
			$this->CPF = $Values['CPF'];
			$this->Status = $Values['Status'];
			$this->datacriado = $Values['datacriado'];
			
		
		 }	 
	}

    public function getCodprematricula(){
		return $this->codprematricula;
	}

	public function setCodprematricula($codprematricula){
		$this->codprematricula = $codprematricula;
	}

	public function getNomeCompleto(){
		return $this->NomeCompleto;
	}

	public function setNomeCompleto($NomeCompleto){
		$this->NomeCompleto = $NomeCompleto;
	}

	public function getEmail(){
		return $this->Email;
	}

	public function setEmail($Email){
		$this->Email = $Email;
	}

	public function getTelefone(){
		return $this->Telefone;
	}

	public function setTelefone($Telefone){
		$this->Telefone = $Telefone;
	}

	public function getWhatsapp(){
		return $this->Whatsapp;
	}

	public function setWhatsapp($Whatsapp){
		$this->Whatsapp = $Whatsapp;
	}

	public function getNivelIngles(){
		return $this->NivelIngles;
	}

	public function setNivelIngles($NivelIngles){
		$this->NivelIngles = $NivelIngles;
	}

	public function getComoConheceu(){
		return $this->ComoConheceu;
	}

	public function setComoConheceu($ComoConheceu){
		$this->ComoConheceu = $ComoConheceu;
	}

	public function getContePouco(){
		return $this->ContePouco;
	}

	public function setContePouco($ContePouco){
		$this->ContePouco = $ContePouco;
	}

	public function getStatus(){
		return $this->Status;
	}

	public function setStatus($Status){
		$this->Status = $Status;
	}

	public function getDatacriado(){
		return $this->datacriado;
	}

	public function setDatacriado($datacriado){
		$this->datacriado = $datacriado;
	}
	
	public function getCPF(){
		return $this->CPF;
	}

	public function setCPF($CPF){
		$this->CPF = $CPF;
	}
	
	
}


?>