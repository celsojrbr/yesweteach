<?php
NameSpace Model\AdminUser;

class AdminUser{

    private $CodAdminUser;
    private $Login;
    private $Senha;
    private $Nivel;
    private $CPF;
    private $CodUnidade;
    private $NomeCompleto;
    private $Telefone;
    private $Celular;
    private $Email;
    private $status;
    private $dataCriado;

    /*gets \ sets*/
	public function __construct($Values = null){
		if($Values!=null){
			 $this->CodAdminUser = $Values['Codadminuser'];
			 $this->Login = $Values['Login'];
			 $this->Senha = $Values['Senha'];
			 $this->Nivel = $Values['Nivel'];
			 $this->CPF = $Values['CPF'];
			 $this->CodUnidade = $Values['CodUnidade'];
			 $this->NomeCompleto = $Values['NomeCompleto'];
			 $this->Telefone = $Values['Telefone'];
			 $this->Celular = $Values['Celular'];
			 $this->Email = $Values['Email'];
			 $this->status = $Values['status'];
			 $this->dataCriado = $Values['dataCriado'];
		 }	 
	}
	

    public function GetCodAdminUser(){
        return $this->CodAdminUser;
    }

    public function GetLogin(){
        return $this->Login;
    }

    public function GetSenha(){
        return $this->Senha;
    }
	
	public function GetNivel(){
        return $this->Nivel;
    }
	
	public function GetCPF(){
        return $this->CPF;
    }
	
	public function GetCodUnidade(){
        return $this->CodUnidade;
    }
	
	public function GetTelefone(){
        return $this->Telefone;
    }
	
	public function GetCelular(){
        return $this->Celular;
    }
	
	public function GetEmail(){
        return $this->Email;
    }
	
	public function Getstatus(){
        return $this->status;
    }
	
	public function GetdataCriado(){
        return $this->dataCriado;
    }
	
	public function GetNomeCompleto(){
        return $this->NomeCompleto;
    }

    /***/
    /***/
	public function SetCodAdminUser($CodAdminUser){
	   $this->CodAdminUser = $CodAdminUser;
	}

	public function SetLogin($Login){
	   $this->Login = $Login;
	}

	public function SetSenha($Senha){
		$this->Senha = $Senha;
	}

	public function SetNivel($Nivel){
		$this->Nivel = $Nivel;
	}

	public function SetCPF($CPF){
		$this->CPF = $CPF;
	}

	public function SetCodUnidade($CodUnidade){
		$this->CodUnidade = $CodUnidade;
	}

	public function SetTelefone($Telefone){
		$this->Telefone = $Telefone;
	}

	public function SetCelular($Celular){
		$this->Celular = $Celular;
	}

	public function SetEmail($Email){
		$this->Email = $Email;
	}

	public function Setstatus($status){
		$this->status = $status;
	}

	public function SetdataCriado($dataCriado){
		$this->dataCriado = $dataCriado;
	}
	
	public function SetNomeCompleto($NomeCompleto){
		$this->NomeCompleto = $NomeCompleto;
	}
   


}


?>