<?php 
/*******************************************
    Objetivo: Arquivo responsável por receber o id do Cliente e
    encaminhar para a função que irá excluir o dado
    Data: 29/09/2021
    Autor: Marcel
********************************************/
    
    //Import do arquivo de configuração de varaiveis e constantes
    require_once('../functions/config.php');

    //Import do arquivo para exluir no BD
    require_once(SRC.'bd/excluirCliente.php');

    //O id esta sendo encaminhado pela index, no link que foi realizado na imagem do excluir
    $idCliente = $_GET['id'];

    //Chama a função excluir e encaminha o ID que será removido do BD
    if(excluir($idCliente))
        echo(BD_MSG_EXCLUIR);
    else
        echo("
                <script>
                    alert('". BD_MSG_ERRO ."');
                    window.history.back(); 
                </script>
            ");




?>