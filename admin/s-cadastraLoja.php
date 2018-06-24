<?php require("conect.php");

$razaoSocial = isset($_POST['razaoSocial']) ? $_POST['razaoSocial'] : '';;
$nomeLoja = isset($_POST['nome']) ? $_POST['nome'] : '';;
$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';;
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';;
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';;
$email = isset($_POST['email']) ? $_POST['email'] : '';;
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';;
$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome = $_FILES['imagem']['name'];

/*echo $razaoSocial."<br>";
echo $nomeLoja."<br>";
echo $cnpj."<br>";
echo $endereco."<br>";
echo $email."<br>";
echo $senha."<br>";
echo $imagem."<br>";
echo $tamanho."<br>";
echo $tipo."<br>";
echo $nome."<br>";*/


if ( $imagem != "none" ) {
    $fp = fopen($imagem, "rb");
       $conteudo = fread($fp, $tamanho);
       $conteudo = addslashes($conteudo);
       fclose($fp);

        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $novo_nome = time() . $extensao;
        $diretorio = "";

        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

    $quetyInsercao = "INSERT INTO Loja (CNPJ, razaoSocial, nome_loja, email, senha, logradouro_loja, 
                                            telefone_loja, nome_imagem, tamanho_imagem, tipo_imagem) 
                      VALUES ('{$cnpj}','{$razaoSocial}','{$nomeLoja}','{$email}','{$senha}','{$endereco}',
                              '{$telefone}', '{$novo_nome}', '{$tamanho}', '{$tipo}')";
    $result = mysqli_query($conexao, $quetyInsercao);
}

if($result == 1){
    echo "<script> alert('Loja cadastrada com sucesso!') </script>";
    echo "<script>location.href='inserir_loja.php'</script>";
}else{
    echo "<script> alert('Erro ao cadastrar loja') </script>";
    echo "<script>location.href='inserir_loja.php'</script>";
}
?>

