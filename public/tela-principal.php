<?php

use Database\Database;

require_once "../model/Database.php";
$db = new Database();


    if( isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }

    if( isset($_POST['senha'])) {
        $senha = $_POST['senha'];
    } else {
        $senha = null;
    }
    
//var_dump($email);
//var_dump($senha);

/////////////////////////////////////////////////
$resultDb = $db->select(
    "SELECT * FROM cadastro WHERE email = '$email'; "
);

if( isset($resultDb[0] ) ) {
    $emailDb = $resultDb[0] -> email;
    $senhaDb = $resultDb[0] -> senha;
} else {
    $emailDb = null;
    $senhaDb = null;
}
///////////////////////////////////////////////
 
    //So verificaremos o Gmail e a senha caso nao sejam nulos
    if($email != null && $senha != null) {
       if ($email == $emailDb && $senha == $senhaDb) {
            $msg = 'Bem Vindo !';
            $redirect = null;
        } else {
            $msg = 'Mal Vindo!';
            $redirect = "<meta http-equiv='refresh' content='1; url=../public/login.php'/>"; 
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/principal.css">
    <title>Tela principal</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" >MYPEE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" onclick="window.location.href='cadastrar-banheiro.php'">Cadastrar banheiros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" onclick="window.location.href='info-dos-devs.html'">Info dos devs</a>
          </li>
      </div>
    </div>
  </nav>

      <div class="main-login">
        <div class="left-login">
            <h1><br>Seus banheiros cadastrados</h1>
            <img src="../public/assets/img/MYPEE.png" class="left-login-image" alt="astronauta">
        </div>

      <div class="right-login">
        <div class="card-login">
            <h1>Seus banheiros</h1>
          </div>
          </div>
          
          <table class="table container mt-4 table-striped">
        <thead class="thead-dark">
          <th>Codigo</th>
          <th>Local do banheiro</th>
          <th>Quantidade</th>
          <th>Descrição</th>
          <th>acessorios</th>
          <th>Pagamento</th>
          <th> </th>
          <th> </th>
        </thead>
        <tbody>
          
          
          <?php
  $listaBanheiros = $db->select(
    "SELECT * FROM cadastro_banheiro;"
  );
  ?>

<?php foreach($listaBanheiros as $linha) : ?>
  <tr>
    <td> <?= $linha->id_banheiro ?> </td>
    <td> <?= $linha->local_banheiro ?> </td>
    <td> <?= $linha->quantidade_banheiro ?> </td>
    <td> <?= $linha->descricao_banheiro ?> </td>
    <td> <?= $linha->acessorios ?> </td>
    <td> <?= $linha->pagamento ?> </td>
    <td><a href="../public/atualiza.php?id_banheiro=<?= $linha->id_banheiro ?>">Editar</a></td>
    <td onclick="confirmaDelete( <?= $linha->id_banheiro ?> );">Excluir</td>
  </tr>
  <?php endforeach; ?>    
</tbody>
</table>

<script>
  function confirmaDelete(idQueRecebemos) {
        if( confirm("Deseja apagar o pedido " + idQueRecebemos + "?") ) {
            window.location.href="../data/delete.php?id_banheiro="+idQueRecebemos;
        } else {
            alert("Exclusão cancelada!");
        }
    }
</script>

</body>
</html>