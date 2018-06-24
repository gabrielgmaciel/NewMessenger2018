<?php require("conect.php");
    $nomeProduto = $_POST['nome_produto'];
    $descricaoProduto = $_POST['descricao_produto'];
    $preco = $_POST['preco'];
    $cod_loja = $_POST['loja'];
    $cod_categoria = $_POST['categoria'];
    $marca = $_POST['marca'];

    $imagem = $_FILES['imagem']['tmp_name'];
    $tamanho = $_FILES['imagem']['size'];
    $tipo = $_FILES['imagem']['type'];
    $nome = $_FILES['imagem']['name'];

    if ( $imagem != "none" ) {
       $fp = fopen($imagem, "rb");
       $conteudo = fread($fp, $tamanho);
       $conteudo = addslashes($conteudo);
       fclose($fp);

        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio = "..//up";

        var_dump(is_writable("..//up"));

        echo '<br />',$diretorio;

        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
        //chmod($_FILES['imagem']['tmp_name'], 0755);


        $quetyInsercao = "INSERT INTO produto (cod_loja, nome_produto, preco_produto, cod_categoria, cod_marca, descricao_produto, nome_imagem, tamanho_imagem, tipo_imagem) 
                                    VALUES ('$cod_loja','$nomeProduto','$preco','$cod_categoria','$marca','$descricaoProduto', '$novo_nome', '$tamanho', '$tipo')";
        $result = mysqli_query($conexao, $quetyInsercao);
    }

    /*if($result == 1){
        echo "<script> alert('Produto Cadastrado com sucesso!') </script>";
        echo "<script>location.href='inserir_img.php'</script>";
    }else{
        echo "<script> alert('Erro ao inserir produto') </script>";
        echo "<script>location.href='inserir_img.php'</script>";
    }*/
?>

