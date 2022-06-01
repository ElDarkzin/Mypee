<?php

use Database\Database;

if(isset($_GET['id_banheiro']) ) {
    $id = $_GET['id_banheiro'];
} else {
    header('location: ../public/cadastrar-banheiro.php');
}

require_once "../model/Database.php";
$db = new Database();

$resultDb = $db->delete(
    "DELETE FROM cadastro_banheiro WHERE id_banheiro = $id; "
);

if($resultDb) : ?>
    <script> 
        alert("banheiro Excluido com sucesso!");
        window.location.replace("../public/tela-principal.php");
    </script>
<?php else : 
    echo"Erro durante a exclusão 😏";
endif;
