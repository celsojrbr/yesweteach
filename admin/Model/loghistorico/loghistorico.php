<?php
NameSpace Model\loghistorico;

class loghistorico{

    private $CodLog;
    private $Ip;
    private $CodUser;
    private $User;
    private $Pc;
    private $comando;
    private $data;
    private $texto;
   
	

    /*gets \ sets*/
	public function getCodLog(){
		return $this->CodLog;
	}

	public function setCodLog($CodLog){
		$this->CodLog = $CodLog;
	}

	public function getIp(){
		return $this->Ip;
	}

	public function setIp($Ip){
		$this->Ip = $Ip;
	}

	public function getCodUser(){
		return $this->CodUser;
	}

	public function setCodUser($CodUser){
		$this->CodUser = $CodUser;
	}

	public function getUser(){
		return $this->User;
	}

	public function setUser($User){
		$this->User = $User;
	}

	public function getPc(){
		return $this->Pc;
	}

	public function setPc($Pc){
		$this->Pc = $Pc;
	}

	public function getComando(){
		return $this->comando;
	}

	public function setComando($comando){
		$this->comando = $comando;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getTexto(){
		return $this->texto;
	}

	public function setTexto($texto){
		$this->texto = $texto;
	}	
	
}


?>