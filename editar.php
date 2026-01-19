<?php
    if (!empty($_GET['id'])) {
        include_once('config.php');

        $id = $_GET['id'];

        $sql_select = "SELECT * FROM usuarios WHERE id = $id";

        $result = $conexao->query($sql_select);

        if ($result->num_rows > 0) {
            while ($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data["nome"];
                $email = $user_data["email"];
                $senha = $user_data["senha"];
                $telefone = $user_data["telefone"];
                $sexo = $user_data["sexo"];
                $data_nasc = $user_data["data_nasc"];
                $cidade = $user_data["cidade"];
                $estado = $user_data["estado"];
                $endereco = $user_data["endereco"];
            }

        } else {
            header('Location: sistema.php');
        }

    } else {
        header('Location: sistema.php');
    }

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            flex-direction: column;
            gap: 1rem;
        }

        .btn-voltar {     
            text-decoration: none;
            color: #fff;
            width: 200px;
            height: 48px;
            border-radius: 15px;
            padding: 13px 20px; 
            background-color: yellow;
            color: #000;
            font-size: 20px;
        }

        .btn-voltar:hover {
            background-color: #ddff45;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="login">
            <h1>Editar Cadastro</h1>
            <form action="salvar.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input class="inputbox" type="text" name="nome" id="nome" placeholder="Nome completo" value="<?= $nome ?>" required>
                <br>
                <input class="inputbox" type="email" name="email" id="email" placeholder="E-mail" value="<?= $email ?>" required>
                <br>
                <input class="inputbox" type="password" name="senha" id="senha" placeholder="Senha" value="<?= $senha ?>" required>
                <br>
                <input class="inputbox" type="number" name="telefone" id="telefone" placeholder="Telefone" value="<?= $telefone ?>" required>
        
                <div class="inputbox">
                    <p>Sexo: </p>
                    <input type="radio" name="sexo" id="masculino" value="masculino" <?= $sexo == 'masculino'?'checked':'' ?> required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="sexo" id="feminino" value="feminino" <?= $sexo == 'feminino'?'checked':'' ?> required>
                    <label for="feminino">Feminino</label>
                    <br>
                </div>
                <div class="inputbox">
                    <label for="data_nasc">Data de Nascimento:</label>
                    <input type="date" name="data_nasc" id="data_nasc" value="<?= $data_nasc ?>" required>
                </div>
                <input class="inputbox" type="text" name="cidade" id="cidade" placeholder="Cidade" value="<?= $cidade ?>" required>
                <br>
                <input class="inputbox" type="text" name="estado" id="estado" placeholder="Estado" value="<?= $estado ?>" required>
                <br>
                <input class="inputbox" type="text" name="endereco" id="endereco" placeholder="Endereço" value="<?= $endereco ?>" required>
                <br>
        
                <input type="submit" id="submit" name="update" value="Atualizar">               
            </form>
        </div>
        <a class="btn-voltar" href="sistema.php">Voltar</a>
    </div>
</body>
</html>