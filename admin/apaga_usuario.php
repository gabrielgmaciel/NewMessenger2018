<?php
    require_once "conect.php";
    include "conect.php";

$codigo = $_REQUEST['codigo'];


    if ($codigo != "") {
        $query = $conexao->query("DELETE FROM Usuario WHERE cod_usuario = '{$codigo}'");
        $result = mysqli_commit($conexao, $query);
        if ($result == 1) {
            echo "<script>location.href='users.php'</script>";
        } else {
            echo "<script> alert('Erro ao apagar o usuário') </script>";
            echo "<script>location.href='users.php'</script>";
        }
    }

?>