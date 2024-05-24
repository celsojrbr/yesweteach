<?php
namespace src\Conexao;

class Conexao {

	private static $instance;

    private static $host="localhost";
	private static $dbname="yesweteach";
	private static $user="root";
	private static $pass = "";
    
    /*private static $host="localhost";
	private static $dbname="i9777777_l56p1";
	private static $user="yesweteachbd";
	private static $pass = "Var78961@$#";*/
    
	private function __construct(){

	}

	public static function getInstance(){
		
		/*vendo se existe uma intancia do obj*/
		if(!isset(self::$instance)){
			$DSN  = "mysql:host=".self::$host.";dbname=".self::$dbname."";
			$user =  "".self::$user."";
			$pass = "".self::$pass."";
			self::$instance = new \PDO($DSN,$user,$pass, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			
		}


		return self::$instance;
	}
	
	public static function desconectarDB(){

		mysqli_close(self::$instance);
	}
}


?>