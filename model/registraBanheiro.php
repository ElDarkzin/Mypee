<?php

use Database\Database;

require_once"../model/Database.php";
$db = new Database();

if (isset($_GET['local_banheiro']) ) {
    $localBanheiro = $_GET['local_banheiro'];
} else {
    $localBanheiro = null;
}

if (isset($_GET['quantidade_banheiro']) ) {
    $quantidadeBanheiro = $_GET['quantidade_banheiro'];
} else {
    $quantidadeBanheiro = null;
}

if (isset($_GET['descricao_banheiro']) ) {
    $descricaoBanheiro = $_GET['descricao_banheiro'];
} else {
    $descricaoBanheiro = null;
}

if (isset($_GET['acessorios']) ) {
    $acessorios = $_GET['acessorios'];
} else {
    $acessorios = null;
}

if (isset($_GET['pagamento']) ) {
  $pagamento = $_GET['pagamento'];
} else {
  $pagamento = null;
}

$listaAcessorios = null;

foreach($acessorios as $a) {
    $listaAcessorios .= $a . ", ";
}

$resultDb = $db->insert(
    "INSERT INTO cadastro_banheiro(local_banheiro, quantidade_banheiro, descricao_banheiro, acessorios, pagamento)
    VALUES('$localBanheiro' , '$quantidadeBanheiro' , '$descricaoBanheiro' , '$listaAcessorios' , '$pagamento');"
);

if($resultDb) {
    header("location: ../public/tela-principal.php");
} else {
    echo"ERRO";
}
?>