<?php
    //declare(strict_types=1);

    include("conexao.php");
    
    $conn = new Conexao();

    $sql = 'select * from tb_pessoa';

    $resultado = $conn->query($sql);

    $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($dados);

?>