<?php

    require 'Pessoa.php';

    $nome = $_POST["nome"];

    $pessoa = new Pessoa();

    $status = $pessoa->insere_usuario($nome);

    if(!$status){
        echo "Não foi possível executar a operação!";
        return false;
    }

    echo "Registro inserido com sucesso!";
	
?>