<?php
include "conect.php";

//criando variaveis para receber dados de cadastro.php
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';;
$email = isset($_POST['email']) ? $_POST['email'] : '';;
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';;
$senha1 = isset($_POST['senha1']) ? $_POST['senha1'] : '';;
$veiculo = isset($_POST['tipo']) ? $_POST['tipo'] : '';;
$placa = isset($_POST['placa']) ? $_POST['placa'] : '';;
$modelo = isset($_POST['modelo']) ? $_POST['modelo'] : '';;
$lougradouro = isset($_POST['lougradouro']) ? $_POST['lougradouro'] : '';;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';;
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';;
$cep = isset($_POST['cep']) ? $_POST['cep'] : '';;


if ($email != null) {
    $procura = $conexao->query("SELECT email FROM usuario WHERE email = '$email'");

    if (mysqli_num_rows($procura) > 0) {
        //Email encontrada
        echo "<script> alert(' Email já cadastrado ') </script>";
        echo "<script>location.href='cadastro.php'</script>";
    } elseif ($placa != null) {
        $procura = $conexao->query("SELECT placa FROM dados_veiculo WHERE placa = '$placa'");

        if (mysqli_num_rows($procura) > 0) {
            //echo "placa encontrada";
            echo "<script> alert(' Placa já cadastrada ') </script>";
            echo "<script>location.href='cadastro.php'</script>";
        } else {
            $query1 = $conexao->query("INSERT INTO Usuario (cod_usuario, nome, email, senha)
                                    VALUES (null, '{$nome}', '{$email}', MD5('{$senha1}'))");
            $query2 = $conexao->query("INSERT INTO dados_veiculo (cod_usuario, placa, modelo, tipo_veiculo)
                                            VALUES ((select last_insert_id()), upper('{$placa}'), '{$modelo}', '{$veiculo}')");
            $query3 = $conexao->query("INSERT INTO Telefone( cod_telefone, telefone, cod_usuario)
                                            VALUES (null, '{$telefone}', (select last_insert_id()))");
            $query4 = $conexao->query("INSERT INTO Endereco(cod_usuario, cod_endereco, lougradouro, cidade, estado, CEP)
                                            VALUES ((select last_insert_id()), null, '{$lougradouro}', '{$cidade}', '{$estado}', '{$cep}')");

            $result = mysqli_commit($conexao, $query1, $query2, $query3, $query4);

            echo $result;

            if ($result == 1) {
                header("location: cadastro.php");
            } else {
                echo "<script> alert(' cadastrado realizado! ') </script>";
                echo "<script>location.href='index.php'</script>";
            }
        }
    }
}

?>

