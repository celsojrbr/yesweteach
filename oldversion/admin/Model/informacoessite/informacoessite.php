<?php
NameSpace Model\informacoessite;

class informacoessite{

    private $codInformacoessite;
    private $AutorSite;
    private $Facebook;
    private $Instagram;
    private $youtube;
    private $TituloBase;
    private $DescricaoBase;
    private $app_id;
    private $BDToken;
    private $articletag;
    private $keywords;
    private $TagExtrasImplementa;
    private $ScriptExterno;
    private $LogoMarcaDesktop;
    private $LogoMarcaMobile;
    private $favico;
    private $Status;
    private $DataCriado;
    private $Email;
    private $telefone;
	private $Whatsapp;
    private $DataAtualizado;
   
	
	public function __construct($Values = null){
		if($Values!=null){
			 $this->codInformacoessite = $Values['codInformacoessite'];
			 $this->AutorSite = $Values['AutorSite'];
			 $this->Facebook = $Values['Facebook'];
			 $this->Instagram = $Values['Instagram'];
			 $this->youtube = $Values['youtube'];
			 $this->TituloBase = $Values['TituloBase'];
			 $this->DescricaoBase = $Values['DescricaoBase'];
			 $this->app_id = $Values['app_id'];
			 $this->BDToken = $Values['BDToken'];
			 $this->articletag = $Values['articletag'];
			 $this->keywords = $Values['keywords'];
			 $this->TagExtrasImplementa = $Values['TagExtrasImplementa'];
			 $this->ScriptExterno = $Values['ScriptExterno'];
			 $this->LogoMarcaDesktop = $Values['LogoMarcaDesktop'];
			 $this->LogoMarcaMobile = $Values['LogoMarcaMobile'];
			 $this->favico = $Values['favico'];
			 $this->Status = $Values['Status'];
			 $this->DataCriado = $Values['DataCriado'];
			 $this->Email = $Values['Email'];
			 $this->telefone = $Values['telefone'];
			 $this->Whatsapp = $Values['Whatsapp'];
			 $this->DataAtualizado = $Values['DataAtualizado'];
			
		
		 }	 
	}

    /*gets \ sets*/
	public function getCodInformacoessite(){
		return $this->codInformacoessite;
	}

	public function setCodInformacoessite($codInformacoessite){
		$this->codInformacoessite = $codInformacoessite;
	}

	public function getAutorSite(){
		return $this->AutorSite;
	}

	public function setAutorSite($AutorSite){
		$this->AutorSite = $AutorSite;
	}

	public function getFacebook(){
		return $this->Facebook;
	}

	public function setFacebook($Facebook){
		$this->Facebook = $Facebook;
	}

	public function getInstagram(){
		return $this->Instagram;
	}

	public function setInstagram($Instagram){
		$this->Instagram = $Instagram;
	}

	public function getYoutube(){
		return $this->youtube;
	}

	public function setYoutube($youtube){
		$this->youtube = $youtube;
	}

	public function getTituloBase(){
		return $this->TituloBase;
	}

	public function setTituloBase($TituloBase){
		$this->TituloBase = $TituloBase;
	}

	public function getDescricaoBase(){
		return $this->DescricaoBase;
	}

	public function setDescricaoBase($DescricaoBase){
		$this->DescricaoBase = $DescricaoBase;
	}

	public function getApp_id(){
		return $this->app_id;
	}

	public function setApp_id($app_id){
		$this->app_id = $app_id;
	}

	public function getArticletag(){
		return $this->articletag;
	}

	public function setArticletag($articletag){
		$this->articletag = $articletag;
	}

	public function getKeywords(){
		return $this->keywords;
	}

	public function setKeywords($keywords){
		$this->keywords = $keywords;
	}

	public function getTagExtrasImplementa(){
		return $this->TagExtrasImplementa;
	}

	public function setTagExtrasImplementa($TagExtrasImplementa){
		$this->TagExtrasImplementa = $TagExtrasImplementa;
	}

	public function getScriptExterno(){
		return $this->ScriptExterno;
	}

	public function setScriptExterno($ScriptExterno){
		$this->ScriptExterno = $ScriptExterno;
	}

	public function getLogoMarcaDesktop(){
		return $this->LogoMarcaDesktop;
	}

	public function setLogoMarcaDesktop($LogoMarcaDesktop){
		$this->LogoMarcaDesktop = $LogoMarcaDesktop;
	}

	public function getLogoMarcaMobile(){
		return $this->LogoMarcaMobile;
	}

	public function setLogoMarcaMobile($LogoMarcaMobile){
		$this->LogoMarcaMobile = $LogoMarcaMobile;
	}

	public function getFavico(){
		return $this->favico;
	}

	public function setFavico($favico){
		$this->favico = $favico;
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
	
	public function getEmail(){
		return $this->Email;
	}

	public function setEmail($Email){
		$this->Email = $Email;
	}
	
	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	
	public function getWhatsapp(){
		return $this->Whatsapp;
	}

	public function setWhatsapp($Whatsapp){
		$this->Whatsapp = $Whatsapp;
	}
	
	public function getBDToken(){
		return $this->BDToken;
	}

	public function setBDToken($BDToken){
		$this->BDToken = $BDToken;
	}
	
}


?>