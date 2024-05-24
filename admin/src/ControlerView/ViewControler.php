<?php

NameSpace src\ControlerView;

use Controler\Login\LoginControler;
use Controler\Usuario\UsuarioControler;
use Model\Usuario\Usuario as Usuario;

use src\Conexao\Conexao;




class View
{
    private $template;
    private $dados = array();

    private $layoutTopo='View/Layout/AdministradorGeral/Cabecalho.php';
    private $layoutRodape='View/Layout/AdministradorGeral/Rodape.php';


    public static function CriandoPagina($template, $dados = array()){

        $view = new self("{$template}", $dados);
		
		$view->layoutTopo = 'View/Layout/AdministradorGeral/Cabecalho.php';
		$view->layoutRodape = 'View/Layout/AdministradorGeral/Rodape.php';

        return $view;
    }
	
	public function Renderizar($template, $dados = array(), $Usuario){
		
		if($Usuario!=null){
			
			$Validador = LoginControler::Validador();
			
			if($Validador==False){
				include('View/Layout/CabecalhoLogin.php');
				include('View/Login/Login.php');
				include('View/Layout/RodapeLogin.php');

			}else{
				
				$this->layoutTopo='View/Layout/AdministradorGeral/Cabecalho.php';
				$this->layoutRodape='View/Layout/AdministradorGeral/Rodape.php';

				include($this->layoutTopo);
				include($template);
				include($this->layoutRodape);
				
			}
			
		}else{
			include('View/Layout/CabecalhoLogin.php');
            include('View/Login/Login.php');
            include('View/Layout/RodapeLogin.php');

		}
	}


}


?>