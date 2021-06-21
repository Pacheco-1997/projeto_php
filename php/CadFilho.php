<?php

    require 'Filho.php';

    $nome = $_POST['nome'];

    var_dump($nome);

    $filho = new Filho();

    $status = $filho->insere_filho($nome);

    if(!$status){
        echo "Não foi possível executar a operação!";
        return false;
    }

    echo "Registro inserido com sucesso!";
	
?>