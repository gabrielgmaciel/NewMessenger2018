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
              <th>ID</th>
              <th>Logo</th>
              <th>Nome da loja</th>
              <th>CNPJ</th>
              <th>E-mail</th>
              <th>Telefone</th>
			  <th>Excluir Loja</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <tr>
              <td>1</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
			  <td><button class="btn btn-xs btn-primary pull-left">X</button></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
			  <td><button class="btn btn-xs btn-primary pull-left">X</button></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
			  <td><button class="btn btn-xs btn-primary pull-left">X</button></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
			  <td><button class="btn btn-xs btn-primary pull-left">X</button></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
			  <td><button class="btn btn-xs btn-primary pull-left">X</button></td>
            </tr>           
         </tbody>
        </table>   
	</div>
</div>
</body>
</html>