<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
            border: 1px solid black;
        }

        tbody{
            background-color: #e4f0f5;
        }

        .thead, .td{
            border: 1px solid black;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nomePessoa">
        <input type="submit" value="Enviar" id="cadastrarPessoa">
    </form>

    <form id="cadFilho" method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nomeFilho">
        <input type="submit" value="Enviar" id="cadastrarFilho">
    </form>

    <table class="table">
        <thead class="thead">
            <tr>
                <th>ID</th>
                <th>NOME</th>
            </tr>
        </thead>
        <tbody id="CorpoTabela">
        </tbody>
    </table>

    <textarea name="" id="" cols="30" rows="10" id="textarea"></textarea>

    <?php

        require 'php/Pessoa.php';
        require 'php/Filho.php';
        
    ?>

<script 
    src="https://code.jquery.com/jquery-3.6.0.js" 
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
    crossorigin="anonymous"></script>
<script src="js/request.js"></script>
</body>
</html>