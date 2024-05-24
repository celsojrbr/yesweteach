<?php
NameSpace Model\Unidade;

class Unidade{

    private $CodUnidade;
    private $NomeUnidade;
    private $EndUnidade;
    private $CepUnidade;
    private $Bairro;
    private $TelefoneUnidade;
    private $Telefone2Unidade;
    private $Fotounidade;
    private $Responsavel;
    private $Status;
    private $DataCriado;
	
	public function __construct($Values = null){
		if($Values!=null){
			 $this->CodUnidade = $Values['CodUnidade'];
			 $this->NomeUnidade = $Values['NomeUnidade'];
			 $this->EndUnidade = $Values['EndUnidade'];
			 $this->CepUnidade = $Values['CepUnidade'];
			 $this->Bairro = $Values['bairro'];
			 $this->TelefoneUnidade = $Values['telefoneUnidade'];
			 $this->Telefone2Unidade = $Values['telefone2Unidade'];
			 $this->Responsavel = $Values['Responsavel'];
			 $this->Fotounidade = $Values['Fotounidade'];
			 $this->Status = $Values['status'];
			 $this->DataCriado = $Values['dataCriado'];
		
		 }	 
	}

    /*gets \ sets*/

    public function GetCodUnidade(){
        return $this->CodUnidade;
    }

    public function GetNomeUnidade(){
        return $this->NomeUnidade;
    }

    public function GetEndUnidade(){
        return $this->EndUnidade;
    }
	
	public function GetTelefoneUnidade(){
        return $this->TelefoneUnidade;
    }
	public function GetTelefone2Unidade(){
        return $this->Telefone2Unidade;
    }
	
	public function GetResponsavel(){
        return $this->Responsavel;
    }
	
	public function GetStatus(){
        return $this->Status;
    }
	
	public function GetDataCriado(){
        return $this->DataCriado;
    }
	
	public function GetCepUnidade(){
        return $this->CepUnidade;
    }
	public function GetFotounidade(){
        return $this->Fotounidade;
    }
	
	public function GetBairro(){
        return $this->Bairro;
    }
	
	

    /***/
    /***/
	public function SetCodUnidade($CodUnidade){
	   $this->CodUnidade = $CodUnidade;
	}

	public function SetNomeUnidade($NomeUnidade){
	   $this->NomeUnidade = $NomeUnidade;
	}

	public function SetEndUnidade($EndUnidade){
		$this->EndUnidade = $EndUnidade;
	}

	public function SetTelefoneUnidade($TelefoneUnidade){
		$this->TelefoneUnidade = $TelefoneUnidade;
	}
	
	public function SetTelefone2Unidade($telefone2Unidade){
		$this->telefone2Unidade = $telefone2Unidade;
	}

	public function SetResponsavel($Responsavel){
		$this->Responsavel = $Responsavel;
	}

	public function SetStatus($Status){
		$this->Status = $Status;
	}
	
	public function SetDataCriado($DataCriado){
		$this->DataCriado = $DataCriado;
	}
	
   	public function SetCepUnidade($CepUnidade){
		$this->CepUnidade = $CepUnidade;
	}
    
	public function SetFotounidade($Fotounidade){
		$this->Fotounidade = $Fotounidade;
	}
	
	public function SetBairro($Bairro){
		$this->Bairro = $Bairro;
	}
   


}


?>