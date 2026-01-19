<?php
    if (!empty($_GET['id'])) {
        include_once('config.php');

        $id = $_GET['id'];

        $sql_select = "SELECT * FROM usuarios WHERE id = $id";

        $result = $conexao->query($sql_select);

        if ($result->num_rows > 0) {
            $sql_delete = "DELETE FROM usuarios WHERE id = $id";
            $result_delete = $conexao->query($sql_delete);
        }
    }
    
    header('Location: sistema.php');

?>