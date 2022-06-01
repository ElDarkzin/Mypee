<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/register.css">
    <title>Cadastrar</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/media/register.svg" alt="">
        </div>
        <div class="form">
            <form method="GET" action="../model/registraUser.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="../public/login.php" class="btn-register" type="submit">Cadastrar</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="nome_1" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="fone" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="CPF">CPF</label>
                        <input id="CPF" type="text" name="CPF" placeholder="Digite seu CPF" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="feminino" type="radio" name="genero">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="masculino" type="radio" name="genero">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="outros" type="radio" name="genero">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="nao info" type="radio" name="genero">
                            <label for="none">Prefiro não informar</label>
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>