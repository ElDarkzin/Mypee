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

<?php

use Database\Database;

if (isset($_GET['id_banheiro'])) {
  $idBanheiro = $_GET['id_banheiro'];
} else {
  $idBanheiro = null;
}

require_once "../model/Database.php";

$db = new Database();

$resultDb = $db->select(
  "SELECT * FROM cadastro_banheiro WHERE id_banheiro = $idBanheiro; "
);
?>

<form method="post" action="../data/update.php">
  <h2> Atualização Do Banheiro </h2>
  <h4> Cod Banheiro:</h4>
  <input type="text" name="idBanheiro" value="<?= $resultDb[0]->id_banheiro ?>" readonly />
  <br>

  <h4> Local Banheiro:</h4>
  <input type="text" name="local_banheiro" value="<?= $resultDb[0]->local_banheiro ?>" readonly />
  <br>

  <h4> Descrição:</h4>
  <input type="text" name="descricao_banheiro" value="<?= $resultDb[0]->descricao_banheiro ?>" />
  <br>

  <h4> Quantidade:</h4>
  <input type="number" name="quantidade_banheiro" value="<?= $resultDb[0]->quantidade_banheiro ?>" min="1"  max="10"/>

  <h4> Acessorios </h4>
  <div class="form-check form-switch"> 
        <input value="Higienie para as mãos" name="acessorios" type="checkbox" <?= ($resultDb[0]->acessorios == "Higienie para as mãos") ? "checked" : ""?>/> Higiene para as mãos 
  </div>
  <div class="form-check form-switch"> 
        <input value="Vaso sanitario" name="acessorios" type="checkbox" <?= ($resultDb[0]->acessorios == "Vaso sanitário") ? "checked" : ""?>/> Vaso sanitario 
  </div>
  <div class="form-check form-switch"> 
        <input value="Chuveiro" name="acessorios" type="checkbox" <?= ($resultDb[0]->acessorios == "Chuveiro") ? "checked" : ""?>/> Chuveiro 
  </div>

  <h3> Pagamento: </h3>
  <div class="form-check form-check-inline">
    <input type="radio" name="pagamento" value="Dinheiro" <?= ($resultDb[0]->pagamento == "DInheiro") ? "checked" : "" ?>/> Dinheiro
  </div>
  <div class="form-check form-check-inline">
    <input type="radio" name="pagamento" value="Pix" <?= ($resultDb[0]->pagamento == "Pix") ? "checked" : "" ?> /> Pix
  </div>
  <div class="form-check form-check-inline">
    <input type="radio" name="pagamento" value="Cartao" <?= ($resultDb[0]->pagamento == "Cartao") ? "checked" : "" ?> /> Cartão
  </div>

  </div>
  </div>

  <br><br>
  <input type="submit" value="Atualizar pedido" class="btn btn-primary">
  <input type="reset" value="Reiniciar" class="btn btn-secondary">
</form>
</body>
</html>