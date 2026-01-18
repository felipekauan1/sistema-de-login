<?php
    if (isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
        // Acessa
        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /*print_r($email);
        echo "<br>";
        print_r($senha);*/

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) < 1) {
            header('Location: login.php');
        } else {
            header('Location: sistema.php');
        }
    } else {
        // Não acessa
        header('Location: login.php');
    }
?>