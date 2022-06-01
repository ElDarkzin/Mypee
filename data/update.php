<?php

use Database\Database;
  
if(isset($_POST['idBanheiro']) ) {
    $idBanheiro = $_POST['idBanheiro'];
} else {
    $idBanheiro = null;
}    

if(isset($_POST['local_banheiro']) ) {
    $localBanheiro = $_POST['local_banheiro'];
} else {
    $localBanheiro = null;
}    

if(isset($_POST['quantidade_banheiro']) ) {
    $quantidadeBanheiro = $_POST['quantidade_banheiro'];
} else {
    $quantidadeBanheiro = null;
}

if(isset($_POST['descricao_banheiro']) ) {
    $descricaoBanheiro = $_POST['descricao_banheiro'];
} else {
    $descricaoBanheiro = null;
}    

if(isset($_POST['acessorios']) ) {
    $acessorios = $_POST['acessorios'];
} else {
    $acessorios = null;
}

if(isset($_POST['pagamento']) ) {
    $pagamento = $_POST['pagamento'];
} else {
    $pagamento = null;
}

 require_once "../model/Database.php";
 $db = new Database();

 $resultDb = $db->update(
     "UPDATE cadastro_banheiro SET local_banheiro = '$localBanheiro', quantidade_banheiro = '$quantidadeBanheiro', 
     pagamento = '$pagamento', descricao_banheiro = '$descricaoBanheiro', acessorios = '$acessorios'
      WHERE id_banheiro = '$idBanheiro'; "
 ); 

 if($resultDb) {
    header("location: ../public/tela-principal.php");
} else {
    echo"ERRO";
}

?>