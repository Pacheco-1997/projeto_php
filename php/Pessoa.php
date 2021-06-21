<?php

    require_once("conexao.php");

    class Pessoa{
        //public $id;
        public $nome;


        public function insere_usuario(string $nome){
			$pdo = new Conexao();
			
			$sql = "insert into tb_pessoa (nome) values (?)";
			
			$res = $pdo -> prepare($sql);
			
			$res -> bindParam(1, $nome);

			$res -> execute();
			
			return $res -> rowCount();
		}

        public function listar_pessoa(){

            $con = new Conexao();

            $sql = "select * from tb_pessoa";

            $res = $con -> query($sql);
            
            return $res -> fetchAll(PDO::FETCH_ASSOC);
        }

}