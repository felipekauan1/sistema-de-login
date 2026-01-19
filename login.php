<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FK</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            min-height: 100dvh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <form action="teste-login.php" method="post">
                <input class="inputbox" type="email" name="email" id="email" placeholder="E-mail" required>
                <br>
                <input class="inputbox" type="password" name="senha" id="senha" placeholder="Senha" required>
                <br>
                <input class="button" type="submit" name="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>