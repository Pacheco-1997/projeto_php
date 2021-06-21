<?php
	define("HOST", "localhost");
	define("DBName", "turim");
	define("USER", "root");
	define("SENHA", "Amil@2021");
	
	
		class Conexao extends PDO {
			public function __construct() {				
				parent:: __construct("mysql:host=".HOST.";dbname=".DBName, USER, SENHA);							
			}
		}
?>
