<?php

    include "conect.php";
    include "s-login.php";

    $codigo = $_REQUEST['codigo'];

        if ($codigo != "") {
            $query = $conexao->query("DELETE FROM Usuario WHERE cod_usuario = '{$codigo}'");

            $result = mysqli_commit($conexao, $query);

            if ($result == 1) {
                echo "<script> alert('Conta apagada com sucesso!') </script>";
                echo "<script>location.href='index.php'</script>";
                logoff();
            } else {
                echo "<script> alert('Erro ao apagar sua conta!') </script>";
                echo "<script>location.href='apagar_conta.php'</script>";
            }
        }
?>