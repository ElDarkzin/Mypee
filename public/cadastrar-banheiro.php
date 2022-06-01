<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/principal.css">
    <title>Cadastrar banheiros</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
     <a class="navbar-brand" href="tela-principal.php">MYPEE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="tela-principal.php">Tela principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="info-dos-devs.html">Info dos devs</a>
          </li>
      </div>
    </div>
  </nav>

  <div class="main-login">
        <div class="left-login">
        <h1><br>cadastre seu banheiro</h1>
            <img src="../public/assets/media/mapa.svg" class="left-login-image" alt="astronauta">
        </div>
        
        <form method="GET" action="../model/registraBanheiro.php">    
        <div class="right-login">
          <div class="card-login">
            <h1>Cadastrar banheiro</h1>
            <div class="textfield">
                <label for="email">Nome da rua</label>
                <input id="nome rua" type="text" name="local_banheiro" placeholder="Localização do banheiro" required>
            </div>
            <div class="textfield">
                <label for="qnt banheiro">Numero de banheiros</label>
                <input id="quant banheiro" type="number" min="1" max="10" name="quantidade_banheiro" placeholder="Numero de banheiros" required>
            </div>    
            <div class="textfield">
              <label for="qnt banheiro">Descrição do banheiro</label>
              <input id="quant banheiro" type="text" maxlength="150" size="2" name="descricao_banheiro" placeholder="Descrição do banheiro" required>
          </div>    

          <h3>Acessorios do banheiro</h3>
          <div class="form-check form-switch">
            <input  value="Vaso sanitário" class="form-check-input" name="acessorios[]" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Vaso sanitario</label>
          </div>
          <div class="form-check form-switch">
            <input value="Chuveiro" class="form-check-input" name="acessorios[]" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault" >Chuveiro</label>
          </div>
          <div class="form-check form-switch">
            <input value="Higienie para as mãos" class="form-check-input" name="acessorios[]" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault" >Higienie para as mãos</label>
          </div>
          <h3>Formas de pagamento</h3>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1" value="Dinheiro" checked>
            <label class="form-check-label" for="exampleRadios1"  value="Higienie para as mãos">
              Dinheiro
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios2" value="Pix">
            <label class="form-check-label" for="exampleRadios2">
              Pix
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios2" value="Cartão">
            <label class="form-check-label" for="exampleRadios2">
              Cartão
            </label>
          </div>
          <a><button class="btn-register" type="submit">Cadastrar banheiro</button></a>
          </form>
        </div>
          </div>
          </div>
      </body>
      </html>