<?php
    $db_host = 'Localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'formulario-felipe';

    $conexao = new mysqli($db_host, $db_username, $db_password, $db_name);

    /*if ($conexao->connect_errno) {
        echo 'Erro ao conectar ao Banco de Dados';
    } else {
        echo 'Conexão efetuada com sucesso';
    }*/

?>