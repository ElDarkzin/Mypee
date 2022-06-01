<?php

use Database\Database;

//require_once "../src/views/header_nav.php";

if (isset($_GET['id_banheiro'])) {
  $idBanheiro = $_GET['id_banheiro'];
} else {
  $idBanheiro = null;
}

require_once "../src/model/Database.php";

$db = new Database();

$resultDb = $db->select(
  "SELECT * FROM cadastro_banheiro WHERE id_banheiro = $idBanheiro; "
);
?>

<form method="post" action="../data/update.php">
  <h2> Atualização DO Pedido </h2>
  <h4> ID:</h4>
  <input type="text" name="id" value="<?= $resultDb[0]->id_banheiro	?>" readonly />
  <br>

  <h4> Local:</h4>
  <input type="text" name="local_banheiro" value="<?= $resultDb[0]->local_banheiro ?>" readonly />
  <br>

  <h4> Descrição:</h4>
  <input type="text" name="descricao" value="<?= $resultDb[0]->descricao_banheiro	 ?>" readonly />
  <br>

  <h4> Itens:</h4>
  <input type="text" name="quantidade_b" value="<?= $resultDb[0]->quantidade_banheiro ?>" />
  <br>

  <h4> Quantidade Banheiro:</h4>
  <input type="text" name="quantidade" value="<?= $resultDb[0]->quantidade ?>" min="1" />

  <h3> Pagamento: </h3>
  <div class="form-check form-check-inline">
    <input type="radio" name="pagamento" value="Dinheiro" <?= ($resultDb[0]->pagamento == "DInheiro") ? "checked" : "" ?>/> Dinheiro
  </div>
  <div class="form-check form-check-inline">
    <input type="radio" name="pagamento" value="Pix" <?= ($resultDb[0]->pagamento == "Pix") ? "checked" : "" ?> /> Pix
  </div>
  <div class="form-check form-check-inline">
    <input type="radio" name="pagamento" value="Cartao" <?= ($resultDb[0]->pagamento == "Catao") ? "checked" : "" ?> /> Xerecard
  </div>

  <br><br>
  <input type="submit" value="Atualizar pedido" class="btn btn-primary">
  <input type="reset" value="Reiniciar" class="btn btn-secondary">
</form>

<?php
require_once "../src/views/footer.php";
?>