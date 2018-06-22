<?php
require_once "conect.php";
include "conect.php";

$codigo = $_REQUEST['codigo'];

if ($codigo != "") {
    $query = $conexao->query("DELETE FROM Mensagem WHERE cod_mensagem = '{$codigo}'");
    $result = mysqli_commit($conexao, $query);
    if ($result == 1) {
        echo "<script>location.href='frases.php'</script>";
    } else {
        echo "<script> alert('Erro ao apagar a frase') </script>";
        echo "<script>location.href='frases.php'</script>";
    }
}

?>