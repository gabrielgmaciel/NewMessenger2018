<!DOCTYPE html>
<?php require_once "conect.php";?>
<html lang="en">
<head>
  <title>Messenger Driver Compras</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container-fluid" height="100%">
<div class="row">
  <div class="jumbotron">
  <img src="img/logo_compras.png" class="img-rounded" height="153" align="right">
    <h1><b>Messenger Driver Compras</b></h1>      
    <p>Sistema de Vendas de Peças Automotivas</p>
  </div>
</div>
</div>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="loja_home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="categoria_parachoque.php">Parachoque</a></li>
          <li><a href="listaDeProdutos.php">Pneu</a></li>
          <li><a href="categoria_farol.php">Farol</a></li>
          <li><a href="categoria_volante.php">Volante</a></li>
          <li><a href="categoria_lanterna.php">Lanterna</a></li>
        </ul>
      </li>
      <li><a href="XX-home.php">Menseger Drive</a></li>
      <li><a href="#">Compras</a></li>
    </ul>
  </div>
</nav>
<div>
    <form>
        <select>
            <option>Todos</option>
            <?php
            function listaMarcas($conexao)
            {
                $sql = "SELECT * FROM Marca ";
                $resultado = mysqli_query($conexao,$sql);
                while ($array=mysqli_fetch_assoc($resultado))
                { ?>
                    <option><?php echo $array['nome']?></option>

                <?php } ?>
            <?php  }
            listaMarcas($conexao);
            ?>
        </select>
    </form>
    <br>
</div>
<table class="table" border="2" width="10%">
  <thead>
    <tr>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Volkswagen POLO HATCH 2007 até 2012">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_volkswagen.jpg" class="icone" height="">
                <p>Lanterna Traseira Volkswagen POLO HATCH 2007 até 2012</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Chevrolet AGILE 2009">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_chevrolet1.jpg" class="icone" height="">
                <p>Lanterna Traseira Chevrolet AGILE 2009</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Fiat SIENA 2005 até 2007">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_fiat.jpg" class="icone" height="">
                <p>Lanterna Traseira Fiat SIENA 2005 até 2007</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Chevrolet SONIC 2012">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_chevrolet2.jpg" class="icone" height="">
                <p>Lanterna Traseira Chevrolet SONIC 2012</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Ford KA 2012">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_ford.jpg" class="icone" height="">
                <p>Lanterna Traseira Ford KA 2012</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Hyundai I30 2009 até 2012">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_hyundai.jpg" class="icone" height="">
                <p>Lanterna Traseira Hyundai I30 2009 até 2012</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Toyota ETIOS 2012">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_toyota.jpg" class="icone" height="">
                <p>Lanterna Traseira Toyota ETIOS 2012</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Honda CITY 2009 até 2011">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_honda.jpg" class="icone" height="">
                <p>Lanterna Traseira Honda CITY 2009 até 2011</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    <th class="" bgcolor="" width="25%" height="50" title="Lanterna Traseira Citroen C3 2013">
        <center>
            <a href ="configuracao.php">
                <img src="img/lanterna/lanterna_citroen.jpg" class="icone" height="">
                <p>Lanterna Traseira Citroen C3 2013</p>
                <p>R$ 0,00</p>
        </center>
             </a>
    </th>
    </tr>
  </tbody>
</table>

</body>
</html>