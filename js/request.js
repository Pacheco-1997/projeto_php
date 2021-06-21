$(document).ready(function(){


    function carrega_dados(){
        $.ajax({
            dataType: "json",
            url: "php/lista.php",
            success: function (resultado) {
                console.log(resultado);
                var html;
                $.each(resultado, function (key, item) {
                    html += '<tr>';
                    html += '<td class="td">' + item.PessoaId + '</td>';
                    html += '<td class="td">' + item.Nome + '</td>';
                    html += '<td class="td"><a id="ExcluirCadastro" class="btn btn-danger" href="#" data-id="' + item.id + '">Excluir</a></td>';
                    html += '</tr>';
                });
                $('#CorpoTabela').html(html);
            },
    });

    };

    carrega_dados();

    $('#ExcluirCadastro').click(function(){
        console.log('Excluir');
        //var IDExclusao = $(this).attr('data-id');
        //console.log(IDExclusao);
    });
    




    $('#cadastrarPessoa').click(function(){
        event.preventDefault();

        var nome = $('#nomePessoa').val();
        
        $.ajax({
            type: 'POST',
            url: 'php/CadPessoa.php',
            async: true,
            data: {nome: nome},
            success: function(response){

                carrega_dados();
            },
            error: function(){
                console.log("ERRO");
            }
        });
    });
    

    $('#cadastrarFilho').click(function(){
        event.preventDefault();

        var nome = $('#nomeFilho').val();
        
        $.ajax({
            type: 'POST',
            url: 'php/CadFilho.php',
            async: true,
            data: {nome: nome},
            success: function(response){
                console.log(response);
            },
            error: function(){
                console.log("ERRO");
            }
        });
    });
    
});

