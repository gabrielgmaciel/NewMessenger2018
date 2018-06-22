<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="carrinho.css">
    <title>Carrinho</title>
</head>
<!-- Titulo -->
<body>
<div class="container-fluid" height="100%">
<div class="row">
  <div class="jumbotron">
  <img src="img/LOJA/logo_compras.png" class="img-rounded" height="153" align="right">
    <h1><b>Messenger Driver Compras</b></h1>      
    <p>Sistema de Vendas de Peças Automotivas</p>
  </div>
</div>
</div>
</head>

<!-- barra de menu -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="loja_home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Parachoque</a></li>
          <li><a href="#">Pneu</a></li>
          <li><a href="#">Farol</a></li>
          <li><a href="#">Volante</a></li>
          <li><a href="#">Lanterna</a></li>
        </ul>
      </li>
      <li><a href="home.php">Menseger Drive</a></li>
      <li><a href="#">Compras</a></li>
    </ul>
  </div>
</nav>

<!-- carrinho -->
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
                        <tr>
                            <td><img src="img/pneus/13.png" /> </td>
                            <td>Pneu Aro 13 GOOD YEAR 175/70R13 82T</td>
                            <td>Em estoque</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">R$ 00,00 </td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="img/pneus/14.png" /> </td>
                            <td>Pneu Aro 14 PIRELLI 175/65R14 82T P400</td>
                            <td>Em estoque</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">R$ 00,00 </td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">R$ 00,00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Frete</td>
                            <td class="text-right">R$ 00,00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>R$ 00,00</strong></td>
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

<!-- Footer -->
<footer>
        <p>© 2018<a style="color:#0a93a6; text-decoration:none;" href="#"> Gnove Corporation</a>, Todos os direitos reservados 2016-2018.</p>
    </footer>
</body>
</html>