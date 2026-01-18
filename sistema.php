<?php
    session_start();

    if ((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["email"]) == true)) {
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);

        header('Location: login.php');
    }
    
    $logado = $_SESSION["email"];
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
            justify-content: center;
            align-items: center;
            min-height: 500px;
        }
    </style>
</head>
<body>
    <header>
        <h2><a href="<?= $_SERVER["PHP_SELF"] ?>">Felipe</a></h2>
        <div>
            <a class="btn" href="sair.php">Sair</a>
        </div>
    </header>

    <main>
        <h1>Bem-vindo, <?= $logado ?>!</h1>   
    </main>
</body>
</html>