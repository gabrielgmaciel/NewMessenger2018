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
		<link  rel="stylesheet" href="itens.css">
</head>
<body>
<center>
<h1>Lojas Cadastradas
</center>
<div class="container">
    <div class="row">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Logo</th>
              <th>Nome da loja</th>
              <th>CNPJ</th>
              <th>E-mail</th>
              <th>Telefone</th>
			  <th>Excluir Loja</th>
            </tr>
          </thead>
            <?php
            function listaProduto($conexao)
            {
            $sql = "SELECT * FROM Loja";
            $resultado = mysqli_query($conexao,$sql);
            while ($array=mysqli_fetch_assoc($resultado))
            { ?>
          <tbody id="myTable">
            <tr>
              <td><center><img height="60" width="100" src="<?php echo $array['nome_imagem']?>"/></center></td>
              <td><?php echo $array['nome_loja']; ?></td>
              <td><?php echo $array['CNPJ']; ?></td>
              <td><?php echo $array['email']; ?></td>
              <td><?php echo $array['telefone_loja']; ?></td>
			  <td><a href="apaga_loja.php?codigo=<?php echo $codigo = $array['cod_loja'];?>
                "onclick="return confirm('Deseja realmente excluir essa loja?')">
                      <img src="img/lixeira.ico" width="25px" height="25px"></a></td>
            </tr>
            <?php } ?>
            <?php  }
            listaProduto($conexao);
            ?>
         </tbody>
        </table>   
	</div>
        <br><br>
</div>
</body>
</html>