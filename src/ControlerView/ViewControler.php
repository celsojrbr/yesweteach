<?php

NameSpace src\ControlerView;
use Controler\informacoessite\informacoessiteControler;
use src\Conexao\Conexao;


class View
{
    private $template;
    private $dados = array();

    private $layoutTopo='View/Layout/Cabecalho.php';
    private $layoutRodape='View/Layout/Rodape.php';

	
	
	
	


    public static function CriandoPagina($template, $dados = array()){
		//print_r($dados);
		
        switch ($dados['0']) {
			
			/********************************************************************/
			case 'enviar-email':
				# code...
				/*criando pagina inicial apartir de uma entrada*/
				setcookie("contato", true, time()+6000, '/');
				$View = new View('View/enviar-email.php',$dados);
				$View->Renderizar('View/enviar-email.php',$dados,$_GET);
				
			break;
			
			case 'Inicio':
				// # code...				
				$View = new View('View/Inicio.php',$dados);
				$View->Renderizar('View/Inicio.php',$dados,$_GET);
			break;
			
			
			case '404':
			case 'Erro404':
			case 'Erro404.php':
				// # code...
				/*criando pagina inicial apartir de uma entrada*/
				header("HTTP/1.0 404 Not Found");
				
				$View = new View('View/Erro404.php',$dados);
				$View->Renderizar('View/Erro404.php',$dados,$_GET);
			break;
			
			
			// /********************************************************************/
			case 'Noticia':
				# code...
				if(is_numeric(end($dados))){
					$View = new View('View/Noticia.php',$dados);
					$View->Renderizar('View/Noticia.php',$dados,$_GET);
				}else{
					header("location: /Erro404"); 
				}
				
			break;
			

			/*-------------------------------------------------------*/	
			default:
			# code...
				header("HTTP/1.0 404 Not Found");
				$View = new View('View/Erro404.php',$dados);
				$View->Renderizar('View/Erro404.php', $dados,$_GET);
				//include('View/Manutencao.php');
			break;
		}
    }
	
	public function Renderizar($template, $dados = array()){

		include($this->layoutTopo);
		include($template);
		include($this->layoutRodape);

	}


}


?>