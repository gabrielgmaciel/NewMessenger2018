<?php
require_once "conect.php";
include "conect.php";

$codigo = $_REQUEST['codigo'];

if ($codigo != "") {
    $query = $conexao->query("DELETE FROM Loja WHERE cod_loja = '{$codigo}'");
    $result = mysqli_commit($conexao, $query);
    if ($result == 1) {
        echo "<script>location.href='lista_loja.php'</script>";
    } else {
        echo "<script> alert('Erro ao apagar a frase') </script>";
        echo "<script>location.href='lista_loja.php'</script>";
    }
}

?>