<?php
NameSpace Model\historielog;

class historielog{

    private $cod_log;
	private $ip;
	private $user;	
	private $pc;
	private $cod_operacao;	
	private $data;	
	private $coduser;	
	private $nivel;
	private $codunidade;
	private $TextoAcao;
	
   
   	public function getCod_log(){
		return $this->cod_log;
	}

	public function setCod_log($cod_log){
		$this->cod_log = $cod_log;
	}

	public function getIp(){
		return $this->ip;
	}

	public function setIp($ip){
		$this->ip = $ip;
	}

	public function getUser(){
		return $this->user;
	}

	public function setUser($user){
		$this->user = $user;
	}

	public function getPc(){
		return $this->pc;
	}

	public function setPc($pc){
		$this->pc = $pc;
	}

	public function getCod_operacao(){
		return $this->cod_operacao;
	}

	public function setCod_operacao($cod_operacao){
		$this->cod_operacao = $cod_operacao;
	}

	public function getData(){
		return $this->data;
	}

	public function setData($data){
		$this->data = $data;
	}

	public function getCoduser(){
		return $this->coduser;
	}

	public function setCoduser($coduser){
		$this->coduser = $coduser;
	}

	public function getNivel(){
		return $this->nivel;
	}

	public function setNivel($nivel){
		$this->nivel = $nivel;
	}

	public function getCodunidade(){
		return $this->codunidade;
	}

	public function setCodunidade($codunidade){
		$this->codunidade = $codunidade;
	}
	public function getTextoAcao(){
		return $this->TextoAcao;
	}

	public function setTextoAcao($TextoAcao){
		$this->TextoAcao = $TextoAcao;
	}
   


}


?>