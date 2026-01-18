<?php
    if (isset($_POST["submit"])) {
        include_once('config.php');

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $telefone = $_POST["telefone"];
        $sexo = $_POST["sexo"];
        $data_nasc = $_POST["data_nasc"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $endereco = $_POST["endereco"];

        $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");

        header('Location: login.php');
    }
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | FK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h1>Formulário de Clientes</h1>
        <form action="cadastro.php" method="post">
            <input class="inputbox" type="text" name="nome" id="nome" placeholder="Nome completo" required>
            <br>
            <input class="inputbox" type="email" name="email" id="email" placeholder="E-mail" required>
            <br>
            <input class="inputbox" type="password" name="senha" id="senha" placeholder="Senha" required>
            <br>
            <input class="inputbox" type="number" name="telefone" id="telefone" placeholder="Telefone" required>
            
            <div class="inputbox">
                <p>Sexo: </p>
                <input type="radio" name="sexo" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="sexo" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>               
            </div>

            <div class="inputbox">
                <label for="data_nasc">Data de Nascimento:</label>
                <input type="date" name="data_nasc" id="data_nasc" required>
            </div>

            <input class="inputbox" type="text" name="cidade" id="cidade" placeholder="Cidade" required>
            <br>
            <input class="inputbox" type="text" name="estado" id="estado" placeholder="Estado" required>
            <br>
            <input class="inputbox" type="text" name="endereco" id="endereco" placeholder="Endereço" required>
            <br>
            
            <input type="submit" id="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>