<?php

require_once("conexao.php");

class Filho{
    //public $id;
    public $nome;


    public function insere_filho(string $nome){
        $pdo = new Conexao();
        
        $sql = "insert into tb_filho (nome) values (?)";
        
        $res = $pdo -> prepare($sql);
        
        $res -> bindParam(1, $nome);

        $res -> execute();
        
        return $res -> rowCount();
    }

    public function listar_filho(){
        
        $con = new Conexao();

        $sql = "select * from tb_filho";

        $res = $con -> query($sql);
        
        return $res -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>