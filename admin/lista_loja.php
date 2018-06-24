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
            //$user = $_SESSION['userCod'];
            function listaProduto($conexao, $user)
            {
            $sql = "SELECT * FROM Loja WHERE cod_loja = 9";
            $resultado = mysqli_query($conexao,$sql);
            while ($array=mysqli_fetch_assoc($resultado))
            { ?>
          <tbody id="myTable">
            <tr>
              <td><img height="60" width="100" src="<?php echo $array['nome_imagem']?>" /></td>
              <td><? echo $array['nome_loja']; ?></td>
              <td><? echo $array['CNPJ']; ?></td>
              <td><? echo $array['email']; ?></td>
              <td><? echo $array['telefone_loja']; ?></td>
			  <td><a href="apaga_loja.php?codigo=<?php echo $codigo = $array['cod_loja'];?>
                "onclick="return confirm('Deseja realmente excluir essa loja?')">
                      <img src="img/lixeira.ico" width="25px" height="25px"></a></td>
            </tr>
            <?php } ?>
            <?php  }
            listaProduto($conexao, $user);
            ?>
         </tbody>
        </table>   
	</div>
        <br><br>
</div>
</body>
</html>