<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Inserir Produtos</title>
    <meta charset="UTF-8">
       <?php include "header.php";
        include "s-login.php";
        include "conect.php";
        protegePagina();?> 
        <title>Users</title>
</head>
<body>
<h2><center>Cadastrar um Novo Produto</center></h2>

<form enctype="multipart/form-data" action="s-cadastroProduto.php" method="post">
    <div class="container">
	Nome:<input type="text" class="form-control" maxlength="80" placeholder="Nome do Produto" name="nome_produto"/>
            <input type="hidden" name="loja" value="<?php echo $_SESSION['userCod']; ?>">
    Preço:<input type="text" class="form-control" maxlength="6" placeholder="Preço do Produto (Acrescentar vírgula)" name="preco" type="text"/>
    Categoria:<select class="form-control form-control-lg" name="categoria">
            <option>*Selecione</option>
            <?php
            function listaCategoria($conexao)
            {
                $sql = "SELECT * FROM categoria ";
                $resultado = mysqli_query($conexao,$sql);
                while ($array=mysqli_fetch_assoc($resultado))
                { ?>
                    <option value="<?php echo $array['cod_categoria']?>"><?php echo $array['nome']?></option>

                <?php } ?>
            <?php  }
            listaCategoria($conexao);
            ?>
        </select>
            Marca:<select class="form-control form-control-lg" name="marca">
            <option>*Selecione</option>
            <?php
            function listaMarca($conexao)
            {
                $sql = "SELECT * FROM marca ";
                $resultado = mysqli_query($conexao,$sql);
                while ($array=mysqli_fetch_assoc($resultado))
                { ?>
                    <option value="<?php echo $array['cod_marca']?>"><?php echo utf8_encode($array['nome'])?></option>

                <?php } ?>
            <?php  }
            listaMarca($conexao);
            ?>
        </select>
            Descrição:<br>
			<textarea rows="4" cols="50" class="form-control" name="descricao_produto"> </textarea>
            Link:<br>
			<textarea rows="2" cols="50" class="form-control" maxlength="300" name="link"></textarea>
			Imagem do Produto:<input type="file" class="form-control"  name="imagem"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
            <center><br>
           <button class="btn btn-success" type="submit">Adicionar Produto</button>
            </center>
</div>
</form>
<br><br><br><br>
</body>
</html>