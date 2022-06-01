<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Bem Vindo ao MYPEE<br>Faça o Login</h1>
            <img src="../public/assets/img/MYPEE.png" class="left-login-image" alt="astronauta">
        </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <form method="POST" action="tela-principal.php">
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="textfield">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <button type="submit" class="btn-login">Login</button>
                    <button onclick="window.location.href='register.php'" class="btn-register">Cadastre-se</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>