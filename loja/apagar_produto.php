<?php
require_once "conect.php";
include "conect.php";

$codigo = $_REQUEST['codigo'];

if ($codigo != "") {
    $query = $conexao->query("DELETE FROM Produto WHERE cod_produto = '{$codigo}'");
    $result = mysqli_commit($conexao, $query);
    if ($result == 1) {
        echo "<script>location.href='itens_loja.php'</script>";
    } else {
        echo "<script> alert('Erro ao apagar a produto') </script>";
        echo "<script>location.href='itens_loja.php'</script>";
    }
}

?>