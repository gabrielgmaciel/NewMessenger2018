<?php require("conect.php");
    $nomeProduto = $_POST['nome_produto'];
    $descricaoProduto = $_POST['descricao_produto'];
    $preco = $_POST['preco'];
    $cod_loja = $_POST['loja'];
    $cod_categoria = $_POST['categoria'];
    $cod_categoria = $_POST['categoria'];
    $link = $_POST['link'];
    $marca = $_POST['marca'];
    $imagem = $_FILES['imagem']['tmp_name'];
    $tamanho = $_FILES['imagem']['size'];
    $tipo = $_FILES['imagem']['type'];
    $nome = $_FILES['imagem']['name'];

    /*echo $nomeProduto."<-nome profuto<br>";
echo $descricaoProduto."<-descrição produto<br>";
echo $preco."<-preco<br>";
echo $cod_loja.",-cod loja<br>";
echo $cod_categoria."<-cod cat<br>";
echo $link."<-llink<br>";
echo $marca."<-marca<br>";*/

    if ( $imagem != "none" ) {
       $fp = fopen($imagem, "rb");
       $conteudo = fread($fp, $tamanho);
       $conteudo = addslashes($conteudo);
       fclose($fp);

        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $novo_nome = time() . $extensao;
        $diretorio = "";

        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

        $quetyInsercao = "INSERT INTO produto (cod_loja, nome_produto, preco_produto, cod_categoria, cod_marca, descricao_produto, link, nome_imagem, tamanho_imagem, tipo_imagem) 
                                    VALUES ('$cod_loja','$nomeProduto','$preco','$cod_categoria','$marca','$descricaoProduto', '{$link}', '$novo_nome', '$tamanho', '$tipo')";
        $result = mysqli_query($conexao, $quetyInsercao);
    }

    if($result == 1){
        echo "<script> alert('Produto Cadastrado com sucesso!') </script>";
        echo "<script>location.href='inserir_produto.php'</script>";
    }else{
        echo "<script> alert('Erro ao inserir produto') </script>";
        echo "<script>location.href='inserir_produto.php'</script>";
    }
?>

