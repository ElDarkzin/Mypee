<?php

use Database\Database;

require_once"../model/Database.php";
$db = new Database();

if (isset($_GET['nome_1']) ) {
    $nome1 = $_GET['nome_1'];
} else {
    $nome1 = null;
}

if (isset($_GET['email']) ) {
    $email = $_GET['email'];
} else {
    $email = null;
}

if (isset($_GET['fone']) ) {
    $fone = $_GET['fone'];
} else {
    $fone = null;
}

if (isset($_GET['senha']) ) {
  $senha = $_GET['senha'];
} else {
  $senha = null;
}

if (isset($_GET['CPF']) ) {
    $cpf = $_GET['CPF'];
} else {
    $cpf = null;
}

if (isset($_GET['genero']) ) {
    $genero = $_GET['genero'];
} else {
    $genero = null;
}

$resultDb = $db->insert(
    "INSERT INTO cadastro(nome, cpf, telefone, senha, email,genero )
    VALUES('$nome_1' , '$cpf' , '$fone' , '$senha' , '$email','$genero');"
);

if($resultDb) {
    header("location: ../public/login.php");
} else {
    echo"ERRO";
}
?>