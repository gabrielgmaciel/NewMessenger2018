<!DOCTYPE html>
<?php require_once "conect.php";?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php require_once "header.php"?>

<!-- carrinho -->
<?php


    $id = $_REQUEST['id'];

?>

<center>
<h1 class="jumbotron-heading">CARRINHO DE COMPRAS</h1>
<div class="container mb-4">
    <div class="row">
        <div class="col-12 panel panel-primary filterable">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead id="tabela">
                        <tr>
                            <th scope="col">Imagem </th>
                            <th scope="col">Produto</th>
                            <th scope="col">Situação</th>
                            <th scope="col" class="text-center">Quantidade</th>
                            <th scope="col" class="text-right">Preço</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
                            <td><img src="img/pneus/12.png" /></td>
                            <td>Pneu 155 R12 C MAXMILER Aro 12</td>
                            <td>Em estoque</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">R$ 00,00 </td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
				     <a href ="loja_home.php">
                    <button class="btn btn-lg btn-block btn-primary text-uppercase" style="margin: 0 auto 4px;">Continuar comprando</button> </a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href ="efetuar_compra.php">
                    <button class="btn btn-lg btn-block btn-success text-uppercase" >Efetuar pagamento</button>
                </div>
            </div>
        </div>
    </div>
</div><br>
</center>
<!-- Footer -->
<footer>
        <p>© 2018<a style="color:#0a93a6; text-decoration:none;" href="#"> Gnove Corporation</a>, Todos os direitos reservados 2016-2018.</p>
    </footer>
</body>
</html>