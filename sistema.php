<?php
    session_start();
    include_once('config.php');

    if ((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["email"]) == true)) {
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);

        header('Location: login.php');
    }
    
    $logado = $_SESSION["email"];

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);

    //print_r($result);

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema | FK</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #0f0c25;
            min-height: 100dvh;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #fff;  
        }

        a.btn {
            border: 3px solid red;
            width: 200px;     
            border-radius: 15px;
            padding: 10px 20px; 
        }

        a.btn:hover {
            background-color: red;
        }

        header {
            display: flex;
            justify-content: space-around;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
            padding: 1rem;
            min-height: 6rem;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 500px;
            gap: 2.5rem;
        }

        main h1 {
            margin-top: 3rem;
        }

        .tabela {
            border-collapse: collapse;
        }

        .tabela th,
        .tabela td {
            padding: 8px 10px;
            border: 2px solid #000;
            text-align: left;
            color: black;
        }

        .tabela thead {
            background-color: dodgerblue;       
        }

        .tabela tbody {
            background-color: #fff;
        }

    </style>
</head>
<body>
    <header>
        <h2><a href="<?= $_SERVER["PHP_SELF"] ?>">FK</a></h2>
        <div>
            <a class="btn" href="sair.php">Sair</a>
        </div>
    </header>

    <main>
        <h1>Bem-vindo, <?= $logado ?>!</h1>
        <table class="tabela">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Endeço</th>
                    <th scope="col">***</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['id'] . "</td>";
                        echo "<td>" . $user_data['nome'] . "</td>";
                        echo "<td>" . $user_data['email'] . "</td>";
                        echo "<td>" . $user_data['senha'] . "</td>";
                        echo "<td>" . $user_data['telefone'] . "</td>";
                        echo "<td>" . $user_data['sexo'] . "</td>";
                        echo "<td>" . $user_data['data_nasc'] . "</td>";
                        echo "<td>" . $user_data['cidade'] . "</td>";
                        echo "<td>" . $user_data['estado'] . "</td>";
                        echo "<td>" . $user_data['endereco'] . "</td>";
                        echo "<td>Ações</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>